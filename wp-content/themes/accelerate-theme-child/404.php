<?php
/**
 * The template for displaying 404 page
 *
 * This is the template that displays all 404 pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary404" class="site-content">
		<div id="content404" role="main">
         <div class="img404">
            <img src="/accelerate/wp-content/uploads/2016/11/404.png" alt="" />
         </div>
         <div class="copy404">
            <h3>Whoops, Took a Wrong Turn…</h3>
            <p>
               Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.
            </p>
            <p>
               Feel free to take a look around our <a href="accelerate/blog">blog</a> or some of our <a href="accelerate/blog">featured work</a>.
            </p>
         </div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
