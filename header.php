<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title> <?php bloginfo('name'); ?> </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/<?php global $style; echo $style; ?>.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/geral.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/bower_components/wow/css/libs/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/plugins.css">
	<?php if(is_front_page()) : ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/bower_components/slick-carousel/slick/slick-theme.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/bower_components/slick-carousel/slick/slick.css">
	<?php endif; ?>

	<?php wp_head(); ?>
</head>
<body>

	<?php include ('includes/organisms/menu-responsive.php'); ?>

	<style>
		 <?php if(get_the_post_thumbnail()): ?>
		 			header {
						background-image: url('<?php the_post_thumbnail_url(); ?>');
					}
		 <?php else: ?>
				 header {
					 background-image: url('<?php bloginfo('template_url');?>/imagens/fundo-pagina-sobre.png');
				 }
		 <?php endif; ?>
	</style>
	<div class="layout">

	<header>
		<div class="container">
			<div class="logo wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php bloginfo('template_url'); ?>/imagens/logo-topo.png" alt="logo topo">
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
