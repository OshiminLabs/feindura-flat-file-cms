<?php 
/*
    feindura - Flat File Content Management System
    Copyright (C) 2009 Fabian Vogelsteller [frozeman.de]

    This program is free software;
    you can redistribute it and/or modify it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 3 of the License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
    without even the implied warranty ;page= MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU General Public License for more details.

    You should have received a copy of the GNU General Public License along with this program;
    if not,see <http://www.gnu.org/licenses/>.
*
* library/functions/backend.functions.php version 1.25
*
* FUNCTIONS -----------------------------------
* 
* redirect($goToCategory, $goToPage, $time = 2)
* 
* isAdmin()
* 
* getNewCatgoryId()
* 
* saveCategories($categories)
* 
* moveCategories($category, $direction)
* 
* saveWebsiteConfig();
* 
* editFiles($filesPath, $siteName, $status, $titleText, $anchorName, $fileType)
* 
* saveEditedFiles($post)
* 
* delDir($dir)
* 
* movePage($page, $fromCategory, $toCategory)
* 
* fileFolderIsWritableWarning($fileFolder)
* 
* isFolderWarning($folder)
*
* getHighestId();
*
* readFolder($folder)
* 
* readFolderRecursive($folder)
*
* getHighestId()
* 
* folderIsEmpty()
* 
* checkBasePath()
* 
* basePathWarning()
* 
* startPageWarning()
* 
* loadCssFiles($folder)***
* 
*/

include_once(dirname(__FILE__)."/../backend.include.php");


// ** -- redirect ----------------------------------------------------------------------------------
// leitet automatisch weiter auf die angegeben seite
// -----------------------------------------------------------------------------------------------------
// $goToPage      [seite auf die weitergeleitet werden soll (String)],
// $goToCategory  [the category in which to redirect (String)],
// $time          [the time in seconds after which it will redirect (Number)]
function redirect($goToCategory, $goToPage, $time = 2) {
  global $adminConfig;
  
  echo '<meta http-equiv="refresh" content="'.$time.'; URL='.$adminConfig['basePath'].'?category='.$goToCategory.'&amp;page='.$goToPage.'">';
  echo '<script type="text/javascript">
    /* <![CDATA[ */
      document.location.href = "'.$adminConfig['basePath'].'?category='.$goToCategory.'&page='.$goToPage.'"
    /* ]]> */
    </script>';
  echo 'You should be automatically redirected, if not click <a href="'.$adminConfig['basePath'].'?category='.$goToCategory.'&amp;page='.$goToPage.'">here</a>.';
}

// ** -- isAdmin ----------------------------------------------------------------------------------
// open the .htpasswd file and checks the username for: is "admin", "adminstrator", "superuser" or "root" and return true, if no one exists also return true
// -----------------------------------------------------------------------------------------------------
function isAdmin() {
  global $adminConfig;

  $currentUser = strtolower($_SERVER["REMOTE_USER"]);
  
  // checks if the current user has a username like:
  if($currentUser == 'admin' || $currentUser == 'administrator' || $currentUser == 'root' || $currentUser == 'superuser' || $currentUser == 'frozeman') {
    return true;
  } else { // otherwise it checks if in the htpasswd is one of the above usernames, if not return true
    // checks for userfile
    if($getHtaccess = @file(DOCUMENTROOT.$adminConfig['basePath'].'.htaccess')) {      

      // try to find the .htpasswd path
      foreach($getHtaccess as $htaccessLine) {
        if(strstr(strtolower($htaccessLine),'authuserfile')) {
          $passwdFilePath = substr($htaccessLine,strpos(strtolower($htaccessLine),'authuserfile')+13);
          $passwdFilePath = str_replace("\n", '', $passwdFilePath);
          $passwdFilePath = str_replace("\r", '', $passwdFilePath);          
          $passwdFilePath = str_replace(" ", '', $passwdFilePath);
        }    
      }
      
      // go trough users in .htpasswd, if there is any user with the above names
      // and current user have not such a username return false
      if($getHtpasswd = @file($passwdFilePath)) {        
        
        $adminExists = false;        
        foreach($getHtpasswd as $htpasswdLine) {
          $user = explode(':',strtolower($htpasswdLine));          
          
          if($user[0] == 'admin' || $user[0] == 'administrator' || $user[0] == 'root' || $user[0] == 'superuser' || $user[0] == 'frozeman')
            $adminExists = true;
        }
        
        // checks if the currentuser has such a name
        if($adminExists) {          
          return false; // ONLY WHEN AN ADMIN EXITS AND THE CURRENT USER ISNT THE ADMIN return false
        } else
          return true;
      
      } else
        return true;
      
    } else { // there is no user file      
      return true;
    }    
  } return true;  
}

