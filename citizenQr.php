<?php


if(isset($_GET['Id']) && !empty($_GET['Id']))
{
    include("includes/phpqrcode.php");
    $id = $_GET['Id'];
    $fname = $_GET['fname'];
    $path="images/Qrcodes/";
    $file = $path .$id.".png";

    //echo("Click on the Qrcode to download");
    Qrcode::png("IdName = $id\n Username= $fname", $file,'L', 10);
    $pagename = "Download My Qrcode";
    include("head.php");
    include("includes/header.php");
    echo("<a href='".$file."' download='MyQrcode'><center><img src='".$file."'</center></a>");
}
else{
    echo("SHow at least something");
    header("Location:index.php");
    exit();
}
?><br/><br/><br/><br/>
<?php
include("includes/footer.php");
?>