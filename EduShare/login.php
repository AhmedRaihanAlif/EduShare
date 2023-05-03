<?php
$num= 0 ;
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
include '_dbconnect.php'; 
    $email = $_POST['username'];
    $pass =  $_POST['password'];
    // $email = mysqli_real_escape_string($con, $email); //test' or 1=1# CHANGE TO test' or 1=1
    // $pass = mysqli_real_escape_string($con, $pass);
    // echo $pass;
    // echo $email;
    $sql = "SELECT * FROM `user` WHERE u_email = '$email' and u_password ='$pass' ";


    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    echo $num;
    $block = "no";
    if($num == 1){
       
         while ($row = $result->fetch_assoc()) {
            $u_name = $row["u_name"];
            $password = $row["u_password"];
            $block = $row["block"];         
        }

        echo $u_name;
        echo $password;
               
        $verify = password_verify($pass, $password);
        echo $verify;
        if(true){
            if($block == "yes"){
                header("Location:/EduShare/block2.php");
                exit();
            }
            else{
                $_SESSION["email"] = $email;
                $_SESSION["name"] = $u_name;
                $sql3 = "INSERT INTO `log`(`name`, `email`, `activity`, `time`) VALUES ('$u_name','$email','Logs In',NOW())";
                $result3 = mysqli_query($con,$sql3);
                header("Location:/EduShare/mail.php");
                exit();
            }
            
         }
        else{
            header("Location:/EduShare/loginData.php");
            exit();
        }
        
    }else {
        $sql2 = "SELECT * FROM `admin` WHERE a_email = '$email' ";
        $result2 = mysqli_query($con,$sql2);
    
        $num2 = mysqli_num_rows($result2);
        if($num2 == 1){
            while ($row = $result2->fetch_assoc()) {
                $password = $row["a_password"];      
             } 
            $verify = password_verify($pass, $password);
            
            if($verify){
                $_SESSION["a_email"] = $email;
                header("Location:/EduShare/mail2.php");
                exit();
            }else{
                header("Location:/EduShare/loginData.php");
                exit();
            }
         
        }
        else if($num2 != 1){
            header("Location:/EduShare/loginData.php");
            exit();
        } 
         
    }
    $con->close();
}
?>