// ** -- getNewCatgoryId ----------------------------------------------------------------------------------
// get the highest category id and make it one higher
// -----------------------------------------------------------------------------------------------------
function getNewCatgoryId() {
  global $categories;
  
  // gets the highest id
  $highestId = 0;
  if(is_array($categories)) {
    foreach($categories as $category) {          
      if($category['id'] > $highestId)
        $highestId = $category['id'];
    }
    return ++$highestId;
  } else
    return 1;
}

// ** -- saveCategories ----------------------------------------------------------------------------------
// open the config/categoryConfig.php and writes the categories array.
// -----------------------------------------------------------------------------------------------------
// $categories     [der group array der in der settings.php gespeichert werden soll (Array)],
function saveCategories($newCategories) {
  global $categories;
  
  // �ffnet die categoryConfig.php zum schreiben
  if($categoryConfig = @fopen("config/categoryConfig.php","w")) {
 
    // *** Schreibe CATEGORIES
    flock($categoryConfig,2); //LOCK_EX
      fwrite($categoryConfig,PHPSTARTTAG); //< ?php
      fwrite($categoryConfig,'$categories = array('."\n");
  
      foreach($newCategories as $category) {
      
        // -> CHECK depency of SORTDATE
        if($category['sortdate'] == '')
          $category['sortbydate'] = '';
        
        if($category['sortbydate'] == 'true')
          $category['sortdate'] = 'true';
        
        // -> CHECK if the THUMBNAIL HEIGHT/WIDTH is empty, and add the previous ones
        if(!isset($category['thumbWidth']))
          $category['thumbWidth'] = $categories['id_'.$category['id']]['thumbWidth'];
        if(!isset($category['thumbHeight']))
          $category['thumbHeight'] = $categories['id_'.$category['id']]['thumbHeight'];
          
      
        // ** adds a "/" on the beginning of all absolute paths
        if(!empty($category['styleFile']) && substr($category['styleFile'],0,1) !== '/')
              $category['styleFile'] = '/'.$category['styleFile'];  
        
        // -> CLEAN all " out of the strings
        foreach($category as $postKey => $post) {    
          $category[$postKey] = str_replace(array('\"',"\'"),'',$post);
        }
        
        $znew = '"id_'.$category['id'].'" => array(
          "id"            => \''.$category['id'].'\',
          "name"          => \''.$category['name'].'\',
          
          "public"        => \''.$category['public'].'\',
          "sortascending" => \''.$category['sortascending'].'\',
          "createdelete"  => \''.$category['createdelete'].'\',
          "thumbnail"     => \''.$category['thumbnail'].'\',
          "tags"          => \''.$category['tags'].'\',
          "sortdate"      => \''.$category['sortdate'].'\',
          "sortbydate"    => \''.$category['sortbydate'].'\',
          
          "styleFile"     => \''.$category['styleFile'].'\',
          "styleId"       => \''.str_replace(array('#','.'),'',$category['styleId']).'\',
          "styleClass"    => \''.str_replace(array('#','.'),'',$category['styleClass']).'\',
          
          "thumbWidth"    => \''.$category['thumbWidth'].'\',
          "thumbHeight"   => \''.$category['thumbHeight'].'\',
          "thumbRatio"    => \''.$category['thumbRatio'].'\',
          ),'."\n";
        fwrite($categoryConfig,$znew);
      }
      fwrite($categoryConfig,');'."\n\n");      
      fwrite($categoryConfig,"return \$categories;");
      
      fwrite($categoryConfig,PHPENDTAG); //? >
    flock($categoryConfig,3); //LOCK_UN
    fclose($categoryConfig);
  
    return true;
  } else
    return false;
}

