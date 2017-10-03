<!DOCTYPE html>
<html lang="en" class="">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	
	<title>APJanmabhoomi</title>

	<!--     Fonts and icons     -->
	<link rel="shortcut icon" href="#.ico">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
	<!-- CSS Files -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/material-kit.min.css" rel="stylesheet">

	<style>
		/* .cards .container-fluid .row .col-sm-6{
			padding-left:0;
			padding-right:0;
		} */
	</style>
</head>
<body style="padding-top:20vh;" class="signup-page">
    <?php require_once ('header.php'); ?>
   
	<div class="container">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="card card-signup">
                    <h2 class="card-title text-center">Register</h2>
                    <div class="row">                       
                    <div class="col-md-8 col-md-offset-2"                          
                        <form class="form" method="" action="">
                            <div class="card-content">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">face</i>
                                    </span>
                                    <div class="form-group is-empty"><input class="form-control" placeholder="Name" type="text"><span class="material-input"></span></div>
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </span>
                                    <div class="form-group is-empty"><input class="form-control" placeholder="E-mail" type="text"><span class="material-input"></span></div>
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                    <div class="form-group is-empty"><input placeholder="Password" class="form-control" type="password"><span class="material-input"></span></div>
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                    <div class="form-group is-empty"><input placeholder="Confirm Password" class="form-control" type="password"><span class="material-input"></span></div>
                                </div>

                            </div>
                            <div class="footer text-center">
                                <a href="#" class="btn btn-primary btn-round">Go Ahead</a>
                            </div>
                        </form>
                    </div>   
                    </div>
                </div>

            </div>
        </div>		

		<?php //require_once ('./#.html'); ?> <!--footer page-->

	</div><!--container-->

	<!--   Core JS Files   -->
	<script src="./js/jquery.min.js" type="text/javascript"></script>
	<script src="./js/bootstrap.min.js" type="text/javascript"></script>
	<script src="./js/material.min.js"></script>
	<!--    Control Center for Material Kit: activating the ripples, parallax effects-->
	<script src="./js/material-kit.min.js" type="text/javascript"></script>

</body>
</html>