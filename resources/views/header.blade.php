<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="./assets/images/logo_2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- End WOW Slider.com HEAD section -->

    <!-- Stylesheets -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet'
        type='text/css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="<?php echo URL::to('/');?>/public/css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <section class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid"><img src="<?php echo URL::to('/');?>/public/assets/images/logo_2.png" height="54px"><button class="navbar-toggler"
                        type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse p-2" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-5 mb-lg-0 ms-auto -4">
                            <li class="nav-item  me-4"><a class="nav-link active " aria-current="page" href="<?php echo URL::to('/');?>/home">Home</a></li>
                            <li class="nav-item me-4"><a class="nav-link" href="<?php echo URL::to('/');?>/game_server">Game-Server</a></li>
                            <li class="nav-item me-4"><a class="nav-link" href="<?php echo URL::to('/');?>/partners">Partners</a></li>
                            <li class="nav-item me-4"><a class="nav-link" href="<?php echo URL::to('/');?>/supports">Supports</a></li>
                            <li class="nav-item me-4"><a class="nav-link" href="<?php echo URL::to('/');?>/dedicated">Dedicated Servers</a></li>
                            <li class="nav-item me-4"><a class="nav-link" href="<?php echo URL::to('/');?>/about_us">About Us</a></li>
                            <li class="nav-item me-4"><a class="nav-link" href="#">Control-Panels</a>
                            </li>
                            <li class="nav-item me-4"><a class="nav-link" href=""><span
                                        class="material-symbols-outlined"><span
                                            class="material-symbols-outlined  position-relative">add_shopping_cart <span
                                                class="position-absolute top-0 start-100 translate-middle p-2 bg-warning  border border-light rounded-circle"><span
                                                    class="visually-hidden">New alerts</span></span></span></a></li>
                            <li class="nav-item me-5"><a class="nav-link search "><span
                                        class="material-symbols-outlined">search</span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
