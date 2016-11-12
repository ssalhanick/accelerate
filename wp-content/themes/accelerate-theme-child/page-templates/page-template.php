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
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="aboutpage-hero">
			<?php the_content(); ?>
	</div>
	<?php endwhile; // end of the loop. ?>
	<div class="site-content">
	<div class="services-intro">
		<h4>Our Services</h4>
		<p>
			We take pride in our clients and the content we create for them. <br> Here's a brief overview of our services offered.
		</p>
	</div>
	<ul class="about-us-services">
		
		<?php query_posts('post_type=services&order=ASC'); ?>
		<?php while ( have_posts() ) : the_post();
            $image_1 = get_field('image_1');
            $size = "full";
         ?>
	  <li>
		<div class="service-container">
			<div class="services-image <?php the_field("image_alignment") ?>">
              <?php if($image_1) { ?>
                 <?php echo wp_get_attachment_image( $image_1, $size ); ?>
              <?php } ?>
			</div>
			<div class="services-copy">
				<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
			</div>
		</div>
	  </li>
		  <?php endwhile; // end of the loop. ?>
		  <?php wp_reset_query(); ?>
	  </ul>
	</div>
	<div class="contact-us">
		<h3>Interested in working with us?</h3>
		<a href="accelerate/contact-us">Contact Us</a>
	</div>
</section>

<?php get_footer(); ?>
