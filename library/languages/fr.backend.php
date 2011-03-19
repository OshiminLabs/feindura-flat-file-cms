<?php
/*
 * feindura - Flat File Content Management System
 * Copyright (C) Fabian Vogelsteller [frozeman.de]
 *
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program;
 * if not,see <http://www.gnu.org/licenses/>.
 */
/**
 * FRENCH (FR) language-file for the feindura CMS (BACKEND)
 * 
 * IMPORTANT:<br>
 * if you want to write html-code in the toolTip texts (mostly they end with ".._tip" or ".._inputTip")
 * use only "[" and "]" instead of "<" and ">" for the HTML-tags and use no " this would end the title="" tag where the toolTip text is in.
 * 
 * <samp>
 * $langFile['GROUP_TYPE_NAME'] = 'langfile example text';
 * </samp>
 * 
 * The TYPE's can be<br />
 *    - INPUT
 *    - LINK
 *    - BUTTON
 *    - TITLE
 *    - TEXT
 *    - EXAMPLE
 *    - ERROR
 *    - TOOLTIP 
 * 
 * NEEDS a RETURN $langFile; at the END
 */

// -> LOGIN <-

$langFile['LOGIN_INPUT_USERNAME'] = 'nom d\'utilisateur';
$langFile['LOGIN_INPUT_PASSWORD'] = 'mot de passe';
$langFile['LOGIN_BUTTON_LOGIN'] = 'LOGIN';
$langFile['LOGIN_TEXT_COOKIESNEEDED'] = 'Cookies doivent être activés';

$langFile['LOGIN_LINK_FORGOTPASSWORD'] = 'Mot de passe oublié?';
$langFile['LOGIN_LINK_BACKTOLOGIN'] = 'Aller au login';
$langFile['LOGIN_BUTTON_SENDNEWPASSWORD'] = 'ENVOYER';
$langFile['LOGIN_TEXT_NEWPASSWORDEMAIL_SUBJECT'] = 'mot de passe feindura CMS commandé';
$langFile['LOGIN_TEXT_NEWPASSWORDEMAIL_MESSAGE'] = 'Tu as commandé un nouveau mot de passe pour ton feindura - Flat File CMS.
Le login et ton nouveau mot de passe sont:';

$langFile['LOGIN_ERROR_FORGOTPASSWORD_NOEMAIL'] = 'Utilisateur na pas laissé dadrèsse éléctronique.';
$langFile['LOGIN_ERROR_FORGOTPASSWORD_NOTSEND'] = 'FEHLER<br />pendant lenvoy du nouveau mot de passe pour ladrèsse éléctronique de lutilisateur.';
$langFile['LOGIN_ERROR_FORGOTPASSWORD_NOTSAVED'] = 'FEHLER<br />impossible de sauvegarder le nouveau mot de passe.';
$langFile['LOGIN_ERROR_FORGOTPASSWORD_SUCCESS'] = 'Un nouveau mot de passe a été envoyé à ladrèsse suivante';

$langFile['LOGIN_ERROR_WRONGUSER'] = 'utilisateur nexiste pas';
$langFile['LOGIN_ERROR_WRONGPASSWORD'] = 'mot de passe incorrect';

$langFile['LOGIN_TEXT_LOGOUT_PART1'] = 'déconnexion avec succès ';
$langFile['LOGIN_TEXT_LOGOUT_PART2'] = 'diriger vers site web';

$langFile['LOGIN_TIP_AUTOLOGOUT'] = 'déconnexion automatique';
 

// -> GENERAL <-

$langFile['DATE_INT'] = 'AAAA-MM-JJ';
$langFile['DATE_EU'] = 'JJ.MM.AAAA';
$langFile['CATEGORIES_TEXT_NONCATEGORY'] = 'pages';
$langFile['CATEGORIES_TOOLTIP_NONCATEGORY'] = 'pages sans catégorie';
$langFile['TEXT_EXAMPLE'] = 'example';

$langFile['HEADER_BUTTON_GOTOWEBSITE'] = 'feindura::S\'il vous plaît cliquez ici pour éditer les pages directement sur votre site web.';

// THUMBNAILS
$langFile['THUMBNAIL_TEXT_UNIT'] = 'pixel';
$langFile['THUMBNAIL_TEXT_NAME'] = 'miniature de la page';
$langFile['THUMBNAIL_TEXT_WIDTH'] = 'thumbnail <b>largeur</b>';
$langFile['THUMBNAIL_TEXT_HEIGHT'] = 'thumbnail <b>hauteur</b>';
$langFile['THUMBNAIL_TOOLTIP_WIDTH'] = 'largeur standard::La largeur du thumbnail en pixels.[br /][br /]L\'image téléchargée sera mise à l\'échelle normée.';
$langFile['THUMBNAIL_TOOLTIP_HEIGHT'] = 'hauteur standard::La hauteur du thumbnail en pixels.[br /][br /]L\'image téléchargée sera mise à l\'échelle normée.';
$langFile['THUMBNAIL_TEXT_RATIO'] = 'rapport largeur/hauteur';
$langFile['THUMBNAIL_TEXT_KEEPRATIO'] = 'garder le rapport largeur/hauteur';
$langFile['THUMBNAIL_TEXT_FIXEDRATIO'] = 'rapport largeur/hauteur fix';
$langFile['THUMBNAIL_TOOLTIP_FIXEDRATIO'] = 'Largeur et hauteur peuvent être adjustée ou fixée.';
$langFile['THUMBNAIL_TOOLTIP_KEEPRATIO_X'] = 'Sera alignée selon la [b]largeur[/b].';
$langFile['THUMBNAIL_TOOLTIP_KEEPRATIO_Y'] = 'Sera alignée selon la [b]hauteur[/b].';

// STYLESHEETS
$langFile['STYLESHEETS_TEXT_STYLEFILE'] = 'fichier feuille de style';
$langFile['STYLESHEETS_TEXT_ID'] = 'Id feuille de style';
$langFile['STYLESHEETS_TEXT_CLASS'] = 'classement de feuille de style';

$langFile['STYLESHEETS_TOOLTIP_STYLEFILE'] = 'Ici des feuilles de style peuvent être indiquées pour l\'utilisation dans le html éditeur afin de former le contenu.';
$langFile['STYLESHEETS_TOOLTIP_ID'] = 'Ici un attribut ID peut être indiqué pour l\'attribuer au tag de l\'éditeur HTML-Editor <body>.';
$langFile['STYLESHEETS_TOOLTIP_CLASS'] = 'Ici un attribut class peut être indiqué pour l\'attribuer au tag de l\'éditeur HTML-Editor <body>.';

$langFile['STYLESHEETS_TOOLTIP_ADDSTYLEFILE'] = 'ajouter fichier feuille de style';
$langFile['STYLESHEETS_EXAMPLE_STYLEFILE'] = '<b>example</b> &quot;/style/layout.css&quot;';

// PATHS
$langFile['PATHS_TEXT_ABSOLUTE'] = 'chemin absolue';
$langFile['PATHS_TEXT_RELATIVE'] = 'chemin relative';
$langFile['PATHS_TOOLTIP_ABSOLUTE'] = 'chemin absolue';
$langFile['PATHS_TOOLTIP_RELATIVE'] = 'chemin relative';

// STATISTICS
$langFile['STATISTICS_TITLE_BROWSERCHART'] = 'spectre des navigateurs des visiteurs';
$langFile['STATISTICS_TEXT_SPIDERCOUNT'] = 'web spiders';
$langFile['STATISTICS_TOOLTIP_SPIDERCOUNT'] = 'robot d\'indexation::Aussi nommé Webcrawler sont des scripts des moteurs de recherche qui analysent et indicent des sites web.';
$langFile['STATISTICS_TEXT_SEARCHWORD_PART1'] = 'a'; // "exampleword" led 20 times to this website
$langFile['STATISTICS_TEXT_SEARCHWORD_PART2'] = 'mèné sur ce site';
$langFile['STATISTICS_TOOLTIP_SEARCHWORD'] = 'Cliquez dessus pour chercher le mot de recherche dans toutes les pages.';
$langFile['STATISTICS_TEXT_VISITORCOUNT'] = 'visiteurs';
$langFile['STATISTICS_TEXT_CURRENTVISITORS'] = 'visiteurs présents';
$langFile['STATISTICS_TEXT_LASTACTIVITY'] = 'visiteurs présents';

$langFile['STATISTICS_TITLE_PAGESTATISTICS'] = 'statistiques du pages';

