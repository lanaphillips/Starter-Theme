<?php get_header(); ?>

<main id="content" role="main">
<div class="wrapper">
	
	<div class="main">

		<section class="search">

			<?php if ( have_posts() ) : ?>

				<header>

					<h1 class="title">Search Results</h1>

				</header>

				<ul class="listing">

					<?php while (have_posts()) : the_post(); ?>

						<li <?php post_class() ?> id="post-<?php the_ID(); ?>">

							<article>

								<header>

									<h2 class="title"><?php the_title(); ?></h2>

								</header>

								<div class="entry">

									<?php the_excerpt(); ?>

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

					<h1 class="title">No Search Results Here</h1>

				</header>

			<?php endif; ?>

		</section>

	</div><!-- .main -->

	<?php get_sidebar(); ?>
	
</div>
</main>

<?php get_footer(); ?>