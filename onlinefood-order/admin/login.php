<?php include('../config/constants.php'); ?>

<html>

<head>
    <title>Admin Login - MyMeal.com</title>
    <link rel="stylesheet" href="/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/0a7af57943.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet">
</head>

<body style="background:url('../images/paralax.jpg')no-repeat">
    <header id="main-navigation">
        <nav class="navbar navbar-expand-md navbar-toggleable-md bg-dark navbar-dark gradient-custom"
            style="height:55px; background:url('./images/bg-facts.jpg')no-repeat center center/cover;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../images/restaurant.png" height="55"
                        width="64">&nbsp;MyMeal.com</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown"
                    style="text-align:right;  font-size:20px;  padding-left:1050px;">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">&nbsp;&nbsp;<i class="fa-solid fa-house"
                                    style="color: #b3bed0;"></i>&nbsp;Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../categories.php">&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-bars"
                                    style="color: #b3bed0;"></i>&nbsp;Menu</a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="login" style="background: rgba(0,0,0,.5);color:white; margin-top:50px;
text-align:center;padding-top:60px">
        <h1 class="text-center">Admin Login</h1>
        <br><br>

        <?php
        if (isset($_SESSION['login'])) {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }

        if (isset($_SESSION['no-login-message'])) {
            echo $_SESSION['no-login-message'];
            unset($_SESSION['no-login-message']);
        }
        ?>

        <img src="../images/admin.png" height="200px" width="300px">

        <!-- Login Form Starts HEre -->
        <form action="" method="POST" class="text-center">
            Username: <br>
            <input type="text" name="username" placeholder="Enter Username"><br><br>

            Password: <br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>

            <input type="submit" name="submit" value="Login" class="btn-primary">
            <br><br>
        </form>
        <!-- Login Form Ends HEre -->


    </div>

</body>

</html>

<?php

//CHeck whether the Submit Button is Clicked or NOt
if (isset($_POST['submit'])) {
    //Process for Login
    //1. Get the Data from Login form
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //2. SQL to check whether the user with username and password exists or not
    $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

    //3. Execute the Query
    $res = mysqli_query($con, $sql);

    //4. COunt rows to check whether the user exists or not
    $count = mysqli_num_rows($res);

    if ($count == 1) {
        //User AVailable and Login Success
        $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
        $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it

        //REdirect to HOme Page/Dashboard
        header('location:' . SITEURL . 'admin/');
    } else {
        //User not Available and Login FAil
        $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
        //REdirect to HOme Page/Dashboard
        header('location:' . SITEURL . 'admin/login.php');
    }


}

?>