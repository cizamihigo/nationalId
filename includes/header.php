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
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="#">About - us</a></li>
						<li><a href="typography.html">Requirements</a></li>
						<li><a href="contact.html">Contact</a></li>

						<!--/.login -->
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

						?>

				</ul>
			</div>
				<!--/.navbar-collapse-->
				<!--/.navbar-->
			</div>
			</nav>
		</div>
	</div>
	<script src="js/bootstrap.js"></script>