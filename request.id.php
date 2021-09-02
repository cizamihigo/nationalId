<?php
    $pagename = "Request National Id";
    include_once("head.php");
    include_once("includes/header.php");

?>
<?php
    if(isset($_SESSION['Email']))
    {
?>
    <form action="" method="post" id="frm-image-upload" action="confirmation.php" name ="formulaire" enctype ="multipart/form-data">
        <div class="form-row">
            <div>choose Image file:</div>
            <div>
                <input type="file" class="file-input" name="Photopass" id="">
            </div>
        </div>

    <input type="file" name="" id="">
    </form>

<?php
    }
    else{
        header("Location: index.php");
    }

?>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>