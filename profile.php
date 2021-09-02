<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-3.1.1.min.css">

<?php
    $pagename = "View  profile";
    include_once("head.php");
    include_once("includes/header.php");

?>
<?php
    if(isset($_SESSION['Email']))
    {
?>
<body class= "">

	
	
<div>
    <style>
        .on{
            justify-content: center;
             align-items: center;
            
            width: 100%;  
            min-height: 4vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 5px;
            
        }
    </style>
    <br><br>
    <div class="col-md-6 m-b effect-layla on">
       
            <div class="login100-form-title">
                    Your information
            </div>

            <div class="on" data-validate = "Valid email is required: ex@abc.xyz">
                <label for="">E-mail : </label> <?= $_SESSION["Email"];?>
            </div>

            <div class="on" data-validate = "Password is required">
               <label for=""> Full name:</label>
            </div>
            <div class="on" data-validate = "Valid email is required: ex@abc.xyz">
                <label for="">Date of Birth :</label>
            </div>

            <div class="on" data-validate = "Password is required">
                <label for="">Age:</label>
            </div>
            <div class="on" data-validate = "Password is required">
                <label for="">Marital status:</label>
            </div>
            <div class="on" data-validate = "Valid email is required: ex@abc.xyz">
                <label for="">Address :</label>
            </div>

            <div class="on" data-validate = "Password is required">
                <label for="">Telephone:</label>
            </div>
            <div class="on" data-validate = "Valid email is required: ex@abc.xyz">
                <label for="">Gender :</label>
            </div>

            <div class="on" data-validate = "Password is required">
                <label for="">Citizenship:</label>
            </div>
            
            <div class="" width="50%">
                <form action="editprofile.php" method="post">
                <button class="login100-form-btn" name="submit" type= "submit">
                    Edit Profile
                </button>
                </form>
            </div>
        </div>

    

</div>




<script >
$('.js-tilt').tilt({
    scale: 1.1
})
</script>
<script src="js/main.js"></script>

</body>

<?php
    }
    else{
        header("Location: index.php");
    }

?>


<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>