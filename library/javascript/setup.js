/*
    feindura - Flat File Content Management System
    Copyright (C) 2009 Fabian Vogelsteller [frozeman.de]

    This program is free software;
    you can redistribute it and/or modify it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 3 of the License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
    without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU General Public License for more details.

    You should have received a copy of the GNU General Public License along with this program;
    if not,see <http://www.gnu.org/licenses/>.
*/
// java/setup.js version 0.2 (requires mootools-core and mootools-more)

function setThumbScale(thumbWidth,thumbWidthScale,thumbHeight,thumbHeightScale) {

  // realtime thumbScale ---------------------------------------------------------------------------------------------
  if($(thumbWidth) != null) {
      $(thumbWidth).addEvent('keyup', function(){
          $(thumbWidthScale).tween('width',$(thumbWidth).get('value'));
      });
  }
  if($(thumbHeight) != null) {
      $(thumbHeight).addEvent('keyup', function(){
          $(thumbHeightScale).tween('width',$(thumbHeight).get('value'));
      });
  }

}

// loaded on startup
window.addEvent('domready', function() {
  
  // adds realtime THUMBSCALE to the thumbnail Settings
  setThumbScale('cfg_thumbWidth','thumbWidthScale','cfg_thumbHeight','thumbHeightScale');  
  
  // go trough every category
  if($$('.advancedcategoryConfig') != null) {  
    
    var countCategories = 0;
    
    // -----------------------------------------
    // ADD SLIDE TO THE ADVANCED CATEGORY SETTINGS
    // go trough every advancedcategoryConfig class and add the slide effect
    $$('.categoryConfig').each(function (categoryConfig) {
       // count categories
       countCategories++;
    
       // creates the slide effect
  	   var slideAdvancedcategoryConfig = new Fx.Slide(categoryConfig.getElements('table')[1],{duration: '750', transition: Fx.Transitions.Pow.easeOut});  
      
       // slides the hotky div in, on start
       slideAdvancedcategoryConfig.hide();
      
       // sets the SLIDE EFFECT to the buttons
       if(categoryConfig.getElements('a')[1] != null) {
         categoryConfig.getElements('a')[1].addEvent('click', function(e) {
        		e.stop();	
        		slideAdvancedcategoryConfig.toggle();
        	});
       }
       
      // -----------------------------------------
      // adds realtime THUMBSCALE to the advanced category settings
      setThumbScale('categories'+countCategories+'thumbWidth','categories'+countCategories+'thumbWidthScale','categories'+countCategories+'thumbHeight','categories'+countCategories+'thumbHeightScale');
    });
  }
  
});

// editFiles
function changeFile( site, fileName, status, anchorName )
{
  window.location.href = window.location.pathname + "?site=" + site + "&status=" + status + "&file=" + fileName + "#" + anchorName ;
}