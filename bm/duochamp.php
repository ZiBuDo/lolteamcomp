<?php
error_reporting(0);
@ini_set('display_errors', 0); //no error reporting on live
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Title here -->
		<title>LoL Team Comps</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<link rel="shortcut icon" href="/img/logo.gif" type="image/x-icon" />
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		<script src="js/sorttable.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		 
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Animate CSS -->
		<link href="css/animate.min.css" rel="stylesheet">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link href="css/settings.css" rel="stylesheet">
		<!-- SEARCH AUTO FILL SETTINGS -->
		<link href="css/search.css" rel="stylesheet">
		<!--[if IE ]><link rel="stylesheet" href="css/settings-ie8.css"><![endif]-->
		<!-- Portfolio CSS -->
		<link href="css/prettyPhoto.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		<!--[if IE]><link rel="stylesheet" href="css/ie-style.css"><![endif]-->
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	
	<body>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" >
		 //Search function
		 $(function() {
			var $cells = $("td");
			$("#search").keyup(function() {
				var val = $.trim(this.value).toUpperCase();
					$cells.parent().hide();
					$cells.filter(function() {
						return -1 != $(this).text().toUpperCase().indexOf(val);
					}).parent().show();
				$("#search").toggleClass('focus')
			});
		});
		$(function() {
			var $cells = $("td");
			$("#c1").keyup(function() {
				var val = $.trim(this.value).toUpperCase();
					$cells.parent().hide();
					$cells.filter(function() {
						return -1 != $(this).text().toUpperCase().indexOf(val);
					}).parent().show();
				$("#c1").toggleClass('focus')
			});
		});
		$(function() {
			var $cells = $("td");
			$("#c2").keyup(function() {
				var val = $.trim(this.value).toUpperCase();
					$cells.parent().hide();
					$cells.filter(function() {
						return -1 != $(this).text().toUpperCase().indexOf(val);
					}).parent().show();
				$("#c2").toggleClass('focus')
			});
		});
		$(function() {
			var $cells = $("td");
			$("#c3").keyup(function() {
				var val = $.trim(this.value).toUpperCase();
					$cells.parent().hide();
					$cells.filter(function() {
						return -1 != $(this).text().toUpperCase().indexOf(val);
					}).parent().show();
				$("#c3").toggleClass('focus')
			});
		});
		$(function() {
			var $cells = $("td");
			$("#c4").keyup(function() {
				var val = $.trim(this.value).toUpperCase();
					$cells.parent().hide();
					$cells.filter(function() {
						return -1 != $(this).text().toUpperCase().indexOf(val);
					}).parent().show();
				$("#c4").toggleClass('focus')
			});
		});
		$(function() {
			var $cells = $("td");
			$("#c5").keyup(function() {
				var val = $.trim(this.value).toUpperCase();
					$cells.parent().hide();
					$cells.filter(function() {
						return -1 != $(this).text().toUpperCase().indexOf(val);
					}).parent().show();
				$("#c5").toggleClass('focus')
			});
		});
		
		</script>
		<!-- Body Wrapper -->
		<div class="wrapper white">
		
			<!-- Header Start -->
			<div class="header">
				<!-- Header Information -->
				<div class="header-info">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<h1>LoL Team Comp</h1>
							</div>
							<div class="col-md-4 col-sm-4">
								<!-- Search Box -->
								<div >
									<form class="search" id="champs" method="post" action="search.php" >
										<div class="input-group">
											 <input type="text" id="search" name='champ' class="form-control" placeholder="Search Champions" autocomplete="off">
											 <table class = "results">
												<tbody class="search">
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Aatrox&id=266&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Aatrox.png' height='30' width='30' />&nbsp Aatrox<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Ahri&id=103&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Ahri.png' height='30' width='30' />&nbsp Ahri<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Akali&id=84&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Akali.png' height='30' width='30' />&nbsp Akali<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Alistar&id=12&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Alistar.png' height='30' width='30' />&nbsp Alistar<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Amumu&id=32&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Amumu.png' height='30' width='30' />&nbsp Amumu<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Anivia&id=34&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Anivia.png' height='30' width='30' />&nbsp Anivia<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Annie&id=1&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Annie.png' height='30' width='30' />&nbsp Annie<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Ashe&id=22&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Ashe.png' height='30' width='30' />&nbsp Ashe<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Azir&id=268&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Azir.png' height='30' width='30' />&nbsp Azir<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Bard&id=432&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Bard.png' height='30' width='30' />&nbsp Bard<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Blitzcrank&id=53&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Blitzcrank.png' height='30' width='30' />&nbsp Blitzcrank<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Brand&id=63&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Brand.png' height='30' width='30' />&nbsp Brand<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Braum&id=201&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Braum.png' height='30' width='30' />&nbsp Braum<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Caitlyn&id=51&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Caitlyn.png' height='30' width='30' />&nbsp Caitlyn<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Cassiopeia&id=69&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Cassiopeia.png' height='30' width='30' />&nbsp Cassiopeia<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=ChoGath&id=31&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Chogath.png' height='30' width='30' />&nbsp Cho'Gath<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Corki&id=42&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Corki.png' height='30' width='30' />&nbsp Corki<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Darius&id=122&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Darius.png' height='30' width='30' />&nbsp Darius<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Diana&id=131&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Diana.png' height='30' width='30' />&nbsp Diana<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Dr. Mundo&id=36&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/DrMundo.png' height='30' width='30' />&nbsp Dr. Mundo<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Draven&id=119&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Draven.png' height='30' width='30' />&nbsp Draven<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Ekko&id=245&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Ekko.png' height='30' width='30' />&nbsp Ekko<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Elise&id=60&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Elise.png' height='30' width='30' />&nbsp Elise<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Evelynn&id=28&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Evelynn.png' height='30' width='30' />&nbsp Evelynn<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Ezreal&id=81&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Ezreal.png' height='30' width='30' />&nbsp Ezreal<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Fiddlesticks&id=9&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/FiddleSticks.png' height='30' width='30' />&nbsp Fiddlesticks<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Fiora&id=114&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Fiora.png' height='30' width='30' />&nbsp Fiora<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Fizz&id=105&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Fizz.png' height='30' width='30' />&nbsp Fizz<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Galio&id=3&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Galio.png' height='30' width='30' />&nbsp Galio<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Gangplank&id=41&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Gangplank.png' height='30' width='30' />&nbsp Gangplank<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Garen&id=86&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Garen.png' height='30' width='30' />&nbsp Garen<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Gnar&id=150&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Gnar.png' height='30' width='30' />&nbsp Gnar<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Gragas&id=79&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Gragas.png' height='30' width='30' />&nbsp Gragas<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Graves&id=104&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Graves.png' height='30' width='30' />&nbsp Graves<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Hecarim&id=120&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Hecarim.png' height='30' width='30' />&nbsp Hecarim<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Heimerdinger&id=74&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Heimerdinger.png' height='30' width='30' />&nbsp Heimerdinger<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Irelia&id=39&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Irelia.png' height='30' width='30' />&nbsp Irelia<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Janna&id=40&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Janna.png' height='30' width='30' />&nbsp Janna<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Jarvan IV&id=59&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/JarvanIV.png' height='30' width='30' />&nbsp Jarvan IV<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Jax&id=24&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Jax.png' height='30' width='30' />&nbsp Jax<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Jayce&id=126&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Jayce.png' height='30' width='30' />&nbsp Jayce<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Jinx&id=222&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Jinx.png' height='30' width='30' />&nbsp Jinx<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Kalista&id=429&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Kalista.png' height='30' width='30' />&nbsp Kalista<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Karma&id=43&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Karma.png' height='30' width='30' />&nbsp Karma<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Karthus&id=30&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Karthus.png' height='30' width='30' />&nbsp Karthus<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Kassadin&id=38&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Kassadin.png' height='30' width='30' />&nbsp Kassadin<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Katarina&id=55&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Katarina.png' height='30' width='30' />&nbsp Katarina<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Kayle&id=10&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Kayle.png' height='30' width='30' />&nbsp Kayle<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Kennen&id=85&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Kennen.png' height='30' width='30' />&nbsp Kennen<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=KhaZix&id=121&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Khazix.png' height='30' width='30' />&nbsp Kha'Zix<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=KogMaw&id=96&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/KogMaw.png' height='30' width='30' />&nbsp Kog'Maw<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=LeBlanc&id=7&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Leblanc.png' height='30' width='30' />&nbsp LeBlanc<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Lee Sin&id=64&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/LeeSin.png' height='30' width='30' />&nbsp Lee Sin<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Leona&id=89&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Leona.png' height='30' width='30' />&nbsp Leona<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Lissandra&id=127&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Lissandra.png' height='30' width='30' />&nbsp Lissandra<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Lucian&id=236&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Lucian.png' height='30' width='30' />&nbsp Lucian<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Lulu&id=117&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Lulu.png' height='30' width='30' />&nbsp Lulu<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Lux&id=99&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Lux.png' height='30' width='30' />&nbsp Lux<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Malphite&id=54&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Malphite.png' height='30' width='30' />&nbsp Malphite<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Malzahar&id=90&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Malzahar.png' height='30' width='30' />&nbsp Malzahar<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Maokai&id=57&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Maokai.png' height='30' width='30' />&nbsp Maokai<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Master Yi&id=11&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/MasterYi.png' height='30' width='30' />&nbsp Master Yi<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Miss Fortune&id=21&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/MissFortune.png' height='30' width='30' />&nbsp Miss Fortune<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Wukong&id=62&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/MonkeyKing.png' height='30' width='30' />&nbsp Wukong<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Mordekaiser&id=82&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Mordekaiser.png' height='30' width='30' />&nbsp Mordekaiser<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Morgana&id=25&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Morgana.png' height='30' width='30' />&nbsp Morgana<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Nami&id=267&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Nami.png' height='30' width='30' />&nbsp Nami<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Nasus&id=75&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Nasus.png' height='30' width='30' />&nbsp Nasus<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Nautilus&id=111&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Nautilus.png' height='30' width='30' />&nbsp Nautilus<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Nidalee&id=76&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Nidalee.png' height='30' width='30' />&nbsp Nidalee<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Nocturne&id=56&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Nocturne.png' height='30' width='30' />&nbsp Nocturne<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Nunu&id=20&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Nunu.png' height='30' width='30' />&nbsp Nunu<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Olaf&id=2&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Olaf.png' height='30' width='30' />&nbsp Olaf<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Orianna&id=61&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Orianna.png' height='30' width='30' />&nbsp Orianna<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Pantheon&id=80&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Pantheon.png' height='30' width='30' />&nbsp Pantheon<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Poppy&id=78&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Poppy.png' height='30' width='30' />&nbsp Poppy<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Quinn&id=133&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Quinn.png' height='30' width='30' />&nbsp Quinn<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Rammus&id=33&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Rammus.png' height='30' width='30' />&nbsp Rammus<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=RekSai&id=421&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/RekSai.png' height='30' width='30' />&nbsp Rek'Sai<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Renekton&id=58&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Renekton.png' height='30' width='30' />&nbsp Renekton<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Rengar&id=107&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Rengar.png' height='30' width='30' />&nbsp Rengar<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Riven&id=92&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Riven.png' height='30' width='30' />&nbsp Riven<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Rumble&id=68&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Rumble.png' height='30' width='30' />&nbsp Rumble<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Ryze&id=13&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Ryze.png' height='30' width='30' />&nbsp Ryze<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Sejuani&id=113&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Sejuani.png' height='30' width='30' />&nbsp Sejuani<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Shaco&id=35&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Shaco.png' height='30' width='30' />&nbsp Shaco<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Shen&id=98&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Shen.png' height='30' width='30' />&nbsp Shen<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Shyvana&id=102&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Shyvana.png' height='30' width='30' />&nbsp Shyvana<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Singed&id=27&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Singed.png' height='30' width='30' />&nbsp Singed<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Sion&id=14&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Sion.png' height='30' width='30' />&nbsp Sion<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Sivir&id=15&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Sivir.png' height='30' width='30' />&nbsp Sivir<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Skarner&id=72&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Skarner.png' height='30' width='30' />&nbsp Skarner<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Sona&id=37&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Sona.png' height='30' width='30' />&nbsp Sona<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Soraka&id=16&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Soraka.png' height='30' width='30' />&nbsp Soraka<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Swain&id=50&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Swain.png' height='30' width='30' />&nbsp Swain<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Syndra&id=134&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Syndra.png' height='30' width='30' />&nbsp Syndra<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Tahm Kench&id=223&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/TahmKench.png' height='30' width='30' />&nbsp Tahm Kench<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Talon&id=91&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Talon.png' height='30' width='30' />&nbsp Talon<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Taric&id=44&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Taric.png' height='30' width='30' />&nbsp Taric<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Teemo&id=17&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Teemo.png' height='30' width='30' />&nbsp Teemo<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Thresh&id=412&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Thresh.png' height='30' width='30' />&nbsp Thresh<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Tristana&id=18&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Tristana.png' height='30' width='30' />&nbsp Tristana<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Trundle&id=48&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Trundle.png' height='30' width='30' />&nbsp Trundle<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Tryndamere&id=23&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Tryndamere.png' height='30' width='30' />&nbsp Tryndamere<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Twisted Fate&id=4&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/TwistedFate.png' height='30' width='30' />&nbsp Twisted Fate<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Twitch&id=29&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Twitch.png' height='30' width='30' />&nbsp Twitch<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Udyr&id=77&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Udyr.png' height='30' width='30' />&nbsp Udyr<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Urgot&id=6&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Urgot.png' height='30' width='30' />&nbsp Urgot<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Varus&id=110&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Varus.png' height='30' width='30' />&nbsp Varus<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Vayne&id=67&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Vayne.png' height='30' width='30' />&nbsp Vayne<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Veigar&id=45&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Veigar.png' height='30' width='30' />&nbsp Veigar<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=VelKoz&id=161&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Velkoz.png' height='30' width='30' />&nbsp Vel'Koz<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Vi&id=254&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Vi.png' height='30' width='30' />&nbsp Vi<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Viktor&id=112&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Viktor.png' height='30' width='30' />&nbsp Viktor<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Vladimir&id=8&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Vladimir.png' height='30' width='30' />&nbsp Vladimir<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Volibear&id=106&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Volibear.png' height='30' width='30' />&nbsp Volibear<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Warwick&id=19&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Warwick.png' height='30' width='30' />&nbsp Warwick<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Xerath&id=101&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Xerath.png' height='30' width='30' />&nbsp Xerath<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Xin Zhao&id=5&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/XinZhao.png' height='30' width='30' />&nbsp Xin Zhao<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Yasuo&id=157&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Yasuo.png' height='30' width='30' />&nbsp Yasuo<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Yorick&id=83&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Yorick.png' height='30' width='30' />&nbsp Yorick<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Zac&id=154&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Zac.png' height='30' width='30' />&nbsp Zac<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Zed&id=238&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Zed.png' height='30' width='30' />&nbsp Zed<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Ziggs&id=115&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Ziggs.png' height='30' width='30' />&nbsp Ziggs<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Zilean&id=26&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Zilean.png' height='30' width='30' />&nbsp Zilean<br /></a></td></tr>
													<tr><td><a style='text-decoration:none;' href='champion.php?champ=Zyra&id=143&region=all'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Zyra.png' height='30' width='30' />&nbsp Zyra<br /></a></td></tr>

												</tbody>
											 </table> 
											</span>
											<span class="input-group-btn">
												<input type="submit" value="" class="fa fa-search"/>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-4 col-sm-4" style="text-align: right;">
								<h1>Duo Finder</h1>
							</div>
						</div>
					</div>
				</div>
				<!-- Header Navigation -->
				<div class="header-navigation">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<!-- Logo -->
									<!-- Heading -->
									<a href="index.html"><img height="128" width="128" src="img/logo.gif"/></a>
							</div>
							<div class="col-md-8">
								<!-- Bootstrap Navbar -->
								<nav class="navbar navbar-default" role="navigation">
									<!-- Brand and toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle br-orange" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav navbar-right">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle br-purple" data-toggle="dropdown">
													<!-- Link Icon -->
													<i class="fa fa-file link-icon"></i>
													<!-- Link Title -->
													<span class="link-title">Teams<b class="fa fa-angle-down"></b></span> 
												</a>
												<ul class="dropdown-menu dropdown-sm">
													<li>
														<div class="row">
															<div class="col-md-6">
																<div class="col-inner col-disable">
																	<h4 class="br-orange"><i class="fa fa-share heading-icon"></i>244,222,650 Possible Comps</h4>
																	<p>With 126 unique champions in League of Legends, there are an uncountable amount of team compositions available. Create your own team or search team compositions.</p>
																</div>
															</div>
															<div class="col-md-6">
																<div class="col-inner">
																	<ul class="list-unstyled">
																		<li><a href="teamfind.php"><i class="fa fa-arrow-right dd-link-icon"></i> Team Builder</a></li>
																		<li><a href="teams.php?region=all"><i class="fa fa-arrow-right dd-link-icon"></i> Team Stats</a></li>
																		<li><a href="duochamp.php"><i class="fa fa-arrow-right dd-link-icon"></i> Duo Comps</a></li>
																		<li><a href="duos.php?region=all"><i class="fa fa-arrow-right dd-link-icon"></i> Duo Stats</a></li>
																		<li><a href="champs.php?region=all"><i class="fa fa-arrow-right dd-link-icon"></i> Champ Stats</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle br-pink" data-toggle="dropdown">
													<!-- Link Icon -->
													<i class="fa fa-file link-icon"></i>
													<!-- Link Title -->
													<span class="link-title">Brawlers<b class="fa fa-angle-down"></b></span> 
												</a>
												<ul class="dropdown-menu dropdown-sm">
													<li>
														<div class="row">
															<div class="col-md-6">
																<div class="col-inner col-disable">
																	<h4 class="br-orange"><i class="fa fa-share heading-icon"></i>1024 Possible Comps</h4>
																	<p>4 new minions added to Black Market Brawler Mode adds a new twist to the game. Check to see best upgrade paths and best brawler team comps.</p>
																</div>
															</div>
															<div class="col-md-6">
																<div class="col-inner">
																	<ul class="list-unstyled">
																		<li><a href="brawlerbuilder.php"><i class="fa fa-arrow-right dd-link-icon"></i> Brawler Builder</a></li>
																		<li><a href="brawlers.php?region=all"><i class="fa fa-arrow-right dd-link-icon"></i> Brawler Stats</a></li>
																		<li><a href="upgrades.php?region=all"><i class="fa fa-arrow-right dd-link-icon"></i> Brawler Upgrades</a></li>
																		<li><a href="brawlerfind.php"><i class="fa fa-arrow-right dd-link-icon"></i> Brawler Search</a></li>
																		<li><a href="brawlerinfo.php"><i class="fa fa-arrow-right dd-link-icon"></i> Brawler Information</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle br-yellow" data-toggle="dropdown">
													<!-- Link Icon -->
													<i class="fa fa-file link-icon"></i>
													<!-- Link Title -->
													<span class="link-title">Items<b class="fa fa-angle-down"></b></span> 
												</a>
												<ul class="dropdown-menu dropdown-sm">
													<li>
														<div class="row">
															<div class="col-md-6">
																<div class="col-inner col-disable">
																	<h4 class="br-orange"><i class="fa fa-share heading-icon"></i>New Items</h4>
																	<p>With new items added to League of Legends, you can see which items had the most success or which items when combined create a potent threat.</p>
																</div>
															</div>
															<div class="col-md-6">
																<div class="col-inner">
																	<ul class="list-unstyled">
																		<li><a href="items.php?region=all"><i class="fa fa-arrow-right dd-link-icon"></i> Item Stats</a></li>
																		<li><a href="itemduos.php?region=all"><i class="fa fa-arrow-right dd-link-icon"></i> Item Combos</a></li>
																		<li><a href="itemfind.php"><i class="fa fa-arrow-right dd-link-icon"></i> Item Search</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li>
												<a href="aboutus.html" class="br-red">
													<!-- Link Icon -->
													<i class="fa fa-user link-icon"></i>
													<!-- Link Title -->
													<span class="link-title">About</span>
												</a>
											</li>
											
										</ul>
									</div><!-- /.navbar-collapse -->
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Header End -->
			
			<!-- Inner Page Content // Start -->
			<?php
				//create the engine which allows people to click on champ names and have them fill in c1,c2,c3,c4,c5 and then allow them to submit to search
				if(isset($_GET['c1'])){ //check if we have anything submitted already
					$c1 = $_GET['c1'];
				}else{
					$c1="";
				}
				if(isset($_GET['c2'])){ //check if we have anything submitted already
					$c2 = $_GET['c2'];
				}else{
					$c2="";
				}
				if(isset($_GET['c3'])){ //check if we have anything submitted already
					$c3 = $_GET['c3'];
				}else{
					$c3="";
				}
				if(isset($_GET['c4'])){ //check if we have anything submitted already
					$c4 = $_GET['c4'];
				}else{
					$c4="";
				}
				if(isset($_GET['c5'])){ //check if we have anything submitted already
					$c5 = $_GET['c5'];
				}else{
					$c5="";
				}
				$link = $_SERVER['PHP_SELF'] . "?c1=$c1&c2=$c2&c3=$c3&c4=$c4&c5=$c5";
			
			?>
			<form method="post" action="duosearch.php">
			<div class="inner-page">
				<div class="container">
					<div class="page-mainbar resume">
						<!-- Resume Header -->
						<h1 style="text-align: center;">Create A Duo Champion Combination</h1>
						<div class="row" style="text-align:center;">
							<div class="col-md-3 col-sm-4">
								<!-- Search Box -->
								<div class="search">
									
										<div class="search">
											 <input type="text" id="c1" name='c1' class="form-control" placeholder="Search Champions" value="<?php echo $c1; ?>" autocomplete="off">
											 <table class = "results">
												<tbody class="search" style='text-align:left;'>
													<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Aatrox&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Aatrox.png' height='30' width='30' />&nbsp Aatrox<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Ahri&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Ahri.png' height='30' width='30' />&nbsp Ahri<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Akali&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Akali.png' height='30' width='30' />&nbsp Akali<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Alistar&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Alistar.png' height='30' width='30' />&nbsp Alistar<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Amumu&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Amumu.png' height='30' width='30' />&nbsp Amumu<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Anivia&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Anivia.png' height='30' width='30' />&nbsp Anivia<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Annie&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Annie.png' height='30' width='30' />&nbsp Annie<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Ashe&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Ashe.png' height='30' width='30' />&nbsp Ashe<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Azir&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Azir.png' height='30' width='30' />&nbsp Azir<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Bard&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Bard.png' height='30' width='30' />&nbsp Bard<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Blitzcrank&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Blitzcrank.png' height='30' width='30' />&nbsp Blitzcrank<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Brand&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Brand.png' height='30' width='30' />&nbsp Brand<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Braum&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Braum.png' height='30' width='30' />&nbsp Braum<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Caitlyn&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Caitlyn.png' height='30' width='30' />&nbsp Caitlyn<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Cassiopeia&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Cassiopeia.png' height='30' width='30' />&nbsp Cassiopeia<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=ChoGath&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Chogath.png' height='30' width='30' />&nbsp Cho'Gath<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Corki&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Corki.png' height='30' width='30' />&nbsp Corki<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Darius&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Darius.png' height='30' width='30' />&nbsp Darius<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Diana&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Diana.png' height='30' width='30' />&nbsp Diana<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Dr. Mundo&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/DrMundo.png' height='30' width='30' />&nbsp Dr. Mundo<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Draven&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Draven.png' height='30' width='30' />&nbsp Draven<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Ekko&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Ekko.png' height='30' width='30' />&nbsp Ekko<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Elise&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Elise.png' height='30' width='30' />&nbsp Elise<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Evelynn&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Evelynn.png' height='30' width='30' />&nbsp Evelynn<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Ezreal&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Ezreal.png' height='30' width='30' />&nbsp Ezreal<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Fiddlesticks&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/FiddleSticks.png' height='30' width='30' />&nbsp Fiddlesticks<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Fiora&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Fiora.png' height='30' width='30' />&nbsp Fiora<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Fizz&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Fizz.png' height='30' width='30' />&nbsp Fizz<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Galio&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Galio.png' height='30' width='30' />&nbsp Galio<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Gangplank&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Gangplank.png' height='30' width='30' />&nbsp Gangplank<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Garen&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Garen.png' height='30' width='30' />&nbsp Garen<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Gnar&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Gnar.png' height='30' width='30' />&nbsp Gnar<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Gragas&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Gragas.png' height='30' width='30' />&nbsp Gragas<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Graves&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Graves.png' height='30' width='30' />&nbsp Graves<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Hecarim&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Hecarim.png' height='30' width='30' />&nbsp Hecarim<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Heimerdinger&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Heimerdinger.png' height='30' width='30' />&nbsp Heimerdinger<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Irelia&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Irelia.png' height='30' width='30' />&nbsp Irelia<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Janna&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Janna.png' height='30' width='30' />&nbsp Janna<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Jarvan IV&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/JarvanIV.png' height='30' width='30' />&nbsp Jarvan IV<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Jax&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Jax.png' height='30' width='30' />&nbsp Jax<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Jayce&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Jayce.png' height='30' width='30' />&nbsp Jayce<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Jinx&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Jinx.png' height='30' width='30' />&nbsp Jinx<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Kalista&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Kalista.png' height='30' width='30' />&nbsp Kalista<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Karma&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Karma.png' height='30' width='30' />&nbsp Karma<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Karthus&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Karthus.png' height='30' width='30' />&nbsp Karthus<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Kassadin&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Kassadin.png' height='30' width='30' />&nbsp Kassadin<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Katarina&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Katarina.png' height='30' width='30' />&nbsp Katarina<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Kayle&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Kayle.png' height='30' width='30' />&nbsp Kayle<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Kennen&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Kennen.png' height='30' width='30' />&nbsp Kennen<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=KhaZix&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Khazix.png' height='30' width='30' />&nbsp Kha'Zix<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=KogMaw&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/KogMaw.png' height='30' width='30' />&nbsp Kog'Maw<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=LeBlanc&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Leblanc.png' height='30' width='30' />&nbsp LeBlanc<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Lee Sin&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/LeeSin.png' height='30' width='30' />&nbsp Lee Sin<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Leona&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Leona.png' height='30' width='30' />&nbsp Leona<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Lissandra&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Lissandra.png' height='30' width='30' />&nbsp Lissandra<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Lucian&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Lucian.png' height='30' width='30' />&nbsp Lucian<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Lulu&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Lulu.png' height='30' width='30' />&nbsp Lulu<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Lux&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Lux.png' height='30' width='30' />&nbsp Lux<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Malphite&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Malphite.png' height='30' width='30' />&nbsp Malphite<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Malzahar&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Malzahar.png' height='30' width='30' />&nbsp Malzahar<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Maokai&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Maokai.png' height='30' width='30' />&nbsp Maokai<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Master Yi&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/MasterYi.png' height='30' width='30' />&nbsp Master Yi<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Miss Fortune&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/MissFortune.png' height='30' width='30' />&nbsp Miss Fortune<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Wukong&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/MonkeyKing.png' height='30' width='30' />&nbsp Wukong<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Mordekaiser&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Mordekaiser.png' height='30' width='30' />&nbsp Mordekaiser<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Morgana&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Morgana.png' height='30' width='30' />&nbsp Morgana<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Nami&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Nami.png' height='30' width='30' />&nbsp Nami<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Nasus&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Nasus.png' height='30' width='30' />&nbsp Nasus<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Nautilus&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Nautilus.png' height='30' width='30' />&nbsp Nautilus<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Nidalee&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Nidalee.png' height='30' width='30' />&nbsp Nidalee<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Nocturne&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Nocturne.png' height='30' width='30' />&nbsp Nocturne<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Nunu&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Nunu.png' height='30' width='30' />&nbsp Nunu<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Olaf&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Olaf.png' height='30' width='30' />&nbsp Olaf<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Orianna&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Orianna.png' height='30' width='30' />&nbsp Orianna<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Pantheon&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Pantheon.png' height='30' width='30' />&nbsp Pantheon<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Poppy&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Poppy.png' height='30' width='30' />&nbsp Poppy<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Quinn&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Quinn.png' height='30' width='30' />&nbsp Quinn<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Rammus&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Rammus.png' height='30' width='30' />&nbsp Rammus<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=RekSai&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/RekSai.png' height='30' width='30' />&nbsp Rek'Sai<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Renekton&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Renekton.png' height='30' width='30' />&nbsp Renekton<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Rengar&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Rengar.png' height='30' width='30' />&nbsp Rengar<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Riven&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Riven.png' height='30' width='30' />&nbsp Riven<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Rumble&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Rumble.png' height='30' width='30' />&nbsp Rumble<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Ryze&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Ryze.png' height='30' width='30' />&nbsp Ryze<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Sejuani&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Sejuani.png' height='30' width='30' />&nbsp Sejuani<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Shaco&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Shaco.png' height='30' width='30' />&nbsp Shaco<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Shen&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Shen.png' height='30' width='30' />&nbsp Shen<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Shyvana&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Shyvana.png' height='30' width='30' />&nbsp Shyvana<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Singed&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Singed.png' height='30' width='30' />&nbsp Singed<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Sion&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Sion.png' height='30' width='30' />&nbsp Sion<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Sivir&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Sivir.png' height='30' width='30' />&nbsp Sivir<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Skarner&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Skarner.png' height='30' width='30' />&nbsp Skarner<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Sona&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Sona.png' height='30' width='30' />&nbsp Sona<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Soraka&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Soraka.png' height='30' width='30' />&nbsp Soraka<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Swain&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Swain.png' height='30' width='30' />&nbsp Swain<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Syndra&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Syndra.png' height='30' width='30' />&nbsp Syndra<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Tahm Kench&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/TahmKench.png' height='30' width='30' />&nbsp Tahm Kench<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Talon&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Talon.png' height='30' width='30' />&nbsp Talon<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Taric&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Taric.png' height='30' width='30' />&nbsp Taric<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Teemo&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Teemo.png' height='30' width='30' />&nbsp Teemo<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Thresh&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Thresh.png' height='30' width='30' />&nbsp Thresh<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Tristana&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Tristana.png' height='30' width='30' />&nbsp Tristana<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Trundle&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Trundle.png' height='30' width='30' />&nbsp Trundle<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Tryndamere&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Tryndamere.png' height='30' width='30' />&nbsp Tryndamere<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Twisted Fate&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/TwistedFate.png' height='30' width='30' />&nbsp Twisted Fate<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Twitch&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Twitch.png' height='30' width='30' />&nbsp Twitch<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Udyr&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Udyr.png' height='30' width='30' />&nbsp Udyr<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Urgot&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Urgot.png' height='30' width='30' />&nbsp Urgot<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Varus&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Varus.png' height='30' width='30' />&nbsp Varus<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Vayne&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Vayne.png' height='30' width='30' />&nbsp Vayne<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Veigar&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Veigar.png' height='30' width='30' />&nbsp Veigar<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=VelKoz&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Velkoz.png' height='30' width='30' />&nbsp Vel'Koz<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Vi&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Vi.png' height='30' width='30' />&nbsp Vi<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Viktor&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Viktor.png' height='30' width='30' />&nbsp Viktor<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Vladimir&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Vladimir.png' height='30' width='30' />&nbsp Vladimir<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Volibear&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Volibear.png' height='30' width='30' />&nbsp Volibear<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Warwick&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Warwick.png' height='30' width='30' />&nbsp Warwick<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Xerath&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Xerath.png' height='30' width='30' />&nbsp Xerath<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Xin Zhao&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/XinZhao.png' height='30' width='30' />&nbsp Xin Zhao<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Yasuo&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Yasuo.png' height='30' width='30' />&nbsp Yasuo<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Yorick&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Yorick.png' height='30' width='30' />&nbsp Yorick<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Zac&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Zac.png' height='30' width='30' />&nbsp Zac<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Zed&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Zed.png' height='30' width='30' />&nbsp Zed<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Ziggs&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Ziggs.png' height='30' width='30' />&nbsp Ziggs<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Zilean&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Zilean.png' height='30' width='30' />&nbsp Zilean<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=Zyra&c2=$c2";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Zyra.png' height='30' width='30' />&nbsp Zyra<br /></a></td></tr>

												</tbody>
											 </table> 
										</div>
									
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<!-- Search Box -->
								<div class="search">
									
										<div class="search">
											 <input type="text" id="c2" name='c2' class="form-control" placeholder="Search Champions" value="<?php echo $c2; ?>" autocomplete="off">
											 <table class = "results">
												<tbody class="search" style='text-align:left;'>
													<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Aatrox";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Aatrox.png' height='30' width='30' />&nbsp Aatrox<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Ahri";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Ahri.png' height='30' width='30' />&nbsp Ahri<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Akali";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Akali.png' height='30' width='30' />&nbsp Akali<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Alistar";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Alistar.png' height='30' width='30' />&nbsp Alistar<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Amumu";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Amumu.png' height='30' width='30' />&nbsp Amumu<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Anivia";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Anivia.png' height='30' width='30' />&nbsp Anivia<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Annie";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Annie.png' height='30' width='30' />&nbsp Annie<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Ashe";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Ashe.png' height='30' width='30' />&nbsp Ashe<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Azir";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Azir.png' height='30' width='30' />&nbsp Azir<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Bard";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Bard.png' height='30' width='30' />&nbsp Bard<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Blitzcrank";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Blitzcrank.png' height='30' width='30' />&nbsp Blitzcrank<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Brand";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Brand.png' height='30' width='30' />&nbsp Brand<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Braum";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Braum.png' height='30' width='30' />&nbsp Braum<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Caitlyn";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Caitlyn.png' height='30' width='30' />&nbsp Caitlyn<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Cassiopeia";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Cassiopeia.png' height='30' width='30' />&nbsp Cassiopeia<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=ChoGath";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Chogath.png' height='30' width='30' />&nbsp Cho'Gath<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Corki";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Corki.png' height='30' width='30' />&nbsp Corki<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Darius";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Darius.png' height='30' width='30' />&nbsp Darius<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Diana";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Diana.png' height='30' width='30' />&nbsp Diana<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Dr. Mundo";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/DrMundo.png' height='30' width='30' />&nbsp Dr. Mundo<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Draven";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Draven.png' height='30' width='30' />&nbsp Draven<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Ekko";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Ekko.png' height='30' width='30' />&nbsp Ekko<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Elise";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Elise.png' height='30' width='30' />&nbsp Elise<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Evelynn";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Evelynn.png' height='30' width='30' />&nbsp Evelynn<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Ezreal";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Ezreal.png' height='30' width='30' />&nbsp Ezreal<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Fiddlesticks";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/FiddleSticks.png' height='30' width='30' />&nbsp Fiddlesticks<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Fiora";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Fiora.png' height='30' width='30' />&nbsp Fiora<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Fizz";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Fizz.png' height='30' width='30' />&nbsp Fizz<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Galio";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Galio.png' height='30' width='30' />&nbsp Galio<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Gangplank";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Gangplank.png' height='30' width='30' />&nbsp Gangplank<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Garen";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Garen.png' height='30' width='30' />&nbsp Garen<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Gnar";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Gnar.png' height='30' width='30' />&nbsp Gnar<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Gragas";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Gragas.png' height='30' width='30' />&nbsp Gragas<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Graves";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Graves.png' height='30' width='30' />&nbsp Graves<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Hecarim";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Hecarim.png' height='30' width='30' />&nbsp Hecarim<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Heimerdinger";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Heimerdinger.png' height='30' width='30' />&nbsp Heimerdinger<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Irelia";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Irelia.png' height='30' width='30' />&nbsp Irelia<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Janna";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Janna.png' height='30' width='30' />&nbsp Janna<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Jarvan IV";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/JarvanIV.png' height='30' width='30' />&nbsp Jarvan IV<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Jax";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Jax.png' height='30' width='30' />&nbsp Jax<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Jayce";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Jayce.png' height='30' width='30' />&nbsp Jayce<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Jinx";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Jinx.png' height='30' width='30' />&nbsp Jinx<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Kalista";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Kalista.png' height='30' width='30' />&nbsp Kalista<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Karma";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Karma.png' height='30' width='30' />&nbsp Karma<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Karthus";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Karthus.png' height='30' width='30' />&nbsp Karthus<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Kassadin";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Kassadin.png' height='30' width='30' />&nbsp Kassadin<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Katarina";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Katarina.png' height='30' width='30' />&nbsp Katarina<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Kayle";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Kayle.png' height='30' width='30' />&nbsp Kayle<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Kennen";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Kennen.png' height='30' width='30' />&nbsp Kennen<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=KhaZix";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Khazix.png' height='30' width='30' />&nbsp Kha'Zix<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=KogMaw";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/KogMaw.png' height='30' width='30' />&nbsp Kog'Maw<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=LeBlanc";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Leblanc.png' height='30' width='30' />&nbsp LeBlanc<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Lee Sin";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/LeeSin.png' height='30' width='30' />&nbsp Lee Sin<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Leona";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Leona.png' height='30' width='30' />&nbsp Leona<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Lissandra";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Lissandra.png' height='30' width='30' />&nbsp Lissandra<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Lucian";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Lucian.png' height='30' width='30' />&nbsp Lucian<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Lulu";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Lulu.png' height='30' width='30' />&nbsp Lulu<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Lux";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Lux.png' height='30' width='30' />&nbsp Lux<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Malphite";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Malphite.png' height='30' width='30' />&nbsp Malphite<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Malzahar";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Malzahar.png' height='30' width='30' />&nbsp Malzahar<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Maokai";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Maokai.png' height='30' width='30' />&nbsp Maokai<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Master Yi";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/MasterYi.png' height='30' width='30' />&nbsp Master Yi<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Miss Fortune";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/MissFortune.png' height='30' width='30' />&nbsp Miss Fortune<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Wukong";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/MonkeyKing.png' height='30' width='30' />&nbsp Wukong<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Mordekaiser";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Mordekaiser.png' height='30' width='30' />&nbsp Mordekaiser<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Morgana";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Morgana.png' height='30' width='30' />&nbsp Morgana<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Nami";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Nami.png' height='30' width='30' />&nbsp Nami<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Nasus";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Nasus.png' height='30' width='30' />&nbsp Nasus<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Nautilus";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Nautilus.png' height='30' width='30' />&nbsp Nautilus<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Nidalee";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Nidalee.png' height='30' width='30' />&nbsp Nidalee<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Nocturne";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Nocturne.png' height='30' width='30' />&nbsp Nocturne<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Nunu";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Nunu.png' height='30' width='30' />&nbsp Nunu<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Olaf";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Olaf.png' height='30' width='30' />&nbsp Olaf<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Orianna";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Orianna.png' height='30' width='30' />&nbsp Orianna<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Pantheon";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Pantheon.png' height='30' width='30' />&nbsp Pantheon<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Poppy";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Poppy.png' height='30' width='30' />&nbsp Poppy<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Quinn";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Quinn.png' height='30' width='30' />&nbsp Quinn<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Rammus";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Rammus.png' height='30' width='30' />&nbsp Rammus<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=RekSai";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/RekSai.png' height='30' width='30' />&nbsp Rek'Sai<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Renekton";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Renekton.png' height='30' width='30' />&nbsp Renekton<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Rengar";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Rengar.png' height='30' width='30' />&nbsp Rengar<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Riven";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Riven.png' height='30' width='30' />&nbsp Riven<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Rumble";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Rumble.png' height='30' width='30' />&nbsp Rumble<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Ryze";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Ryze.png' height='30' width='30' />&nbsp Ryze<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Sejuani";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Sejuani.png' height='30' width='30' />&nbsp Sejuani<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Shaco";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Shaco.png' height='30' width='30' />&nbsp Shaco<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Shen";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Shen.png' height='30' width='30' />&nbsp Shen<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Shyvana";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Shyvana.png' height='30' width='30' />&nbsp Shyvana<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Singed";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Singed.png' height='30' width='30' />&nbsp Singed<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Sion";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Sion.png' height='30' width='30' />&nbsp Sion<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Sivir";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Sivir.png' height='30' width='30' />&nbsp Sivir<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Skarner";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Skarner.png' height='30' width='30' />&nbsp Skarner<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Sona";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Sona.png' height='30' width='30' />&nbsp Sona<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Soraka";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Soraka.png' height='30' width='30' />&nbsp Soraka<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Swain";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Swain.png' height='30' width='30' />&nbsp Swain<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Syndra";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Syndra.png' height='30' width='30' />&nbsp Syndra<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Tahm Kench";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/TahmKench.png' height='30' width='30' />&nbsp Tahm Kench<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Talon";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Talon.png' height='30' width='30' />&nbsp Talon<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Taric";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Taric.png' height='30' width='30' />&nbsp Taric<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Teemo";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Teemo.png' height='30' width='30' />&nbsp Teemo<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Thresh";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Thresh.png' height='30' width='30' />&nbsp Thresh<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Tristana";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Tristana.png' height='30' width='30' />&nbsp Tristana<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Trundle";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Trundle.png' height='30' width='30' />&nbsp Trundle<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Tryndamere";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Tryndamere.png' height='30' width='30' />&nbsp Tryndamere<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Twisted Fate";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/TwistedFate.png' height='30' width='30' />&nbsp Twisted Fate<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Twitch";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Twitch.png' height='30' width='30' />&nbsp Twitch<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Udyr";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Udyr.png' height='30' width='30' />&nbsp Udyr<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Urgot";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Urgot.png' height='30' width='30' />&nbsp Urgot<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Varus";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Varus.png' height='30' width='30' />&nbsp Varus<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Vayne";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Vayne.png' height='30' width='30' />&nbsp Vayne<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Veigar";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Veigar.png' height='30' width='30' />&nbsp Veigar<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=VelKoz";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Velkoz.png' height='30' width='30' />&nbsp Vel'Koz<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Vi";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Vi.png' height='30' width='30' />&nbsp Vi<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Viktor";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Viktor.png' height='30' width='30' />&nbsp Viktor<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Vladimir";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Vladimir.png' height='30' width='30' />&nbsp Vladimir<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Volibear";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Volibear.png' height='30' width='30' />&nbsp Volibear<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Warwick";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Warwick.png' height='30' width='30' />&nbsp Warwick<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Xerath";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Xerath.png' height='30' width='30' />&nbsp Xerath<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Xin Zhao";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/XinZhao.png' height='30' width='30' />&nbsp Xin Zhao<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Yasuo";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Yasuo.png' height='30' width='30' />&nbsp Yasuo<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Yorick";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Yorick.png' height='30' width='30' />&nbsp Yorick<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Zac";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Zac.png' height='30' width='30' />&nbsp Zac<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Zed";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Zed.png' height='30' width='30' />&nbsp Zed<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Ziggs";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Ziggs.png' height='30' width='30' />&nbsp Ziggs<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Zilean";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Zilean.png' height='30' width='30' />&nbsp Zilean<br /></a></td></tr>
