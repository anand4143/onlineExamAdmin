<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Dec 2020 09:57:57 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Login  | Target PCS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->

    <!-- Bootstrap Css -->
    <link href="<?php echo CSS; ?>/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo CSS; ?>/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo CSS; ?>/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary">
                            <div class="text-primary text-center p-4">
                                <h5 class="text-white font-size-20">Welcome Back Target PCS!</h5>
                                <!-- <p class="text-white-50">Sign in to continue to Veltrix.</p> -->
                                <a href="index.html" class="logo logo-admin">
                                    <img src="<?php echo IMAGES; ?>logo-sm.png" height="24" alt="logo">
                                </a>
                            </div>
                        </div>

                        <div class="card-body p-4">
                            <div class="p-3">
                                <form class="form-horizontal mt-4" action="<?php echo URL; ?>/login/login" method="POST">

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
                                    </div>
                                    <?php 
                                        if(isset($validation)){
                                    ?>
                                    <div class="text-danger"><?php $validation->listErrors(); ?></div>
                                    <?php
                                        }
                                    ?>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                                <label class="custom-control-label" for="customControlInline">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                        </div>
                                    </div>

                                    <div class="form-group mt-2 mb-0 row">
                                        <div class="col-12 mt-4">
                                            <a href="pages-recoverpw.html"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                        </div>
                                    </div>

                                </form>

                                <?php if (isset($validation)): ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
              </div>
            </div>
          <?php endif; ?>

                            </div>
                        </div>

                    </div>

                    <div class="mt-5 text-center">
                        <p>Don't have an account ? <a href="pages-register.html" class="font-weight-medium text-primary"> Signup now </a> </p>
                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="<?php echo LIBS; ?>jquery/jquery.min.js"></script>
    <script src="<?php echo LIBS; ?>jquery/jquery.min.js"></script>
    <script src="<?php echo LIBS; ?>bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo LIBS; ?>metismenu/metisMenu.min.js"></script>
    <script src="<?php echo LIBS; ?>simplebar/simplebar.min.js"></script>
    <script src="<?php echo LIBS; ?>node-waves/waves.min.js"></script>

    <script src="<?php echo JS; ?>app.js"></script>

</body>


<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Dec 2020 09:57:57 GMT -->
</html>