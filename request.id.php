<?php
    $pagename = "Request National Id";
    include_once("head.php");
    include_once("includes/header.php");

?>
<?php
    if(isset($_SESSION['Email']))
    {
?>
<link href="css/styl.css" rel="stylesheet" type="text/css">
    <body>
        <br><br>
        <center>
        <h2>Please enter Your identification documents</h2>
    <form id="frm-image-upload" action="index.php" name='img'
        method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div>Choose Passport Picture:</div>
            <div>
                <input type="file" class="file-input" name="ppic">
            </div>
        </div>
        <div class="form-row">
            <div>Choose Identification documents PDF:</div>
            <div>
                <input type="file" class="file-input" name="idpdf">
            </div>
        </div>
        <div class="form-row">
            <div>Choose signature picture:</div>
            <div>
                <input type="file" class="file-input" name="signpic">
            </div>
        </div>

        <div class="button-row">
            <input type="submit" id="btn-submit" name="upload"
                value="Upload">
        </div>
    </form>
        </center>
    
    <?php if(!empty($response)) { ?>
    <div class="response <?php echo $response["type"]; ?>"><?php echo $response["message"]; ?></div>
    <?php }?>
</body>

<?php
    }
    else{
        header("Location: index.php");
    }

?>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>