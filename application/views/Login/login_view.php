<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
	<title>Coffee Shop</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="baseUrl" content="<?php echo base_url(); ?>">
  <link href="https://fonts.googleapis.com/css?family=Prompt:300&display=swap" rel="stylesheet">

   
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/image/logo/bot.ico') ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('csslogin/vendor/bootstrap/css/bootstrap.min.css') ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('csslogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('csslogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('csslogin/vendor/animate/animate.css') ?>"/>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('csslogin/vendor/css-hamburgers/hamburgers.min.css') ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('csslogin/vendor/animsition/css/animsition.min.css') ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('csslogin/vendor/select2/select2.min.css') ?>"/>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('csslogin/vendor/daterangepicker/daterangepicker.css') ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('csslogin/css/util.css') ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('csslogin/css/main.css') ?>"/>

<style >
	body {
    zoom: 91%;
    font-family: 'Prompt', sans-serif;
}


</style>
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form " ng-controller="loginController">
					<span class="login100-form-title p-b-43" style="font-family: 'Prompt';font-size: 25px" >
						Coffe Shop Management
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "ชื่อผู้ใช้ ห้ามเว้นค่าว่าง">
						<input class="input100" type="text" name="text" id="text" autocomplete="off" style="font-family: 'Prompt'" ng-model="form.username" >
						<span class="focus-input100"></span>
						<span class="label-input100" style="font-family: 'Prompt'">ชื่อผู้ใช้</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="รหัสผ่าน ห้ามเว้นว่าง" >
						<input class="input100" type="password" name="pass" id="pass" style="font-family: 'Prompt'" ng-model="form.password">
						<span class="focus-input100"></span>
						<span class="label-input100" style="font-family: 'Prompt'">รหัสผ่าน</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span style="font-size:14px;font-family: 'Prompt'">จดจำรหัสผ่าน</span>
							</label>
						</div>

						<div class="contact100-form-checkbox">
							<label class="label" style="font-size:14px;font-family: 'Prompt';color: #ff0000">
								<label style="display: none" id="texterror">ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง !<label>
							</label>
						</div>
					</div>
					<div class="container-login100-form-btn p-t-46 p-b-90">
						<button type="submit" class="login100-form-btn" ng-click="login(form);">
							<span style="font-size:16px;font-family: 'Prompt'">เข้าสู่ระบบ</span>
						</button>
					</div>
					
					

				</form>

				<div class="login100-more" style="background-image: url(<?php echo base_url('csslogin/images/Bg.jpg') ?>);">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="<?php echo base_url('csslogin/vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('csslogin/vendor/animsition/js/animsition.min.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('csslogin/vendor/bootstrap/js/popper.js'); ?>"></script>
	<script src="<?php echo base_url('csslogin/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('csslogin/vendor/select2/select2.min.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('csslogin/vendor/daterangepicker/moment.min.js'); ?>"></script>
	<script src="<?php echo base_url('csslogin/vendor/daterangepicker/daterangepicker.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('csslogin/vendor/countdowntime/countdowntime.js'); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('csslogin/js/main.js'); ?>"></script>

	<script src="<?php echo base_url('assets/js/angular/angular.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/angular/app.js')?>"></script>

	<script src="<?php echo base_url('assets/js/angular/login/loginController.js')?>"></script>
	<script src="<?php echo base_url('assets/js/angular/login/loginService.js')?>"></script>


</body>
</html>