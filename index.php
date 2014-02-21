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
          <li><a href="#" class="menu">About Us</a></li>
          <li><a href="#" class="menu">Clients</a></li>
          <li><a href="#" class="menu">Contact </a></li>
        </ul>
      </div>
              
        <div class="float-right">
                    <section id="login">
                        <ul id="login">
                        <?php
                        if (logged_on())
                        {
                            echo '<li><a href="/logoff.php">Sign out</a></li>' . "\n";
                            if (is_admin())
                            {
                                echo '<li><a href="/addpage.php">Add</a></li>' . "\n";
                                echo '<li><a href="/selectpagetoedit.php">Edit</a></li>' . "\n";
                                echo '<li><a href="/deletepage.php">Delete</a></li>' . "\n";
                            }
                        }
                        else
                        {
                            echo '<li>Are you already a member? Sign in here.</li>' . "\n";
                            echo '<li><a href="/logon.php">Login</a></li>' . "\n";
                            echo '<li><a href="/register.php">Register</a></li>' . "\n";
                        }
                        ?>
                        </ul>
                        <?php if (logged_on()) {
                            echo "<div class=\"welcomeMessage\">Welcome, <strong>{$_SESSION['username']}</strong></div>\n";
                        } ?>
                    </section>
                </div>
    </div>
  </div>
</div>

<?php 
    include ("Includes/footer.php");
 ?>