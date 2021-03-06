<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- icons -->
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        
        <script type="text/javascript" src="//use.typekit.net/okj3uki.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		
        <!-- css + javascript -->
		<?php wp_head(); ?>
		<script>
		!function(){
			// configure legacy, retina, touch requirements @ conditionizr.com
			conditionizr()
		}()
		</script>
	</head>
	<body <?php body_class(); ?>>


		<!-- wrapper -->
		<div class="container-fluid">

			<div class="row-fluid">