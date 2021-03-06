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

					<!-- Password recovery -->
					<form method="POST" ng-app="app" ng-controller="mainController" novalidate id="formRecover" name="formRecover">
						<div class="panel panel-body login-form">
						<input type="hidden" id="token" name="token" value="<?=TOKEN?>'">
							<div class="text-center">
								<img class="img-circle" style="width:100px;height:100px" src="<?=ASSETS?>images/logo.jpg">
								<h5 class="content-group">Mendez Christian Academy  <small class="display-block">Student Information System</small></h5>
                            </div>

							<div class="form-group">
								<input type="text" class="form-control" name="username" ng-model="username" placeholder="Username" required>
								<span ng-messages="formRecover.username.$error" ng-if="formRecover.username.$dirty">
									<strong ng-message="required" class="text-danger">This field is required.</strong>
								</span>
							</div>

							<div class="form-group">
								<button type="submit" id="btn-recover" onclick="recover()" ng-disabled="formRecover.$invalid" class="btn bg-green btn-block">Reset password <i class="icon-arrow-right14 position-right"></i></button>
							</div>
							
							<div class="text-center">
								<a href="<?=URL?>auth/login">Login</a>
							</div>

						</div>
					</form>
					<!-- /password recovery -->


					<!-- Footer -->
					<div class="footer text-muted text-center">
						Copyright &copy; 2014. <a href="#">Limitless admin template</a> by <a href="http://interface.club">Eugene Kopyov</a>
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
toastr_option();
</script>
</body>
</html>
