<?php

/* 
 * Date: 09/12/2015
 * Author: Rostom Sahakian
 * Home Page the user will have three main options <Login> <SignUp> <skip> 
 * Need to be developed: Login , Sign up , validation ...
 * 
 */
?>

<!-----MAIN CONTAINER--------------->
<div class="container" id="main_wapper">
        <div class="col-lg-12">
            <div class="col-lg-2"></div>
            <div class="col-lg-8" id="welcome">
                <div class="panel panel-default">
                <div class="panel-heading"> <h1 class="h1" >Welcome to DoodleMaestro</h1></div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
   <!----END OF WELCOME MESSAGE --------------->
   <!-----------------LOGIN FORM BEGINS------------------------->
   <div class="col-lg-12">
       
       <div class="col-lg-6" id="selections">
       <div class="panel panel-primary">
           <div class="panel-heading"><h3 class="h3">Login</h3></div>
                
           <div class="panel-body">
          
                <div class="clearfix">
                    <div class="input-group">
                        <span class="input-group-addon " id="sizing-addon2">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                <input type="text" class="form-control" placeholder="Username" id="inputboxes" aria-describedby="sizing-addon2">
                    </div>
                    <br/>
                     <div class="input-group">
                         <span class="input-group-addon" id="sizing-addon3">
                              <i class="fa fa-key"></i>
                         </span>
                <input type="password" class="form-control" placeholder="Password" id="inputboxes" aria-describedby="sizing-addon2">
                    </div>
                      <br/>
                      <div class="pull-left">
                        <a href="index.php?page=passwordrecovery">Forgotten your username?</a>
                    </div>
                   <br/>
                      <div class="pull-left">
                        <a href="index.php?page=passwordrecovery">Forgotten your password?</a>
                    </div>
                    <br/>
                    <div class="input-group center-block">
                        <input type="submit" class="btn btn-lg btn-default" id="inputboxes" value="Log in"/>
                             
                    </div>
                </div>
            </div>
           
        </div>
           <div class="center-block">
               <a href="index.php?page=paint&flag=skip" class="alert-link" >Authenticate later &nbsp;<i class="fa fa-forward"></i></a>
           </div>
           <br/>
       </div>
     <!------------------LOGIN ENDS HERE--------------------------->
     <!------------------SIGN UP FORM BEGINS----------------------->  
       <div class="col-lg-6" id="selections">
            <div class="panel panel-success">

                <div class="panel-heading"><h3 class="h3">Sign up</h3></div>
                
                <div class="panel-body">
                 <div class="input-group">
                  <span class="input-group-addon " id="sizing-addon2">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                <input type="text" class="form-control" placeholder="Username" id="inputboxes" aria-describedby="sizing-addon2">
                    </div>
                    <br/>
                    <div class="input-group">
                  <span class="input-group-addon " id="sizing-addon2">
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                <input type="email" class="form-control" placeholder="Email" id="inputboxes" aria-describedby="sizing-addon2">
                    </div>
                     <br/>
                    <div class="input-group">
                  <span class="input-group-addon " id="sizing-addon2">
                            <i class="fa fa-key"></i>
                        </span>
                        <input type="password" class="form-control" placeholder="Password" id="inputboxes" aria-describedby="sizing-addon2">
                    </div>
                       <br/>
                    <div class="input-group">
                  <span class="input-group-addon " id="sizing-addon2">
                            <i class="fa fa-key"></i>
                        </span>
                        <input type="password" class="form-control" placeholder="Confirm Password" id="inputboxes" aria-describedby="sizing-addon2">
                    </div>
                       
                       <br/>
                        <div class="input-group">
                  <span class="input-group-addon " id="sizing-addon2">
                            <i class="fa fa-get-pocket"></i>
                        </span>
                            <select class="form-control">
                                <option value="--Select--">How did your about us?</option>
                                <option  value="google">Google</option>
                                <option  value="Bing">Bing</option>
                                <option  value="Teacher">Teacher</option>
                                <option  value="Friends">Friends</option>
                                <option  value="Other">Other</option>
                            </select>    
                    </div>
                              <br/>
                 <div class="input-group center-block ">
                        <input type="submit" class="btn btn-lg btn-success" id="inputboxes" value="Sign Up"/>
                             
                    </div>
                    
                </div>    
            </div>    
       
       </div>
     <!----------------------END OF SIGN UP FORM--------------------------------------------->
       
      </div>
   <!----------END OF col-lg-12------------------------------------------>
   
   </div>
     
    
  <!-------------container ENDS-------------->
        
        
        
        
        
