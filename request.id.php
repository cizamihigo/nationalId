<?php
    $pagename = "Request National Id";
    include_once("head.php");
    include_once("includes/header.php");

?>
<?php
    if(isset($_SESSION['Email']))
    {

    }
    else{
        header("Location: index.php");
    }

?>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>