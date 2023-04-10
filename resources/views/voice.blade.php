<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="./assets/images/logo_2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- End WOW Slider.com HEAD section -->

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet'
        type='text/css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="<?php echo URL::to('/'); ?>/public/css/style.css" rel="stylesheet" type="text/css" />
    <style>
        section.team_server {
            background-image: url(./assets/images/The-ultimate-buyers-guide-to-headphones-in-2023-blog-featured.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 500px;
        }

        .server_title {
            font-size: 36px;
            /* font-style: italic; */
            font-weight: 700;
            color: #fff;
            text-transform: uppercase;
            margin: -4px 0px 0px 0px;
        }

        .voice {
            font-size: 28px;
            text-transform: uppercase;
            font-weight: 700;
            color: #e5a102;
            margin: 84px 0px 0px 0px;
        }


        .offers {
            font-size: 15px;
            color: #90949c;
            font-weight: 500;
        }

        .order_voice {
            color: #1c1121;
            text-decoration: none;
            font-size: 15px;
            font-weight: 700;
            text-transform: uppercase;
            line-height: 23px;
            padding: 6px 16px;
            /* background: #d1d100; */
        }

        .service_tag {
            position: absolute;
            margin-top: -50px;
        }

        .voice_page {
            text-decoration: none;
            /* color: #2e2525; */
        }

        .card_title {
            font-size: 17px;
        }

        .card-body {
            background: black;
        }

        .exclusive_services {
            background: #1b1a20 !important;
            width: 100%;
            height: 640px;
        }



        .customer_title {
            font-size: 36px;
            font-weight: 700;
            text-transform: uppercase;
            line-height: 50px;
            font-family: 'Oxanium';
            /* font-style: italic; */
        }

        .customer_views {
            font-size: 14px;
            font-weight: 500;
            color: #bcc0d1;
        }

        section.customer_say {
            background: #272b3d;
            width: 100%;
            height: 600px;
        }

        .customer_think {
            font-size: 20px;
        }

        .profile {
            color: #bcc0d1;
        }

        a:hover {
            color: #1c1121;
        }

        .plans {
            font-size: 36px;
            font-weight: 700;
            text-transform: uppercase;
            font-family: 'Oxanium';
        }

        .customer_details {
            text-align: center;
        }




        * {
            box-sizing: border-box;
        }


        .overlay {
            height: 100%;
            width: 100%;
            display: none;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
        }

        .overlay-content {
            position: relative;
            top: 46%;
            width: 80%;
            text-align: center;
            margin-top: 30px;
            margin: auto;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
            cursor: pointer;
            color: white;
        }

        .overlay .closebtn:hover {
            color: #ccc;
        }

        .overlay input[type=text] {
            padding: 15px;
            font-size: 17px;
            border: none;
            float: left;
            width: 80%;
            background: white;
        }

        .overlay input[type=text]:hover {
            background: #f1f1f1;
        }

        .overlay button {
            float: left;
            width: 20%;
            padding: 15px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .overlay button:hover {
            background: #bbb;
        }


        /* //////////slider/////////// */
        .carousel-dark .carousel-control-next-icon,
        .carousel-dark .carousel-control-prev-icon {
            filter: none;
        }

        .text_title {
            font-size: 21px;
            font-weight: 700;
            text-transform: uppercase;
            margin: 13px 0px;
        }

        section.text_voice {
            background: #1c1b1b;
        }

        p {
            color: #acafb3 !important;
            font-size: 16px;
        }

        .sub_img {
            height: 330px;
            width: 100%;
            margin: 26px 53px;
        }
    </style>
</head>

<body>
    <section class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid"><img src="<?php echo URL::to('/'); ?>/public/assets/images/logo_2.png"
                        height="54px"><button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse p-2" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-5 mb-lg-0 ms-auto -4">
                            <li class="nav-item  me-4"><a class="nav-link active " aria-current="page"
                                    href="<?php echo URL::to('/'); ?>/home">Home</a></li>
                            <li class="nav-item me-4"><a class="nav-link"
                                    href="<?php echo URL::to('/'); ?>/game_server">Game-Server</a></li>
                            <li class="nav-item me-4"><a class="nav-link"
                                    href="<?php echo URL::to('/'); ?>/webhosting">Web-hosting</a></li>
                            <li class="nav-item me-4"><a class="nav-link" href="<?php echo URL::to('/'); ?>/voice">Vocie
                                    Services</a></li>
                            <li class="nav-item me-4"><a class="nav-link" href="<?php echo URL::to('/'); ?>/dedicated">Dedicated
                                    Servers</a></li>
                            <li class="nav-item me-4"><a class="nav-link" href="#">Control-Panels</a>
                            </li>
                            <li class="nav-item me-4"><a class="nav-link" href=""><span
                                        class="material-symbols-outlined"><span
                                            class="material-symbols-outlined  position-relative">add_shopping_cart <span
                                                class="position-absolute top-0 start-100 translate-middle p-2 bg-warning  border border-light rounded-circle"><span
                                                    class="visually-hidden">New alerts</span></span></span></a></li>
                            <li class="nav-item me-5"><a class="nav-link search"><span
                                        class="material-symbols-outlined">search</span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <section class="team_server">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="voice pt-4">The Voice</h4>
                    <h1 class="server_title">Over <span class="text-warning">Internet</span></br>Protocol</h1>
                    <p class="offers">TeamSpeak 3 offers the ideal tool for online gaming, education and training,
                        internal business communication, and staying in touch with friends and family. TeamSpeak 3 is
                        literally capable of handling up to thousands of simultaneous use</p>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section>

    <section class="exclusive_services">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1 class="plans text-center mb-0 mt-5 text-light"> Our <span class="text-warning">Booking</span>
                        Slots</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3">

                    <div class="card mt-4">
                        <img src="<?php echo URL::to('/'); ?>/public/assets/images/Pin-by-Wallpapers-PhoneandPad-HD-on-916-Phone-in-2019- (1) (1) (1).jpg"
                            class="card-img-top" alt="">
                        <div class="card-body">
                            <div class="service_tag">
                                <a href="#" class="order_voice bg-warning">Voice</a>
                            </div>
                            <a href="#" class="voice_page text-light">
                                <h4 class="card_title mt-3">Starbound</h4>
                            </a>
                            <div class="d-flex justify-content-between">
                                <h4 class="voice_price text-light">$29.00</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mt-4">
                        <img src="<?php echo URL::to('/'); ?>/public/assets/images/Pin-by-Wallpapers-PhoneandPad-HD-on-916-Phone-in-2019- (1) (1) (1).jpg"
                            class="card-img-top" alt="">
                        <div class="card-body">
                            <div class="service_tag">
                                <a href="#" class=" order_voice bg-warning">Voice</a>
                            </div>
                            <a href="#" class="voice_page text-light">
                                <h4 class="card_title mt-3">Project Zomboid</h4>
                            </a>
                            <div class="d-flex justify-content-between">
                                <h4 class="voice_page text-light">$29.00</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>

    <section class="text_voice">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text_content  text-light pt-5 ">
                        <h1 class="text_title">The Best List-Making <span class="text-warning">Apps for Voice
                                Commands.</span> </h1>
                        <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="mb-1">Integer eget arcu nec mauris egestas rutrum.</p>
                        <p class="mb-1">Sed ac enim tempor mauris interdum semper.</p>
                        <p class="mb-1">Duis eu ante luctus, rutrum felis in, pretium risus.</p>
                        <p class="mb-1">Morbi tempor felis eu ligula fringilla egestas.</p>
                        <p class="mb-1">Aenean pharetra magna vitae sodales venenatis.</p>
                        <p class="mb-1">Integer vitae nulla at tortor vehicula iaculis ac vel ante.</p>
                        <p class="mb-1">Sed gravida massa quis lectus aliquet lobortis.</p>
                        <p class="mb-1">Pellentesque finibus turpis a est molestie pulvinar.</p>
                        <p class="mb-1">Pellentesque non mi lobortis purus pharetra bibendum.</p>
                        <p class="mb-1">Nam ac leo in elit congue faucibus sed non neque.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text_img my-5">
                        <img src="<?php echo URL::to('/'); ?>/public/assets/images/apa-itu-hosting.jpg" class="sub_img"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customer_say">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="customer_dec text-center mt-5">
                        <h2 class="customer_title text-light">our Customer's <span class="text-warning"> views</span>
                        </h2>
                        <!-- <small class="customer_views ">Different Person's can say about your views by voice.</small> -->
                    </div>
                    <div class="carousel_customer">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="customer_details">
                                        <img class="customer_img rounded-circle shadow-1-strong mb-4"
                                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                                            class="text-center" alt="avatar" style="width: 150px;" />
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="text-center mt-2">
                                                <h5 class="text-light mb-3">Maria Kate</h5>
                                                <p class="profile">Photographer</p>
                                                <p class="customer_think text-muted">
                                                    <i class="fas fa-quote-left pe-2"></i>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et
                                                    deleniti
                                                    nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo,
                                                    beatae quia
                                                    fugit consequatur laudantium velit magnam error. Consectetur
                                                    distinctio fugit
                                                    doloremque.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="far fa-star fa-sm"></i></li>
                                    </ul>
                                </div>
                                <div class="carousel-item">
                                    <div class="customer_details">
                                        <img class="rounded-circle shadow-1-strong mb-4"
                                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp"
                                            alt="avatar" style="width: 150px;" />
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="text-center mt-2">
                                                <h5 class="text-light mb-3">John Doe</h5>
                                                <p class="profile">Web Developer</p>
                                                <p class="customer_think text-muted">
                                                    <i class="fas fa-quote-left pe-2"></i>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et
                                                    deleniti
                                                    nesciunt sint eligendi reprehenderit reiciendis. Consectetur
                                                    distinctio fugit
                                                    doloremque.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="far fa-star fa-sm"></i></li>
                                    </ul>
                                </div>
                                <div class="carousel-item">
                                    <div class="customer_details">
                                        <img class="rounded-circle shadow-1-strong mb-4"
                                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                                            alt="avatar" style="width: 150px;" />
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="text-center mt-2">
                                                <h5 class="text-light mb-3">Anna Deynah</h5>
                                                <p class="profile">UX Designer</p>
                                                <p class="customer_think  text-muted">
                                                    <i class="fas fa-quote-left pe-2"></i>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et
                                                    deleniti
                                                    nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo,
                                                    beatae quia
                                                    fugit consequatur laudantium velit magnam error. Consectetur
                                                    distinctio fugit
                                                    doloremque.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="far fa-star fa-sm"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="footer-left">
            <img src="<?php echo URL::to('/'); ?>/public/assets/images/footer_fire.png" />
        </div>
        <div class="footer-right">
            <img src="<?php echo URL::to('/'); ?>/public/assets/images/footer_fire.png" />
        </div>
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="games mx-5">
                        <img src="<?php echo URL::to('/'); ?>/public/assets/images/logo_2.png" width="140px">
                        <p>games marketplace the relase etras thats sheets continig passag.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="games">
                                <h4>Products</h4>
                                <ul>
                                    <li> Slider </li>
                                    <li>Graphics</li>
                                    <li>Backgrounds</li>
                                    <li>Fonts</li>
                                    <li>Photography</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="games">
                                <h4>Need Help?</h4>
                                <ul>
                                    <li>Terms & Conditions</li>
                                    <li>Privacy Policy</li>
                                    <li>Refund Policy</li>
                                    <li>Affiliate</li>
                                    <li>FAQUse Cases</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="follow">
                        <h4>FOLLOW US</h4>
                        <ul>
                            <li><i class="fa fa-facebook-square"></i></li>
                            <li><i class="fa fa-instagram"></i></li>
                            <li><i class="fa fa-pinterest-square"></i></li>
                            <li><i class="fa fa-linkedin-square"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function openSearch() {
            document.getElementById("myOverlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("myOverlay").style.display = "none";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
