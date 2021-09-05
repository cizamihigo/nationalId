<?php
include("includes/db.man.php");
if(isset($_GET['View']) && !empty($_GET['View']))
{
    $rek =$_GET['View'];
$s ="SELECT * FROM idnumbers WHERE ReqName = '$rek' AND Valid = 1";
$ss = mysqli_query($conn, $s);
//IdNumber
?>

<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-3.1.1.min.css">

<?php
    $pagename ="My National Id";
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
					min-height: 1vh;
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
                .off {
                    border-style: ridge;
                    width: 50%;
                    boder
                }
                .pbtn
                {
                    font-family: Montserrat-Bold;
                    font-size: 15px;
                    line-height: 1.5;
                    color: #ff0f;
                    text-transform: Lowercase;

                    width: 20%;
                    height: 25px;
                    border-radius: 25px;
                    background: blue;
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -moz-box;
                    display: -ms-flexbox;
                    display: flex;
                    justify-content: right;
                    align-items: right;
                    padding: 0 25px;

                    -webkit-transition: all 0.4s;
                    -o-transition: all 0.4s;
                    -moz-transition: all 0.4s;
                    transition: all 0.4s;

                    margin-left: 80%;
                }
			</style>
            <button class = "pbtn"> Print your Id</button>
            
			<div class="wrap-login100 on">
				<form class="login100-form validate-form off" action="includes/signin.man.php" method= "POST">
                <span class="login100-form-title"> <?php
                            $imgname = $rek . ".jpg";
                            ?>
					    <img src="<?php echo("images/1.gif")?>" alt="contry" width= "15%">
						National Identity card
                        <img src="<?php echo("request/$imgname")?>" alt="IMG" width = "20%">                        
					</span>

					<div class="wrap-input100 validate-input" style="margin-left:10%">
						<label>Name: </label> <br>
                        <label> Date of Birth:</label> <br>
                        <label>Age: </label> <br>
                        <label> Address:</label> <br>
                        <label>Telephone/email: </label> 
                        <label> Gender:</label> <br>
                        <label>Marital Status: </label> <br>
                        <label> Citizenship:</label> <br>
					</div>
                    

					<div class="text-center p-t-12">
						<span class="txt1">
							issued by the national Identification committee of the Democratic Republic of Congo. (c) All rights reserved
						</span>
						<a class="txt2" href="#">
							<br> this is to Testify that <?php echo("");?> is a Congolese
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
<?php

$check = mysqli_fetch_assoc($ss);
}
else
{
    header("Location: index.php");
}








?>