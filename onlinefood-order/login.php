<?php
session_start();
$Alert = false;
$error = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include './config/connect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "select * from users where username='$username' and password='$password'";
    $exec = mysqli_query($con, $sql);

    if (mysqli_num_rows($exec) > 0) {
        $row = mysqli_fetch_array($exec);
        if ($row > 0) {
            $Alert = true;
            session_start();
            header("location:user.php");

        } else {
            $error = "INVALID CREDENTIALS!";
        }
    } else {
        $error = "INVALID CREDENTIALS!";
    }
}


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN | MyMeal.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./style3.css">
    <!--ICONS-->
    <script src="https://kit.fontawesome.com/0a7af57943.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-toggleable-md bg-dark navbar-dark"
        style="height:70px; background:url('./images/bg-facts.jpg')no-repeat center center/cover;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./images/restaurant.png" height="55"
                    width="64">&nbsp;MyMeal.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown"
                style="text-align:right;  font-size:20px;  padding-left:750px;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                class="fa-solid fa-house" style="color: #b3bed0;"></i>&nbsp;Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categories.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                class="fa-solid fa-bars" style="color: #b3bed0;"></i>&nbsp;Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./register.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                class="fa-solid fa-user-check" style="color: #b3bed0;"></i>&nbsp;Signup</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <?php
    if ($Alert) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <center><strong>Success!</strong> You are successfully Logged in! </center>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($error) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <center><strong>ERROR! </strong> ' . $error . ' </center>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

    <div class="container2" style="height:350px; width:500px; margin-left:500px;">
        <div id="contact-box" class="mb-3">
            <img src="./images/avator1.jpg" height="200" width="190" style="padding-left:2px;">
            <form action="" method="POST">
                <div class="row">
                    <div class="input-field col s12 center">
                        <h4 class='h-ternary'>LOGIN</h4><br>

                    </div>
                </div>
                <div class="form">
                    <label for="name"><i class="fa-regular fa-user fa-lg"></i>&nbsp &nbsp &nbsp</label>
                    <input type="text" name="username" id="name" placeholder="Username" required>
                </div>

                <div class="form">
                    <label for="pass"><i class="fa-solid fa-lock fa-lg"></i>&nbsp &nbsp &nbsp</label>
                    <input type="password" name="password" id="pass" placeholder="Password" required>
                </div>

                <button type="submit" class="button-29">LOGIN</button>
                <button type="reset" class="button-29" role="button">RESET</button>
        </div>
        <p class="para"> Don't have an Account? &nbsp<a href="./register.php">&nbsp; Register!</a></p>

        </form>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>
</body>

</html>