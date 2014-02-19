<?php require_once ("Includes/session.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Baker.ph</title>
        <link href="/Styles/Site.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
	    <script type="text/javascript" src="engine1/jquery.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
      
    </head>
    <body>
        <div class="outer-wrapper">
        <header>
            <div class="content-wrapper">          
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
                                echo '<li><font face="calibri" color="#ba1802" size="4">Are you already a member? Log-in here!&nbsp;&nbsp;</font></li>' . "\n";
                                echo '<li><a href="/logon.php">Sign in</a></li>' . "\n";
                                echo '<li><a href="/register.php">Register</a></li>' . "\n";
                            }
                        ?>
                        </ul>
                        <?php if (logged_on()) {
                            echo "<div class=\"welcomeMessage\">Welcome, <strong>{$_SESSION['username']}</strong></div>\n";
                        } ?>
                    </section>
                </div>

                <div class="clear-fix"></div>
            </div>

                <section class="navigation" data-role="navbar">
                    <nav>l
                        <ul id="menu">
                            <li><a href="/index.php">Home</a></li>
                            <?php
                                $statement = $databaseConnection->prepare("SELECT id, menulabel FROM pages");
                                $statement->execute();

                                if($statement->error)
                                {
                                    die("Database query failed: " . $statement->error);
                                }

                                $statement->bind_result($id, $menulabel);
                                while($statement->fetch())
                                {
                                    echo "<li><a href=\"/page.php?pageid=$id\">$menulabel</a></li>\n";
                                }
                            ?>
                        </ul>
                    </nav>
            </section>
        </header>
