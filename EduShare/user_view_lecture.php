<?php
include '_dbconnect.php';
$sql = "SELECT *  FROM after_verification";
session_start();
$result = mysqli_query($con, $sql);
$num1 = mysqli_num_rows($result);
$html = "";

$email=$_SESSION["email"];
$name=$_SESSION["name"];

$sql2 = "INSERT INTO `log`(`name`, `email`, `activity`, `time`) VALUES ('$name','$email','Visited Lecture Materials',NOW());";
$result2 = mysqli_query($con, $sql2);

if ($num1 > 0) {
    while ($row = $result->fetch_assoc()) {
        $key = $row['key'];
        $en =  $row["link"];
        $c = base64_decode($en);
        $ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
        $iv = substr($c, 0, $ivlen);
        $hmac = substr($c, $ivlen, $sha2len=32);
        $key = "$key";
        $ciphertext_raw = substr($c, $ivlen+$sha2len);
        $original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
        $calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
        if (hash_equals($hmac, $calcmac))//PHP 5.6+ timing attack safe comparison
        {
            echo $original_plaintext."\n";
        }

        $html = $html  . "<tr>" .
            '<form action="/covid/requestedfile.php" method="POST">' .
            '<td><input hidden type="text" name="id" placeholder="Enter Doctor ID" value="' . $row["S_no"] . '">' . $row["uploader_name"] . " </td>" .
            "<td>" . $row["uploader_email"] . "</td>" .
            "<td>" . $row["teacher_name"] . "</td> " .
            "<td>" . $row["subject"] . "</td>" .
            "<td><a href='" . $original_plaintext . "' target='_blank'>Click Here</a></td> " .
           
            '</form>' .
            "</tr>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture Meterials</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <?php
    include 'nav.html';
    ?>
    <div class="p-3 mb-5 bg-white rounded">
        <h2 class="text-center p-4 text-capitalize text-info mt-5 top"><strong>Lecture materials</strong></h2>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>

                    <th>Uploder name</th>
                    <th>Uploder email</th>
                    <th>Teacher name</th>
                    <th>Subject</th>
                    <th>Link</th>
                    




                </tr>

            </thead>
            <tbody>

                <?php
                echo  $html
                ?>


            </tbody>

        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#example').DataTable();
        } );
    </script>
    <script src="https://use.fontawesome.com/2c7ebecd35.js"></script>

</body>

</html>