$langFile['STATISTICS_TEXT_VISITTIME_MAX'] = 'temps de visite le plus longs';
$langFile['STATISTICS_TEXT_VISITTIME_MIN'] = 'temps de visite le plus court';
$langFile['STATISTICS_TEXT_FIRSTVISIT'] = 'première visite';
$langFile['STATISTICS_TEXT_LASTVISIT'] = 'dernière visite';
$langFile['STATISTICS_TEXT_NOVISIT'] = 'Personne a visité ce site web.';
$langFile['STATISTICS_TEXT_SEARCHWORD_DESCRIPTION'] = 'Mot de recherche qui ont mèné
<a href="http://www.google.de">Google</a>,
<a href="http://www.yahoo.de">Yahoo</a> ou
<a href="http://www.bing.com">Bing (MSN)</a> sur ce site web';

$langFile['STATISTICS_TEXT_HOUR_SINGULAR'] = 'heur';
$langFile['STATISTICS_TEXT_HOUR_PLURAL'] = 'heures';
$langFile['STATISTICS_TEXT_MINUTE_SINGULAR'] = 'minute';
$langFile['STATISTICS_TEXT_MINUTE_PLURAL'] = 'minutes';
$langFile['STATISTICS_TEXT_SECOND_SINGULAR'] = 'seconde';
$langFile['STATISTICS_TEXT_SECOND_PLURAL'] = 'secondes';
$langFile['STATISTICS_TEXT_BROWSERCHART_OTHERS'] = 'autres';

// LOG TEXTS
$langFile['LOG_PAGE_SAVED'] = 'site sauvegardé';
$langFile['LOG_PAGE_NEW'] = 'page nouvelle crée';
$langFile['LOG_PAGE_DELETE'] = 'page éffacée';
$langFile['LOG_PAGE_MOVEDINCATEGORY'] = 'page mise dans catégorie';
$langFile['LOG_PAGE_MOVEDINCATEGORY_CATEGORY'] = 'dans la catégorie'; // Example Page in Category
$langFile['LOG_PAGE_SORTED'] = 'page mis à l\'lordre';
$langFile['LOG_THUMBNAIL_UPLOAD'] = 'téléchargé nouveau thumbnail';
$langFile['LOG_THUMBNAIL_DELETE'] = 'thumbnail éffacé';
$langFile['LOG_USER_ADD'] = 'nouveau utilisateur crée';
$langFile['LOG_USER_DELETED'] = 'utilisateur éffacé';
$langFile['LOG_USER_PASSWORD_CHANGED'] = 'mot de passe changé';
$langFile['LOG_USER_SAVED'] = 'utilisateur sauvegardé';

$langFile['LOG_ADMINSETUP_SAVED'] = 'nouveaux préférences l\'administrateur sauvegardé';
$langFile['LOG_ADMINSETUP_CKSTYLES'] = '&quot;choix des syles&quot; de l\'éditeur HTML sauvegardé';
$langFile['LOG_WEBSITESETUP_SAVED'] = 'préférences site web sauvegardé';
$langFile['LOG_STATISTICSETUP_SAVED'] = 'préférences statistiques sauvegardé';
$langFile['LOG_CLEARSTATISTICS_WEBSITESTATISTIC'] = 'préférences statistiques éffacé';
$langFile['LOG_CLEARSTATISTICS_PAGESTATISTICS'] = 'préférences site web éffacés';
$langFile['LOG_CLEARSTATISTICS_PAGESTAYLENGTH'] = 'statistiques sur le temps de visite éffacées';
$langFile['LOG_CLEARSTATISTICS_REFERERLOG'] = 'referrer-log éffacé';
$langFile['LOG_CLEARSTATISTICS_ACTIVITYLOG'] = 'log des dernières activités éffacé';
$langFile['LOG_PAGESETUP_SAVED'] = 'préférences site web sauvegardé';
$langFile['LOG_PAGESETUP_CATEGORIES_SAVED'] = 'catégories sauvegardés';

$langFile['LOG_PAGESETUP_CATEGORIES_NEW'] = 'nouvelle catégorie crée';
$langFile['LOG_PAGESETUP_CATEGORIES_DELETED'] = 'catégorie éffacée';
$langFile['LOG_PAGESETUP_CATEGORIES_MOVED'] = 'catégorie déplacée';
$langFile['LOG_PLUGINSETUP_SAVED'] = 'préférences plugins sauvegardé';

$langFile['LOG_FILE_SAVED'] = 'fichier sauvegardé';
$langFile['LOG_FILE_DELETED'] = 'fichier sauvegardé';

$langFile['LOG_BACKUP_CREATED'] = 'sauvegarde créée';
$langFile['LOG_BACKUP_RESTORED'] = 'restauration de sauvegarde';
$langFile['LOG_BACKUP_DELETED'] = 'supprimé de sauvegarde';

// PAGE/CATEGORY STATUS
$langFile['STATUS_PAGE_PUBLIC'] = 'site web public';
$langFile['STATUS_PAGE_NONPUBLIC'] = 'site web caché';
$langFile['STATUS_CATEGORY_PUBLIC'] = 'catégorie est public';
$langFile['STATUS_CATEGORY_NONPUBLIC'] = 'catégorie est cachée';

// USER LIST
$langFile['USER_TEXT_NOUSER'] = 'il n\'y a pas d\'utilisateurs';
$langFile['USER_TEXT_CURRENTUSER'] = 'Tu es connecté en tant qu\'utilisateurs';
$langFile['USER_TEXT_USERSONLINE'] = 'Cet utilisateur est également connecté:: Dernières activités';

$langFile['LOGO_TEXT'] = 'version';
$langFile['txt_logo_gotowebsite'] = 'Cliquez ici pour accéder à votre site Web.';
$langFile['LOADING_TEXT_LOAD'] = 'site en connexion...';

// CKEDITOR transport
$langFile['CKEDITOR_TITLE_LINKS'] = 'pages de feindura';

// -> BUTTON TEXTS

// MAIN MENU
$langFile['BUTTON_HOME'] = 'vue globale';
$langFile['BUTTON_PAGES'] = 'pages';
$langFile['BUTTON_ADDONS'] = 'addons';
$langFile['BUTTON_WEBSITESETTINGS'] = 'préférences site web';
$langFile['BUTTON_SEARCH'] = 'fouiller tout le site web';

// ADMIN MENU
$langFile['HEADER_TITLE_ADMINMENU'] = 'administration';
$langFile['BUTTON_ADMINSETUP'] = 'préférences administrateur';
$langFile['BUTTON_PAGESETUP'] = 'préférences site web';
$langFile['BUTTON_PLUGINSETUP'] = 'préférences plugins';
$langFile['BUTTON_STATISTICSETUP'] = 'préférences statistiques';
$langFile['BUTTON_USERSETUP'] = 'gestion de l\'utilisateur';
$langFile['BUTTON_BACKUP'] = 'Sauvegarde Restauration';

// SUB MENU/FOOTER
$langFile['BUTTON_FILEMANAGER'] = 'gestionnaire des fichiers';
$langFile['BUTTON_TOOLTIP_FILEMANAGER'] = 'Gerér des fichiers et des images.';
$langFile['BUTTON_CREATEPAGE'] = 'nouvelle page';
$langFile['BUTTON_TOOLTIP_CREATEPAGE'] = 'Ccréer une nouvelle page.';
$langFile['BUTTON_DELETEPAGE'] = 'éffacer la page';
$langFile['BUTTON_TOOLTIP_DELETEPAGE'] = 'Éffacer cette page.';
$langFile['BUTTON_FRONTENDEDITPAGE'] = 'modifier la page dans le frontend';
$langFile['BUTTON_TOOLTIP_FRONTENDEDITPAGE'] = 'Modifier cette page directement sur le site web.';
$langFile['BUTTON_THUMBNAIL_UPLOAD'] = 'télécharger thumbnail de la page';
$langFile['BUTTON_TOOLTIP_THUMBNAIL_UPLOAD'] = 'Télécharger thumbnail pour cette page.';
$langFile['BUTTON_THUMBNAIL_DELETE'] = 'éffacer thumbnail de la page';
$langFile['BUTTON_TOOLTIP_THUMBNAIL_DELETE'] = 'Éffacer thumbnail de cette page.';

// OTHER BUTTONS
$langFile['BUTTON_UP'] = 'vers le haut';