// ** -- moveCategories ----------------------------------------------------------------------------------
// moves a category UP or DOWN in the categories array
// -----------------------------------------------------------------------------------------------------
function moveCategories($category,            // the category id to be moved (Number)
                        $direction,           // the direction in wich to move (String "up" or "down")
                        $position = false) {  // the exact position where to put the category (iof not false, the directioon var dosn't matter)
  global $categories;
  
  $direction = strtolower($direction);
  
  // ->> CHECKS
  // if they fail it returns the unchanged $categories array
  if(is_array($categories) &&                         // is categories is array
    is_numeric($category) &&                          // have the given category id is a number
    $category == $categories['id_'.$category]['id'] &&     // dows the category exists in the $categories array
    (!$direction || $direction == 'up' || $direction == 'down') &&
    (!$position || is_numeric($position))) {   // is the right direction is given
    
    // vars
    $count = 1;
    $currentPosition = false;
    $dropedCategories = array();
    
    // -> finds out the position in the $categories array
    // and extract this category from it
    foreach($categories as $sortCategory) {
      //echo '>'.$sortCategory['id'].' -> '.$count.'<br />';
      
      if($sortCategory['id'] == $category) {
        $currentPosition = $count;
        $extractCategory = $sortCategory;
      } else  
        $dropedCategories[$sortCategory['id']] = $sortCategory;
      
      $count++;
    }    
    //echo 'currentPos: '.$currentPosition;
    
    // -> creates a new array with the category at the new position
    $count = 1;
    $sortetCategories = array();
    foreach($dropedCategories as $sortCategory) {
      
      // MOVE BY POSITION
      if($position !== false && is_numeric($position)) {
        
         //echo 'exactPos: '.$position;
        
        // if the position is lower than 1
        if($position < 1) {
          if($count == 1)
            $sortetCategories[] = $extractCategory;
          // put it at the first position
         $sortetCategories[] = $dropedCategories[$sortCategory['id']];
        }
        
        // if the position is higher than the count() of the array
        if($position > count($dropedCategories)) {
          $sortetCategories[] = $dropedCategories[$sortCategory['id']];
          // put it at the last position
          if($count == count($dropedCategories))
            $sortetCategories[] = $extractCategory;
        }
        
        // if it is in the array put it at the exact position
        if($position >= 1 && $position <= count($dropedCategories)) {
          if($position == $count)
            $sortetCategories[] = $extractCategory;
          // put it at the first position
          $sortetCategories[] = $dropedCategories[$sortCategory['id']];
        }
      
      // MOVE BY DIRECTION
      } else {
        // move the category UP
        // -------------
        if($direction == 'up') {
          
          // if the currentPosition is outside of the foreach
          if(($currentPosition - 1) <= 1) {
            // add the extract at the beginging of the array
            if($count == 1)
              $sortetCategories[] = $extractCategory;
          
          // add the extract at the new position
          } elseif(($currentPosition - 1) == $count)
              $sortetCategories[] = $extractCategory;
        }
        
        // adds the unmoved categories to the array
        // -------------
        $sortetCategories[] = $dropedCategories[$sortCategory['id']];
        
        // move the category DOWN
        // -------------
        if($direction == 'down') {
          
          // if the currentPosition is outside of the foreach
          if(($currentPosition + 1) > count($dropedCategories)) {
            // add the extract at the end of the array
            if($count == count($dropedCategories))
              $sortetCategories[] = $extractCategory;
          
          // add the extract at the new position
          } elseif($currentPosition == $count)
              $sortetCategories[] = $extractCategory; 
        }
      }
     
      $count++;
    }
    
    // -> set back the id as index
    $categories = array();
    foreach($sortetCategories as $sortetCategory) {
      echo '';
      $categories['id_'.$sortetCategory['id']] = $sortetCategory;
    }
    
    return $categories;
  
  } else
    return false;
}

