<?php	
session_start();
?>

<div class="header" id="home">
		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
			<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">E-National Id</a>
			</div>
			<!--/.navbar-header-->
		
			<div class="collapse navbar-collapse" id="menu">
				<ul class="nav navbar-nav">
						<li class=""><a href="index.php">Home</a></li>
						
						
						
						

						<?php

							if(isset($_SESSION['Id']) && $_SESSION["Type"] ==1)
							{

						?>	
						<li><a href="requirement.php">Requirements</a></li>
						<li><a href="request.id.php">Request Id</a></li>
						<li><a href="udashboard.php">Dashboard</a></li>
						
						<li><a href="profile.php">My profile</a></li>
						<li><a href="includes/logout.man.php">Logout</a></li>
						
						<!--/.login -->
						<?php
						}
						elseif(isset($_SESSION['Id']) && $_SESSION["Type"] ==2){
						?>
						<li><a href="contact.html">Users</a></li>
						<li><a href="request.id.php">Admins</a></li>
						<li><a href="adashboard.php">Dashboard</a></li>
						
						<li><a href="profile.php">My profile</a></li>
						<li><a href="includes/logout.man.php">Logout</a></li>

						<?php }else{
							?><li><a href="requirement.php">Requirements</a></li>
							<li><a href="aboutus.php">About-us</a></li>
							<?php
							if($pagename == "Login" or $pagename == "Signup")
							{
							}
							else{
							?>
							
							<li> <a href="login.php">Login</a>
							<li> <a href="Signup.php">Signup</a>

							
							<?php
							//echo($pagename);
							}
							}

						?>

				</ul>
			</div>
				<!--/.navbar-collapse-->
				<!--/.navbar-->
			</div>
			</div>
			</nav>
		</div>
	</div>
	<script src="js/bootstrap.js"></script>