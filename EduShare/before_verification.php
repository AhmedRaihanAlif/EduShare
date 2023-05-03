<?php
$num = 0;
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    $ran = rand();
    $email = $_SESSION['email'];
    $teacher_name = $_POST['t_name'];
    $subject = $_POST['subject'];
    $link = $_POST['link'];

    $plaintext = $link;
    $ivlen = openssl_cipher_iv_length($cipher = "AES-128-CBC");
    $iv = openssl_random_pseudo_bytes($ivlen);
    $key = "$ran";
    $ciphertext_raw = openssl_encrypt($plaintext, $cipher, $key, $options = OPENSSL_RAW_DATA, $iv);
    $hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary = true);
    $ciphertext = base64_encode($iv . $hmac . $ciphertext_raw);
    echo $ciphertext;
    $sql1 = "SELECT u_name FROM `user` WHERE u_email = '$email'";

    $result1 = mysqli_query($con, $sql1);
    $num1 = mysqli_num_rows($result1);
    $html = "";

    if ($num1 > 0) {
        while ($row = $result1->fetch_assoc()) {

            $name =  $row["u_name"];
        }
    }
    echo "$name\n";
    $sql = "INSERT INTO `before_verification` (`uploader_name`, `uploader_email`, `teacher_name`, `subject`, `link` , `key`)
     VALUES ('$name', '$email ', '$teacher_name', '$subject', '$ciphertext' , '$ran');";
    $result = mysqli_query($con, $sql);
    $sql2 = "INSERT INTO `log`(`name`, `email`, `activity`, `time`) VALUES ('$name','$email','Requested For Upload Lecture',NOW());";
    $result2 = mysqli_query($con, $sql2);


    header("Location:/EduShare/userhome.php");

    exit();
}
