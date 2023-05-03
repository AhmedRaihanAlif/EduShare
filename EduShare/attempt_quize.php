<?php
  session_start();
  $auth = $_SESSION['auth'];
  if($auth==null){
    header('Location:index.html');
    
  }
?>
<?php
include '_dbconnect.php';
$sql = "SELECT *  FROM quize";
$result = mysqli_query($con, $sql);
$num1 = mysqli_num_rows($result);
$html = "";
$email=$_SESSION["email"];
$name=$_SESSION["name"];
$sql2 = "INSERT INTO `log`(`name`, `email`, `activity`, `time`) VALUES ('$name','$email','Visited Attempt Quiz',NOW());";
$result2 = mysqli_query($con, $sql2);
if ($num1 > 0) {
    while ($row = $result->fetch_assoc()) {

        $html = $html  . "<tr>" .
            '<td><input hidden type="text" name="id" placeholder="Enter Doctor ID" value="' . $row["S_no"] . '">' . $row["course"] . " </td>" .
            "<td>" . $row["topic"] . "</td>" .
            
            "<td><a href='" . $row["link"] . "' target='_blank'>Click Here</a></td> " .
           
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
    <title>Quiz Exam</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
</head>

<body>
<?php
    include 'nav.html';
    ?>
    <div class="p-3 mb-5 bg-white rounded">
        <h2 class="text-center p-4 text-capitalize text-info mt-5 top"><strong>Quiz Exam</strong></h2>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>

                    <th>Course name</th>
                    <th>Topic</th>
                    
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