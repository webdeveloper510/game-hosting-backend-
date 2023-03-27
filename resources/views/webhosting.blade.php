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
    <link href="<?php echo URL::to('/'); ?>/public/css/style.css" rel="stylesheet" type="text/css"/>
<style>
    h1.web {
    font-size: 48px;
    font-weight: 900;
    font-style: italic;
    font-family: roboto,proximanova-bold,Helvetica,Arial,sans-serif;
    color: white;
}

h2.powered {
    font-size: 30px;
    font-style: italic;
    font-weight: 900;
    font-family: roboto,proximanova-bold,Helvetica,Arial,sans-serif;
    color: white;
    padding-bottom: 18px;
    line-height: 42px;
}
span{
    color: orange !important;
}

section.hosting{
    background-image: url('./../../../game-hosting/public/assets/images/bg-hosting.webp');
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 670px;
}


button.btn.btn-light.monthly {
    padding: 7px 60px;
    background-color: black;
    border: 0;
    color: white;
}

button.btn.btn-light.monthly:hover {
    padding: 7px 60px;
    background-color: #1d202e;
    border: 0 !important;
}

button.btn.btn-light.annualy {
    padding: 7px 60px !important;
    background-color: black !important;
    border: 0 !important;
    color: white !important;
}

button.btn.btn-light.annualy:hover {
    padding: 7px 60px !important;
    background: #1d202e !important;
    border: 0 !important;
}

button.btn.btn-light.monthly.active.me-2 {
    background: red !important;
}

.move_butt {
    background: black !important;
    padding: 5px 5px !important;
    border-radius: 6px !important;
}


.price_rate {
    background: #171924 !important;
    border-radius: 6px !important;
    width: 260px;
    height: 382px
}

.price_rate:hover {
    background: #212333 !important;
    border-radius: 6px !important;
}


section.pakeges {
    background: #171924;
    color: white;
    padding: 60px 0px;
    width: 100%;
    height: 705px;
}

h2.package_title {
    font-size: 39px;
    text-transform: uppercase;
    font-style: italic;
    font-weight: 900;
    font-family: roboto,proximanova-bold,Helvetica,Arial,sans-serif;
}

.instant {
    font-size: 12px;
    font-weight: 600;
    font-family: roboto,proximanova-bold,Helvetica,Arial,sans-serif;
}

.click_app {
    font-size: 25px;
    font-weight: 900;
    padding-top: 60px;
    line-height: 12px;
    font-style: italic;
    font-family: sans-serif;
}
.different_app{
    font-size: 15px;
    line-height: 26px;
    font-family: roboto,proximanova-bold,Helvetica,Arial,sans-serif;
    font-weight: 800;

}

.full {
    font-size: 13px;
}

.logo_images {
    padding: 50px;
}


.need_experienced {
    font-size: 13px;
}

img.cpanal {
    width: 320px;
    height: 250px;
    margin: 50px;
}

section.intallation {
    background: #121218;
}

.panal_control {
    margin: 0px 81px 0px 0px;
}


.Perfect {
    font-size: 15px;
    color: #90949c;
}

b {
    font-size: 16px;
}
.silver {
    color: #90949c;
}

.whprice_monthly {
    color: #90949c;
}
</style>
</head>

