<?php 
if(isset($_GET['cancel']) && !empty($_GET['cancel']))
{
    $reqId = (int) ($_GET['cancel']);
    include("db.man.php");
    $up = "UPDATE request SET ReqStatus = 'Cancelled' WHERE Id = '$reqId'";
    $upq = mysqli_query($conn, $up);
    header("Location:../adashboard.php");
}
else
{
    header("Location: ../index.php");
    exit();
}




?>