// ** -- saveWebsiteConfig ----------------------------------------------------------------------------------
// open the config/websiteConfig.php
// -----------------------------------------------------------------------------------------------------
function saveWebsiteConfig($givenSettings) {  // (Array) with the settings to save
   
  // opens the file for writing
  if($websiteConfig = @fopen("config/websiteConfig.php","w")) {
    
    // format keywords
    $keywords = preg_replace("/ +/", ' ', $givenSettings['keywords']);
    $keywords = preg_replace("/,+/", ',', $keywords);
    $keywords = str_replace(', ',',', $keywords);
    $keywords = str_replace(' ,',',', $keywords);
    $keywords = str_replace(' ',',', $keywords);
    
    // *** write
    flock($websiteConfig,2); //LOCK_EX
      fwrite($websiteConfig,PHPSTARTTAG); //< ?php
  
      fwrite($websiteConfig,"\$websiteConfig['title']          = '".htmlentities($givenSettings['title'],ENT_QUOTES,'UTF-8')."';\n");
      fwrite($websiteConfig,"\$websiteConfig['publisher']      = '".htmlentities($givenSettings['publisher'],ENT_QUOTES,'UTF-8')."';\n");
      fwrite($websiteConfig,"\$websiteConfig['copyright']      = '".htmlentities($givenSettings['copyright'],ENT_QUOTES,'UTF-8')."';\n");
      fwrite($websiteConfig,"\$websiteConfig['keywords']       = '".htmlentities($keywords,ENT_QUOTES,'UTF-8')."';\n");
      fwrite($websiteConfig,"\$websiteConfig['description']    = '".htmlentities($givenSettings['description'],ENT_QUOTES,'UTF-8')."';\n");
      fwrite($websiteConfig,"\$websiteConfig['contactMail']    = '".$givenSettings['contactMail']."';\n\n");
      
      fwrite($websiteConfig,"\$websiteConfig['startPage']      = '".$givenSettings['startPage']."';\n\n");
      
      fwrite($websiteConfig,"return \$websiteConfig;");
    
      fwrite($websiteConfig,PHPENDTAG); //? >
    flock($websiteConfig,3); //LOCK_UN
    fclose($websiteConfig);
  
    return true;
  } else return false;
}

// ** -- saveStatisticConfig ----------------------------------------------------------------------------------
// open the config/statisticConfig.php
// -----------------------------------------------------------------------------------------------------
function saveStatisticConfig($givenSettings) {  // (Array) with the settings to save
   
  // opens the file for writing
  if($statisticConfig = @fopen("config/statisticConfig.php","w")) {
        
    // *** write
    flock($statisticConfig,2); //LOCK_EX
      fwrite($statisticConfig,PHPSTARTTAG); //< ?php
  
      fwrite($statisticConfig,"\$statisticConfig['number']['mostVisitedPages']        = '".$givenSettings['number']['mostVisitedPages']."';\n");
      fwrite($statisticConfig,"\$statisticConfig['number']['longestVisitedPages']     = '".$givenSettings['number']['longestVisitedPages']."';\n");
      fwrite($statisticConfig,"\$statisticConfig['number']['lastEditedPages']         = '".$givenSettings['number']['lastEditedPages']."';\n\n");
      
      fwrite($statisticConfig,"\$statisticConfig['number']['refererLog']    = '".$givenSettings['number']['refererLog']."';\n");
      fwrite($statisticConfig,"\$statisticConfig['number']['taskLog']       = '".$givenSettings['number']['taskLog']."';\n\n");
      
      
      fwrite($statisticConfig,"return \$statisticConfig;");
    
      fwrite($statisticConfig,PHPENDTAG); //? >
    flock($statisticConfig,3); //LOCK_UN
    fclose($statisticConfig);
  
    return true;
  } else return false;
}

