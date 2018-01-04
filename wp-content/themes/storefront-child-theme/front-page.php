<?php
/**
 * The template for the homepage
 *
 * @package LazersRUs
 * @subpackage Storefront-child-theme
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="social-btns">  <!-- populate or remove as many of these as you want -->
					<a href="https://twitter.com/THHood85?lang=en" class="soc-icon tw"></a>
					<a href="https://www.facebook.com/TysonHH" class="soc-icon fb"></a>
					<a href="https://www.linkedin.com/in/tyson-hood-506194107/" class="soc-icon ln"></a>
					<a href="https://dribbble.com/TysonHood" class="soc-icon db"></a>
					<a href="https://github.com/RrennM" class="soc-icon gh"></a>
					<a href="https://www.instagram.com/antsyadventurer/" class="soc-icon in"></a>
				</div>
				<a href="<?php echo site_url('/shop/'); ?>" class="btn">View My Store</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
