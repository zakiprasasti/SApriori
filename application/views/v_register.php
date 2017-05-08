<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SimpleAdmin - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url();?>/assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="<?php echo base_url();?>/assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet">

    </head>


    <body>
        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h2 class="text-uppercase m-t-0 m-b-30">
                                        <a href="index.html" class="text-success">
                                            <span><img src="<?php echo base_url();?>/assets/images/logo_dark.png" alt="" height="30"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" action="register/submit" method="post">

                                    	<div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="name">Full Name</label>
                                                <!-- <input class="form-control" type="text" id="username" required="" placeholder="Michael Zenaty"> -->
                                                <input type="text" class="form-control" name="name" value="" size="50" placeholder="Zaki Prasasti"/>
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="username">Username</label>
                                                <!-- <input class="form-control" type="text" id="username" required="" placeholder="Michael Zenaty"> -->
                                                <input type="text" class="form-control" name="username" value="" size="50" placeholder="zakiprasasti" />
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="password">Password</label>
                                               <!--  <input class="form-control" type="text" id="username" required="" placeholder="Michael Zenaty"> -->
                                                <input type="password" class="form-control" name="password" value="" size="50" placeholder="Enter your password" />
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="emailaddress">Email address</label>
                                                <!-- <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com"> -->
                                                <input type="text" class="form-control" name="email" value="" size="50" placeholder="zakiprasasti@gmail.com" />
                                            </div>
                                        </div>

                                        <!-- <div class="form-group m-b-30">
                                            <div class="col-xs-12">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox5" type="checkbox">
                                                    <label for="checkbox5">
                                                        I accept <a href="#">Terms and Conditions</a>
                                                    </label>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up Free</button> -->
                                                <input type="submit" class="btn btn-lg btn-primary btn-block" name="daftar" value="Daftar"/>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Already have an account?  <a href="pages-login.html" class="text-dark m-l-5">Sign In</a></p>
                                </div>
                            </div>

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url();?>/assets/js/jquery-2.1.4.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/metisMenu.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="<?php echo base_url();?>/assets/js/jquery.app.js"></script>

    </body>
</html>