// -> GENERAL ERROR TEXTS
$langFile['ERROR_SAVE_SETTINGS'] = '<b>Les préférences ne peuvent pas être sauvegardés.</b>';
$langFile['ERROR_SAVE_FILE'] = '<br /><br />Svp contrôlez les droits d\'écriture du fichier:';

$langFile['ERROR_READ_FOLDER_PART1'] = '<br /><br />Svp contrôlez les droits de lecture des &quot;';
$langFile['ERROR_SAVE_FOLDER_PART1'] = '<br /><br />Svp contrôlez les droits d\'écriture des &quot;';

$langFile['ERROR_FOLDER_PART2'] = '&quot; fichiers, du sous-fichier et des données.';

/*
* ---------- WARNINGs
*/

$langFile['warning_startPageWarning_h1'] = 'La page d\'acceuil n\'est pas définie.';
$langFile['warning_startPageWarning'] = 'Svp définissez une page d\'acceuil.<br />Gehe zu <a href="?site=pages">'.$langFile['BUTTON_PAGES'].'</a> und klicke bei der gewünschten Seite auf das <span class="startPageIcon"></span> Symbol';
$langFile['warning_fmsConfWarning_h1'] = '<span class="logoname">fein<span>dura</span></span> n\'a pas encore été configuré!';
$langFile['warning_fmsConfWarning'] = 'La <i>chemin de base</i>ne correspond pas avec les préférences l\'administrateur.<br />
Cliquez sur <a href="?site=adminSetup">préférences administrateur</a> et met en service ton <span class="logoname">fein<span>dura</span></span> CMS';
$langFile['warning_jsWarning_h1'] = 'Activer le javascript';
// no <p> tag on the start and the end, its already in the home.php
$langFile['warning_jsWarning'] = '<strong>Pour <span class="logoname">fein<span>dura</span></span> utiliser complètement le javasrcipt doit être activé!</strong></p>
<h2>dans le navigateur Firefox</h2>
<p>Cliquez dans le menu sur "insérer" > "paramètres". Sous contenu cliquez sur "activer JavaScript" et valider avec ok.</p>
<h2>dans le navigateur Internet Explorer</h2>
<p>Cliquez dans le menu sur "outils" > "options internet".<br />
Cliquez sur sécurité ou sur "standard" ou bien "adapter standard" et puis activez le "activer Active Scripting" sous l\'onglet. Validez avec ok.</p>
<h2>dans le navigateur Safari</h2>
<p>Cliquez dans le menu sur le symbol tout droit, choississez "paramètres". Allez sur "sécurité" pour activer "JavaScript aktivieren". Validez avec ok.</p>
<h2>dans le navigateur Mozilla</h2>
<p>Cliquez dans le menu sur "éditer" > "préférences". Allez sur "avancé" > "scripts & plugins" et cochez la croix "navigateur" an. Validez avec ok.</p>
<h2>dans le navigateur Opera</h2>
<p>Cliquez dans le menu sur "extras" > "paramètres". Allez sur "avancé" > "contenu" et cochez la croix "activer JavaScript". Validez avec ok.';

$langFile['warning_ieOld_h1'] = '<span class="logoname">fein<span>dura</span></span> ne fonctionne pas avec une ancienne version de l\'Internet Explorer.';
$langFile['warning_ieOld'] = 'Pour <span class="logoname">fein<span>dura</span></span> utiliser le CMS entièrement, version 7 de l\'IE est nécessaire.<br /><br />Svp installez une nouvelle version de l\'Internet Explorer,<br /> ou bien installez <a href="http://www.google.com/chromeframe" target="_blank">Google Chrome Frame Plugin</a> pour l\'IE,<br /> ou bien téléchargez <a href="http://www.mozilla.org/firefox/">Firefox Browser</a>.';

/*
* leftSidebar.loader.php
*/

// ---------- QUICKMENU
$langFile['btn_quickmenu_categories'] = 'catégories';
$langFile['btn_quickmenu_pages'] = 'pages de';

/*
* home.php
*/

// ---------- HOME
$langFile['HOME_TITLE_USERINFO'] = 'informations utilisateur';
$langFile['HOME_TITLE_WELCOME'] = 'Bienvenue au content management system <span class="logoname">fein<span>dura</span></span><br /> de ton site web';
$langFile['HOME_TEXT_WELCOME'] = '<span class="logoname">fein<span>dura</span></span> est un  Content Management System basé sur <span class="toolTip" title="Flat-Files.::fichiers sur un server contenant le contenu du site web">Flat-Files</span>. <br />Ici tu peux gérer le contenu de ton site web.';
$langFile['HOME_TITLE_STATISTICS'] = 'statistiques du site web';
$langFile['HOME_TITLE_USER'] = 'utilisateur';
$langFile['HOME_TITLE_ACTIVITY'] = 'dernières activités';
$langFile['HOME_TEXT_ACTIVITY_NONE'] = 'null';
$langFile['HOME_TITLE_STATISTICS_START'] = 'les';
$langFile['HOME_TITLE_STATISTICS_MOSTVISITED'] = 'pages les plus fréquentées';
$langFile['HOME_TITLE_STATISTICS_LASTVISITED'] = 'dernières pages visitées';
$langFile['HOME_TITLE_STATISTICS_LASTEDITED'] = 'dernières pages rédigées';
$langFile['HOME_TITLE_STATISTICS_LONGESTVIEWED'] = 'pages les plus regardés';
$langFile['HOME_TITLE_REFERER'] = 'sites web d\'où viennent les derniers visiteurs';
$langFile['HOME_TEXT_NOVISITORS'] = 'actuellement il n\'y a pas eu de visiteurs sur le site web.';

/*
* listPages.php
*/

// ---------- PAGES SORTABLE LIST
$langFile['sortablePageList_h1'] = 'contenu de ton site web';
$langFile['sortablePageList_headText1'] = '';
$langFile['sortablePageList_headText2'] = 'dernièrement rédigé';
$langFile['sortablePageList_headText3'] = 'visiteurs';
$langFile['sortablePageList_headText4'] = 'status';
$langFile['sortablePageList_headText5'] = 'fonctions';
$langFile['sortablePageList_pagedate'] = 'date sur le site web';
$langFile['sortablePageList_tags'] = 'tags';
$langFile['sortablePageList_sortOrder_manuell'] = 'manuellement trié';
$langFile['sortablePageList_sortOrder_date'] = 'trié par ordre chronologique';
$langFile['sortablePageList_functions_editPage'] = 'rédiger la page';
$langFile['sortablePageList_changeStatus_linkPage'] = 'Cliquer ici pour changer le status du site web.';
$langFile['sortablePageList_changeStatus_linkCategory'] = 'Cliquer ici pour changer le status de la catégorie.';
$langFile['file_error_read'] = '<b>lecture du site web impossible.</b>'.$langFile['ERROR_READ_FOLDER_PART1'].$adminConfig['basePath'].'pages/'.$langFile['ERROR_FOLDER_PART2'];
$langFile['sortablePageList_setStartPage_error_save'] .= $langFile['ERROR_SAVE_FILE'].' &quot;'.$adminConfig['basePath'].'config/website.config.php&quot;'; // also in fr.shared.php
$langFile['sortablePageList_changeStatusPage_error_save'] = '<b>le status du site web ne pouvé pas être changé.</b>'.$langFile['ERROR_SAVE_FOLDER_PART1'].$adminConfig['basePath'].'pages/'.$langFile['ERROR_FOLDER_PART2'];
$langFile['sortablePageList_changeStatusCategory_error_save'] = '<b>le status de la catégorie ne pouvé pas être changé.</b>'.$langFile['ERROR_SAVE_FOLDER_PART1'].$adminConfig['basePath'].'pages/'.$langFile['ERROR_FOLDER_PART2'];
$langFile['sortablePageList_info'] = 'L\'ordre du site web peut être changé <b>ordre site web</b> par <b>Drag and Drop</b> ainsi que les pages peuvent être interchangées entre les catégories différentes.';
$langFile['sortablePageList_save'] = 'sauvegarder le nouvel ordre ...';
$langFile['sortablePageList_save_finished'] = 'nouvel ordre sauvegardé!';
$langFile['sortablePageList_error_save'] = '<b>les pages ne pouvaient pas être sauvgardées.</b>'.$langFile['ERROR_SAVE_FOLDER_PART1'].$adminConfig['basePath'].'pages/'.$langFile['ERROR_FOLDER_PART2'];
$langFile['sortablePageList_error_read'] = '<b>les pages ne pouvaient pas être lus.</b>'.$langFile['ERROR_READ_FOLDER_PART1'].$adminConfig['basePath'].'pages/'.$langFile['ERROR_FOLDER_PART2'];
$langFile['sortablePageList_error_move'] = '<b>la page ne pouvait pas être mise dans la nouvelle catégorie.</b>'.$langFile['ERROR_SAVE_FOLDER_PART1'].$adminConfig['basePath'].'pages/'.$langFile['ERROR_FOLDER_PART2'];
$langFile['sortablePageList_categoryEmpty'] = 'Keine Seiten vorhanden';

