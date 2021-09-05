<?php 
    session_start();  
    if(isset($_POST['submit']))
    {
        include("db.man.php");
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);

        if(empty($email)|| empty($pass))
        {
            //echo("$email");
            header("Location: ../index.php?login=empty");

            exit();
            
        } else{
            $sql = "SELECT * FROM connect WHERE Email = '$email' AND Type= 1";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            if($resultcheck < 1)
            {
                $sql1 = "SELECT * FROM connect WHERE Email = '$email' AND Type = 2";
                $resut = mysqli_query($conn, $sql1);
                $check = mysqli_num_rows($resut);
                if($check < 1)
                {
                    header("Location: ../index.php?login=failed");
                    exit();
                }
                else{
                    if($rw = mysqli_fetch_assoc($resut))
                    {
                        $unhash1 = password_verify($pass, $rw["Passcode"]);
                        if($unhash1 == false)
                        {
                            header("Location: ../index.php?login=failed");
                            exit();
                        }
                        elseif($unhash1 == true){
                            // login the user
                            $_SESSION['Id'] = $rw['Id'];
                            $_SESSION['Email'] = $rw['Email'];
                            $_SESSION['Type'] = $rw['Type'];

                            header("Location: ../index.php");



                        }
                    }
                }
                
            }
            else{
                if($row = mysqli_fetch_assoc($result))
                {
                    // UNshing my passwords
                    $unhash = password_verify($pass, $row["Passcode"]);
                    if($unhash == false)
                    {
                        header("Location: ../index.php?login=failed");
                        exit();
                    }
                    elseif($unhash == true){
                        // login the user
                        $_SESSION['Id'] = $row['Id'];
                        $_SESSION['Email'] = $row['Email'];
                        $_SESSION['Type'] = $row['Type'];

                        header("Location: ../index.php");



                    }
                }
            }
        }
        
    }
    else
        {
            header("Location: ../index.php?login=failed");
            exit();
        }


?>