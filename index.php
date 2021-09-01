<!DOCTYPE HTML>
<html>
    <?php
    $pagename = "Home" ;
    include("head.php");
    ?>
<body>
    <?php
    //session_start();
        include_once("includes/header.php");


        if(isset($_SESSION['Type']))
        {
            echo($_SESSION['Email']);
        }
       
    ?>
</body>