// ---------- FORMULAR
$langFile['form_submit'] = 'sauvegarder';
$langFile['form_cancel'] = 'réinitialiser les données';


/*
* adminSetup.php
*/

// ---------- ADMIN SETUP (on toolTips tooTips.js converts the "[" and "]" tags in the title attribute to "<" ">")
$langFile['ADMINSETUP_TEXT_VERSION'] = '<span class="logoname">fein<span>dura</span></span> Version';
$langFile['ADMINSETUP_TEXT_PHPVERSION'] = 'PHP Version';
$langFile['adminSetup_srvRootPath'] = 'chemin Server-Root';
$langFile['adminSetup_error_title'] = 'des erreurs se sont produites';
$langFile['adminSetup_error_writeAccess_tip'] = 'Pour les fichiers et les données les droits de lecture doivent être mis sur '.decoct($adminConfig['permissions']).'.';
$langFile['adminSetup_error_writeAccess'] = 'n\'est pas descriptible';
$langFile['adminSetup_error_isFolder'] = 'n\'est pas un dossier';

// ---------- general Settings
$langFile['ADMINSETUP_GENERAL_error_save'] = $langFile['ERROR_SAVE_SETTINGS'].$langFile['ERROR_SAVE_FILE'].$adminConfig['basePath'].'config/admin.config.php';
$langFile['ADMINSETUP_GENERAL_h1'] = 'configuration de base';

$langFile['ADMINSETUP_GENERAL_field1'] = 'URL site web';
$langFile['ADMINSETUP_GENERAL_field1_tip'] = 'L\'URL de votre site web sera mise automatiquement.';
$langFile['ADMINSETUP_GENERAL_field1_inputTip'] = 'L\'URL sera mise automatiquement';
$langFile['ADMINSETUP_GENERAL_field1_inputWarningText'] = 'Svp sauvegardez la configuration!';
$langFile['ADMINSETUP_GENERAL_field2'] = 'chemin du feindura';
$langFile['ADMINSETUP_GENERAL_field2_tip'] = 'La chemin principale sera estimé automatiquement et sauvegardé avec la configuration.';
$langFile['ADMINSETUP_GENERAL_field2_inputTip'] = 'La chemin principale sera mise automatiquement';
$langFile['ADMINSETUP_GENERAL_field2_inputWarningText'] = 'Svp sauvegardez la configuration!';
$langFile['ADMINSETUP_GENERAL_field8'] = 'chemin du site web';
$langFile['ADMINSETUP_GENERAL_field8_tip'] = 'Le [b]chemin absolue[/b], contenant les site web.';
$langFile['ADMINSETUP_GENERAL_field4'] = 'chemin upload';
$langFile['ADMINSETUP_GENERAL_field4_tip'] = 'Ici des fichiers comme des images, animations flashs ou documents vont être téléchargés.[br /][br /][span class=hint]pour insérer des fichiers, cliquez dans le HTML-Editor insérer lien > upload transféré ou dans le gestionnaire de fichiers.[/span]';
$langFile['ADMINSETUP_GENERAL_editfiles_additonal'] = '[br /][br /]ces fichiers peuvent être rédigés plus bas ou dans le paramètrages du site web (si cette option est activé pour le site web).[br /][br /]';
$langFile['ADMINSETUP_GENERAL_field5'] = 'chemin du dossier du site web';
$langFile['ADMINSETUP_GENERAL_field5_tip'] = 'Un dossier contenant des fichiers. Ces fichiers peuvent par ex. être utilisés pour avoir une version multilinguale du site web.'.$langFile['ADMINSETUP_GENERAL_editfiles_additonal'];
$langFile['ADMINSETUP_GENERAL_field6'] = 'chemin des feuilles de style';
$langFile['ADMINSETUP_GENERAL_field6_tip'] = 'Une chemin absolue [b]chemin absolue[/b] contenat les feuilles de style qui peuvent être rédigés par ex. par les utilisateurs.'.$langFile['ADMINSETUP_GENERAL_editfiles_additonal'];
$langFile['ADMINSETUP_GENERAL_TEXT_PERMISSIONS'] = 'autorisations des fichiers et des répertoires';
$langFile['ADMINSETUP_GENERAL_TIP_PERMISSIONS'] = 'Chaque fichier ou un dossier créé par [span class=logoname]fein[span]dura[/span][/span] obtiendrez ces autorisations.';
$langFile['ADMINSETUP_GENERAL_varName_ifempty'] = 'si le panneua est vide, le nom standard des variables GET sera utilisé: ';
$langFile['ADMINSETUP_GENERAL_varName1'] = 'page nom des variables';
$langFile['ADMINSETUP_GENERAL_varName1_inputTip'] = $langFile['ADMINSETUP_GENERAL_varName_ifempty'].'&quot;[b]page[/b]&quot;';
$langFile['ADMINSETUP_GENERAL_varName2'] = 'catégories nom des variables';
$langFile['ADMINSETUP_GENERAL_varName2_inputTip'] = $langFile['ADMINSETUP_GENERAL_varName_ifempty'].'&quot;[b]category[/b]&quot;';
$langFile['ADMINSETUP_GENERAL_varName3'] = 'module nom des variables';
$langFile['ADMINSETUP_GENERAL_varName3_inputTip'] = $langFile['ADMINSETUP_GENERAL_varName_ifempty'].'&quot;[b]modul[/b]&quot;';
$langFile['ADMINSETUP_GENERAL_varName_tip'] = 'Le nom des variables [b]$_GET Variable[/b] utilisé pour le référencement du site web.';
$langFile['ADMINSETUP_GENERAL_field7'] = 'format de date';
$langFile['ADMINSETUP_GENERAL_field7_tip'] = 'Sera [span class=logoname]fein[span]dura[/span][/span] et le site web.[br /]mettre:[br /]DIN 5008 ('.$langFile['DATE_EU'].') ou[br /]ISO 8601 ('.$langFile['DATE_INT'].')';
$langFile['ADMINSETUP_TEXT_TIMEZONE'] = 'heure locale';
$langFile['ADMINSETUP_TIP_TIMEZONE'] = 'Ne seront utilisées que par les [span class=logoname]fein[span]dura[/span][/span] backend.';
$langFile['ADMINSETUP_GENERAL_speakingUrl'] = 'format URL';
$langFile['ADMINSETUP_GENERAL_speakingUrl_true'] = 'speaking URLs';
$langFile['ADMINSETUP_GENERAL_speakingUrl_true_example'] = '/category/par_exemple_categorie/par_exemple.html';
$langFile['ADMINSETUP_GENERAL_speakingUrl_false'] = 'URL avec variables';
$langFile['ADMINSETUP_GENERAL_speakingUrl_false_example'] = 'index.php?'.$adminConfig['varName']['category'].'=1&'.$adminConfig['varName']['page'].'=1';
$langFile['ADMINSETUP_GENERAL_speakingUrl_tip'] = 'Le format de d\'URL pour le référencement du site web.[br /][br /]Speaking URLs fonctionnent seulement si [b]Apache[/b] le [b]mod_rewrite[/b] module est disponible.';
$langFile['ADMINSETUP_GENERAL_speakingUrl_warning'] = 'Attention!::[span class=red]Si des erreurs se produisent pendant l\'utilisation des speaking URLs, le fichier [b].htaccess[/b] dans la chemin documentaire root du serveur doit être éffacé.[/span][br /][br /](dans certains logiciels FTP les fichiers cachés doivent être indiqués pour montrer le fichier .htaccess)';

// ---------- speaking url ERRORs
$langFile['ADMINSETUP_GENERAL_speakingUrl_error_save'] = '<b>Speaking URLs</b> ne pouvaient pas être activés'.$langFile['ERROR_SAVE_FILE'].'/.htaccess';
$langFile['ADMINSETUP_GENERAL_speakingUrl_error_modul'] = '<b>Speaking URLs</b> ne pouvait pas être activé à cause du module Apache: MOD_REWRITE peut pas être trouvé';

