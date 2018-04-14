<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= COMPANY_NAME ?></title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?=ASSETS?>css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?=ASSETS?>css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?=ASSETS?>css/core.css" rel="stylesheet" type="text/css">
	<link href="<?=ASSETS?>css/components.css" rel="stylesheet" type="text/css">
	<link href="<?=ASSETS?>css/colors.css" rel="stylesheet" type="text/css">
	<link href="<?=ASSETS?>toastr/css/toastr.min.css" rel="stylesheet" type="text/css">
	<link rel="icon" href="<?=ASSETS?>images/logo.jpg">
	<!-- /global stylesheets -->


</head>

<body class="login-container">

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Simple login form -->
					<form ng-app="app" ng-controller="mainController" novalidate name="formLogin" id="formLogin" method="POST">
						<div class="panel panel-body login-form">
							<div class="text-center">
								<img class="img-circle" style="width:100px;height:100px" src="<?=ASSETS?>images/logo.jpg">
								<h5 class="content-group">Mendez Christian Academy  <small class="display-block">Student Information System</small></h5>
                            </div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="hidden" class="form-control" id="token" name="token" value="<?=TOKEN?>">
								<input type="text" class="form-control" id="usernmae" name="username" ng-model="username" placeholder="Username" required>
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
								<span ng-messages="formLogin.username.$error" ng-if="formLogin.username.$dirty">
									<strong ng-message="required" class="text-danger">This field is required.</strong>
								</span>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" ng-model="password" id="password" autocomplete="new-password" name="password"  class="form-control" placeholder="Password" required>
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
								<span ng-messages="formLogin.password.$error" ng-if="formLogin.password.$dirty">
									<strong ng-message="required" class="text-danger">This field is required.</strong>
								</span>
							</div>

							<div class="form-group">
								<button type="submit" id="btn-login" ng-disabled="formLogin.$invalid" onclick="login()" class="btn bg-green btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
							</div>

							<div class="text-center">
								<a href="<?=URL?>auth/recover">Forgot password?</a>
							</div>
						</div>
					</form>
					<!-- /simple login form -->


					<!-- Footer -->
					<div class="footer text-muted text-center">
					&copy; <?= date('Y')?>. <a href="<?=URL?>login"><?= COMPANY_NAME ?></a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

	<!-- Core JS files -->
<script type="text/javascript" src="<?=ASSETS?>js/plugins/loaders/pace.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/core/libraries/jquery.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/core/libraries/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/plugins/loaders/blockui.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>functions/ajax.js"></script>
<!-- /core JS files -->
<!-- Theme JS files -->
<script type="text/javascript" src="<?=ASSETS?>js/core/app.js"></script>

<script type="text/javascript" src="<?=ASSETS?>js/plugins/ui/ripple.min.js"></script>
<!-- /theme JS files -->
<script type="text/javascript" src="<?=ASSETS?>angular/1.4.8.angular.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>angular/1.4.2.angular.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>toastr/js/toastr.min.js"></script>

<!-- /theme JS files -->
<script type="text/javascript">
var app = angular.module('app', ['ngMessages']);
app.controller('mainController',function($scope){});
<?php 
if(isset($_SESSION['username'])) { ?>
notify('info','Password has been changed');
<?php unset($_SESSION['username']); } ?>

toastr_option();
</script>
</body>
</html>
