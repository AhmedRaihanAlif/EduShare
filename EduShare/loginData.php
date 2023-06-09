<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>

<?php
    session_start();
    parse_str($_SERVER['QUERY_STRING'], $queries);
    $id = $queries['id'];
    $_SESSION['id'] = $id;
    $msg = $_SESSION['success'];
    $_SESSION['success'] = null;
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonts -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- font awsome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
    <!-- custom css -->
    <link rel="stylesheet" href="css/signup.css">

    <title>Log In</title>
</head>

<body>
    <!-- animations -->
    <section class="navbar_bg">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container ">
                <a class="navbar-brand" href="index.html"><img src="images/logo_written.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto text-center">
                        
                        
                        <li class="nav-item">
                            <a class="nav-link " href="signupData.php">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="login.html">Log In</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </section>



    <!-- news latter section -->
    <section class="news-latter ">
        <div class="container">
            <div class="row d-flex justify-content-around align-items-center mt-5">
                <div class="col-12 col-md-12 col-lg-6 ol-xxl-6 col-xl-6 img fluid pt-5">
                    <img class="img-fluid" src="images/login.png" alt="">
                </div>
                <div class="col-12 col-md-12 col-lg-6 ol-xxl-6 col-xl-6 row d-flex justify-content-center card">
                <?php if ($msg) { ?>
                        
                        <div class="row fix">
                            <div class="col-md-12">
                                <div class="alert alert-success" role="alert">
                                    <?php echo $msg ?>
                                </div>
                            </div>

                        </div>
                  

                    <?php } ?> 
                    <h3 class="text-center fw-bold">Login Here</h3>
                    <form action="/EduShare/login.php" method="POST">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-12	col-lg-12 col-md-12 inputBox">

                                <input type="text" name= "username" placeholder="Enter Email">

                            </div>
                            <div class="col-xl-12	col-lg-12 col-md-12  inputBox">

                                <input type="password" name="password" placeholder="Enter Password">

                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="text-center col-12">
                                <button class="btn-login">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

</body>

</html>