// ---------- user Settings
$langFile['ADMINSETUP_USERPERMISSIONS_TITLE'] = 'permissions de l\'utilisateur';
$langFile['ADMINSETUP_USERPERMISSIONS_check1'] = 'traiter les données du site web au sein du paramétrage du site web';
$langFile['ADMINSETUP_USERPERMISSIONS_check2'] = 'traiter les feuilles de style au sein du paramétrage du site web';
$langFile['ADMINSETUP_USERPERMISSIONS_TEXT_FILEMANAGER'] = 'activer gestion des données';
$langFile['ADMINSETUP_USERPERMISSIONS_TIP_WARNING_FILEMANAGER'] = 'gestionnaire de fichiers désactivé::Vous devez régler le chemin upload dans la configuration de base, avant de pouvoir activer le gestionnaire de fichiers.';

$langFile['ADMINSETUP_USERPERMISSIONS_textarea1'] = '<strong>informations utilisateur</strong> in der <a href="?site=home">'.$langFile['BUTTON_HOME'].'</a>';
$langFile['ADMINSETUP_USERPERMISSIONS_textarea1_tip'] = 'Information utilisateur::Ce texte va être publié sur [span class=logoname]fein[span]dura[/span][/span] '.$langFile['BUTTON_HOME'].'.';
$langFile['ADMINSETUP_USERPERMISSIONS_textarea1_inputTip'] = 'N\'ecrivez rien dans la case, si vous ne voulez pas montrer des informations sur l\'utilisateur';

// ---------- editor Settings
$langFile['adminSetup_editorSettings_h1'] = 'paramètres de l\'éditeur HTML';
$langFile['ADMINSETUP_TEXT_EDITOR_SAFEHTML'] = 'secure HTML (<a href="http://www.bioinformatics.org/phplabware/internal_utilities/htmLawed/htmLawed_README.htm#s3.6">détails</a>)';
$langFile['ADMINSETUP_TIP_EDITOR_SAFEHTML'] = 'Le code HTML sera filtrée avec la plus sûre paramètres. Cela signifie par exemple &lt;applet&gt;,&lt;embed&gt;,&lt;embed&gt;,&lt;object &gt; et &lt;script&gt; tags ne sont pas autorisés.';
$langFile['adminSetup_editorSettings_field1'] = 'modus touche-entrée';
$langFile['adminSetup_editorSettings_field1_hint'] = 'shift + entrée va créer un &quot;&lt;br /&gt;&quot;';
$langFile['adminSetup_editorSettings_field1_tip'] = 'Va définir le HTML-tag en touchant la touche entrée[br]wird.[br /][br /][span class=hint]'.$langFile['adminSetup_editorSettings_field1_hint'].'.[/span]';
$langFile['adminSetup_editorSettings_field3_inputTip'] = 'Si la case reste vide, aucune Id sera utilisé.';
$langFile['adminSetup_editorSettings_field4_inputTip'] = 'Si la case reste vide, aucune classe sera utilisé.';

// THUMBNAILS Settings
$langFile['adminSetup_thumbnailSettings_h1'] = 'paramètres thumbnail du site';
$langFile['adminSetup_thumbnailSettings_field3'] = 'chemin de sauvegarde'; // chemin de sauvegarde thumbnail
$langFile['adminSetup_thumbnailSettings_field3_tip'] = 'chemin au sein de la chemin upload des données ou les thumbnails seront sauvegardés.';
$langFile['adminSetup_thumbnailSettings_field3_inputTip1'] = 'chemin upload des données';
$langFile['adminSetup_thumbnailSettings_field3_inputTip2'] = 'chemin relative::Dépéndant de la &quot;[b]'.$adminConfig['uploadPath'].'[/b]&quot; chemin.[br /][br /]Commence sans &quot;/&quot;';
$langFile['adminSetup_thumbnailSettings_field3_inputTip3'] = '<b>'.$langFile['TEXT_EXAMPLE'].'</b> &quot;thumbnails/&quot; ';

// ---------- styleFile Settings
$langFile['adminSetup_styleFileSettings_h1'] = 'adapter le choix du &quot;styles&quot; dans l\'éditeur HTML';
$langFile['adminSetup_styleFileSettings_error_save'] = '<b>le fichier &quot;htmlEditorStyles.js&quot; ne pouvait pas être sauvegardé.</b>'.$langFile['ERROR_SAVE_FILE'];

// ---------- editFiles Settings
$langFile['editFilesSettings_error_save'] = '<b>le fichier ne pouvait pas être sauvegardé.</b>'.$langFile['ERROR_SAVE_FILE'];
$langFile['editFilesSettings_h1_style'] = 'traiter les feuilles de style';
$langFile['editFilesSettings_h1_websitefiles'] = 'traiter les données du site web';
$langFile['editFilesSettings_noDir'] = 'pas de dossier valable!';
$langFile['editFilesSettings_chooseFile'] = 'choisir fichier';
$langFile['editFilesSettings_createFile'] = 'créer nouveau fichier';
$langFile['editFilesSettings_createFile_inputTip'] = 'Si vous mettez le nom d\'un fichier ici, un nouveau fichier sera crée,[br /]et [b]le donnée choisi actuellement ne sera pas sauvegardé![/b]';
$langFile['editFilesSettings_noFile'] = 'Actuellement pas de données';
$langFile['editFilesSettings_deleteFile'] = 'éffacer fichier';
$langFile['editFilesSettings_deleteFile_question_part1'] = 'fichier'; // éffacer la catégorie "test"?
$langFile['editFilesSettings_deleteFile_question_part2'] = 'voulez-vous vraiment éffacer ces données?';
$langFile['editFilesSettings_deleteFile_error_delete'] = '<b>le fichier ne pouvait pas être éffacé.</b>'.$langFile['ERROR_SAVE_FILE'];

/*
* pageSetup.php
*/

// ---------- CATEGORY SETUP (on toolTips tooTips.js converts the "[" and "]" tags in the title attribute to "<" ">")
$langFile['pageSetup_general_tag_tip'] = 'Les tags peuvent être utilisés pour mettre en relation les pages entre eux (dépendant de le programmation du site web)';

// ---------- page settings
$langFile['pageSetup_pageConfig_h1'] = 'paramètres du site web';
$langFile['pageSetup_pageConfig_check1'] = 'la page d\'acceuil peut être définie';
$langFile['pageSetup_pageConfig_check1_tip'] = 'La page d\'acceuil peut être définie par l\'utilisateur.[br /][br /]La page d\'acceuil définie sera publié, si aucune variable du site web sera transmise ou bien la page ne sera pas éxecutée.';
$langFile['pageSetup_pageConfig_noncategorypages_h1'] = 'pages sans catégories';
$langFile['pageSetup_pageConfig_check2'] = 'créer/éffacer des pages';
$langFile['pageSetup_pageConfig_check2_tip'] = 'Définit si l\'utilisateur peut créer/éffacer une page sans catégorie.';
$langFile['pageSetup_pageConfig_check3'] = 'télécharger thumbnails';
$langFile['pageSetup_pageConfig_check3_tip'] = 'Définit si l\'utilisateur peut télécharger des thumbnails au sein des pages sans catégories.';
$langFile['pageSetup_pageConfig_check4'] = 'traiter tags';
$langFile['pageSetup_pageConfig_check4_tip'] = 'Définit si l\'utilisateur peut traiter des tags au sein des pages sans catégories.[br /]'.$langFile['pageSetup_general_tag_tip'];
$langFile['pageSetup_pageConfig_check5'] = 'activer plugins';
$langFile['pageSetup_pageConfig_check5_tip'] = 'Définit si l\'utilisateur peut utiliser des plugins au sein des pages.';

