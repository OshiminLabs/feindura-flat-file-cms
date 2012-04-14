<?php
/*
    feindura - Flat File Content Management System
    Copyright (C) Fabian Vogelsteller [frozeman.de]

    This program is free software;
    you can redistribute it and/or modify it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 3 of the License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
    without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU General Public License for more details.

    You should have received a copy of the GNU General Public License along with this program;
    if not,see <http://www.gnu.org/licenses/>.

* controllers/statisticSetup.controller.php version 0.12
*/

/**
 * Includes the login.include.php and backend.include.php and filter the basic data
 */
require_once(dirname(__FILE__)."/../includes/secure.include.php");

//var
$deletedStatistics = false;

// ------------>> SAVE the STATISTIC SETTINGS
if($_POST['send'] && isset($_POST['statisticConfig'])) {

    if(saveStatisticConfig($_POST)) {
      // set documentSaved status
      $documentSaved = true;
      saveActivityLog(19); // <- SAVE the task in a LOG FILE
    } else
      $errorWindow .= sprintf($langFile['STATISTICSSETUP_ERROR_SAVE'],$adminConfig['realBasePath']);
  
  $savedForm = 'statisticConfig';
  $savedSettings = true;
}

// ------------>> CLEAR the STATISTICs
if($_POST['sendClearstatistics']) {

  // ->> CLEAR PAGES-STATISTICs
  if($_POST['clearStatistics_pagesStatistics'] == 'true' &&
     $pagesStats = GeneralFunctions::loadPagesStatistics(true)) {
    foreach($pagesStats as $pageStatistics) {
      
      // -> CLEAR the page stats
      $pageStatistics['visitorCount'] = 0;
      $pageStatistics['firstVisit'] = 0;
      $pageStatistics['lastVisit'] = 0;
      $pageStatistics['visitTimeMin'] = '';
      $pageStatistics['visitTimeMax'] = '';
      $pageStatistics['searchWords'] = '';
      
      if(StatisticFunctions::savePageStatistics($pageStatistics)) {
        // set documentSaved status
        $documentSaved = true;
      } else
        $errorWindow .= sprintf($langFile['statisticSetup_clearStatistic_pagesStatistics_error_read'],$adminConfig['realBasePath']);
    }
    
    // set the messagebox; save tasklog
    if($documentSaved) {
      $deletedStatistics .= '<li>'.$langFile['LOG_CLEARSTATISTICS_PAGESTATISTICS'].'</li>';
      saveActivityLog(20); // <- SAVE the task in a LOG FILE
    }
  }
  
  // ->> CLEAR PAGES-LENGTHOFSTAY-STATISTICs
  if($_POST['clearStatistics_pagesStaylengthStatistics'] == 'true' &&
     $pagesStats = GeneralFunctions::loadPagesStatistics(true)) {
      
    foreach($pagesStats as $pageStatistics) {
      
      // -> CLEAR the page time stats
      $pageStatistics['visitTimeMin'] = '';
      $pageStatistics['visitTimeMax'] = '';
      
      if(StatisticFunctions::savePageStatistics($pageStatistics)) {
        // set documentSaved status
        $documentSaved = true;
      } else
        $errorWindow .= sprintf($langFile['statisticSetup_clearStatistic_pagesStatistics_error_read'],$adminConfig['realBasePath']);
    }
    
    // set the messagebox; save tasklog
    if($documentSaved) {
      $deletedStatistics .= '<li>'.$langFile['LOG_CLEARSTATISTICS_PAGESTAYLENGTH'].'</li>';
      saveActivityLog(21); // <- SAVE the task in a LOG FILE
    }
  }  
  
  // ->> CLEAR WEBSITE-STATISTIC
  if($_POST['clearStatistics_websiteStatistic'] == 'true' &&
     is_file(dirname(__FILE__)."/../../statistic/website.statistic.php") &&
     unlink(dirname(__FILE__)."/../../statistic/website.statistic.php")) {
    
    // set documentSaved status
    $documentSaved = true;
    $deletedStatistics .= '<li>'.$langFile['LOG_CLEARSTATISTICS_WEBSITESTATISTIC'].'</li>';
    saveActivityLog(22); // <- SAVE the task in a LOG FILE
  }
  
  // ->> CLEAR REFERER-LOG
  if($_POST['clearStatistics_refererLog'] == 'true' &&
     $refererLogFile = fopen(dirname(__FILE__)."/../../statistic/referer.statistic.log","wb")) {
    fclose($refererLogFile);
    
    // set documentSaved status
    $documentSaved = true;
    $deletedStatistics .= '<li>'.$langFile['LOG_CLEARSTATISTICS_REFERERLOG'].'</li>';
    saveActivityLog(23); // <- SAVE the task in a LOG FILE
  }
  
  // ->> CLEAR ACTIVITY-LOG
  if($_POST['clearStatistics_taskLog'] == 'true' &&
     $taskLogFile = fopen(dirname(__FILE__)."/../../statistic/activity.statistic.log","wb")) {
    fclose($taskLogFile);
    
    // set documentSaved status
    $documentSaved = true;
    $deletedStatistics .= '<li>'.$langFile['LOG_CLEARSTATISTICS_ACTIVITYLOG'].'</li>';
    saveActivityLog(24); // <- SAVE the task in a LOG FILE
  }
  
  // SHOWs the MESSAGEBOX
  if($deletedStatistics !== false) {
    $deletedStatisticsFinal = '<ul class="red">';
    $deletedStatisticsFinal .=  $deletedStatistics;
    $deletedStatisticsFinal .= '</ul>';
    $deletedStatistics = $deletedStatisticsFinal;
  }
  
  $savedForm = 'clearStatistics';
}

// RE-INCLUDE
if($savedSettings) {
  $statisticConfig = @include (dirname(__FILE__)."/../../config/statistic.config.php");
  // RESET of the vars in the classes
  StatisticFunctions::$statisticConfig = $statisticConfig;
}

?>