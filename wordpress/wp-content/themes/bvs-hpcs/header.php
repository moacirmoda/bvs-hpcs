<!doctype html>
<html lang="<?php echo bloginfo('language');?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="all" />

	<title>
		<?php if (is_home()){
			bloginfo('name');
		}elseif (is_category()){
			single_cat_title(); echo ' -  ' ; bloginfo('name');
		}elseif (is_single()){
			single_post_title();
		}elseif (is_page()){
			bloginfo('name'); echo ': '; single_post_title();
		}else {
			wp_title('',true);
		} ?>
	</title>

	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<!-- Facebook -->
	<meta property="og:title" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:description" content=""/>

	<!-- FAVICON -->
	<link rel="shortcut icon" href="<?= get_stylesheet_directory_uri(); ?>/static/favicon.ico" />

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" />
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_uri(); ?>" />

	<?php wp_head(); ?>
</head>
<body>
	<header>
        <div class='container'>
            <div class='row language'>
                <div class='col-sm-12'>
                    <ul>
                        <li><a href="#" title="Cambiar para español">español</a></li>
                        <li><a href="#" title="Mudar para português">português</a></li>
                        <li><a href="#" title="Entre em contato conosco">contato</a></li>
                    </ul>
                </div>
            </div>

            <div class='row top'>
                <div class='col-sm-1 bvs-logo'>
                    <img src="<?php bloginfo('template_url') ?>/static/img/logobvs.png" alt="Biblioteca Virtual em Saúde"/>
                </div>

                <div class='col-sm-11 bvs-title'>
                    <h2><?php bloginfo('description'); ?></h2>
                    <h1><?php bloginfo('name'); ?></h1>
                </div>
            </div>

            <div class='row search'>
                <div class='col-sm-6 col-sm-offset-3'>
                    <?php dynamic_sidebar('header'); ?>
                </div>
            </div>
        </div>
    </header>
