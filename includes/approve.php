<?php
    if(isset($_GET['approve']) && !empty($_GET['approve']))
    {
        include("db.man.php");
        $conid = (int) ($_GET['userId']);
        $reqId = (int) ($_GET['approve']);
        $rqName = $_GET['Rqname'];
        $fetchprofile = "SELECT * FROM profile WHERE ConnectId = '$conid'";
        $profres = mysqli_query($conn, $fetchprofile);

        $uprof = mysqli_fetch_assoc($profres);
        //echo($uprof['Fullname']);
        //echo("<br>");
        //echo($uprof['ConnectId']);
        //echo("<br>");
        //echo($uprof['Id']);

        $uprofileId = $uprof['Id'];
        $valid = 1;
        $allow = '0123456789CDABXYZ.';
        function generate_code($input, $srrength = 16)
        {
            $input_length = strlen($input);
            $rand_str = '';
            for( $i = 0; $i<$srrength; $i++)
        {
            $randomchar = $input[mt_rand(0,$input_length - 1)];
            $rand_str .= $randomchar;

        }
        return $rand_str;
        }
        $idnnumber =generate_code($allow, 16);
        //print($idnnumber);
        
        $ins = "INSERT INTO idnumbers(IdNumber, Profileid, Valid, ReqName, AddOn) VALUES('$idnnumber', '$uprofileId', '$valid', '$rqName', DEFAULT)";
        $insq = mysqli_query($conn, $ins);
        if($insq)
        {
            $up = "UPDATE request SET ReqStatus = 'Approved' WHERE Id = '$reqId'";
            $upq = mysqli_query($conn, $up);
            header("Location:../adashboard.php");
        }
        else{
            echo("<script>alert('An error occured. We need to refresh and restart')</script>");
            header("Location: ../index.php?AdminApprovment=BigFail");
            exit();
        }
        
        
       
    }
    else{
        header("Location:../index.php");
    }





?>