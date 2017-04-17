<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Do it!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/<?php echo $style; ?>.css">
	<link rel="stylesheet" href="css/geral.css">
	<link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">
	<link rel="stylesheet" href="css/plugins.css">
</head>
<body>

	<?php include ('includes/organisms/menu-responsive.php'); ?>

	<div class="layout">

	<header>
		<div class="container">
			<div class="logo wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
				<a href="index.html">
					<img src="imagens/logo-topo.png" alt="logo topo">
				</a>
			</div>

			<div class="links wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
				<?php include ('includes/organisms/menu.php'); ?>

				<a class="toggle" href="javascript:;">
							<span></span>
							<span></span>
							<span></span>
						</a>

				<ul class="social">
					<li>
						<a href="#"><i class="fa fa-facebook"></i></a>
					</li>

					<li>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</li>
				</ul>
			</div>
		</div>



	</header>

	<main>