// ---------- category settings
$langFile['pageSetup_h1'] = 'gestion des catégories';
$langFile['pageSetup_field1'] = 'nom';
$langFile['pageSetup_createCategory'] = 'créer nouvelle catégorie';
$langFile['pageSetup_createCategory_created'] = 'nouvelle catégorie crée';
$langFile['pageSetup_createCategory_unnamed'] = 'catégorie n\'est pas nommé';
$langFile['pageSetup_deleteCategory'] = 'éffacer la catégorie';
$langFile['pageSetup_deleteCategory_warning'] = 'ATTENTION: Toutes les pages au sein de cette catégorie seront éffacées!';
$langFile['pageSetup_deleteCategory_deleted'] = 'catégorie éffacée';
$langFile['pageSetup_moveCategory_moved'] = 'catégorie déplacée';
$langFile['pageSetup_moveCategory_up_tip'] = 'Déplacer la catégorie vers le haut.';
$langFile['pageSetup_moveCategory_down_tip'] = 'Déplacer la catégorie vers le bas.';
$langFile['pageSetup_error_create'] = '<b>Une nouvelle catégorie ne pouvait pas être crée.</b>'.$langFile['ERROR_SAVE_FOLDER_PART1'].$adminConfig['basePath'].'config/'.$langFile['ERROR_FOLDER_PART2'];
$langFile['pageSetup_error_createDir'] = '<b>Un répertoire de catégorie ne pouvait pas être crée.</b>'.$langFile['ERROR_SAVE_FOLDER_PART1'].$adminConfig['basePath'].'pages/'.'&quot; Ordners.';
$langFile['pageSetup_error_delete'] = '<b>La catégorie ne pouvait pas être éffacée.</b>'.$langFile['ERROR_SAVE_FILE'].$adminConfig['basePath'].'config/category.config.php';
$langFile['pageSetup_error_deleteDir'] = '<b>Le répertoire de catégorie ne pouvait pas être éffacé.</b>'.$langFile['ERROR_SAVE_FOLDER_PART1'].$adminConfig['basePath'].'pages/'.$langFile['ERROR_FOLDER_PART2'];
$langFile['pageSetup_error_save'] = $langFile['ERROR_SAVE_SETTINGS'].$langFile['ERROR_SAVE_FILE'].$adminConfig['basePath'].'config/category.config.php';
$langFile['pageSetup_advancedSettings'] = 'paramètres avancés';
$langFile['pageSetup_advancedSettings_hint'] = 'Si vous avez mis toutes les paramètres, les paramètres des thumbnails seront automatiquement écrasé les Wenn diese Einstellungen ausgefüllt sind überschreiben sie die Seiten-Thumbnail-Einstellungen weiter oben und die '.$langFile['adminSetup_editorSettings_h1'].' in den <a href="?site=adminSetup">Administrator-Einstellungen</a>.';
$langFile['pageSetup_stylesheet_ifempty'] = 'Si toutes les cases restent vides, les paramètres des stylesheet seront automatiquement'.$langFile['adminSetup_editorSettings_h1'].' exécutés.';
$langFile['pageSetup_check1'] = 'status de la catégorie';
$langFile['pageSetup_check1_tip'] = 'Définit si une catégorie sera publiée sur le site web.';
$langFile['pageSetup_check2'] = 'créer/éffacer page';
$langFile['pageSetup_check2_tip'] = 'Définit si un utilisateur peut créer/éffacer des pages dans cette catégorie.';
$langFile['pageSetup_check3'] = 'télécharger thumbnails';
$langFile['pageSetup_check3_tip'] = 'Définit si un utilisateur peut télécharger des thumbnails dans chaque page de cette catégorie.';
$langFile['pageSetup_check4'] = 'traiter tags';
$langFile['pageSetup_check4_tip'] = 'Tags peuvent être définis pour la catégorie de cette page.[br /]'.$langFile['pageSetup_general_tag_tip'];
$langFile['pageSetup_check8'] = 'activer plugins';
$langFile['pageSetup_check8_tip'] = 'Activer plugins pour les pages de cette catégorie';
$langFile['pageSetup_check5'] = 'traiter la date du site web';
$langFile['pageSetup_check5_tip'] = 'La date du site web peu être utilisé pour trier des pages par ordre chronologique.';
$langFile['pageSetup_check6'] = 'trier par ordre chronologique';
$langFile['pageSetup_check6_tip'] = 'Les pages seront trié par ordre chronologique.[br /][br /][span class=hint]Manuellement trier n\'est plus possible.[/span]';
$langFile['pageSetup_check7'] = 'page actuelle se trouve en bas';
$langFile['pageSetup_check7_tip'] = 'Trie les pages [b]par ordre croissant[/b].[br /][br /][span class=hint]Manuellement trier écrase les paramètres de la page concernée.[/span]';

// ---------- deleting category
$langFile['pageSetup_deletCategory_question_part1'] = 'catégorie'; // éffacer catégorie "test"?
$langFile['pageSetup_deletCategory_question_part2'] = 'éffacer?';

/*
* websiteSetup.php
*/

// ---------- WEBSITE SETUP (on toolTips tooTips.js converts the "[" and "]" tags in the tittle attribute to "<" ">")
$langFile['websiteSetup_websiteConfig_error_save'] = $langFile['ERROR_SAVE_SETTINGS'].$langFile['ERROR_SAVE_FILE'].$adminConfig['basePath'].'config/website.config.php';
$langFile['websiteSetup_websiteConfig_h1'] = 'paramètres du site web';
$langFile['websiteSetup_websiteConfig_field1'] = 'titre du site web';
$langFile['websiteSetup_websiteConfig_field1_tip'] = 'Le titre du site web sera indiqué dans le navigateur.';
$langFile['websiteSetup_websiteConfig_field2'] = 'publisher';
$langFile['websiteSetup_websiteConfig_field2_tip'] = 'Le nom de l\'organisation/entreprise/personne publiant ce site.';
$langFile['websiteSetup_websiteConfig_field3'] = 'copyright';
$langFile['websiteSetup_websiteConfig_field3_tip'] = 'Le propriétaire du copyright du site web.';
$langFile['websiteSetup_websiteConfig_field4'] = 'mots clés des moteurs de recherche';
$langFile['websiteSetup_websiteConfig_field4_tip'] = 'La plupart des moteurs de recherche fouillent le contenu des pages selon des mots clés. Mettez des mots clés qui seront utilisez dans <meta> les tags du site web.';
$langFile['websiteSetup_websiteConfig_field4_inputTip'] = 'Les mots clés doivent être séparées en &quot;,&quot; ::'.$langFile['TEXT_EXAMPLE'].':[br /]mot-clé1,mot-clé2,etc';
$langFile['websiteSetup_websiteConfig_field5'] = 'description du site web';
$langFile['websiteSetup_websiteConfig_field5_tip'] = 'Une courte description de votre site web utilisé par les moteurs de recherche. Les mots-clé se trouveront dans l\'URL du site web mais dans le contenu.';
$langFile['websiteSetup_websiteConfig_field5_inputTip'] = 'Un texte court en 3 lignes.';

/*
* statisticSetup.php
*/

// ---------- STATISITC SETUP (on toolTips tooTips.js converts the "[" and "]" tags in the tittle attribute to "<" ">")
$langFile['STATISTICSSETUP_ERROR_SAVE'] = $langFile['ERROR_SAVE_SETTINGS'].$langFile['ERROR_SAVE_FILE'].$adminConfig['basePath'].'config/statistic.config.php';
$langFile['STATISTICSSETUP_TITLE_STATISTICSSETTINGS'] = 'paramètres des statistiques';
$langFile['STATISTICSSETUP_TEXT_MOSTVISTED'] = 'nombre de pages le <b>plus visitées</b>';
$langFile['STATISTICSSETUP_TIP_MOSTVISTED'] = 'Indique le nombre de pages les plus visitées que seront listées sur la page vue globale.';
$langFile['STATISTICSSETUP_TEXT_LONGESTVIEWED'] = 'nombre de pages <b>les plus visitées</b>';
$langFile['STATISTICSSETUP_TIP_LONGESTVIEWED'] = 'Indique le nombre de pages les plus regardées sur la page vue globale.';
$langFile['STATISTICSSETUP_TEXT_LASTEDITED'] = 'nombre de pages <b>dernièrement traitées</b>';
$langFile['STATISTICSSETUP_TIP_LASTEDITED'] = 'Indique les pages dernièrement traitées sur la page vue globale.';
$langFile['STATISTICSSETUP_TEXT_LASTVISITED'] = 'nombre de pages <b>dernièrement visité</b>';
$langFile['STATISTICSSETUP_TIP_LASTVISITED'] = 'Indique les pages dernièrement visité sur la page vue globale.';
$langFile['STATISTICSSETUP_TEXT_REFERERNUMBER'] = 'nombre des <b>Referrer-URLs</b>';
$langFile['STATISTICSSETUP_TIP_REFERERNUMBER'] = 'Indique le nombre maximal des Referrer-URLs ([i]URL qui ont mènés sur ce site web[/i]).';
$langFile['STATISTICSSETUP_TEXT_ACTIVITYNUMBER'] = 'nombre des <b>logs-activités</b>';
$langFile['STATISTICSSETUP_TIP_ACTIVITYNUMBER'] = 'Indique le nombre des logs-activités seront sauvegardés au maximum.';

