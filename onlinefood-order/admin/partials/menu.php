<?php
include('../config/constants.php');
include('login-check.php');
?>
<html>

<head>
    <title>Online Food Order</title>

    <link rel="Stylesheet" href="../css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-toggleable-md bg-dark navbar-dark"
        style="height:55px; background:url('../images/bg-facts.jpg')no-repeat center center/cover;">>
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../images/restaurant.png" height="55"
                    width="64">&nbsp;MyMeal.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown"
                style="text-align:right;  font-size:15px;  padding-left:750px;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manage-food.php">&nbsp;&nbsp;&nbsp;Food Items</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="manage-order.php">&nbsp;&nbsp;&nbsp;Order Section</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manage-admin.php">&nbsp;&nbsp;Admins</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manage-users.php">&nbsp;&nbsp;&nbsp;Users</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">&nbsp;&nbsp;&nbsp;Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>