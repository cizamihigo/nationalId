<?php

if(isset($_POST['submit']))
{
    include_once("db.man.php");
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    //errors
    if(empty($pass) || empty($email))
    {
        header("Location: ../Signup.php?signup=empty");
        exit();
    }else
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            header("Location: ../Signup.php?signup=Invalidmail");
            exit(); 
        }
        else{
            $sql = "SELECT * FROM connect WHERE Email = '$email'";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);

            if($resultcheck > 0)
            {
                header("Location: ../Signup.php?signup=Userexist");
                exit();  
            }
            else{
                //hash
                $pwd = password_hash($pass, PASSWORD_DEFAULT);
                //insert
                $sql = "INSERT INTO connect(Email, Passcode, Type) VALUES ('$email', '$pwd', 1); ";
                mysqli_query($conn, $sql);
                header("Location: ../login.php?signup=success");
                exit();
             }
        }
    }
}
else{
    header("Location: ../Signup.php");
    exit();
}
?>