<?php
  session_start();
  $auth = $_SESSION['auth'];
  if($auth==null){
    header('Location:index.html'); 
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userhome</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- font awsome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- custome cdn -->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/userhome.css">
</head>

<body>
    <section class="navbar_bg">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container ">
                <a class="navbar-brand" href="userhome.php"><img src="images/logo_written.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="userhome.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Study Materials
                        </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="user_view_lecture.php">Lecture Materials</a></li>
                                <li><a class="dropdown-item" href="attempt_quize.php">Quiz Exam</a></li>
                            </ul>
                        </li>
                        
                        
                       
                        <li class="nav-item">
                            <a class="nav-link " href="logout.php">Logout</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section class="bc">
        <div class="container">
            <div class=" row d-flex align-items-center ">
                <div class=" abtxt col-md-12 col-sm-12 col-lg-6 col-xl-6 ">
                    <h3>Hey There</h3>
                    
                    <div class="hero1-h1 text-wrap">Welcome <span class="true">User</span> To Our Website.

                    </div>
                    <p>We feel that learners all over the world will get benefits from this system. EduShare will help people to find their course lectures and other materials from anywhere. Many people can not find their proper study guide and materials
                        that they are looking for over the internet. At EduShare they will be able to find such materials and guidelines free of cost in a very organized way.

                    </p>

                </div>
                <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">

                    <img class="img-fluid " src="images/userhome.png" alt="">

                </div>
            </div>
        </div>

    </section>


    <!-- our protfolio -->
    <section class="protfolio">
        <h3 class="text-center text-uppercase">Dashboard </h3>
        <p class="text-center text-capitalize container">Here You can Upload File Nad take a quiz and also make question here in here Fell free to do anything you want.</p>
        <div class="warpper-protfolio">
            <input class="radio" id="one" name="group" type="radio" checked>
            <input class="radio" id="two" name="group" type="radio">
            <input class="radio" id="three" name="group" type="radio">
            <input class="radio" id="four" name="group" type="radio">
            <input class="radio" id="five" name="group" type="radio">
            <div class="tabs text-center mb-3">
                <label class="tab" id="one-tab" for="one">Upload Lecture</label>
                <label class="tab" id="two-tab" for="two">User Feedback</label>
                <label class="tab" id="three-tab" for="three"> Attempt Quiz</label>

            </div>
            <div class="panels">
                <div class="panel" id="one-panel">
                    <div class="row px-3 px-md-0 ">
                        <div class="col-md-12 col-lg-12 mb-3 ">
                            <div class="child-panel card justify-content-start">
                                <form action="/EduShare/before_verification.php" method="POST">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-12 col-lg-12 col-md-12 inputBox">

                                            <input type="text" name="t_name" placeholder="Teacher Name">

                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12  inputBox">

                                            <input type="text" name="subject" placeholder="Course">

                                        </div>
                                    <!-- </div> -->
                                    <!-- <div class="row d-flex justify-content-center"> -->
                                        
                                        <div class="col-xl-12 col-lg-12 col-md-12  inputBox">

                                            <input type="text" name="link" placeholder="Your File Link">

                                        </div>
                                    </div>
                                   

                                    <div class="row mt-4">
                                        <div class="d-flex justify-content-center">
                                            <button class="btn-login">Upload</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="panel" id="two-panel">
                    <div class="row px-3 px-md-0">
                        <div class="col-md-12 col-lg-12 mb-3 ">
                            <div class="child-panel card justify-content-start">


                                <form action="/EduShare/user_feedback.php" method="POST">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-xl-12 col-lg-12 col-md-12 inputBox">
                                            <h3 class="text-center">Send Feedback to Us </h3>
                                            <textarea name="feedback" id="" cols="30" rows="10">

                                            </textarea>


                                        </div>

                                    </div>
                                    <div class="row ">
                                        <div class="d-flex justify-content-center">
                                            <button class="btn-login">Upload</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="panel" id="three-panel">
                    <div class="row px-3 px-md-0">
                        <div class="col-md-12 col-lg-12 mb-3 ">
                            <div class="child-panel card justify-content-start">


                                <form form action="/EduShare/attempt_quize.php" method="POST">
                                    <h3 class="text-center">Attempt to your quiz</h3>
                                    <div class="row mt-4">
                                        <div class="d-flex justify-content-center">
                                            <button class="btn-login">Attempt</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>

                  


            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="style.js"></script>
    
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61c895ea80b2296cfdd3db1a/1fnroj7pi';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>