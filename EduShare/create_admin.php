<?php
  session_start();
  $a_auth = $_SESSION['a_auth'];
  if($a_auth==null){
    header('Location:index.html');
    
  }
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

    <title>Admin Sign Up</title>
</head>

<body>
    <!-- animations -->
    <section class="navbar_bg">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container ">
                <a class="navbar-brand" href="adminhome.php"><img src="images/logo_written.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto text-center">
                    <ul class="navbar-nav ms-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="adminhome.php">Home</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="create_admin.php">Create Admin</a>
                        </li>
                   
                        <li class="nav-item">
                            <a class="nav-link " href="logout.php">Logout</a>
                        </li>

                    </ul>
                  
                    </ul>
                </div>
            </div>
        </nav>
    </section>



    <!-- news latter section -->
    <section class="news-latter ">
        <div class="container">
            
            <div class="row d-flex justify-content-between align-items-center">
                
                <div class="col-12 col-md-12 col-lg-6 ol-xxl-6 col-xl-6 row d-flex justify-content-center card">
                    <h3 class="text-center fw-bold">Admin Sign Up Here</h3>
                    <form action="/EduShare/admin_signup.php" method="POST">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-6	col-lg-12 col-md-12 inputBox">

                                <input type="text" name = "name" placeholder="Enter Username">

                            </div>
                            <div class="col-xl-6	col-lg-12 col-md-12  inputBox">

                                <input type="text" name="email" placeholder="Enter Email">

                            </div>
                        </div>

                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-6	col-lg-12 col-md-12 inputBox">

                                <input type="password" name="pass1" placeholder="Enter Password(Min 6)">

                            </div>
                            <div class="col-xl-6	col-lg-12 col-md-12  inputBox">

                                <input type="password" name="pass2" placeholder="Confrim Password(Min 6)">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6	col-lg-12 col-md-12 ">
                                <div class="inputBox">
                                    <input type="date" name="date" placeholder="enter password">
                                </div>
                            </div>
                            <div class="col-xl-6	col-lg-12 col-md-12 inputBox">
                                <select  name = "gender">
                                                     <option value="">Your Gender</option>
                                                     <option value="Male">Male</option>
                                                     <option value="Female">Female</option>
                                                     
                                                   
                                                  </select>


                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="text-center col-12">
                                <button class="btn-login">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-12 col-md-12 col-lg-6 ol-xxl-6 col-xl-6 img fluid pt-5">
                    <img class="img-fluid" src="images/signup.png" alt="">
                </div>
            </div>
        </div>


    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

</body>

</html>