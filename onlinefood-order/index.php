<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery App | MyMeal.com</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="Stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0a7af57943.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->


    <style>
        .c-item {
            height: 645px;
        }

        .c-img {
            height: 100%;
            object-fit: cover;
            filter: brightness(0.6);
        }
    </style>
</head>

<body>

    <header id="main-navigation">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark "
            style="height:60px; color:white; background:url('./images/bg-facts.jpg')no-repeat center center/cover;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="./images/restaurant.png" height="55"
                        width="64">&nbsp;MyMeal.com</a>

                <div class="collapse navbar-collapse" id="navbarNavDropdown"
                    style="text-align:right;  font-size:20px;  padding-left:750px;">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="categories.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact-section">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./register.php">Sign up</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="true">
                                Login
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./admin/login.php">Admin</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="./login.php">User</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active c-item">
                <img src="./images/about-back.jpg" class="d-block w-100 c-img" alt="Slide 1">
                <div class="carousel-caption top-0 mt-4">
                    <p class="mt-5 fs-3 text-uppercase">Cooked with Love and less oils.</p>
                    <h1 class="display-1 fw-bolder text-capitalize" style="margin-top:5rem">Yummiest Food!</h1>
                    <p><a class="btn btn-primary px-4 py-2 fs-5 mt-5" href="./categories.php">View Menu</a></p>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="./images/banner111.jpg" class="d-block w-100 c-img" alt="Slide 2">
                <div class="carousel-caption top-0 mt-4">
                    <p class="text-uppercase fs-3 mt-5">So many items to choose from.</p>
                    <p class="display-1 fw-bolder text-capitalize" style="margin-top:5rem">Huge Variety!</p>
                    <p><a class="btn btn-primary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal"
                            data-bs-target="#booking-modal" href="./register.php">Order Now</a></p>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="./images/banner1.jpg" class="d-block w-100 c-img" alt="Slide 3">
                <div class="carousel-caption top-0 mt-4" style="top:40rem;">
                    <p class="text-uppercase fs-3 mt-5">Delicious food at highest convenience.</p>
                    <p class="display-1 fw-bolder text-capitalize" style="margin-top:5rem">Delivery at Doorstep!</p>
                    <p><a class="btn btn-primary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal"
                            data-bs-target="#booking-modal" href="./register.php">Order Now</a></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div><br><br>

    <div class="container px-4" id="featured-3">
        <h3 class="pb-2 text-center h-primary">Our Special Dishes</h3>
        <span class="h-space"></span>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3" style="padding-left:30px;">
            <div class="feature col">

                <img src="./images/pizza.jpg" height="300px" width="380px">
                <pre class="h-4 center">Margherita Pizza                                   INR 599</pre>

            </div>
            <div class="feature col">

                <img src="./images/lasagna.jpg" height="300px" width="380px">
                <pre class="h-4 center">Lasagna                                           INR 380</pre>

            </div>
            <div class="feature col">

                <img src="./images/pasta.jpg" height="300px" width="380px">
                <pre class="h-4 center">Alfredo Pasta                                     INR 400</pre>

            </div>
        </div>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="feature col">

                <img src="./images/gj.jpg" height="300px" width="380px">
                <pre class="h-4 center">Gulab Jamun                                              INR 120</pre>

            </div>
            <div class="feature col">

                <img src="./images/icecream.jpg" height="300px" width="380px">
                <pre class="h-4 center">Ice Cream                                             INR 100</pre>

            </div>
            <div class="feature col">

                <img src="./images/shake.jpg" height="300px" width="380px">
                <pre class="h-4 center">Vanilla Shake                                             INR 120</pre>

            </div>
        </div>
    </div>

    <section class="feature_wrap padding-half" id="specialities">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="heading h-primary ">Our &nbsp; Specialities</h3>
                    <span class="h-space"></span><br><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 feature text-center">
                    <i class="fa-solid fa-martini-glass-citrus fa-beat-fade fa-7x" style="color: #ec9418;"></i>
                    <h3><a href="./register.php">Dinner &amp; Dessert</a></h3>
                    <pre>                     </pre>
                </div>
                <div class="col-md-3 col-sm-6 feature text-center">
                    <i class="fa-solid fa-mug-saucer fa-beat-fade fa-7x" style="color: #ec9418;"></i>
                    <h3><a class="specialities" href="./register.php">Breakfast</a></h3>
                    <pre>                     </pre>
                </div>
                <div class="col-md-3 col-sm-6 feature text-center">
                    <i class="fa-solid fa-ice-cream fa-beat-fade fa-7x" style="color: #ec9418;"></i>
                    <h3><a href="./register.php">Sweet Dishes</a></h3>
                    <pre>                     </pre>
                </div>
                <div class="col-md-3 col-sm-6 feature text-center">
                    <i class="fa-regular fa-clock fa-beat-fade fa-7x" style="color: #ec9418;"></i>
                    <h3><a href="./register.php">Fast Delivery</a></h3>
                    <pre>                     </pre>
                </div>
            </div>

        </div>
    </section>

    <section style=" background:url('./images/paralax.jpg')no-repeat center center/cover; color:white">
        <div class=" container">
            <div class=" row">
                <br>
                <div class="col text-center">
                    <h3 class="heading h-primary " style="color:white">Our Stats</h3>
                    <span class="h-space"></span><br><br><br>


                </div>
                <div class="row text-center">
                    <div class="col">
                        <div class="counter">
                            <i class="fa-regular fa-face-smile fa-3x" style="color: #f39e4f;"></i>
                            <h2 class="h-primary" style="color:white;">100</h2>
                            <p class="para ">Happy Customers</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="counter">
                            <i class="fa-solid fa-bowl-food fa-3x" style="color: #f39e4f;"></i>
                            <h2 class="h-primary" style="color:white;">1,700+</h2>
                            <p class=" para">Dishes Served</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="counter">
                            <i class="fa-solid fa-wine-glass fa-3x" style="color: #f39e4f;"></i>
                            <h2 class="h-primary" style="color:white;">11,900</h2>
                            <p class="para ">Beverages</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="counter">
                            <i class="fa-solid fa-mug-hot fa-3x" style="color: #f39e4f;"></i>
                            <h2 class="h-primary" style="color:white;">157</h2>
                            <p class="para ">Coffees Served</p>
                        </div>
                    </div>
                </div>
            </div><br><br>
    </section>
    <br><br>
    <section id="contact-section">
        <h3 class="h-primary center">Contact Us</h3>
        <span class="h-space"></span><br><br>
        <div id="contact-box">
            <form action="#">
                <div class="form">
                    <label for="name">Name: &nbsp</label><br>
                    <i class="fa-solid fa-user"></i> <input class="form-control form-control-sm" type="text" name="name"
                        id="name" placeholder="Enter your Name" required>
                </div>
                <div class="form">
                    <label for="mobile">Mobile Number: </label><br>
                    <i class="fa-solid fa-phone"></i> <input class="form-control form-control-sm" type="text"
                        name="name" id="mobile" placeholder="Enter your Mobile Number" required>
                </div>
                <div class="form">
                    <label for="email">E-Mail: </label><br>
                    <i class="fa-solid fa-envelope"></i> <input class="form-control form-control-sm" type="email"
                        name="name" id="email" placeholder="Enter your E-Mail" required>
                </div>
                <div class="form">
                    <label for="message">Message: </label><i class="fa-solid fa-messages"></i>
                    <textarea name="message" class="form-control form-control-sm" id="message" cols="30"
                        rows="10"></textarea>
                </div>
                <button type="submit" class="bttn">Submit</button>
            </form>
        </div>

    </section>


    <section class="client-container">
        <h3 class="h-primary center">Our Clients</h3>
        <span class="h-space"></span>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="feature col center">

                <img src="./images/Apple-Logo.png" height="160px" width="280px">

            </div>
            <div class="feature col center">

                <img src="./images/android.png" height="150px" width="280px">

            </div>
            <div class="feature col center">

                <img src="./images/instagram-logo.png" height="150px" width="280px">


            </div>
        </div>
        </div>
    </section><br><br><br><br>
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
                    <h5>&nbsp &nbsp &nbsp Connect with us</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><i class="fa-solid fa-location-dot"></i>&nbsp
                            &nbsp Near AGC,Amritsar.
                        </li>
                        <li class="nav-item mb-2"><i class="fa-solid fa-phone"></i>&nbsp
                            &nbsp
                            +91 &nbsp 89378 70596</li>
                        <li class="nav-item mb-2"><i class="fa-regular fa-envelope"></i>&nbsp
                            &nbsp MyMeal@gmail.com
                        </li>
                        <li class="nav-item mb-2"><i class="fa-brands fa-facebook"></i>&nbsp
                            &nbsp MyMealCo</li>
                        <li class="nav-item mb-2"><i class="fa-brands fa-twitter"></i>&nbsp
                            &nbsp Mymeal010</li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3" style="padding-left:60px;">
                    <h5>Quick Links</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#feature_wrap"
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
                <pre>© 2023 MyMealCompany, Inc. All rights reserved.   @ArpanreetKaur </pre>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-body-emphasis" href="#">
                            <i class="fa-brands fa-twitter" style="color: #3679ec;"></i>
                        </a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="fa-brands fa-instagram"
                                style="color: #c85bc5;"></i>
                        </a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="fa-brands fa-facebook"
                                style="color: #3679ec;"></i>
                        </a></li>
                </ul>
            </div>
        </footer>
    </div>

    <a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>


    <script>
        const hero-carousel = new bootstrap.Carousel(document.querySelector('#autoFadingCarousel'), {
            interval: 2000,
            pause: false,
            wrap: true
        });</script>





</body>

</html>