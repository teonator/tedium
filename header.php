<!DOCTYPE html>
<html <?php language_attributes() ; ?>>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name') ; ?></title>

		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
		<?php wp_head() ; ?>
	</head>

	<body <?php body_class() ; ?>>

	  	<div class="container-fluid page">
	  		<div class="row">

	  			<div class="col-md-4 col-sm-12 page-cover">

	  				<div class="cover-img">
	  					<div class="cover-content">
	  						<div class="cover-content-wrapper">
	  							<p class="cover-title"><a href="<?php echo home_url( '/' ) ; ?>"><?php bloginfo('name'); ?></a></p>
		  						<p class="cover-desc"><?php bloginfo('description'); ?></p>

		  						<ul class="cover-social">
		  							<li><a href="https://github.com/teonator"><i class="fa fa-github fa-2x"></i></a></li>
		  							<li><a href="https://www.linkedin.com/in/teonator"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
		  							<li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
		  							<li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
		  						</ul>
								<ul class="cover-collection"><?php wp_list_categories( array( 'title_li' => '', 'depth' => 1 ) ); ?></ul>
	  						</div>
	  					</div>
	  				</div>

	  			</div>

	  			<div class="col-md-8 col-sm-12 page-content">
		