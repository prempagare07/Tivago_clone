
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Voyager</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
</head>

<body class="bg-gradient-warning">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;assets/img/sideimage/image3.jpg&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5"><a class="btn btn-warning button" href="../index.php"><i class="fa fa-arrow-left"></i></a>
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Welcome Back!</h4>
                                        <?php
                                        if(isset($_GET['error'])){
                                            if($_GET['error']== 'emptyfields'){
                                                echo '<p class="text-danger mb-4">please enter all the details</p> ';
                                            }
                                            else if($_GET['error']=='sqlerror'){
                                                echo '<p class="text-danger mb-4">problem with database could not register</p> ';
                                            }
                                            else if($_GET['error']=='wrongpwd'){
                                                echo '<p class="text-danger mb-4">Password Incorrect</p> ';
                                            }
                                            else if($_GET['error']=='nouser'){
                                                echo '<p class="text-danger mb-4">username / email not found</p> ';
                                            }
                                            else if($_GET['error']=='indirectaccess'){
                                                echo '<p class="text-danger mb-4">Please dont try to inappropriatly access the sysyem files </p> ';
                                            }
                                        }
                                        else if(isset($_GET['login'])){
                                            if($_GET['login']=='success'){
                                                echo '<p class="text-success mb-4">Registered</p> ';
                                            }
                                        }
                                        ?>
                                    </div>
                                    <form class="user" method="POST" action="includes/login.inc.php">
                                        <div class="form-group"><input class="form-control form-control-user" type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter username / Email Address..." name="email"></div>
                                        <div class="form-group"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="login-password"></div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                            </div>
                                        </div><button class="btn btn-primary btn-block text-white btn-user" type="submit" name="login-submit">Login</button>
                                        <hr><a class="btn btn-primary btn-block text-white btn-google btn-user" role="button"><i class="fab fa-google"></i>&nbsp; Login with Google</a><a class="btn btn-primary btn-block text-white btn-facebook btn-user" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Login with Facebook</a>
                                        <hr>
                                    </form>
                                    <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                                    <div class="text-center"><a class="small" href="register.php">Create an Account!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>
</html>