$langFile['statisticSetup_clearStatistic_h1'] = 'éffacer statistiques';
$langFile['statisticSetup_clearStatistics_websiteStatistic'] = 'statistiques du site web';
$langFile['statisticSetup_clearStatistics_websiteStatistic_tip'] = '[b]Contient[/b][ul][li]tout le nombre des visiteurs[/li][li]nombre des robots d\'indexation[/li][li]date de la première visite[/li][li]date de la dernière visite[/li][li]spectre des navigateurs utilisés[/li][/ul]';
$langFile['statisticSetup_clearStatistics_pagesStatistic'] = 'statistiques des pages';
$langFile['statisticSetup_clearStatistics_pagesStatistic_tip'] = '[b]Contient[/b][ul][li]nombre de visiteurs[/li][li]date de la première visite[/li][li]date de la dernière visite[/li][li]temps de visite le plus court[/li][li]temps de visite le plus long[/li][li]mots-clé des moteurs de recherche qui ont mènés sur le site web[/li][/ul]';
$langFile['statisticSetup_clearStatistics_pagesStaylengthStatistics'] = 'seulement les statistiques temps-de-visite';
$langFile['statisticSetup_clearStatistics_pagesStaylengthStatistics_tip'] = '';
$langFile['statisticSetup_clearStatistics_refererLog'] = 'Referrer-URLs Log'; // engl.: referer
$langFile['statisticSetup_clearStatistics_refererLog_tip'] = 'Une liste avec tous les URLs qui ont mèné sur le site web.';
$langFile['statisticSetup_clearStatistics_taskLog'] = 'Logs des dernièrses activités';
$langFile['statisticSetup_clearStatistics_taskLog_tip'] = 'Contient une liste des dernières activités.';
$langFile['statisticSetup_clearStatistics_question_h1'] = 'Voulez vous vraiment éffacer ces statistiques?';
$langFile['statisticSetup_clearStatistic_pagesStatistics_error_read'] = 'une erreur s\'est produite pendant l\'éffacement des statistiques du site web.'.$langFile['ERROR_SAVE_FOLDER_PART1'].$adminConfig['basePath'].'pages/'.$langFile['ERROR_FOLDER_PART2'];

/*
* userSetup.php
*/

$langFile['userSetup_h1'] = 'administration utilisateur';
$langFile['userSetup_userSelection'] = 'utilisateur';

$langFile['userSetup_createUser'] = 'créer nouveau utilisateur';
$langFile['userSetup_createUser_created'] = 'nouveau utilisateur crée';
$langFile['userSetup_createUser_unnamed'] = 'utilisateur inconnu';

$langFile['userSetup_deleteUser'] = 'éffacer utilisateur';
$langFile['userSetup_deleteUser_deleted'] = 'utilisateur éffacé';

$langFile['userSetup_username'] = 'nom dutilisateur';
$langFile['userSetup_username_missing'] = 'Pas de nom dutilisateur pour ce profil.';
$langFile['userSetup_password'] = 'mot de passe';
$langFile['userSetup_password_change'] = 'changer le mot de passe';
$langFile['userSetup_password_confirm'] = 'répeter le mot de passe';
$langFile['userSetup_password_confirm_wrong'] = 'le deux mot de passe ne correspondent pas.';
$langFile['userSetup_password_missing'] = 'Pas de nouveau mot de passe pour ce profil.';
$langFile['userSetup_password_success'] = 'Mot de passe changé!';
$langFile['userSetup_email'] = 'adrèsse éléctronique';
$langFile['userSetup_email_tip'] = 'Si vous avev oubliez votre mot de passe, un email va être envoyé avec votre nouveau mot de passe.';

$langFile['userSetup_admin'] = 'administrateur';
$langFile['userSetup_admin_tip'] = 'Définit si lutilisateur possède les droits de ladministrateur.';

$langFile['userSetup_error_create'] = '<b>Un nouveau utilisateur na pas été crée.</b>'.$langFile['ERROR_SAVE_FILE'].$adminConfig['basePath'].'config/user.config.php';
$langFile['userSetup_error_save'] = $langFile['ERROR_SAVE_SETTINGS'].$langFile['ERROR_SAVE_FILE'].$adminConfig['basePath'].'config/user.config.php';

/*
* pluginSetup.php
*/

// ---------- PLUGIN SETUP (on toolTips tooTips.js converts the "[" and "]" tags in the tittle attribute to "<" ">")

$langFile['PLUGINSETUP_TITLE'] = 'paramètres plugins';
$langFile['PLUGINSETUP_TEXT_DESCRIPTION'] = 'Les plugins mettent en disposition des fonctions avancés pour le site web. Les plugins activés peuvent être attribués à chaque page, si les plugins <a href="?site=pageSetup">'.$langFile['pageSetup_pageConfig_h1'].'</a>, sont activés dans la catégorie.<br /><br /><i>Les plugins sur le site web sont implementés par cette méthode <a href="http://feindura.org/api/%5BImplementation%5D/feindura.html#showPlugins">ShowPlugins()</a>.</i>';

$langFile['PLUGINSETUP_TITLE_EDITFILES'] = 'traiter les fichiers';
$langFile['PLUGINSETUP_TEXT_ACTIVE'] = 'Plugin activée';
$langFile['PLUGINSETUP_ERROR_SAVE'] = $langFile['ERROR_SAVE_SETTINGS'].$langFile['ERROR_SAVE_FILE'].$adminConfig['basePath'];

/*
* editor.php
*/

// ---------- page info
$langFile['editor_h1_createpage'] = 'créer nouvelle page';
$langFile['editor_pageinfo_lastsavedate'] = 'dernièrement traité';
$langFile['editor_pageinfo_lastsaveauthor'] = 'de';
$langFile['editor_pageinfo_linktothispage'] = 'lien mènant sur le site web';
$langFile['editor_pageinfo_id'] = 'ID de la page';
$langFile['editor_pageinfo_id_tip'] = 'Le site web sera sauvegardé sur le serveur sous cette ID.';
$langFile['editor_pageinfo_category'] = 'catégorie';
$langFile['editor_pageinfo_category_noCategory'] = 'aucune catégorie (ID 0)';

$langFile['editor_block_edited'] = 'ont été édité';
$langFile['editor_pageNotSaved'] = 'pas sauvegardé';

// ---------- page settings
$langFile['editor_pageSettings_h1'] = 'paramètres';
$langFile['editor_pagestatistics_h1'] = 'statistiques';
$langFile['editor_pageSettings_title'] = 'titre';
$langFile['editor_pageSettings_title_tip'] = 'Titre de la page.';
$langFile['editor_pageSettings_field1'] = 'description courte';
$langFile['editor_pageSettings_field1_inputTip'] = 'Si la case reste vide la description du site web au sein des paramètres du site web sera utilisé.';
$langFile['editor_pageSettings_field1_tip'] = 'Une description courte du site web. Ceci va être mise dans les tags-META du site web.[br /][br /][span class=hint]'.$langFile['editor_pageSettings_field1_inputTip'].'[/span]';
$langFile['editor_pageSettings_field2'] = 'tags';
$langFile['editor_pageSettings_field2_tip'] = 'Tags sont des mots-clé de ce site web.';
$langFile['editor_pageSettings_field2_tip_inputTip'] = 'Les tags doivent être séparés par la &quot;,&quot;.';
$langFile['editor_pageSettings_field3'] = 'date du site web';
$langFile['editor_pageSettings_field3_tip'] = 'La date peut être utilisée pour trier les pages dans l\'ordre chronologique. (par ex. des évenements)';
$langFile['editor_pageSettings_pagedate_before_inputTip'] = 'texte avant la date::Par ex. &quot;du 31. juin&quot;.';
$langFile['editor_pageSettings_pagedate_after_inputTip'] = 'texte après la date::';
$langFile['editor_pageSettings_pagedate_day_inputTip'] = 'jour::';
$langFile['editor_pageSettings_pagedate_month_inputTip'] = 'mois::';
$langFile['editor_pageSettings_pagedate_year_inputTip'] = 'an::[b]format[/b] AAAA';
$langFile['editor_pageSettings_field4'] = 'status de la page';
$langFile['editor_pageSettings_field4_tip'] = '[b]Une page sera visible sur le site web seulement quand elle est publiée![/b]';
$langFile['editor_pageSettings_pagedate_error'] = 'format de date incorrect';
$langFile['editor_pageSettings_pagedate_error_tip'] = 'Ce mois n\'a peut être pas 31 jours.[br /]La date devrait avoir le format suivant:';

