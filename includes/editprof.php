<?php
session_start();
    if(isset($_POST['submit']))
    {
        include("db.man.php");
        $email= mysqli_real_escape_string($conn,$_POST['email']);
        $id = (int) $_SESSION['Id'];
        $sql = "SELECT * FROM connect where Email = '$email'";
        $res = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($res);
        if($resultcheck>1)
        {
            exit();
        }
        else{
            $sql = "UPDATE connect SET Email = '$email' WHERE ID = '$id'";
            $fullname =  mysqli_real_escape_string($conn,$_POST['fullname']);
            $dateofbirth = mysqli_real_escape_string($conn,$_POST['dateofbirth']);
            $maritalstatus = mysqli_real_escape_string($conn,$_POST['maritalstatus']);
            $address = mysqli_real_escape_string($conn,$_POST['address']);
            $Telephone = mysqli_real_escape_string($conn,$_POST['Telephone']);
            $sex = mysqli_real_escape_string($conn,$_POST['sex']);

            $year = date($dateofbirth,'y');
            $thisyear = date('y');
            $age =(int) $thisyear - (int) $year;
            $email = $_POST['email'];
            $isid = $_SESSION['Id'];
            //echo("show me my age ".$age);
            //$sqli = "DELETE FROM profile WHERE ConnectId = '$isid'";
            //$resul = mysqli_query($conn, $sql);
            $sqli = "SELECT * FROM profile WHERE ConnectId = '$isid'";
            $resul = mysqli_query($conn, $sqli);
            $resulcheck = mysqli_num_rows($resul);
            if($resulcheck == 1)
            {
                $sql = "UPDATE profile SET Fullname ='$fullname', BirthDate = '$dateofbirth', Age = '$age', Address = '$address', Telephone = '$Telephone', Email ='$email', Gender='$sex', Citizenship = 'CONGOLESE', `Marital status` = '$maritalstatus', ConnectId = '$isid' WHERE ConnectId = '$isid'";
                $result = mysqli_query($conn, $sql);
                if($result)
                {
                    header("Location: ../includes/logout.man.php");
                    exit();
                }
                else
                {
                    header("Location: index.php?status=Faillure");
                }
                
            }
            elseif($resulcheck == 0)
            {
                
                $sql = "INSERT INTO profile(Fullname, BirthDate, Age, Address, Telephone, Email, Gender, Citizenship, `Marital status`, ConnectId) VALUES('$fullname', '$dateofbirth', '$age', '$address', '$Telephone', '$email', '$sex','CONGOLOSE', '$maritalstatus', '$id')";
                $result = mysqli_query($conn, $sql);
                if($result)
                {
                    header("Location: ../includes/logout.man.php");
                    exit();
                }
                else
                {
                    header("Location: index.php?status=Faillure");
                }
                
            }
            else
            {
                header("Location: ../includes/logout.man.php?status=faillure");
                exit();
            }

        }

    }
    else{
        header("Location: ../index.php");
    }

?>