<?php
    if(isset($_GET['reqid']) && !empty($_GET['reqid']))
    {
        include("db.man.php");
        $Id = $_GET['reqid'];
        $del = "DELETE FROM request WHERE  Id= '$Id'";
        $sdel = mysqli_query($conn, $del);
        if($sdel)
        {
            header("Location: ../udashboard.php");
        exit();
        }
        else{
            echo("this cannot be performed right now!");
        }
        
    }
    else{
        header("Location:../index.php");
        exit();
    }

?>