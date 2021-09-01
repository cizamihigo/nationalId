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
            $sql = "SELECT * FROM connect WHERE Email = '$email'";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            if($resultcheck < 1)
            {
                header("Location: ../index.php?login=failed");
                exit();
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