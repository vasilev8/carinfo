<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Signup</title>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="css/MyCSS.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<!--Navigation-->
<div class="top">
	<div class="wrapper">
    	<div class="top-logo"><h1><a href="Homepage.php"></a></h1></div>
    	<div class="top-menu">
            <a href="Homepage.php" class="active" id="home">Начало</a>
			<a href="Articles.php" id="article">Статии</a>
            <a href="All.php" id="allbrands">Всички марки</a>
			<a href="Wallpapers.php" id="wallpapers">Wallpapers</a>
			
			<?php
				if (isset($_SESSION['u_id'])){
					echo '<a href="profile-page.php" id="profile-link">Профил</a>';
					
					echo '<form class="logout" action="includes/logout.inc.php" method="POST">
						<a href="signup.php" class="signup" style="width:50px; height:50px; display:none"></a>
						<button type="submit" name="submit">Logout</button>
						</form>';
				}
				else {
					echo '<form class="login" action="includes/login.inc.php" method="POST">
						<input type="text" name="uid" placeholder="Username/E-mail">
						<input type="password" name="pwd" placeholder="Password">
						<button type="submit" name="submit">Login</button>
						<a href="signup.php">Sign up</a> 
						</form>';
				}
			?>
	
		</div>
    </div>
</div>

<!--Section-->
<section>
	<div class="main" style="border:1px solid #ff9700;">
	
		<div class="main-left">
			<h2>Sign Up</h2>
				<form class="register-form" action="includes/signup.inc.php" method="POST">
					<input type="text" name="first" placeholder="First name" required>
					<input type="text" name="last" placeholder="Last name" required>
					<input type="text" name="email" placeholder="E-mail" required>
					<input type="text" name="uid" placeholder="Username" required>
					<input type="password" name="pwd" placeholder="Password" required>
					<button type="submit" name="submit">Sign up</button>
				</form>
		</div>
		
		<div class="main-right2">
			<h2>Login</h2>
				<?php
				if (isset($_SESSION['u_id'])){
					echo '<form class="login" action="includes/logout.inc.php" method="POST">
						<button type="submit" name="submit">Logout</button>
						</form>';
				}
				else {
					echo '<form class="login-form" action="includes/login.inc.php" method="POST">
						<a href="signup.php" class="signup" style="width:50px; height:50px; display:none"></a>
						<input type="text" name="uid" placeholder="Username/E-mail">
						<input type="password" name="pwd" placeholder="Password">
						<button type="submit" name="submit">Login</button> 
						</form>';
				}
			?>
		</div>
		
	</div>
</section>

<!-- Footer -->
<footer class="w3-border-top w3-border-orange">
	<div class="social"><p>Последвайте ни в	<i class="fa fa fa-thumbs-o-up fa-2x"></i></p>
		<a href="#"><i class="fa fa-facebook-official fa-3x"></i></a>
		<a href="#"><i class="fa fa-instagram fa-3x"></i></a>
		<a href="#"><i class="fa fa-youtube-square fa-3x"></i></a>
	</div>
	<div class="copyright">
	©Copyrights <a href="Homepage.php">carinfo.bg</a>Всички права запазени.<br>
	Всички снимки са собственост на техните респективни собственици.Ако откриете някоя снимка,която е ваша собственост, моля, свържете се с нас
	</div>
</footer>
</body>
</html>