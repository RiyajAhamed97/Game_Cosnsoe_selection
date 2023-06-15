
 <?php
session_start();
require 'consumer/users/users.php';

$users = getUsers();

?>

<!DOCTYPE html>
<html lang="zxx">
<head>

<title>PS4 Gaming Console</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords"
	content="Game Console a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"
	media="all">
<!-- Index-Page-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/commen.css" type="text/css" media="all">

<!-- Owl-Carousel-CSS -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css"
	media="all">
<!-- Chocolat-CSS -->
<link rel="stylesheet" href="css/chocolat.css" type="text/css"
	media="all">
	<link rel="stylesheet" href="css/barrr.css" type="text/css"
	media="all">
<!-- Animate-CSS -->
<link rel="stylesheet" href="css/animate-custom.css" type="text/css"
	media="all">
<!-- //Custom-Stylesheet-Links -->

<!-- Fonts -->
<link rel="stylesheet"
	href="//fonts.googleapis.com/css?family=Montserrat:400,700"
	type="text/css" media="all">
<link rel="stylesheet"
	href="//fonts.googleapis.com/css?family=Consoleto:400,100,300,500"
	type="text/css" media="all">
<link rel="stylesheet"
	href="//fonts.googleapis.com/css?family=Press+Start+2P" type="text/css"
	media="all">
<!-- //Fonts -->

<!-- rating -->
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
	type="text/css" media="all">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
	type="text/css" media="all">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
	type="text/css" media="all">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
	type="text/css" media="all">
<!-- //rating -->
<!-- Font-Awesome-File-Links -->
<!-- CSS -->
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css"
	media="all">
<!-- TTF -->
<link rel="stylesheet" href="fonts/fontawesome-webfont.ttf"
	type="text/css" media="all">
<!-- //Font-Awesome-File-Links -->


</head>
<!-- //Head -->



<!-- Body -->
<body>



	<meta name="Consolets" content="noindex">
<header>
	<link rel="stylesheet" href="/assests/css/font-awesome.min.css">
	<!-- New toolbar-->
	<div class="pull-right toggle-right-sidebar">
		<span
			class="fa title-open-right-sidebar tooltipstered fa-angle-double-right"></span>
	</div>

	<!-- Header -->
	<div class="agileheader" id="agileitshome">

		<!-- Navigation -->
		<div class="w3lsnavigation">
			<nav
				class="navbar navbar-inverse agilehover-effect wthreeeffect navbar-default">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed"
						data-toggle="collapse" data-target="#navbar" aria-expanded="false"
						aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
					<!-- Logo -->
					<div class="logo">
						<a class="navbar-brand logo-w3l button" href="index.html">Gaming
							Consoles</a>
					</div>
					<!-- //Logo -->
				</div>

				<div id="navbar" class="navbar-collapse navbar-right collapse">
					<ul class="nav navbar-nav navbar-right cross-effect"
						id="cross-effect">
						<li><a class="scroll" href="index.php">Home</a></li>
						<li><a href="login.php">Login</a></li>

						<li><a href="Reg.php">Rigister</a></li>

					
						
					</ul>
				</div>


			</nav>
		</div>
		<!-- //Navigation -->
</header>
	<div class="container " style="margin-top: 5rem;">
         <?php foreach ($users as $user): ?>
                <div>
			<input name="Usern" type="hidden" class="Input"
				value="<?php echo $user['email'] ?>"> <input name="Pass" type="hidden"
				class="Input" value="<?php echo $user['Password'] ?>"> <input
				name="Pass" type="hidden" class="Input"
				value="<?php echo $user['id'] ?>">

		</div>
                 <?php endforeach;; ?>
        <div class="row">
			<div class="span12" align="center">
				<h1 style="text-align: center;">Sign In</h1>
				<hr>
				<form class="form-horizontal" method="post">
					<div class="control-group">
						<label class="control-label">Your Email</label>
						<div class="controls">
							<input type="text" name="email" id="email">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Password</label>
						<div class="controls">
							<input type="password" name="password" id="password"> 
						</div>
					</div>
					<div>
					
					</div>
					<input type="submit" name="submit"value="login">
				</form>
			</div>
		</div>
	</div>
    <?php

    if (isset($_POST['submit'])) {

    	$email=$_POST['email'];
    	$password=$_POST['password'];

    	$valid = false;

        for ($i=0; $i <count($users) ; $i++) { 
        	if(($email == $users[$i]['email'])&&($password == $users[$i]['Password'])){
        		$valid=true;
        		break;
        	}
        }

        if($valid) {
            $_SESSION["name"]=$email;
        	echo "
    		       <script>
    		           location.href='home.php';
    		       </script> 
    		   ";
    		$file = "user.json";
    		$arr = array(
    		    'email' => $email,
    		    'password' => $password
    		);
    		$json_string = json_encode($arr);
    		file_put_contents($file, $json_string);
        }
        else {
          echo "
    		       <script>
    		           alert('Pleace Enter Right Username and password!!');
    		       </script> 
    		   ";
        }


        
        
    }
    ?>
    <!-- Footer section -->
	<div class="container">
		<hr>

	</div>

	
	<script src="http://code.jquery.com/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>