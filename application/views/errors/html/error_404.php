<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #fff;
	background-color: transparent;
	font-size: 55px;
	text-align: center;
	font-weight: normal;
	padding: 14px 15px 10px 15px;
}

h2 {
	color: #fff;
	background-color: transparent;
  font-family: 'Pacifico' !important;
  font-size: 35px;
	text-align: center;
	font-weight: normal;
	padding: 14px 15px 10px 15px;
}
code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 160px 0 14px 0;
	text-align: center;
	font-size: 20px;
}

p {
	margin: 12px 15px 12px 15px;
}
.page-login {
  color: #ffffff;
}

@media (max-width: 767px) {
  .page-login {
    margin-top: 60px;
  }
  
}
.page-login:before {
  position: fixed;
  top: 0;
  left: 0;
  content: '';
  width: 100%;
  height: 100%;
  background-image: url("templates/backend/assets/images/login.jpg");
  background-position-y: top;
  -webkit-background-size: cover;
          background-size: cover;
  z-index: -1;
}
.page-login:after {
  position: fixed;
  top: 0;
  left: 0;
  content: '';
  width: 100%;
  height: 100%;
  background-color: rgba(38, 50, 56, 0.85);
  z-index: -1;
}
.button {
	margin-top: 30px;
}
a.btn {
	background: #000;
	color: #fff;
	padding: 12px 8px;
	border-radius: 5px;
	font-size: 16px;
	text-decoration: none;
}
</style>
</head>
<body class="page-login">
	<div id="container">
		<h1><?php echo $heading; ?></h1>
		<?php echo $message; ?>
	</div>
</body>
</html>