// ** -- editFiles ----------------------------------------------------------------------------------
// open a file like the language files or stylesheets files and edit it
// -----------------------------------------------------------------------------------------------------
// $filesPath          [Pfad wo sich die Dateien befinden die bearbeitet werden sollen (String)],
// $siteName           [variablenname der $site variable die beim abschicken des Fornmular angegeben wird (String)]
// $status             [status der beim wechsel der Dateien den Dateinamen uebergeben wird (String)],
// $titleText          [Bezeichnung der Dateien die man bearbieten kann (String)],
// $anchorName         [name des Ankers der verwendet werden soll (String)],
// $fileType           [Dateiendung (String)],
// $varNameFile        [variablenname des Dateinames (String)],
// $varNameNewFile     [variablenname der neu erstellten Datei (String)],
// $varNameSendCheck   [variablenname f�r den sendstatus, ob das formular abgesendet wurde oder nicht (String)],
// $varNameContent     [variablenname f�r den Inhalt der Dateien]
function editFiles($filesPath, $siteName, $status, $titleText, $anchorName, $fileType) {
  global $_GET;
  global $langFile;
  global $savedForm;
  
  // shows the block below if it is the ones which is saved before
  if($_GET['status'] == $status || $savedForm == $status)
    $hidden = '';
  else
    $hidden = ' hidden';
  
  echo '<form action="?site='.$siteName.'#'.$anchorName.'" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
        <div>
        <input type="hidden" name="status" value="'.$status.'" />
        <input type="hidden" name="filesPath" value="'.$filesPath.'" />
        <input type="hidden" name="fileType" value="'.$fileType.'" />
        </div>';
  
  echo '<div class="block'.$hidden.'">
          <h1><a href="#" name="'.$anchorName.'">'.$titleText.'</a></h1>
          <div class="content"><br />';     
      
      //echo $filesPath.'<br />';      
      // gets the files out of the directory --------------
      $dir = DOCUMENTROOT.$filesPath;
      if(is_dir($dir)) {          
        $files = readFolderRecursive($filesPath);
        $files = $files['files'];
        natsort($files);
        $isDir = true;
        
      } else {
        echo '<code>"'.$filesPath.'"</code> <b>'.$langFile['editFilesSettings_noDir'].'</b>';
        $isDir = false;
      }
      
      // GETS ACTUAL FILE ----------------------------------
      if($_GET['status'] == $status)
    
      $editFile = $_GET['file'];
      
      // wenn noch nicht per Dateiauswahl $editfile kreiert wurde
      if(empty($editFile) && isset($files)) {
        $editFile = $files[0];
      }
      
      
      if($isDir) {

      // FILE SELECTION ------------------------------------
      if(isset($files)) {
        echo '<div style="position:relative;left:0px;top:0px;width:300px;" class="right">
              <h2>'.$langFile['editFilesSettings_chooseFile'].'</h2>
              <select onchange="changeFile(\''.$siteName.'\',this.value,\''.$status.'\',\''.$anchorName.'\');">'."\n";
   
              // listet die Dateien aus dem Ordner als Mehrfachauswahl auf
              foreach($files as $cFile) {      
                if($editFile == $cFile)
                  echo '<option value="'.$cFile.'" selected="selected">'.$cFile.'</option>'."\n";
                else
                  echo '<option value="'.$cFile.'">'.$cFile.'</option>'."\n";    
              }
        echo '</select></div>'."\n\n";
      } // -------------------------------------------------
      
      // create a NEW FILE ---------------------------------      
      echo '<div style="position:absolute;right:20px;top:22px;width:250px;" class="right">
            <h2>'.$langFile['editFilesSettings_createFile'].'</h2>
            <input name="newFile" style="width:200px;" class="toolTip" title="'.$langFile['editFilesSettings_createFile'].'::'.$langFile['editFilesSettings_createFile_inputTip'].'" /> <b>.'.$fileType.'</b>
            </div>';
      }
      
      // OPEN THE FILE -------------------------------------
      if(@is_file(DOCUMENTROOT.$editFile)) {
        $editFileOpen = fopen(DOCUMENTROOT.$editFile,"r");  
        $file = @fread($editFileOpen,filesize(DOCUMENTROOT.$editFile));
        fclose($editFileOpen);
        
        echo '<input type="hidden" name="file" value="'.$editFile.'" />'."\n";

        echo '<textarea name="fileContent" cols="90" rows="30" class="editFiles">'.$file.'</textarea>';
      } 
  
  
  echo '<!--<input type="reset" value="" class="toolTip button cancel" title="'.$langFile['form_cancel'].'" />-->';
  if(is_dir($dir))
    echo '<br /><br /><br /><input type="submit" value="" name="saveEditedFiles" class="toolTip button submit center" title="'.$langFile['form_submit'].'" />';
  echo '</div>
      <div class="bottom"></div>
    </div>
    </form>';
}

