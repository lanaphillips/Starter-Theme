<?php get_header(); ?>

<main id="content" role="main">
<div class="wrapper">
	
	<div class="main">

		<section class="archive">

			<?php if ( have_posts() ) : ?>

				<header>

					<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

					<?php if ( is_category() ) : // If Category Archive ?>
						
						<h1 class="title">&#8216;<?php single_cat_title(); ?>&#8217; Category</h1>

					<?php elseif ( is_tag() ) : // If Tag Archive ?>

						<h1 class="title">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>

					<?php elseif ( is_day() ) : // If Daily Archive ?>

						<h1 class="title">Archive for <?php the_time('F jS, Y'); ?></h1>

					<?php elseif ( is_month() ) : // If Monthly Archive ?>

						<h1 class="title">Archive for <?php the_time('F, Y'); ?></h1>

					<?php elseif ( is_year() ) : // Yearly Archive ?>

						<h1 class="title">Archive for <?php the_time('Y'); ?></h1>

					<?php elseif ( is_author() ) : // Author Archive ?>

						<h1 class="title">Author Archive</h1>

					<?php elseif ( isset( $_GET['paged'] ) && !empty( $_GET['paged'] ) ) : ?>

						<h1 class="title">Blog Archives</h1>
					
					<?php endif; ?>

				</header>

				<ul class="listing">

					<?php while ( have_posts() ) : the_post(); ?>

						<li <?php post_class() ?> id="post-<?php the_ID(); ?>">

							<article>

								<header>

									<h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

								</header>

								<div class="entry">

									<?php the_content(); ?>

								</div>

								<footer>

									<?php get_template_part('/inc/meta.php' ); ?>

								</footer>

							</article>

						</li>

					<?php endwhile; ?>

				</ul><!-- .listing -->

				<footer>

					<?php get_template_part('/inc/nav.php' ); ?>

				</footer>

			<?php else : ?>

				<header>

					<h1 class="title">No Posts Here!</h1>

				</header>

			<?php endif; ?>

		</section>

	</div><!-- .main -->

	<?php get_sidebar(); ?>
	
</div>
</main>

<?php get_footer(); ?>