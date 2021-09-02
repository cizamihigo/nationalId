<?php
    $pagename = "Request National Id";
    include_once("head.php");
    include_once("includes/header.php");

?>
<?php
    if(isset($_SESSION['Email']))
    {
?>
<?php
if (isset($_POST["upload"])) {
    // Get Image Dimension
    $fileinfo = @getimagesize($_FILES["ppic"]["tmp_name"]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];
    
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg",
        "PNG",
        "JPG",
        "JPEG"
    );
    
    // Get image file extension
    $file_extension = pathinfo($_FILES["ppic"]["name"], PATHINFO_EXTENSION);
    
    // Validate file input to check if is not empty
    if (! file_exists($_FILES["ppic"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            "message" => "Choose image file to upload."
        );
    }    // Validate file input to check if is with valid extension
    else if (! in_array($file_extension, $allowed_image_extension)) {
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    }    // Validate image file size
    else if (($_FILES["ppic"]["size"] > 800000)) {
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds 2MB"
        );
    }    // Validate image file dimension
    else if ($width > "100" || $height > "70") {
        $response = array(
            "type" => "error",
            "message" => "Image dimension should be within 300X200"
        );
    } else {
        $var = $_SESSION['Id'];
        $target = "request/".$var."/" . basename($_FILES["ppic"]["name"]);
        $tar = "request/".$var."";
        if(!file_exists($tar))
        {
            mkdir($tar, 0777, true);
        }
        if (move_uploaded_file($_FILES["ppic"]["tmp_name"], $target)) {
            $response = array(
                "type" => "success",
                "message" => "Image uploaded successfully."
            );
        } else {
            $response = array(
                "type" => "error",
                "message" => "Problem in uploading image files."
            );
        }
    }
    

// Start of dealing with the PDF document
    $fileinfo = @getimagesize($_FILES["idpdf"]["tmp_name"]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];
    
    $allowed_image_extension = array(
        "PDF",
        "Pdf",
        "pdf"
    );
    
    // Get image file extension
    $file_extension = pathinfo($_FILES["idpdf"]["name"], PATHINFO_EXTENSION);
    
    // Validate file input to check if is not empty
    if (! file_exists($_FILES["idpdf"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            "message" => "Choose image file to upload."
        );
    }    // Validate file input to check if is with valid extension
    else if (! in_array($file_extension, $allowed_image_extension)) {
        $response = array(
            "type" => "error",
            "message" => "Upload valiid Documents.Only Pdf format is allowed."
        );
        echo $result;
    }    // Validate document size file size
    else if (($_FILES["idpdf"]["size"] > 2000000)) {
        $response = array(
            "type" => "error",
            "message" => "The PDF size exceeds 2MB"
        );
    }   
    
    } else {
        $target = "request/".$var."/".  basename($_FILES["idpdf"]["name"]);
        $tar = "request/".$var."";
        if(!file_exists($tar))
        {
            mkdir($tar, 0777, true);
        }
        if (move_uploaded_file($_FILES["idpdf"]["tmp_name"], $target)) {
            $response = array(
                "type" => "success",
                "message" => "Image uploaded successfully."
            );
        } else {
            $response = array(
                "type" => "error",
                "message" => "Problem in uploading image files."
            );
        }
    }
?>
<link href="css/styl.css" rel="stylesheet" type="text/css">
    <body>
        <br><br>
        <center>
        <h2>Please enter Your identification documents</h2>
    <form id="frm-image-upload" action="" name='img'
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