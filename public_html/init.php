<?php
/* Date: 09/12/2015
 * Author: Rostom Sahakian
 * Calls the class page_loader it will load HTML on all pages
 */

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);



include '/private/functions/page_loader.php';

$head = new page_loader();
//<--09/12/2015--This for the navigation links make the array in the same format
$links =array(
    array("title"=>"Home","link"=>"index.php?page=home&title=Home"),
    array("title"=>"About this app","link"=>"index.php?page=about&title=About this app"),
    array("title"=>"paint","link"=>"index.php?page=paint&title=paint"),
    

    


    
);

$java_script =array(); //<-09/13/2015--HERE WHERE YOU CAN ADD THE JAVA SCRIPT FILE NAME. MAKE SURE TO ADD THE FILE UNDER assests/js

///ECHOS all the pages when called 
echo $head->Load_html($_GET['title'],$_GET['page'], $links, $java_script);