<body>
    <section class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid"><img src="<?php echo URL::to('/'); ?>/public/assets/images/logo_2.png" height="54px"><button class="navbar-toggler"
                        type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse p-2" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-5 mb-lg-0 ms-auto -4">
                            <li class="nav-item  me-4"><a class="nav-link active " aria-current="page" href="<?php echo URL::to('/');?>/home">Home</a></li>
                            <li class="nav-item me-4"><a class="nav-link" href="<?php echo URL::to('/');?>/game_server">Game-Server</a></li>
                            <li class="nav-item me-4"><a class="nav-link" href="<?php echo URL::to('/');?>/webhosting">Web-hosting</a></li>
                            <li class="nav-item me-4"><a class="nav-link" href="<?php echo URL::to('/');?>/voice">Vocie Services</a></li>
                            {{-- <li class="nav-item me-4"><a class="nav-link" href="<?php echo URL::to('/');?>/partners">Partners</a></li>
                            <li class="nav-item me-4"><a class="nav-link" href="<?php echo URL::to('/');?>/supports">Supports</a></li> --}}
                            <li class="nav-item me-4"><a class="nav-link" href="<?php echo URL::to('/');?>/dedicated">Dedicated Servers</a></li>
                            {{-- <li class="nav-item me-4"><a class="nav-link" href="<?php echo URL::to('/');?>/about_us">About Us</a></li> --}}
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
    <!-- <section class="web_finest ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="voice_info mt-5">
                        <h1 class="voice_title mt-4 text-light">WEB <span>HOSTING</span></h1>
                        <p class="voice_dec text-secondary">Your game server, or just need a web hosting in general we have you covered. With multiple feature-rich plans to choose from, hosting your website has never been easier.</p>
                        <small class="voice_tip text-light">Let the experts help you pick a plan!</small>
                        <div class="voice_btn mt-5">
                            <button type="button " class="btn btn-warning mb-4">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="web_img mt-5">
                        <img src="./assets/images/apa-itu-hosting.jpg" class="webb" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section> -->
    <section class="hosting">
        <div class=" container ">
            <div class="row">
                <div class="col-md-12 mt-4 text-center">
                    <div class="text-center">
                        <h1 class="web mb-0">WEB <span>HOSTING </span></h1>
                        <h2 class="powered mb-0">NVMe SSD Powered & DDoS Protected</h2>
                    </div>
                    <div class="text-center d-flex justify-content-end mx-5 ">
                        <div class="move_butt me-3 mx-5">
                            <div class="bedge d-flex">
                                <button type="button" class="btn btn-light monthly active me-2">Monthly</button>
                                <button type="button" class="btn btn-light annualy ">Annualy</button>
                            </div>
                        </div>
                        <div class="pt-2 ">
                            <h5 class="text-light"><img src="<?php echo URL::to('/'); ?>/public/assets/images/longarrow.webp" class="me-2"><strong class="text-primary me-2">SAVE 12%</strong>BY PAYING ANNUALLY</h5>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container">
            <div class="row g-4 my-1">
                <div class="col-md-3 ">
                        <div class="price_rate  text-center  mt-3">
                            <h5 class="silver pt-3 mb-1">SILVER</h5>
                            <p class="Perfect mb-1">Perfect for small websites </p>
                            <div class="whprice_monthly">
                                <h5 class="mb-1">$2.99<small>/mo</small></h5>
                                <p class="Perfect mb-2">Save 12% by paying annually!</p>
                            </div>
                            <!-- <div class="whprice yearly active">
                                    <h2>$2.63<small>/mo</small></h2>
                                    <span>was $2.99</span>
                            </div> -->
                            <a href="" type="button" class="btn btn-primary col-md-6  order  mb-2">Order Now</a>
                            <p class="Perfect mb-1"><b class="Perfect">500 MB </b>Disk Space</p>
                            <p class="Perfect mb-1"><b class="Perfect">10 GB </b>Bandwidth</p>
                            <p class="Perfect mb-1"><b class="Perfect">2 </b>Subdomains</p>
                            <p class="Perfect mb-1"><b class="Perfect">2 </b>Email Addresses</p>
                            <p class="Perfect mb-1"><b class="Perfect">2 </b> FTP Accounts</p>
                            <p class="Perfect mb-1"><b class="Perfect">2 </b>MySQL Databases</p>
                            <p class="Perfect mb-1"><b class="Perfect">Cloudflare </b>CDN</p>
                        </div>

                </div>
                <div class="col-md-3">
                    <div class="price_rate  text-center text-secondary mt-3">
                        <h5 class="silver  pt-3 mb-1">SILVER</h5>
                        <p class="Perfect mb-1">Perfect for small websites </p>
                        <div class="whprice_monthly">
                            <h5 class="mb-1">$2.99<small>/mo</small></h5>
                            <p class="Perfect mb-2">Save 12% by paying annually!</p>
                        </div>
                        <!-- <div class="whprice yearly active">
                                <h2>$2.63<small>/mo</small></h2>
                                <span>was $2.99</span>
                        </div> -->
                        <a href="" type="button" class="btn btn-primary col-md-6 order  mb-2">Order Now</a>
                        <p class="Perfect mb-1"><b class="Perfect">500 MB </b>Disk Space</p>
                        <p class="Perfect mb-1"><b class="Perfect">10 GB </b>Bandwidth</p>
                        <p class="Perfect mb-1"><b class="Perfect">2 </b>Subdomains</p>
                        <p class="Perfect mb-1"><b class="Perfect">2 </b>Email Addresses</p>
                        <p class="Perfect mb-1"><b class="Perfect">2 </b> FTP Accounts</p>
                        <p class="Perfect mb-1"><b class="Perfect">2 </b>MySQL Databases</p>
                        <p class="Perfect mb-1"><b class="Perfect">Cloudflare </b>CDN</p>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="price_rate  text-center text-secondary mt-3">
                        <h5 class="silver  pt-3 mb-1">SILVER</h5>
                        <p class="Perfect mb-1">Perfect for small websites </p>
                        <div class="whprice monthly ">
                            <h5 class="mb-1">$2.99<small>/mo</small></h5>
                            <p class="Perfect mb-2">Save 12% by paying annually!</p>
                        </div>
                        <!-- <div class="whprice yearly active">
                                <h2>$2.63<small>/mo</small></h2>
                                <span>was $2.99</span>
                        </div> -->
                        <a href="" type="button" class="btn btn-primary col-md-6 order  mb-2">Order Now</a>
                        <p class="Perfect mb-1"><b class="Perfect">500 MB </b>Disk Space</p>
                        <p class="Perfect mb-1"><b class="Perfect">10 GB </b>Bandwidth</p>
                        <p class="Perfect mb-1"><b class="Perfect">2 </b>Subdomains</p>
                        <p class="Perfect mb-1"><b class="Perfect">2 </b>Email Addresses</p>
                        <p class="Perfect mb-1"><b class="Perfect">2 </b> FTP Accounts</p>
                        <p class="Perfect mb-1"><b class="Perfect">2 </b>MySQL Databases</p>
                        <p class="Perfect mb-1"><b class="Perfect">Cloudflare </b>CDN</p>
                    </div>
                </div>
                  <div class="col-md-3">
                    <div class="price_rate  text-center text-secondary mt-3">
                        <h5 class="silver  pt-3 mb-1">SILVER</h5>
                        <p class="Perfect mb-1">Perfect for small websites </p>
                        <div class="whprice_monthly">
                            <h5 class="mb-1">$2.99<small>/mo</small></h5>
                            <p class="Perfect mb-2">Save 12% by paying annually!</p>
                        </div>
                        <!-- <div class="whprice yearly active">
                                <h2>$2.63<small>/mo</small></h2>
                                <span>was $2.99</span>
                        </div> -->
                        <a href="" type="button" class="btn btn-primary col-md-6 order  mb-2">Order Now</a>
                        <p class="Perfect mb-1"><b class="">500 MB </b>Disk Space</p>
                        <p class="Perfect mb-1"><b class="">10 GB </b>Bandwidth</p>
                        <p class="Perfect mb-1"><b class="">2 </b>Subdomains</p>
                        <p class="Perfect mb-1"><b class="">2 </b>Email Addresses</p>
                        <p class="Perfect mb-1"><b class="">2 </b> FTP Accounts</p>
                        <p class="Perfect mb-1"><b class="">2 </b>MySQL Databases</p>
                        <p class="Perfect mb-1"><b class="">Cloudflare </b>CDN</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>

    <section class="pakeges">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <h2 class="package_title ">included with all packages</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="text-center mt-4">
                        <img src="<?php echo URL::to('/'); ?>/public/assets/images/instant.webp" class="" alt="">
                        <h4 class="instant mt-4">INSTANT ACTIVATION</h4>
                        <p class="text-secondary">Your website will be activated and ready for use within 5 seconds following receipt of payment.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center mt-4">
                        <img src="<?php echo URL::to('/'); ?>/public/assets/images/support.webp" class="" alt="">
                        <h4 class="instant mt-4">24/7 TECH SUPPORT</h4>
                        <p class="text-secondary"> Our technical support team is available to assist with your web hosting service at any time, any day.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center mt-4">
                        <img src="<?php echo URL::to('/'); ?>/public/assets/images/backups.webp" class="" alt="">
                        <h4 class=" instant mt-4">OFFSITE BACKUPS</h4>
                        <p class="text-secondary">We automatically back up all of your configurations, content and databases to an offsite platform.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center mt-4">
                        <img src="<?php echo URL::to('/'); ?>/public/assets/images/ssd.webp" class="" alt="">
                        <h4 class=" instant mt-4">NVME SSD POWERED</h4>
                        <p class="text-secondary">Websites and databases simply perform better on SSDs. We only use NVMe SSDs in our web hosting nodes.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-3">
                    <div class="text-center mt-4">
                        <img src="<?php echo URL::to('/'); ?>/public/assets/images/included.webp" class="" alt="">
                        <h4 class="instant mt-4">99.9% UPTIME GUARANTEE</h4>
                        <p class="text-secondary">We guarantee the uptime of your service. Any downtime will be credited with account credit.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center mt-4">
                        <img src="<?php echo URL::to('/'); ?>/public/assets/images/ddossss.webp" class="" alt="">
                        <h4 class="instant mt-4">PROTECTED BY CLOUDFLARE</h4>
                        <p class="text-secondary">We protect your website against DDoS attacks and exploits. As a Cloudflare partner, we'll keep you online 24/7.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center mt-4">
                        <img src="<?php echo URL::to('/'); ?>/public/assets/images/spamprotection.webp" class="">
                        <h4 class="instant mt-4">SPAM PROTECTION</h4>
                        <p class="text-secondary">Our system automatically monitors mail activity to block spammers, keeping our IPs off blacklists.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center mt-4">
                        <img src="<?php echo URL::to('/'); ?>/public/assets/images/sla.webp" class="" alt="">
                        <h4 class="instant mt-4">SATISFACTION GUARANTEE</h4>
                        <p class="text-secondary">As with all of our services, we'll give you your money back within 72 hours if you're not happy.</p>
                    </div>
                </div>

        </div>
        </div>
    </section>
    <section class="intallation">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="p-5">
                        <h2 class="click_app text-light">1-CLICK APP INSTALL</h2>
                        <h3 class="different_app  text-light">400+ DIFFERENT APPS TO CHOOSE FROM</h3>
                        <p class="need_experienced mb-2 text-light">You don't need to be an experienced webmaster to run a website. Instantly install software, scripts and full content management systems in just a couple of clicks using Softaculous.</p>
                        <strong class="text-light">Select your website's software, install it, us</strong>
                   </div>
                </div>
                <div class="col-md-6">
                    <div class="logo_images ">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="">
                                    <img src="<?php echo URL::to('/'); ?>/public/assets/images/wordpress.webp" class="mb-5 mt-3" alt="">
                                    <div class="tooltip">WordPress</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo URL::to('/'); ?>/public/assets/images/joomla.webp" class="mt-3" alt="">
                                <div class="tooltip">Joomla</div>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo URL::to('/'); ?>/public/assets/images/magento.webp" class="mt-3" alt="">
                                <div class="tooltip">Magento</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo URL::to('/'); ?>/public/assets/images/drupal.webp" class="mt-5" alt="">
                                <div class="tooltip">Drupal</div>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo URL::to('/'); ?>/public/assets/images/xmod.webp" class="mt-5" alt="">
                                <div class="tooltip">X Mod</div>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo URL::to('/'); ?>/public/assets/images/mybb.webp" class="mt-5" alt="">
                                <div class="tooltip">MyBB</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="computer_img">
                        <img src="<?php echo URL::to('/'); ?>/public/assets/images/cpanel.webp" class="cpanal " alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panal_control">
                        <h2 class="click_app  text-light">CPANEL CONTROL PANEL</h2>
                        <h3 class="different_app text-light">POWERFUL, YET INCREDIBLY EASY-TO-USE</h3>
                        <p class="need_experienced text-light">The industry standard in web hosting control. You won't find an easier way to manage your websites.</p>
                        <div class="row">
                            <div class="col-md-6">
                                    <p class="full mb-0 text-light"><img src="<?php echo URL::to('/'); ?>/public/assets/images/bluetick.webp" class="me-2" alt="">Full FTP Access</p>
                                    <p class="full text-light"><img src="<?php echo URL::to('/'); ?>/public/assets/images/bluetick.webp" class="me-2" alt="">Multiple PHP Versions</p>
                            </div>
                            <div class="col-md-6">
                                    <p class="full mb-0 text-light"><img src="<?php echo URL::to('/'); ?>/public/assets/images/bluetick.webp" class="me-2" alt="">Enable/disable moduless</p>
                                    <p class="full text-light"><img src="<?php echo URL::to('/'); ?>/public/assets/images/bluetick.webp" class="me-2" alt="">View statistics and errors</p>
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="footer-left">
            <img src="<?php echo URL::to('/'); ?>/public/assets/images/footer_fire.png"/>
        </div>
        <div class="footer-right">
            <img src="<?php echo URL::to('/'); ?>/public/assets/images/footer_fire.png"/>
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


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>
