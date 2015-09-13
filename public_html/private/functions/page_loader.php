<?php

/* Date: 09/12/2015
 * Author: Rostom Sahakian
 * This class takes care of the html hear, body, footer and navigation.
 * With this html for the head and body is not needed for every sing page
 * ***when you are creating a page add it under public_html/pages  <---Important
 * 
 */
class page_loader{
 public $title;
 public $body;
 //------------------------------------------------------------------------------------\\
 /* 09/12/2015
  * HEAD FOR THE HTML ALSO CSS FILES INCLUDED
  */
    public function header_HTML($title){
        if(!isset($title)){
            $title ="Home";
        }else{
        $this->title =$title;
        }
       $html_header="" 
        ?>
<html>
    <head>
        <title><?php echo $this->title; ?></title> 
        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    </head>
    <body>

<?php
;
        
return $html_header;
    }
//------------------------------------------------------------------------------------\\    
    /* 09/12/2015
     * NAVIGATION
     */
    public function navigation(array $link){
        ?>
        <div class="container">    
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
         
                    </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
        <?php
        foreach ($link as $key=> $nav){
           
        
        ?>
     
            <li class=""><a href="<?= $nav['link'] ?>"><?= $nav['title'] ?></a></li>
        <?php } ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        </div>
        <?php
        
       
    }
  //---------------------------------------------------------------------------------------------------\\  
    /*09/12/2015
     * SCANDIR FIND ALL THE FILES UNDER GIVEN DIRECTORY
     * 
     */
    public function find_files($dir){
    ///check the files in the given directory and return an array    
   $directory = $dir;
   $scanned_directory = array_diff(scandir($directory), array('..', '.'));
       
   return $scanned_directory;
    }

//---------------------------------------------------------------------------------------------------------\\
    /*09/12/2015
     * GENERATING THE BODY BASED ON $_GET['page'] VARIABLE
     */
    public function body_html($body){
        //If it os coming from index.php or www.domain.com give the body value the home.php value 
        if(!isset($body)){
        $body = "pages/home.php";

        include $body;
      
       ///If variable is set check if the file exists in the pages directory if not show 404 error
        }else if(isset($body)){
            $body = $body.".php";
            $value= $this->find_files("pages/");
            $search = in_array($body, $value);
                if($search == true){
                    include "pages/".$body;
                }else{
                    include 'pages/404.php';
                }
        }
        return $body;
        
    }
    
  //------------------------------------------------------------------------------------------------\\  
    /*09/12/2015
     * FOOTER
     * INCLUDES JQUERY LIB
     * AND BOOTSTRAP.JS
     */
    public function footer_html(){
        
        $footer =""
    ?>
        <footer class="container-fluid" id="footer">
            <div class="footer col-lg-12">
                <div class="col-lg-4">
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
                </div>
            </div>
            </div>
        </footer>    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>    
    </body>
</html>
<?php
;
return $footer;
   }
 //------------------------------------------------------------------------------------------------------------\\  
   /* 09/12/2015
    * THIS FUNCTION
    * MOUNTS ALL THE PIECES TOGETHER 
    * IT IS CALLED IN init.php
    */
   public function Load_html($title, $body, array $link){
       $this->header_HTML($title); 
       $this->navigation($link);
       $this->body_html($body);
       $this->footer_html();
       
   }
   
}
//---------------------------------------------------------------------------------------------------------\\