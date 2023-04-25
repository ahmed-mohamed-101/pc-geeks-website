<?php
include("connection.php");
include("login.php")
    ?>

<html lang="en">

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap5 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- fontawesom cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/mainLogin.css">
</head>

<body>
    <!-- navbar -->
    <div class="navbar" id="navbar">
        <a href="#"><i class="fa fa-fw fa-home"></i> Pc Geeks</a>
        <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Store</a>
        <a href="#"><i class="fa fa-fw fa-search thirdA"></i><input type="text" placeholder="Search.."
                name="search" /></a>
        <a href="#"><i class="fa fa-columns" aria-hidden="true"></i> Admin</a>
        <a href="http://localhost/pc%20geeks%20website/index.php" class="active"><i class="fa fa-fw fa-user"></i>
            Login</a>
    </div>
    <!-- end -->
    <!-- form -->
    <div id="form">
        <h1>Login Form</h1><br>
        <form name="form" action="login.php" method="POST">
            <label>Username : </label></br>
            <input type="text" id="user" name="user"></br>
            <label>Password : </label></br>
            <input type="password" id="pass" name="pass"></br><br><br>
            <input type="submit" id="btn" value="Login" name="submit" />
        </form>
    </div>
    <!-- end -->
    <!-- footer -->
    <div class="container-fluid mt-0 mb-2 pdd">
        <div class="card cardy">
            <div class="row">
                <div class="col-md-4 col-sm-11 col-xs-11">
                    <div class="">
                        <div class="d-flex">
                            <h1 class="font-weight-bold mr-2 px-3 cardyAFter">
                                PC
                            </h1>
                            <h1 style="color: white">Geeks</h1>
                        </div>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Commodi non pariatur numquam animi nam at impedit odit nisi.
                        </p>
                        <div class="social mt-2 mb-3">
                            <i class="fa fa-facebook-official fa-lg"></i>
                            <i class="fa fa-instagram fa-lg"></i>
                            <i class="fa fa-twitter fa-lg"></i>
                            <i class="fa fa-linkedin-square fa-lg"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-1 col-xs-1 mb-2"></div>
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <h5 class="heading ho">Services</h5>
                    <ul class="uo">
                        <li>IT Consulting -</li>
                        <li>Development</li>
                        <li>Cloud</li>
                        <li>DevOps & Support</li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <h5 class="heading ho">Industries</h5>
                    <ul class="card-text uo">
                        <li>Finance</li>
                        <li>Public Sector</li>
                        <li>Smart Office</li>
                        <li>Retail</li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <h5 class="heading ho">Company</h5>
                    <ul class="card-text uo">
                        <li>About Us</li>
                        <li>Blog</li>
                        <li>Contact</li>
                        <li>Join Us</li>
                    </ul>
                </div>
            </div>
            <div class="divider di mb-6"></div>
            <div class="row" style="font-size: 10px">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="pull-left">
                        <p><i class="fa fa-copyright"></i> 2020 thezpdesign</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="pull-right mr-4 d-flex policy">
                        <div>Terms of Use</div>
                        <div>Privacy Policy</div>
                        <div>Cookie Policy</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->

</body>

</html>