<?php
  session_start();
  $a_auth = $_SESSION['a_auth'];
  if($a_auth==null){
    header('Location:index.html');
    
  }
?>
<?php
include '_dbconnect.php';
$sql = "SELECT *  FROM user_feedback";

$result = mysqli_query($con, $sql);
$num1 = mysqli_num_rows($result);
$html = "";
if ($num1 > 0) {
    while ($row = $result->fetch_assoc()) {

        $html = $html  . "<tr>" .
            '<form action="/covid/requestedfile.php" method="POST">' .
            '<td><input hidden type="text" name="id" placeholder="Enter Doctor ID" value="' . $row["S_no"] . '">' . $row["user_name"] . " </td>" .
            "<td>" . $row["u_email"] . "</td>" .
            "<td>" . $row["feedback"] . "</td> " .
            '<td>' .
            '<a class="btn btn-danger" href="/EduShare/delete_feedback.php?id=' . urlencode($row["S_no"]) . '">Delete</a> ' .
            '</td>' .
           
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
    <title>View Feedback</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <?php
    include'nav2.html';
    ?>
    <div class="p-3 mb-5 bg-white rounded">
        <h2 class="text-center p-4 text-capitalize text-info top mt-5"><strong>View Feedback<strong></h2>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>

                    <th>User name</th>
                    <th>User email</th>
                    <th>Feedback</th>
                    <th>Action</th>
                    




                </tr>

            </thead>
            <tbody>

                <?php
                echo  $html;
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