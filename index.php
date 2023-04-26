<?php
include("connection.php");
include("login.php")
    ?>

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
        <a href="index.html"><i class="fa fa-fw fa-home"></i> Pc Geeks</a>
        <a href="store.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Store</a>
        <a href="#"><i class="fa fa-fw fa-search thirdA"></i><input type="text" placeholder="Search.."
                name="search" /></a>
        <a href="http://localhost/phpmyadmin/"><i class="fa fa-columns" aria-hidden="true"></i> Admin</a>
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
</body>

</html>