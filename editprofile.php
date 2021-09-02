
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-3.1.1.min.css">

<?php
    $pagename = "Profile edition";
    include_once("head.php");
    include_once("includes/header.php");

?>
<?php
    if(isset($_SESSION['Email']))
    {
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
					padding: 15px;
					
				}
                .onc{
					justify-content: center;
				 	align-items: center;
					
					width: 30%;  
					min-height: 15vh;
					display: -webkit-box;
					display: -webkit-flex;
					display: -moz-box;
					display: -ms-flexbox;
					display: flex;
					flex-wrap: wrap;
					justify-content: center;
					align-items: center;
					padding: 15px;
					
				}
			</style>
			<div class="wrap-login100 on">
                    <span class="login100-form-title">
						Profile Edition
					</span>
				<div class="login100">
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" value="<?=$_SESSION['Email'];?>">
					</div>
                    <div class="wrap-input100">
						<input class="input100" type="text" name="fullname" placeholder="Full Name">
					</div>
                    <div class="wrap-input100">
						<input class="input100" type="date" name="dateofbirth" >
					</div>
                    <div class="wrap-input100">
                        <select name="" class="input100">
                             <option value="Married">Married</option>
                             <option value="Divorced">Divorced</option>
                             <option value="Single">Single</option>
                        </select>
                    </div>
                   
				</div>

				<form class="login100-form validate-form" action="includes/signin.man.php" method= "POST">
					
                    <div class="wrap-input100">
						<input class="input100" type="text" name="address" placeholder= "Your Address" >
					</div>
                    <div class="wrap-input100">
						<input class="input100" type="text" name="Telephone" placeholder= "Your Phone number" >
					</div>
                    <div class="wrap-input100">
                        <select name="" class="input100">
                             <option value="Male">Male</option>
                             <option value="Female">Female</option>
                        </select>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password(confirm or put new)">
						
					</div> 
                        
					</div>
                    <center>
                    <div class="onc">
                        <button class="login100-form-btn " width="50%" name="submit" type= "submit">
                        Edit Profile
                        </button>
                    </div>
                </center>
                </form>
                
                    
            </div>
<?php

    }
    else{
        header("Location: index.php");
    }

?>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>