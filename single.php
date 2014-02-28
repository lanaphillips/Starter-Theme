<?php get_header(); ?>
	
<div class="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php
			// Thumbail?
			if ( has_post_thumbnail()) { 
				$figure = 'has-figure'; 
			} else { 
				$figure = 'no-figure'; 
			}
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( $figure ) ?>>

			<?php if ( has_post_thumbnail() ) : ?>
			<figure>

				<?php the_post_thumbnail(); ?>

			</figure>
			<?php endif; ?>
			
			<header>

				<h1 class="title"><?php the_title(); ?></h1>

				<?php get_template_part( '/inc/meta.php' ); ?>

			</header>

			<div class="entry">
				
				<?php the_content(); ?>

				<?php edit_post_link('Edit this entry','','.'); ?>

				<div class="tags">

					<?php the_tags( 'Tags: ', ', ', ''); ?>

				</div>

			</div>

			<footer>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</footer>
			
		</article>

		<?php comments_template(); ?>

	<?php endwhile; endif; ?>

</div><!-- .main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
