<?php
include("includes/db.man.php");
if(isset($_GET['View']) && !empty($_GET['View']))
{
    $rek =$_GET['View'];
$s ="SELECT * FROM idnumbers WHERE ReqName = '$rek' AND Valid = 1";
$ss = mysqli_query($conn, $s);
$sss = mysqli_fetch_assoc($ss);
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

                    width: 100%;
                    height: 30px;
                    border-radius: 25px;
                    background: blue;
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -moz-box;
                    display: -ms-flexbox;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    padding: 0 25px;

                    -webkit-transition: all 0.4s;
                    -o-transition: all 0.4s;
                    -moz-transition: all 0.4s;
                    transition: all 0.4s;

                    margin-left: 10%;
                }
			</style>

                   <script type="text/javascript">
                    
                    function printContent(id){
                    str=document.getElementById(id).innerHTML
                    newwin=window.open('','printwin','left=100,top=100,width=400,height=400')
                    newwin.document.write('<HTML><head><link rel =\"stylesheet\" type=\"text/css\"href=\"css/main.css\"/>')
                    newwin.document.write('<head><link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap-3.1.1.min.css\"/>')
                    newwin.document.write('<HTML>\n<HEAD>\n')
                    newwin.document.write('<TITLE>Print Page</TITLE>\n')
                    newwin.document.write('<script>\n')
                    newwin.document.write('function chkstate(){\n')
                    newwin.document.write('if(document.readyState=="complete"){\n')
                    newwin.document.write('window.close()\n')
                    newwin.document.write('}\n')
                    newwin.document.write('else{\n')
                    newwin.document.write('setTimeout("chkstate()",2000)\n')
                    newwin.document.write('}\n')
                    newwin.document.write('}\n')
                    newwin.document.write('function print_win(){\n')
                    newwin.document.write('window.print();\n')
                    newwin.document.write('chkstate();\n')
                    newwin.document.write('}\n')
                    newwin.document.write('<\/script>\n')
                    newwin.document.write('</HEAD>\n')
                    newwin.document.write('<BODY onload="print_win()">\n')
                    newwin.document.write(str)
                    newwin.document.write('</BODY>\n')
                    newwin.document.write('</HTML>\n')
                    newwin.document.close()
                    }
                    </script>  
            <table>
                <tr>
                    <td>
                    <button class = "pbtn" onclick="printContent('printId')"> Print your Id card</button>
                    <td><td>
                    <button class = "pbtn" style="color: white"> Request Qrcode Instead</button>
                    <td>

                </tr>

            </table>

            
            
            
			<div class="wrap-login100 on">
				<form class="login100-form validate-form off" id= "printId" action="includes/signin.man.php" method= "POST">
                <span class="login100-form-title"> <?php
                            $imgname = $rek . ".jpg";
                            ?>
					    <img src="<?php echo("images/1.gif")?>" alt="contry" width= "10%">
						National Identity card 
                        <img src="<?php echo("request/$imgname")?>" alt="IMG" width = "5%">                        
					</span>
                    <span class="login100" style="font-size: 30px; align-items: center;">
                        <center>  
                            ID number: <u><?= $sss['IdNumber']?></u>
                        </center>
                    </span>
                        <?php
                        $sp = $sss['Profileid'];
                        $pro = "SELECT * FROM profile WHERE Id = '$sp'  ";
                        $exc = mysqli_query($conn, $pro);
                        $varid = mysqli_fetch_assoc($exc);

                        ?>
					<div class="wrap-input100 validate-input" style="margin-left:10%">
						<label>Name: </label> <?= $varid['Fullname'] ?> <br>
                        <label> Date of Birth:</label> <?= $varid['BirthDate'] ?> <br>
                        <label>Age: </label><?= $varid['Age'] ?> <br>
                        <label> Address:</label> <?= $varid['Address'] ?> <br>
                        <label>Telephone/email: </label>  <?= $varid['Telephone'] ?>, <?= $varid['Email'] ?> <br>
                        <label> Gender:</label>  <?= $varid['Gender'] ?><br>
                        <label>Marital Status: </label> <?= $varid['Marital status'] ?><br>
                        <label> Citizenship:</label><?= $varid['Citizenship'] ?> <br>
					</div>
                    

					<div class="text-center p-t-12">
						<span class="txt1">
							issued by the national Identification committee of the Democratic Republic of Congo. (c) All rights reserved
						</span>
						<a class="txt2" href="profile.php">
							<br> this is to Testify that <?= $varid['Fullname'] ?> is a Congolese
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