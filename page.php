<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			
		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

		<header class="featured-image-bg" style="background: url('<?php echo $thumb['0'];?>')"><div class="page-header" ><div class="content-wrapper"><h2><?php the_title(); ?></h2></div></div></header>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" class="content-wrapper" <?php post_class(); ?>>

				<?php the_content(); ?>

				<!-- < ?php comments_template( '', true ); // Remove if you don't want comments ?> -->

				<br class="clear">

				<!-- < ?php edit_post_link(); ?> -->

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
	</main>

<?php get_footer(); ?>