<tr><td><a style='text-decoration:none;' href='<?php echo $_SERVER['PHP_SELF'] . "?c1=$c1&c2=Zyra";?>'><img src='http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/Zyra.png' height='30' width='30' />&nbsp Zyra<br /></a></td></tr>

												</tbody>
											 </table> 
										</div>
									
								</div>
							</div>
							<div class="col-md-2 col-sm-4">
									<input type="submit" value="Search"  class="btn btn-info"/>
									</form>
						</div>
						<?php
						$result = file_get_contents('http://www.lolteamcomp.com/php/champions.txt');
						$champs = json_decode($result); //get champs
						$search = array(); //html table generation of rows
						$hero = array(); //2d array for keys and names;
						for($i = 0; $i < 1000; $i++){ //cycle through all champ ids
							$id = 0;
							$id = $champs->$i->id; //checking purposes
							$name = $champs->$i->name; //for name of champ of that id
							$key = $champs->$i->key; //for picture		
							if($id != 0 || isset($id)){	
								$hero[] = array($key,$name, $id);
							}
						}
						$c1 = strtolower($c1);
						$c2 = strtolower($c2);
						if($c1 != ""){
							$similar = array(); //calculate similarity between strings
							foreach($hero as $string){
								$str = strtolower($string[1]);
								similar_text($str,$c1, $percent);
								$similar[] = $percent;
							}
							
							$maxs = array_keys($similar, max($similar)); //find key of highest value in similar
							$correct = $hero[$maxs[0]]; //get correct search name now, maxs is an array, we only want first value
							$cid1 = $correct[2];
							$cc1 = $correct[0];
							$cc1 = "http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/$cc1.png";
						
							
						}else{
							$cc1 = "img/question.png";
						}
						if($c2 != ""){
							
							$similar = array(); //calculate similarity between strings
							foreach($hero as $string){
								$str = strtolower($string[1]);
								similar_text($str,$c2, $percent);
								$similar[] = $percent;
							}
							$maxs = array_keys($similar, max($similar)); //find key of highest value in similar
							$correct = $hero[$maxs[0]]; //get correct search name now, maxs is an array, we only want first value
							$cid2 = $correct[2];
							$cc2 = $correct[0];
							$cc2 = "http://ddragon.leagueoflegends.com/cdn/5.16.1/img/champion/$cc2.png";
						
						}else{
							$cc2 = "img/question.png";
						}
						
						echo "
							<div class='col-md-2 col-sm-4'>
								<img src='$cc1' height='64' width='64'/>
							</div>
							<div class='col-md-2 col-sm-4'>
								<img src='$cc2' height='64' width='64'/>
							</div>";
							?>
						</div>
						
					</div>
					<?php
					if(isset($_GET['error'])){
						
					?>
					<h3 style="text-align: center;">Error, Duplicate Champions Detected. You Cannot Have More Than 1 Copy Of A Champion On A Single Team</h3>
					<?php } ?>		
						<p>Note: Leave one champion blank to search for all duo combinations of any champion</p>
				</div>
			
			
			<!-- Inner Page Content // End -->
			