// ---------- page advanced settings
$langFile['editor_advancedpageSettings_h1'] = 'paramètres avancés';
$langFile['editor_advancedpageSettings_field1'] = 'page fichier feuille de style';
$langFile['editor_advancedpageSettings_stylesheet_ifempty'] = 'Quand toutes les cases sont vides, les paramètres des feuilles de style de la catégorie seront utilisés. Si ceux-ci sont vides aussi, les paramètres de l\'éditeur HTML seront utlisés.';
$langFile['editor_htmleditor_hotkeys_h1'] = 'touches-clés';
$langFile['editor_htmleditor_hotkeys_field1'] = 'tout sélectionner';
$langFile['editor_htmleditor_hotkeys_field2'] = 'copier';
$langFile['editor_htmleditor_hotkeys_field3'] = 'coller';
$langFile['editor_htmleditor_hotkeys_field4'] = 'couper';
$langFile['editor_htmleditor_hotkeys_field5'] = 'en arrière';
$langFile['editor_htmleditor_hotkeys_field6'] = 'réconstituer';
$langFile['editor_htmleditor_hotkeys_field7'] = 'créer un lien';
$langFile['editor_htmleditor_hotkeys_field8'] = 'gras';
$langFile['editor_htmleditor_hotkeys_field9'] = 'italique';
$langFile['editor_htmleditor_hotkeys_field10'] = 'souligné';
$langFile['editor_htmleditor_hotkeys_or'] = 'ou';

$langFile['editor_savepage_error_save'] .= $langFile['ERROR_SAVE_FOLDER_PART1'].$adminConfig['basePath'].'pages/'.$langFile['ERROR_FOLDER_PART2'];// also in fr.shared.php

// ---------- plugin settings
$langFile['editor_pluginSettings_h1'] = 'préférence plugin';

/*
* unsavedPage.php
*/

$langFile['unsavedPage_question_h1'] = '<span class="brown">La page a été modifiée.</span><br />Vous voulez sauvegardé la page maintenant?';

/*
* deletePage.php
*/

// ---------- DELETE PAGE
$langFile['deletePage_question_part1'] = 'Vous êtes sur de vraiment';
$langFile['deletePage_question_part2'] = 'vouloir éffacer le site?';
$langFile['deletePage_notexisting_part1'] = 'le site web';
$langFile['deletePage_notexisting_part2'] = 'n\'existe pas';
$langFile['deletePage_finish_error'] = 'ERREUR: La page ne pouvait pas être éffacée!';

/*
* pageThumbnailDelete.php
*/

// ---------- PAGE THUMBNAIL DELETE
$langFile['PAGETHUMBNAIL_TEXT_DELETE_QUESTION_START'] = 'Vous êtes sur de vraiment';
$langFile['PAGETHUMBNAIL_TEXT_DELETE_QUESTION_END'] = 'éffacer le thumbnail de cette page?';
$langFile['PAGETHUMBNAIL_ERROR_DELETE'] = 'ERREUR: Le thumbnail ne pouvait pas être éffacée!';

/*
* pageThumbnailUpload.php
*/

// ---------- PAGE THUMBNAIL UPLOAD
$langFile['pagethumbnail_h1_part1'] = 'thumbnail de page pour';
$langFile['pagethumbnail_h1_part2'] = 'télécharger';
$langFile['pagethumbnail_field1'] = 'choisir image';
$langFile['pagethumbnail_thumbinfo_formats'] = 'Seulement les formats suiovant seront acceptés'; //<br /><b>JPG</b>, <b>JPEG</b>, <b>GIF</b>, <b>PNG</b>
$langFile['pagethumbnail_thumbinfo_filesize'] = 'taille maximale';
$langFile['pagethumbnail_thumbinfo_standardthumbsize'] = 'taille standard';
$langFile['pagethumbnail_thumbsize_h1'] = 'définir la taille de l\'image';
$langFile['pagethumbnail_thumbsize_width'] = 'largeur de l\'image';
$langFile['pagethumbnail_thumbsize_height'] = 'hauteur de l\'image';
$langFile['pagethumbnail_submit_tip'] = 'Télécharger l\'image.';
$langFile['PAGETHUMBNAIL_ERROR_nofile'] = 'Vous n\'avez pas choisi d\'image.';
$langFile['PAGETHUMBNAIL_ERROR_nouploadedfile'] = 'Aucun fichier pouvait être téléchargé.';
$langFile['PAGETHUMBNAIL_ERROR_filesize'] = 'Le fichier télécharge est probablement trop grand.<br />Die maximal erlaubte Dateigröße beträgt';
$langFile['PAGETHUMBNAIL_ERROR_wrongformat'] = 'Le fichier choisi n\'est pas dans le bon format.';
$langFile['PAGETHUMBNAIL_ERROR_NODIR_START'] = 'le répertoire des thumbnails'; // ..thumbnail-folder..
$langFile['PAGETHUMBNAIL_ERROR_NODIR_END'] = 'e\'existe pas.';
$langFile['PAGETHUMBNAIL_ERROR_CREATEDIR_END'] = 'il ne pouvait pas être crée.';
$langFile['PAGETHUMBNAIL_ERROR_couldntmovefile_part1'] = 'Le fichier téléchargé ne pouvait pas être déplacé dans le dossier des thumbnails.'; // ..thumbnail-folder..
$langFile['PAGETHUMBNAIL_ERROR_couldntmovefile_part2'] = 'déplacer.';
$langFile['PAGETHUMBNAIL_ERROR_CHANGEIMAGESIZE'] = 'La taille de l\'image ne pouvait pas être changée.';
$langFile['PAGETHUMBNAIL_ERROR_deleteoldfile'] = 'Le thumbnail récent ne pouvait pas être éffacé.';
$langFile['PAGETHUMBNAIL_TEXT_fileexists'] = 'Il existe dèjà un fichier avec ce nom.<br />Le nom du fichier a été changé en';
$langFile['PAGETHUMBNAIL_TEXT_finish'] = 'L\'image a été télécharge avec succès';

// -> BACKUP

$langFile['BACKUP_TITLE_BACKUP'] = 'sauvegarde';
$langFile['BACKUP_TITLE_RESTORE'] = 'rétablir';

$langFile['BACKUP_TITLE_RESTORE_FROMFILES'] = 'choisir de sauvegarde existant';
$langFile['BACKUP_TITLE_RESTORE_FROMUPLOAD'] = 'télécharger le fichier de sauvegarde';

$langFile['BACKUP_TEXT_RESTORE_BACKUPBEFORERESTORE'] = 'sauvegarde avant la récupération';

$langFile['BACKUP_BUTTON_DOWNLOAD'] = 'créer de sauvegarde actuelle';
$langFile['BACKUP_TEXT_BACKUP'] = 'Une sauvegarde crée un fichier <code>.zip</code> avec le <span class="blue">"pages", "config"</span> et <span class="blue">"statistic"</span>dossiers.<br />Le dossier de upload ne sera pas sauvé.';
$langFile['BACKUP_TEXT_RESTORE'] = 'Sélectionnez ici une <span class="logoname"><span>fein</span>dura</span> fichier de sauvegarde, de rétablir un état ancien.<br /><span class="blue">Avant de restaurer une sauvegarde de état actuel est créé.</ span>';
$langFile['BACKUP_TOOLTIP_DELETE'] = 'Supprimer sauvegarde.';
$langFile['BACKUP_TEXT_DELETE_QUESTION1'] = ''; // backup 2010-11-05 15:03 supprimer?
$langFile['BACKUP_TEXT_DELETE_QUESTION2'] = 'supprimer?';

$langFile['BACKUP_TITLE_LASTBACKUPS'] = 'télécharger sauvegardes';
$langFile['BACKUP_TEXT_NOBACKUP'] = 'Pas de sauvegarde a été créé pour le moment.';

$langFile['BACKUP_ERROR_FILENOTFOUND'] = 'Sauvegarde n\'a pas été trouvé au chemin d\'accès:';
$langFile['BACKUP_ERROR_NORESTROEFILE'] = 'Il n\'y a pas de fichier de sauvegarde pour restaurer sélectionné.';
$langFile['BACKUP_ERROR_DELETE'] = 'Sauvegarde ne peut pas être supprimé!';

// -----------------------------------------------------------------------------------------------
// RETURN ****************************************************************************************
// -----------------------------------------------------------------------------------------------
return $langFile;
?>