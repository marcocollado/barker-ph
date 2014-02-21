    <?php 
        require_once ("Includes/simplecms-config.php"); 
        require_once  ("Includes/connectDB.php");
        require_once ("Includes/session.php");
        include("Includes/header.php");  
     
     ?>



<div id="headerbg">
  <div id="headerblank">
    <div id="header">
      <div id="menu">
        <ul>
          <li><a href="#" class="menu">About Us</a></li>
          <li><a href="#" class="menu">Overview</a></li>
          <li><a href="#" class="menu">Help A Friend</a></li>
          <li><a href="#" class="menu">Find A Way</a></li>
          <li><a href="#" class="menu">Contact Us </a></li>
        </ul>
      </div>
              
       
    <div id="login">
        <div id="logintxtblank">
          <div id="loginheading">
          </div>
          <div id="username">User Name:</div>
          <div id="input">
            <label>
              <input name="textfield" type="text" class="input" id="textfield" value="" placeholder="Enter your username here"/>
            </label>
          </div>
          <div id="password">Password:</div>
          <div id="input02">
            <label>
              <input name="textfield2" type="password" class="input" id="textfield2" value="" placeholder="Enter your password here" />
            </label>
          </div>
          <div id="loginbutton" ><a href="" class="">Login</a></div>
             
        </div>
      </div>             
    </div>
  </div>
</div>

