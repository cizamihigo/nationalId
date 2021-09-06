<?php
if(isset($_GET['prof']) && !empty($_GET['prof']))
{
    include("db.man.php");
    $profile = $_GET['prof'];
    $Inv = "UPDATE idnumbers SET Valid = 0 WHERE Profileid = $profile ";
    $in = mysqli_query($conn, $Inv);

    if($in)
    {
        header("Location: ../duplicate.php?res='SUCCESS'");
    }
    else{
        header("../index.php?status=BIG_FAILLURE_in_INVALIDING_an_ID");
    }

}


?>