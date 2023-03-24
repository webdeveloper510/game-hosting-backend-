<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="<?php echo URL::to('/'); ?>/public/assets/images/logo_2.png">
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

    .col-md-5 {
        position: relative;
    }

  .card{
    background-color: #242633;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 550px;
    position: absolute;
    top: 60px;
    bottom: 0;
    left: 0;
    right: 0;
  }

  .login_form{
    background-image: url('./../../../game-hosting/public/assets/images/banner_bg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 740px;
  }

  .sign_form {
    position: relative;
}

  .form_sign {
    position: absolute;
    top: -101px;
    bottom: 0px;
    left: 95px;
    right: 0;
}

.forget {
    margin-left: 55px;
}


.btn1-warning {
    color: black;
    background-color: #e5a102;
    border-color: #e5a102;
    font-weight: 600;
}

a.text-warning {
    text-decoration: none;
}

.remember {
    margin-left: 12px;
}

.forgot_password {
    margin-left: 48px;
}
</style>
</head>

<body>
    <section class="login_form">
        <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-md-5">
                        <div class="card my-5">
                            <div class="container">
                                <form class="row Sign_up my-5 p-4" action="{{URL('/register_user')}}" method="post">
                                    @csrf
                                    <div class="sign_form">
                                        <div class="form_sign pb-4"><button type="submit" class="btn btn-warning">Sign up Form</button></div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="firstname" class="form-label text-light">First Name</label>
                                        <input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="first_name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastname" class="form-label text-light">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" placeholder="Enter last name" name="last_name">
                                    </div>
                                    <div class=" mb-3">
                                        <label for="email" class="form-label text-light">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label text-light">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label text-light">Phone</label>
                                        <input type="tel" class="form-control" id="phone"  placeholder="Enter phone" name="phone">
                                    </div>
                                    <div class="mb-3 form-check remember">
                                        <input type="checkbox" class=" form-check-input" id="exampleCheck1">
                                        <label class=" form-check-label text-light " for="exampleCheck1">Remember me</label>
                                        <label class="form-check-label1 forget text-light" for="exampleCheck1"><a href="#" class="text-warning forgot_password">Forget Password ?</a></label>
                                    </div>
                                    <div class="d-grid gap-2 col-md-12 mb-3 text-center ">
                                        <button type="submit" class="btn btn1-warning ">Sign Up</button>
                                    </div>
                                    <div class="mb-3 text-center">
                                        <label for="" class="form-label text-light me-3">You have an account ? - <a href="login.html" class="forget1 text-warning">Login</a></label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
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
