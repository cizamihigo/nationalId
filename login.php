
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-3.1.1.min.css">

<?php
    $pagename ="Login";
    include_once("head.php");
    include("includes/header.php");
  
?>
<body class= "">

	
	
		<div>
			<style>
				.on{
					justify-content: center;
				 	align-items: center;
					
					width: 100%;  
					min-height: 100vh;
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
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/1.gif" alt="IMG" hidden="true">
					<h3><b>Democratic Republic of the Congo</b></h3>
					
					<img src="images/2.gif" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="includes/signin.man.php" method= "POST">
					<span class="login100-form-title">
						Citizen Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit" type= "submit">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-13">
						<a class="txt2" href="Signup.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
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
include_once("includes/footer.php");

?>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>