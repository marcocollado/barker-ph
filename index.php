    <?php 
        require_once ("Includes/simplecms-config.php"); 
        require_once  ("Includes/connectDB.php");
        include("Includes/header.php");         
     ?>

<html>
<head>

  <style type="text/css">
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      border: none;
    }
    #full { height: 100%; }
  </style>
</head>
<body>
<table width="100%" border="0" cellspacing="0" 
  cellpadding="0" id="full">
  <tr valign="top">
    <td nowrap bgcolor="#d0d0d0" width="125px">
             Menu a
<br/><a href="item1">Item 1</a>
<br/><a href="item2">Item 2</a>
<br/>
<br/>Menu b
<br/><a href="item1b">Item 1</a>
<br/><a href="item2b">Item 1</a>
    </td>
    <td>
      <p>
         Test101
    </td>
    <td nowrap bgcolor="#e0e0e0" width="75px">
     <a href="http://example1.com/">Link 1</a>
<br/><a href="http://example2.com/">Link 2</a>
<br/><a href="http://example3.com/">Link 3</a>
<br/><a href="http://example4.com/">Link 4</a>
<br/><a href="http://example5.com/">Link 5</a>
<br/><a href="http://example6.com/">Link 6</a>
    </td>
  </tr>
</table>
<table width="100%" bgcolor="#d0d0d0" border="0" 
  cellspacing="0" cellpadding="0">
  <tr>
    <td><p align="center">This is the footer.  (c) 2006</td>
  </tr>
</table>
</body>
</html>


<?php 
    include ("Includes/footer.php");
 ?>