<?php
include "./config/constants.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Menu | MyMeal.com</title>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <script src="https://kit.fontawesome.com/0a7af57943.js" crossorigin="anonymous"></script>
    <link rel="Stylesheet" href="style.css">
</head>

<body style="background-image:url('./images/doctor.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%; color:white;">
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark "
        style="height:60px; background:url('./images/bg-facts.jpg')no-repeat center center/cover;">
        <a class="navbar-brand" href="index.php"><img src="./images/restaurant.png" height="60"
                width="60">&nbsp;&nbsp;MyMeal.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php"><i class="fa-sharp fa-solid fa-backward"
                            style="color: #ffffff;"></i>&nbsp;&nbsp;Go Back</a>
                </li>

            </ul>
        </div>
    </nav>
    <!-- CAtegories Section Starts Here -->
    <h1 class="text-center"> OUR FOODS</h1>
    <table class="tbl-full" style="padding-left:300px">
        <tr style="font-size:25px ;text-decoration:underline">
            <th width="10%">S.N.</th>
            <th width="20%">Title</th>
            <th width="20%">Item Code</th>
            <th width="10%">Price</th>
            <th width="20%" style="text-align:center"> Image</th>
            <th width="20%" style="text-align:center">Active</th>

        </tr>

        <?php
        $sql = "SELECT * FROM items";

        $res = mysqli_query($con, $sql);

        $count = mysqli_num_rows($res);

        $sn = 1;

        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $id = $row['id'];
                $code = $row['item_code'];
                $title = $row['Name'];
                $price = $row['Price'];
                $image_name = $row['image_name'];
                $active = $row['Active'];
                ?>

                <tr style="font-size:22px; font-weight:200">
                    <td>
                        <?php echo $sn++; ?>.
                    </td>
                    <td>
                        <?php echo $title; ?>
                    </td>
                    <td>
                        <?php echo $code; ?>
                    </td>
                    <td>₹
                        <?php echo $price; ?>
                    </td>
                    <td>
                        <?php
                        if ($image_name == "") {
                            echo "<div class='error'>Image not Added.</div>";
                        } else {
                            ?>
                            <img src="<?php echo SITEURL; ?>images/<?php echo $image_name; ?>" width="300px" height="200px"
                                style="padding-bottom:40px;padding-top:40px">
                            <?php
                        }
                        ?>
                    </td>

                    <td style="text-align:center">
                        <?php echo $active; ?>
                    </td>

                </tr>

                <?php
            }
        } else {
            //Food not Added in Database
            echo "<tr> <td colspan='7' class='error'> Food not Added Yet. </td> </tr>";
        }

        ?>


    </table>
    <br><br><br><br><br><br>



    <span class="h-space"></span>
    <br>
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>About Us</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">Launched in Amritsar, MyMeals.com has grown from a home project to
                            one
                            of the most
                            popular food ordering website of the city. We are providing the best food services at
                            your
                            door
                            steps enabling our vision of better food for more people. </p>
                    </ul></a></li>

                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>&nbspConnect with us</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><i class="fa-solid fa-location-dot" style="color: #ffffff;"></i>&nbsp
                            &nbsp Amritsar.
                        </li>
                        <li class="nav-item mb-2"><i class="fa-solid fa-phone" style="color: #ffffff;"></i>&nbsp
                            &nbsp
                            +918937870596</li>
                        <li class="nav-item mb-2"><i class="fa-regular fa-envelope" style="color: #ffffff;"></i>
                            MyM@gmail.com
                        </li>
                        <li class="nav-item mb-2"><i class="fa-brands fa-facebook" style="color: #ffffff;"></i>&nbsp
                            &nbsp MyMealCo</li>
                        <li class="nav-item mb-2"><i class="fa-brands fa-twitter" style="color: #ffffff;"></i>&nbsp
                            &nbsp Mymeal010</li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3" style="padding-left:60px;">
                    <h5>Quick Links</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#feature-wrap"
                                class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#menu-container"
                                class="nav-link p-0 text-body-secondary">Menu</a></li>
                        <li class="nav-item mb-2"><a href="#contact-section"
                                class="nav-link p-0 text-body-secondary">Contact</a></li>
                        <li class="nav-item mb-2"><a href="./register.php"
                                class="nav-link p-0 text-body-secondary">Order Now</a></li>
                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Get Notified about new & exciting offers from us!</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address"
                                fdprocessedid="n26vw" required>
                            <button class="btn btn-primary" style="background-color:rgba(0,0,0,.5)" type="submit"
                                onsubmit="<?php echo "Thanks!"; ?>" fdprocessedid="0vbpak">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <pre
                    style="color:white;"><b>© 2023 MyMealCompany, Inc. All rights reserved.   @ArpanreetKaur @DamanpreetSingh</b></pre>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-body-emphasis" href="#">
                            <i class="fa-brands fa-twitter" style="color: #3679ec;"></i>
                        </a></li>&nbsp;&nbsp;
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="fa-brands fa-instagram"
                                style="color: #c85bc5;"></i>
                        </a></li>&nbsp;&nbsp;
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="fa-brands fa-facebook"
                                style="color: #3679ec;"></i>
                        </a></li>
                </ul>
            </div>
        </footer>
    </div>

    <a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>