// ** -- saveEditedFiles ----------------------------------------------------------------------------------
// save the files which where edited with editFiles()
// -----------------------------------------------------------------------------------------------------
// $post            [postvariable with the filename and filecontent (array)]
function saveEditedFiles($post) {
    
    // SAVE FILE
    if(@is_file(DOCUMENTROOT.$post['file']) && empty($post['newFile'])) {

      $post['fileContent'] = str_replace('\"', '"', $post['fileContent']);
      $post['fileContent'] = str_replace("\'", "'", $post['fileContent']);
      //$post['fileContent'] 	= str_replace("<br />", "", $post['fileContent']);
      $post['fileContent'] = stripslashes($post['fileContent']);
      
      // wandelt umlaut in HTML zeichen um
      $post['fileContent'] = htmlentities($post['fileContent'],ENT_NOQUOTES,'UTF-8');      
      // changes & back, because of the $auml;
      $post['fileContent'] = str_replace("&amp;", "&", $post['fileContent']);
      // wandelt die php einleitungstags wieder in zeichen um
      $post['fileContent'] = str_replace(array('&lt;','&gt;'),array('<','>'),$post['fileContent']);
      
      if($file = fopen(DOCUMENTROOT.$post['file'],"w")) {
      flock($file,2);
      fwrite($file,$post['fileContent']);
      flock($file,3);
      fclose($file);      
      
      $_GET['status'] = $_POST['status'];
      $_GET['file'] = $_POST['file'];
      return true;      
      }
      
    // NEW FILE
    } else { // erstellt eine neue datei wenn etwas ins das neu erstellen Feld eingetragen wurde
      
      $post['newFile'] = str_replace( array(" ","%","+",'/',"&","#","!","?","$","�",'"',"'","(",")"), '_', $post['newFile'] ) ;
      $post['newFile'] = str_replace( array("�","�","�","�",'\"'), array("ae","ue","oe","ss","-"), $post['newFile'] ) ;
      
      $post['newFile'] = str_replace($post['fileType'],'',$post['newFile']);
      
      if($file = @fopen(DOCUMENTROOT.$post['filesPath'].$post['newFile'].'.'.$post['fileType'],"w")) {
      
        $_GET['status'] = $_POST['status'];
        //$_GET['file'] = $_POST['file'];        
        $_GET['file'] = $post['filesPath'].$post['newFile'].'.'.$post['fileType'];
        
        return true;
      }  
    }    
    return false;
}

// ** -- delDir ----------------------------------------------------------------------------------------
// deletes a dir, with files in it
// -----------------------------------------------------------------------------------------------------
// $dir            [the directory to be deleted, must end with a slash "/" (array)]
function delDir($dir) {
    $files = glob( $dir . '*', GLOB_MARK );
    foreach( $files as $file ){
        if( substr( $file, -1 ) == '/' )
            delTree( $file );
        else
            unlink( $file );
    }
    if(rmdir( $dir ))
      return true;
    else
      return false;
}

// ** -- movePage ----------------------------------------------------------------------------------
// move a file to a new destination
// -----------------------------------------------------------------------------------------------------
// $page            [page id wich will be moved (String)],
// $fromCategory    [category id where the file is situated (String)]
// $toCategory      [category id where it will be moved in (String)]
function movePage($page, $fromCategory, $toCategory) {
  global $adminConfig;
  
  // if there are pages not in a category set the category to empty
  if($fromCategory === false || $fromCategory == 0)
    $fromCategory = '';
  if($toCategory === false || $toCategory == 0)
    $toCategory = '';
    
  // MOVE categories
  if(@copy(DOCUMENTROOT.$adminConfig['savePath'].$fromCategory.'/'.$page.'.php',
    DOCUMENTROOT.$adminConfig['savePath'].$toCategory.'/'.$page.'.php') &&
    @unlink(DOCUMENTROOT.$adminConfig['savePath'].$fromCategory.'/'.$page.'.php'))
    return true;
  else
    return false;
}

// ** -- fileFolderIsWritableWarning ----------------------------------------------------------------------------------
// checks the file/folder if it is writeable, and gives back an error text if not (made for the adminConfig.php)
// -----------------------------------------------------------------------------------------------------
// $fileFolder  [the File or Folder which is checked for writeability, must beginn with a "/" (String)]
function fileFolderIsWritableWarning($fileFolder) {
  global $langFile;
  
  if(substr($fileFolder,0,1) != '/')
    $fileFolder = '/'.$fileFolder;
  
  if(is_writable(DOCUMENTROOT.$fileFolder) === false) {
      return '<span class="warning toolTip" title="'.$fileFolder.'::'.$langFile['adminSetup_error_writeAccess_tip'].'"><b>&quot;'.$fileFolder.'&quot;</b> -> '.$langFile['adminSetup_error_writeAccess'].'</span><br />';
  } else return false;
}

