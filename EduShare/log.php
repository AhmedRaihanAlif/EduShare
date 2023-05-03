<?php
session_start();
$a_auth = $_SESSION['a_auth'];
if ($a_auth == null) {
    header('Location:index.html');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Log</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <?php
    include 'nav2.html';
    ?>

    <div class="p-3 mb-5 bg-white rounded">
        <h2 class="text-center p-4 text-capitalize text-info top mt-5"><strong>user log</strong></h2>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>

                    <th>User Name</th>
                    <th>User Email</th>
                    <th>Activities</th>
                    <th>Time</th>
                    <th>Block</th>


                </tr>

            </thead>
            <tbody>
                <?php
                include '_dbconnect.php';
                $sql = "SELECT *  FROM log";

                $result = mysqli_query($con, $sql);
                $num1 = mysqli_num_rows($result);
                $html = "";
                if ($num1 > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $n_email=$row["email"];
                ?>
                        <tr>
                            <td> <?php echo $row["name"] ?></td>
                            <td> <?php echo $row["email"] ?></td>
                            <td> <?php echo $row["activity"] ?></td>
                            <td> <?php echo $row["time"] ?></td>
                            <?php
                            $sql2 = "SELECT * FROM user where u_email='$n_email';";
                            $result2 = mysqli_query($con, $sql2);
                            while ($row2 = $result2->fetch_assoc()) {
                                $block= $row2["block"];
                            }
                            
                            ?>
                            <?php if($block=="no"){ ?>
                            <td> <a class="btn btn-danger" href="/EduShare/block.php?id=<?php echo urlencode($row['email'])?>">Block</a> </td>
                            <?php }?>
                            <?php if($block=="yes"){ ?>
                            <td> <a class="btn btn-dark" href="/EduShare/block3.php?id=<?php echo urlencode($row['email'])?>">Unblock</a> </td>
                            <?php } ?>

                        </tr>
                <?php
                    }
                }

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
        });
    </script>
    <script src="https://use.fontawesome.com/2c7ebecd35.js"></script>

</body>

</html>