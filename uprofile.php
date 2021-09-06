<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-3.1.1.min.css">
<?php 
if(isset($_GET['Id']))
    {
        include("includes/db.man.php");
        include("includes/header.php");
        $pagename="User Other Info";
        include("head.php");

       // echo('WELCOME');
       $Ids = $_GET['Id'];
       $selq = "SELECT * FROM profile WHERE ConnectId = '$Ids'";
        $reult = mysqli_query($conn, $selq);
        $recheck = mysqli_num_rows($reult);
        $pw = mysqli_fetch_assoc($reult);
?>
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
                    User Profile
    </div>

            <div class="on" data-validate = "Password is required">
               <label for=""> Full name:</label> <?= $pw['Fullname']?>
            </div>
            <div class="on" data-validate = "Valid email is required: ex@abc.xyz">
                <label for="">Date of Birth :</label> <?= $pw['BirthDate']?>
            </div>

            <div class="on" data-validate = "Password is required">
                <label for="">Age:</label> <?= $pw['Age']?>
            </div>
            <div class="on" data-validate = "Password is required">
                <label for="">Marital status:</label> <?= $pw['Marital status']?>
            </div>
           

            <div class="on" data-validate = "Password is required">
                <label for="">Telephone:</label> <?= $pw['Telephone']?>
            </div>
            <div class="on" data-validate = "Valid email is required: ex@abc.xyz">
                <label for="">Gender :</label> <?= $pw['Gender']?>
            </div>

            <div class="on" data-validate = "Password is required">
                <label for="">Citizenship:</label> <?= $pw['Citizenship']?>
            </div>
            
            <div class="" width="50%">
                <form action="users.php" method="post">
                <button class="login100-form-btn" name="submit" type= "submit">
                    Retour
                </button>
                </form>
            </div>
        </div>

    

</div>
<?php
    }
    ?>