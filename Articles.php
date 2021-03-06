<?php
	include_once 'includes/dbh.inc.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Articles</title>
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
            <a href="Homepage.php" id="home">Начало</a>
			<a href="Articles.php" class="active" id="article">Статии</a>
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

<!--Section -->

<div class="main">

	<div class="main-left">
		<ul class="articles">
			<li>
				<a class="img" href="articles/VW-Golf.php" title="Прочети повече">
					<img id="myImg" src="img/article3.jpg" alt="picture">
				</a>
				<div class="article-info">
					<a class="article-title" href="#">Еволюцията на VW Golf</a>
					<span class="article-added">
					<i class="fa fa-clock-o"></i>
					20.04.2017 г.</span>
					<br>
					<div class="article-description">
						Най-популярният и най-продаван автомобил в Европа - VW Golf, празнува своя 
						44-годишен юбилей през тази година. Моделът излиза на пазара за първи път 
						през 1974 година, има 7 поколения и е продаден в над 30 млн. екземпляра.
						Пускането на първото поколение Golf се определя като революционна стъпка за марката,
						тъй като от модел със заднопоставен двигател с ...
					</div>
					<a class="read-more" href="#">
					<i class="fa fa-arrow-right" aria-hidden="true">.</i>
					Прочети повече</a>
				</div>
				<div class="clear"></div>
			</li>
			
			<li>
				<a class="img" href="Mercedes-Benz-legend.php" title="Прочети повече">
					<img id="myImg" src="img/article2.jpg" alt="picture">
				</a>
				<div class="article-info">
					<a class="article-title" href="#">Мерцедес-Чочоне</a>
					<span class="article-added">
					<i class="fa fa-clock-o"></i>
					20.04.2017 г.</span>
					<br>
					<div class="article-description">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
						in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
						sunt in culpa qui officia deserunt mollit anim id est laborum...
					</div>
					<a class="read-more" href="#">
					<i class="fa fa-arrow-right" aria-hidden="true">.</i>
					Прочети повече</a>
				</div>
				<div class="clear"></div>
			</li>

			<li>
				<a class="img" href="Mercedes-Benz-legend.php" title="Прочети повече">
					<img id="myImg" src="img/article1.jpg" alt="picture">
				</a>
				<div class="article-info">
					<a class="article-title" href="#">Audi SQ7</a>
					<span class="article-added">
					<i class="fa fa-clock-o"></i>
					20.04.2017 г.</span>
					<br>
					<div class="article-description">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
						in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
						sunt in culpa qui officia deserunt mollit anim id est laborum...
					</div>
					<a class="read-more" href="#">
					<i class="fa fa-arrow-right" aria-hidden="true">.</i>
					Прочети повече</a>
				</div>
			</li>
		</ul>
	</div>
	
	<div class="main-right">
        <div class="t3">Топ 10 Автомобилни компании</div>
		<dl class="box1">
        	<dt><span class="s01">1.</span><a href="#"><img class="image1" src="img/toyota.jpg">Toyota</a></dt>
        	<dt><span class="s01">2.</span><a href="#"><img class="image1" src="img/vw.jpg">Volkswagen</a></dt>
        	<dt><span class="s01">3.</span><a href="#"><img class="image1" src="img/mercedes.jpg">Mercedes-Benz</a></dt>
        	<dt><span class="s01">4.</span><a href="#"><img class="image1" src="img/bmw.jpg">BMW</a></dt>
        	<dt><span class="s01">5.</span><a href="Audi.php"><img class="image1" src="img/audi.jpg">Audi</a></dt>
        	<dt><span class="s01">6.</span><a href="#"><img class="image1" src="img/gm.jpg">General Motors</a></dt>
        	<dt><span class="s01">7.</span><a href="#"><img class="image1" src="img/ford.jpg">Ford</a></dt>
        	<dt><span class="s01">8.</span><a href="#"><img class="image1" src="img/nissan.jpg">Nissan</a></dt>
        	<dt><span class="s01">9.</span><a href="#"><img class="image1" src="img/hyundai.jpg">Hyundai</a></dt>
        	<dt><span class="s01">10.</span><a href="#"><img class="image1" src="img/honda.jpg">Honda</a></dt>
        </dl>
		
       <div class="t3">Топ 10 Мотоциклетни компании</div>
        <dl class="box1">
        	<dt><span class="s01">1.</span><a href="#"><img class="image1" src="img/yamaham.jpg">Yamaha</a></dt>
        	<dt><span class="s01">2.</span><a href="#"><img class="image1" src="img/hondam.jpg">Honda</a></dt>
        	<dt><span class="s01">3.</span><a href="#"><img class="image1" src="img/ducatim.jpg">Ducati</a></dt>
        	<dt><span class="s01">4.</span><a href="#"><img class="image1" src="img/kawasakim.jpg">Kawasaki</a></dt>
        	<dt><span class="s01">5.</span><a href="#"><img class="image1" src="img/suzukim.jpg">Suzuki</a></dt>
        	<dt><span class="s01">6.</span><a href="#"><img class="image1" src="img/harleym.jpg">Harley-Davidson</a></dt>
        	<dt><span class="s01">7.</span><a href="#"><img class="image1" src="img/bmwm.jpg">BMW</a></dt>
        	<dt><span class="s01">8.</span><a href="#"><img class="image1" src="img/triumphm.jpg">Triumph</a></dt>
        	<dt><span class="s01">9.</span><a href="#"><img class="image1" src="img/apriliam.jpg">Aprilia</a></dt>
        	<dt><span class="s01">10.</span><a href="#"><img class="image1" src="img/mvm.jpg">MV Agusta</a></dt>
        </dl>
	</div>

</div>
	<!-- Footer -->
<footer class="w3-border-top w3-border-orange" style="margin-top:5px">
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