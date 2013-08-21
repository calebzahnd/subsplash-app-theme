<?php get_header(); ?>

	<!-- section -->
	<section role="main">
		<h1><?php the_title(); ?></h1>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
            <p><button class="btn btn-primary span12" type="button">Default button</button></p>
            <p><button class="btn btn-primary span6" type="button">Button A</button> <button class="btn btn-primary span6" type="button">Button #2</button></p>
			<?php // comments_template( '', true ); // Commented out - enable if you want to see comments ?>
			<br class="clear">
			<?php edit_post_link(); ?>
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->

<?php
    //No sidebars in a mobile app
    //get_sidebar();
?>

<?php get_footer(); ?>