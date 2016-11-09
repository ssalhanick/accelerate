
<?php
/**
 * Template Name: about
 * The template for displaying the about page
 *
 * This is the template that displays all about pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */



get_header(); ?>
<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php while ( have_posts() ) : the_post();
            $image_1 = get_field('image_1');
            $size = "full";
         ?>
			<section class="about-us">
				<div class="site-content">
					<h4>Our Services</h4>
					<p>
						We take pride in our clients and the content we create for them. Here's a brief overview of our services offered.
					</p>
					<ul class="about-us-services">
						<?php query_posts('posts_per_page=3&post_type=services&order=ASC'); ?>
					  <li>
					  	<div class='aboutpage-hero'>
			  				<div class="service-container">
			  					<div class="services-image">
			  						<?php if($image_1) { ?>
			                       <?php echo wp_get_attachment_image( $image_1, $size ); ?>
			                    <?php } ?>
			  					</div>
			  					<div class="services-copy">
			  						<h2><?php the_title(); ?></h2>
			  						<p>
			  							<?php the_content(); ?>
			  						</p>
			  					</div>
			  				</div>
					  	</div>
					  </li>
						  <?php wp_reset_query(); ?>
					  </ul>
				</div>
			</section>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<?php get_footer(); ?>
