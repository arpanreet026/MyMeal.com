<?php
$Alert = false;
$error = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include './config/constants.php';
    $username = $_POST["username"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists = false;
    if (($password == $cpassword) && $exists == false && (strlen($phone) === 10)) {
        $sql = "INSERT INTO `users` ( `username`, `name`, `phone`, `email`, `password`, `dt`) VALUES ( '$username', '$name', '$phone', '$email', '$password', current_timestamp());";
        $exec = mysqli_query($con, $sql);

        if ($exec) {
            $Alert = true;
        }
    } elseif ($password != $cpassword) {
        $error = "Passwords do not match!";
    } elseif (strlen($phone) < 10 or strlen($phone) > 10) {
        $error = "Phone Number should be of 10 digits!";
    } else {
        $error = "ERROR IN CREATING ACCOUNT! TRY AGAIN !";
    }

}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIGNUP | MyMeal.com</title>
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
        style="height:60px; background:url('./images/bg-facts.jpg')no-repeat center center/cover;">
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
                        <a class="nav-link" href="./login.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                class="fa-solid fa-user-check" style="color: #b3bed0;"></i>&nbsp;Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <?php
    if ($Alert) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="background-color: lightgreen; color:black;">
        <center><strong>Success!</strong> Your Account is created and You can Login Now! </center>
    </div>';
    }
    if ($error) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <center><strong>ERROR! </strong> ' . $error . ' </center>
    </div>';
    }
    ?>
    <div class="container" style="height:580px;">

        <div id="contact-box">
            <form action="" method="POST">
                <div class="row">
                    <div class="input-field col s12 center">
                        <h4 class='h-ternary'>Register</h4>
                        <p class="para center">Join us now!</p>
                    </div>
                </div>
                <div class="form">
                    <label for="name"><i class="fa-regular fa-user fa-lg"></i>&nbsp &nbsp &nbsp &nbsp</label>
                    <input type="text" name="username" id="name" placeholder="Username" required>
                </div>
                <div class="form">
                    <label for="name"><i class="fa-solid fa-user fa-lg"></i> &nbsp &nbsp &nbsp &nbsp</label>
                    <input type="text" name="name" id="name" placeholder="Name" required>
                </div>
                <div class="form">
                    <label for="mobile"><i class="fa-solid fa-phone fa-lg"></i> &nbsp &nbsp &nbsp &nbsp</label>
                    <input type="text" name="phone" id="mobile" placeholder="Phone" required>
                </div>
                <div class="form">
                    <label for="email"><i class="fa-sharp fa-solid fa-envelope fa-lg"></i>&nbsp &nbsp &nbsp
                        &nbsp</label>
                    <input type="email" name="email" id="email" placeholder="E-Mail" required>
                </div>
                <div class="form">
                    <label for="pass"><i class="fa-solid fa-lock fa-lg"></i>&nbsp &nbsp &nbsp &nbsp</label>
                    <input type="password" name="password" id="pass" placeholder="Password" required>
                </div>
                <div class="form">
                    <label for="pass"><i class="fa-solid fa-user-lock fa-lg"></i>&nbsp &nbsp &nbsp</label>
                    <input type="password" name="cpassword" id="pass" placeholder="Confirm Password" required>
                </div>
                <button type="submit" class="button-29"
                    onclick="document.getElementById('formValidate')">Signup</button>
                <button type="reset" class="button-29" role="button">Reset</button><br>
        </div>
        <p class="para"> Already have an Account? &nbsp<a href="./login.php">Login</a></p>

        </form>
    </div>

    </div>
    <script src="https://kit.fontawesome.com/0a7af57943.js" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $("#formValidate").validate({
            rules: {
                username: {
                    required: true,
                    minlength: 5
                },
                name: {
                    required: true,
                    minlength: 5
                },
                password: {
                    required: true,
                    minlength: 5
                },
                phone: {
                    required: true,
                    minlength: 10
                },
            },
            messages: {
                username: {
                    required: "Enter username",
                    minlength: "Minimum 5 characters are required."
                },
                name: {
                    required: "Enter name",
                    minlength: "Minimum 5 characters are required."
                },
                password: {
                    required: "Enter password",
                    minlength: "Minimum 5 characters are required."
                },
                phone: {
                    required: "Specify contact number.",
                    minlength: "Minimum 10 characters are required."
                },
            },
            errorElement: 'div',
            errorPlacement: function (error, element) {
                var placement = $(element).data('error');
                if (placement) {
                    $(placement).append(error)
                } else {
                    error.insertAfter(element);
                }
            }
        });
    </script>
</body>

</html>