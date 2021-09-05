<?php
    $pagename = "About-us";
    include('head.php');
    include("includes/header.php");
?>
<div class="contact">
		<div class="container">
			<h3>How To Find Us</h3>
			<div class="contact-bottom">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.958900464012!2d36.23097800000001!3d49.993379999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0f009ab9f07%3A0xa21e10f67fa29ce!2sGeorgia+Education+Center!5e0!3m2!1sen!2sin!4v1436943860334" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col-md-4 contact-left">
				<h4>Address</h4>
				<p>est eligendi optio cumque nihil impedit quo minus id quod maxime
					<span>26 56D Rescue,US</span></p>
				<ul>
					<li>Free Phone :+1 078 4589 2456</li>
					<li>Telephone :+1 078 4589 2456</li>
					<li>Fax :+1 078 4589 2456</li>
					<li><a href="mailto:info@example.com">info@example.com</a></li>
				</ul>
			</div>
			<div class="col-md-8 contact-left">
				<h4>Contact Form</h4>
				<form>
					<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
					<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Submit" >
					<input type="reset" value="Clear" >

				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //contact -->


				


<?php
    include("includes/footer.php");

?>