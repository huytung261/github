<?php
	
	include ('config.php');
	if(isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM member WHERE email = '$email' and password = '$password'";
     	$result = mysqli_query($conn,$sql);
    	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      	$count = mysqli_num_rows($result);
		if($count == 1) {
			// session_register("email");
			// $_SESSION['login_user'] = $email;
			// echo 'dang nhap thanh cong';
			header("location: index.php");
		}else {
			echo 'Sai tài khoản hoặc mật khẩu';
		}
	}
?>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css1/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
 <link rel="stylesheet" href="css1/style.css" type="text/css" media="all">
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
</head>
<body>

	<h1>LOGIN FORM</h1>

	<div class="w3layoutscontaineragileits">
	<h2>Login here</h2>
		<form action="login.php" method="post">
			<input type="email" placeholder="EMAIL" required="" name="email">
			<input type="password"  placeholder="PASSWORD" required="" name="password">
			<div class="aitssendbuttonw3ls">
                <input type='submit' class="button" name="dangnhap" value='LOGIN'> 
			</div>
            
		</form>
    <h2><a href='register.php' title='Register'>Register</a> </h2>
	</div>
</body>
<!-- //Body -->

</html>