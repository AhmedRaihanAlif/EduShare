<?php
$check = 0;
$check_pass = 0;
$check_email  = 0;
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $date = $_POST['date'];
    $gender= $_POST['gender'];
   
    if ($name == null) {
        $a = 1;
        $check = 1;
    }
    if ($email == null) {
        $a = 1;
        $check = 1;
    }
    if ($gender == null) {
        $a = 1;
        $check = 1;
    }
    if ($date == null) {
        $a = 1;
        $check = 1;
    }

    
   $returnVal = True; 

    if ( strlen($pass1) < 8 ) {
        $returnVal = False;
    }


    if ( !preg_match("#[0-9]+#", $pass1) ) {
        $returnVal = False;
    }


    if ( !preg_match("#[a-z]+#", $pass1) ) {
        $returnVal = False;
    }
   

    if ( !preg_match("#[A-Z]+#", $pass1) ) {
        $returnVal = False;
    }
 

    if ( !preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-]/", $pass1) ) {
        $returnVal = False;
    }



 
    if ($check == 0 && $returnVal==true) {
        if ($pass1 == $pass2) {
            $check_pass = 1;
           
            $sql2 = "SELECT * FROM user WHERE u_email = '$email'";
            $result1 = mysqli_query($con, $sql2);
            $num1 = mysqli_num_rows($result1);
        
            if ($num1 == 0) {
          //  $hash = password_hash($pass1, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `user` (`u_name`, `u_email`, `u_gender`, `u_password`, `date`) 
                VALUES ('$name', '$email', '$gender', '$pass1', '$date');";
                $result = mysqli_query($con, $sql);
                $_SESSION['success'] = "Account created successfully.";
                header("Location:/EduShare/loginData.php");

                exit();
            }
            else {
                $_SESSION['success'] = "This email is already in use by another user!";
                header("Location:/EduShare/signupData.php");
            }               
        }
        else {
            $_SESSION['success'] = "Password did not match. Please try again.";
            header("Location:/EduShare/signupData.php");
        }
        
    }else{

       
        if($check == 1){
            $_SESSION['success'] = "Please fill up all the required fields";
            header("Location:/EduShare/signupData.php");
            exit();
        }
        if($returnVal == false){
            $_SESSION['success'] = "For strong password please include a 'Capital Letter', 'Small Letter', 'number' and the 'password lenght' should be '8'";
            header("Location:/EduShare/signupData.php");
            exit();
        }
        
    
        
    }
    

}
