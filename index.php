<?php get_header(); ?>

	<main role="main">
			
	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(41), 'full' );?>

	<?php
		$home_id = 41;
		$post_id_41 = get_post($home_id);
		$content = $post_id_41->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);
	?>

		<!-- section -->
		<section>
	
			<header class="banner-bg" style="background: url('<?php echo $thumb['0'];?>')"><div class="homepage-banner" ><div class="content-wrapper"><h2>Train movement <span class="smarter">smarter</span>, not <span class="harder">harder</span></h2><a href="http://ro-movement-a.web.dmitcapstone.ca/r.o_movement/services/" class="btn read-more">Read More</a></div></div></header>

			<!-- article -->
			<article id="post-41" class="content-wrapper">
		
				<?php echo $content; ?>

			</article>
			<!-- /article -->

		
		
		</section>
		<!-- /section -->
	</main>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
