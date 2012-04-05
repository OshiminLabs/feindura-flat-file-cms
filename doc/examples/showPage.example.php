<?php
/*                               *** CODE *** 
--------------------------------------------------------------------------------
This example uses all possible properties.
It's also works much more simple: just call showPage() without setting properties
and it shows the current page given by the $_GET variable.
*/

// a session will be started in the "feindura.include.php",
// therefor you have to include this file before the header of the HTML page is sent,
// which means before any HTML Tag.
require('cms/feindura.include.php');

// creates a new Feindura instance
$feindura = new Feindura();

// set properties
$feindura->xHtml =                  true;

$feindura->titleLength =            20;
$feindura->titleAsLink =            true;
$feindura->titleShowPageDate =      true;
$feindura->titlePageDateSeparator = ' - ';
$feindura->titleShowCategory =      false; // would have no effect, because page with ID "1" has no category
$feindura->titleCategorySeparator = ' -> '; // would have no effect, because $titleShowCategory = FALSE

$feindura->thumbnailAlign =         'left';
$feindura->thumbnailId =            'thumbId';
$feindura->thumbnailClass =         'thumbCLass';
$feindura->thumbnailAttributes =    'test="exampleAttribute1" onclick="exampleAttribute2"';
$feindura->thumbnailBefore =        false;
$feindura->thumbnailAfter =         false;

$feindura->showErrors =              true;
$feindura->errorTag =               'span';
$feindura->errorId =                'errorId';
$feindura->errorClass =             'errorClass';
$feindura->errorAttributes =        'test="exampleAttribute1" onclick="exampleAttribute2"';


// finally, return the page, with ID "1", using the above set properties
$page = $feindura->showPage(1);

// displays the page (the "\n" creates a line break for a better look)
echo $page['title'];
echo $page['thumbnail'];
echo $page['content'];


/*                              *** RESULT with page *** 
--------------------------------------------------------------------------------
*/

<a href="?page=1" title="2010-12-31 - Example Page">
2010-12-31 - Example...
</a>
<img src="/path/thumb_page3.png" alt="Thumbnail" title="Example Page 1" id="thumbId"
class="thumbCLass" test="exampleAttribute1" onclick="exampleAttribute2" style="float:left;">

<h2>Example Headline</h2>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing dolores et ea rebum.
Stet clita kasd gubergren, no sea takimata sanctus.</p>
<p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam...</p>


/*                              *** RESULT with error *** 
--------------------------------------------------------------------------------
*/

<span id="errorId" class="errorClass" test="exampleAttribute1" onclick="exampleAttribute2">
The requested page is deactivated.
</span>

?>