<!-- Footer Start -->
			
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<!-- Footer Widget -->
							<div class="footer-widget">
								<!-- Logo Icon -->
								<!-- Heading -->
								<h3><a href="index.html"><img height="80" width="80" src="img/logo.gif"/><br>LoL Team Comp</a></h3>
								<!-- Paragraph -->
								<p>Created for Riot's API Challenge 2 under the category of Black Market Brawler's game mode. All data created using match ids provided for the challenge.</p>
								<!-- Social Media -->
								
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<!-- Footer Widget -->
							<div class="footer-widget">
								<!-- Heading -->
								<h5><i class="fa fa-plus br-red"></i> Navigation Menu</h5>
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<!-- Menu Icons link -->
										<ul class="list-unstyled">
											<li><a href="http://www.lolteamcomp.com/bm/index.html"><i class="fa fa-home br-red"></i> Home</a></li>
											<li><a href="http://www.lolteamcomp.com/bm/teamfind.php"><i class="fa fa-book br-yellow"></i> Team Builder</a></li>
											<li><a href="http://www.lolteamcomp.com/bm/teams.php?region=all"><i class="fa fa-book br-green"></i> Team Stats</a></li>
											<li><a href="http://www.lolteamcomp.com/bm/duochamp.php"><i class="fa fa-book br-lblue"></i> Duo Comps</a></li>
											<li><a href="http://www.lolteamcomp.com/bm/brawlerbuilder.php"><i class="fa fa-gear br-purple"></i> Brawler Build</a></li>
										</ul>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<!-- Menu Icons link -->
										<ul class="list-unstyled">
											<li><a href="http://www.lolteamcomp.com/bm/brawlers.php?region=all"><i class="fa fa-gear br-green"></i> Brawler Stats</a></li>
											<li><a href="http://www.lolteamcomp.com/bm/upgrades.php?region=all"><i class="fa fa-gear br-pink"></i> Brawler Upgrades</a></li>
											<li><a href="http://www.lolteamcomp.com/bm/items.php?region=all"><i class="fa fa-file br-red"></i> Item Stats</a></li>
											<li><a href="http://www.lolteamcomp.com/bm/itemduos.php?region=all"><i class="fa fa-file br-blue"></i> Item Combos</a></li>
											<li><a href="aboutus.html"><i class="fa fa-user br-orange"></i> About Us</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix visible-sm"></div>
						<div class="col-md-3 col-sm-6">
							<!-- Footer Widget -->
							<div class="footer-widget">
								<!-- Heading -->
								<h5><i class="fa fa-gear br-yellow"></i>Code</h5>
								<p>This site was created using:</p>
								<ul style="font-size: 60%">
									<li>PHP - for aggregating data and analyzing data</li>
									<li>MySQL - for holding team comps and analyzed data</li>
									<li>JSON - receiving match data and holding parsed match data</li>
									<li>CSS - styling for this website and data shown</li>
									<li>JavaScript & JQuery - Used for animation and presenting data</li>
									<li>HTML - layout of the site</li>
									<li>Site built on LAMP (Linux, Apache, MySQL, PHP) Stack</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<!-- Footer Widget -->
							<div class="footer-widget">
								<!-- Heading -->
								<h5><i class="fa fa-location-arrow br-lblue"></i> Location of Server</h5>
								<!-- Google Map -->
								<div class="map">
									<!-- Image -->
									<img src="img/map.png" class="img-responsive" alt="" />
									<!-- Map Marker -->
									<i class="fa fa-map-marker marker usa orange"></i>
								</div>
								<span class="location-name">
									<i class="fa fa-map-marker br-orange"></i> USA &nbsp;&nbsp;
								</span>
							</div>
						</div>
					</div>
					<!-- Footer Copyright -->
					<div class="footer-copyright">
					<p>LoL Team Comp isn't endorsed by Riot Games and doesn't reflect the views or opinions of Riot Games or anyone officially involved in producing or managing League of Legends. League of Legends and Riot Games are trademarks or registered trademarks of Riot Games, Inc. League of Legends &#169; Riot Games, Inc.</p>
						<p>&copy; Copyright 2015 <a href="#">LoL Team Comp</a></p>
					</div>
				</div>
			</div>
			
			<!-- Footer End -->
			
		</div>
		<!-- Footer End -->
		
		<!-- Scroll to top -->
		<span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span>
		

		
		
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
		<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
		<!-- Masonry JS -->
		<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<!-- Cycle JS -->
		<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
		<!-- jQuery flot -->
		<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
		<script src="js/jquery.flot.min.js"></script>     
		<script src="js/jquery.flot.resize.min.js"></script>
		<!-- Count To JS  -->
		<script src="js/jquery.countTo.js"></script>
		<!-- jQuery way points -->
		<script src="js/waypoints.min.js"></script>
		<!-- jQuery prettyPhoto & Isotope -->
		<script src="js/jquery.prettyPhoto.js"></script>
		<script src="js/isotope.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
		<!-- This Page JavaScript -->
		<script type="text/javascript" >
			// SLIDER REVOLUTION Java Script
				jQuery(document).ready(function() {
					   jQuery('.tp-banner').revolution(
						{
							delay:9000,
							startheight:500,
							
							hideThumbs:10,
							
							navigationType:"none",	
							
							
							hideArrowsOnMobile:"on",
							
							touchenabled:"on",
							onHoverStop:"on",
							
							navOffsetHorizontal:0,
							navOffsetVertical:20,
							
							stopAtSlide:-1,
							stopAfterLoops:-1,

							shadow:0,
							
							fullWidth:"on",
							fullScreen:"off"
						});
				});
			
			// Cycle Slide Js 
			
				$('#box-slider-one').cycle({ 
					fx:    'uncover',  
					speed:    200, 
					timeout:  2500 
				});
			
			/* ******************************************** */
			/* plot js */
			/* *************************************** */  
					
				$(function() {
					/* Chart data #1 */
					var d1 = [[0, 0], [1, 1.5], [2, 3.2], [3, 4.1],[4, 5.1], [5, 5], [6, 5.3], [7, 6],[8, 6.3], [9, 7], [10, 7.5], [11, 8]];

					var options = {
						series: {
						  lines: {
							 show: true, fill: false, lineWidth:1
						  },
						  points: {
							 show: true, fill: true, lineWidth:2, radius:3, fillColor: "#fff"
						  },
						  shadowSize: 0
					   },
						colors :["#fff"],
					   grid: {
						  hoverable: true, color: "#fff", backgroundColor:null ,borderWidth:0, borderColor:"#fff", labelMargin:10
					   },
					   xaxis: {
						  ticks: 10,
						  font: {
								size: 12,
								color: ["#fff"]
							}
					   },
					   yaxis: {
						  ticks: 5,
						  font: {
								size: 12,
								color: ["#fff"]
							}
					   }, 
					   legend: {
						  backgroundOpacity:0,
						  noColumns:2,
						  labelBoxBorderColor: null
					   }
					};
					
					$("<div id='tooltip'></div>").css({
						position: "absolute",
						display: "none",
						"border-radius":"1px",
						padding: "4px 5px",
						color:"#999",
						"font-size":"11px",
						"background-color": "#fff",
						"border":"1px solid #ccc",
						"z-index": "20"
					}).appendTo("body");

					$(".plot-chart").bind("plothover", function (event, pos, item) {
							if (item) {
								var x = item.datapoint[0].toFixed(2),
									y = item.datapoint[1].toFixed(2);

								$("#tooltip").html(x + ", " + y)
									.css({top: item.pageY+5, left: item.pageX+5})
									.fadeIn(200);
							} else {
								$("#tooltip").hide();
							}
					});

					$.plot(".plot-chart", [ {data: d1,  label: "Revenue"} ], options);
				});
				
			// Type your codde here
		</script>
	</body>	
</html>