// ** -- isFolderWarning ----------------------------------------------------------------------------------
// checks the folder exists, and gives back an error text if not (made for the adminConfig.php)
// -----------------------------------------------------------------------------------------------------
// $folder  [the File or Folder which is checked for writeability, must beginn with a "/" (String)]
function isFolderWarning($folder) {
  global $langFile;
  
  if(substr($folder,0,1) != '/')
    $folder = '/'.$folder;

  if(is_dir(DOCUMENTROOT.$folder) === false) {
      return '<span class="warning"><b>&quot;'.$folder.'&quot;</b> -> '.$langFile['adminSetup_error_isFolder'].'</span><br />';
  } else return false;
}

// ** -- getHighestId ----------------------------------------------------------------------------------
// gets the highest ID of all pages in all categories
// -----------------------------------------------------------------------------------------------------
function getHighestId() {
  global $categories;
  global $generalFunctions;
  
  $cats = $categories;
  array_unshift($cats,array('id' => 0));
  
  // loads the file list in an array
  if(empty($cats))
    $pages = $generalFunctions->loadPages(0,false);
  else
    $pages = $generalFunctions->loadPages($cats,false);
  
  $highestId = 0;
  
  // go trough the file list and look for the highest number
  if(is_array($pages)) {
    foreach($pages as $page) {
      $pageId = $page[0];
          
      if($pageId > $highestId)
        $highestId = $pageId;
    }
  }
  return $highestId;
}

// ** -- readFolder ----------------------------------------------------------------------------------
// OPENS a Folder and RETURNs an Hash with $return['folders'][0] ,.. and $return['files'][0] ,..
// -----------------------------------------------------------------------------------------------------------
function readFolder($folder) {
  
  if(empty($folder))
    return false;
  
  // -> adds / on the beginning of the folder
  if(substr($folder,0,1) != '/')
    $folder = '/'.$folder;
  // -> adds / on the end of the folder
  if(substr($folder,-1) != '/')
    $folder .= '/';
  
  //clean vars
  $folder = preg_replace("/\/+/", '/', $folder);
  $folder = str_replace('/'.DOCUMENTROOT,DOCUMENTROOT,$folder);  
  
  // vars
  $return = false;  
  $fullFolder = $folder;
  
  // adds the DOCUMENTROOT  
  $fullFolder = str_replace(DOCUMENTROOT,'',$fullFolder);  
  $fullFolder = DOCUMENTROOT.$fullFolder; 
  
  // open the folder and read the content
  if(is_dir($fullFolder)) {
    $openedDir = @opendir($fullFolder);  // @ zeichen eingef�gt
    while(false !== ($inDirObjects = @readdir($openedDir))) {
      if($inDirObjects != "." && $inDirObjects != "..") {      
        if(is_dir($fullFolder.$inDirObjects)) {        
          $return['folders'][] = $folder.$inDirObjects;
        } elseif(is_file($fullFolder.$inDirObjects)) {
          $return['files'][] = $folder.$inDirObjects;
        }
      }
    }
    @closedir($openedDir);
  }
  
  return $return;  
}

// ** -- readFolderRecursive ----------------------------------------------------------------------------------
// OPENS a Folder and ALL SUBFOLDERS and RETURNs an Array with $return['folders'][0] ,.. and $return['files'][0] ,..
// -----------------------------------------------------------------------------------------------------------
function readFolderRecursive($folder) {
  
  if(empty($folder))
    return false;
  
  // adds a slash on the beginning
  if(substr($folder,0,1) != '/')
    $folder = '/'.$folder;
  
  //clean vars
  $folder = preg_replace("/\/+/", '/', $folder);
  $folder = str_replace('/'.DOCUMENTROOT,DOCUMENTROOT,$folder);
  
  //vars  
  $fullFolder = DOCUMENTROOT.$folder;  
  $goTroughFolders['folders'][0] = $fullFolder;
  $goTroughFolders['files'] = array();
  $subFolders = array();
  $files = array();
  $return['folders'] = false;
  $return['files'] = false;
    
  // ->> goes trough all SUB-FOLDERS  
  while(!empty($goTroughFolders['folders'][0])) {

    // ->> GOES TROUGH folders
    foreach($goTroughFolders['folders'] as $subFolder) {
      //echo '<br /><br />'.$subFolder.'<br />';     
      $inDirObjects = readFolder($subFolder);
      
      // -> add all subfolders to an array
      if(is_array($inDirObjects['folders'])) {        
        $subFolders = array_merge($subFolders, $inDirObjects['folders']);
      }        
    
      // -> add folders to the $return array
      if(is_array($inDirObjects['folders'])) {
        foreach($inDirObjects['folders'] as $folder) {
          $return['folders'][] = str_replace(DOCUMENTROOT,'',$folder);
        }
      }
      // -> add files to the $return array
      if(is_array($inDirObjects['files'])) {
        foreach($inDirObjects['files'] as $file) {
          $return['files'][] = str_replace(DOCUMENTROOT,'',$file);
        }
      }
    }
    
    $goTroughFolders['folders'] = $subFolders;
    $goTroughFolders['files'] = $files;

    $subFolders = array();
    $files = array();
  }

  return $return;
} 


// ** -- showModulesPlugins ----------------------------------------------------------------------------------
// opens the modules and plugin folder and return tru if there something in
// -----------------------------------------------------------------------------------------------------------
// $folder    [the ABSOLUTE PATH of the Folder which will be checked (String)]
function folderIsEmpty($folder) {
  
  if(readFolder($folder) === false)
    return true;
  else
    return false;

}

// ** -- checkBasePath ----------------------------------------------------------------------------------
// CHECKs if the current basePath is matching the real basePath
// RETURNs TRUE if the basePath is correct, otherwise FALSE
// -----------------------------------------------------------------------------------------------------------
function checkBasePath() {
  global $adminConfig;
  
  $basePath = str_replace('www.','',$adminConfig['url']);
  $checkPath = str_replace('www.','',$_SERVER["HTTP_HOST"]);
  
  if($adminConfig['basePath'] !=  dirname($_SERVER['PHP_SELF']).'/' ||
     $basePath != $checkPath)
    return false;
  else return true;
}

// ** -- basePathWarning ----------------------------------------------------------------------------------
// CHECKs if the current basePath is matching the real basePath, if not throw a warning
// SHOWs a warning, if the basePath is incorrect
// -----------------------------------------------------------------------------------------------------------
function basePathWarning() {
  global $langFile;
  
  if(checkBasePath() === false) {
    echo '<div class="block warning">
            <h1>'.$langFile['warning_fmsConfWarning_h1'].'</h1>
            <div class="content">
              <p>'.$langFile['warning_fmsConfWarning'].'</p><!-- needs <p> tags for margin-left:..--> 
            </div> 
            <div class="bottom"></div> 
          </div>';
  }
}

// ** -- startPageWarning ----------------------------------------------------------------------------------
// CHECKs if a STARTPAGE is SET and if this page exists
// SHOWs a warning, if the basePath is incorrect
// -----------------------------------------------------------------------------------------------------------
function startPageWarning() {
  global $adminConfig;
  global $websiteConfig;
  global $generalFunctions;
  global $langFile;
  global $_GET;
  
  if($adminConfig['setStartPage'] && $websiteConfig['startPage'] && ($startPageCategory = $generalFunctions->getPageCategory($websiteConfig['startPage'])) != 0)
    $startPageCategory .= '/';
  else
    $startPageCategory = '';

  if($adminConfig['setStartPage'] && (!$websiteConfig['startPage'] || !file_exists(DOCUMENTROOT.$adminConfig['savePath'].$startPageCategory.$websiteConfig['startPage'].'.php'))) {
    echo '<div class="block info">
            <h1>'.$langFile['warning_startPageWarning_h1'].'</h1>
            <div class="content">
              <p>'.$langFile['warning_startPageWarning'].'</p><!-- needs <p> tags for margin-left:..--> 
            </div> 
            <div class="bottom"></div> 
          </div>';
  }
}

// ** -- createStyleTags ----------------------------------------------------------------------------------
// GOs trough a Folder and its Sub-Folders and creates a HTML-Style-Tag out of every CSS-File
// -----------------------------------------------------------------------------------------------------------
function createStyleTags($folder) {
  global $adminConfig;
  
  // ->> goes trough all folder and subfolders
  $filesInFolder = readFolderRecursive($folder);
  if(is_array($filesInFolder['files'])) {
    foreach($filesInFolder['files'] as $file) {
      // -> check for CSS FILES
      if(substr($file,-4) == '.css') {
        // -> removes the $adminConfig('basePath')
        $file = str_replace($adminConfig['basePath'],'',$file);
        // -> WRITES the HTML-Style-Tags
        echo '  <link rel="stylesheet" type="text/css" href="'.$file.'" media="screen" />'."\n";
      }
    }
  }
  
}

?>