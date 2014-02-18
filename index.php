<?php get_header(); ?>

<main id="content" role="main">
<div class="wrapper">
	
	<div class="main">

		<?php
			// Why is this here?
			// Well, index.php is the last and default template when
			// all else fails. The following vars and if statement
			// are used to give the section an appropriate class name
			// based on the name of the page. Overkill, but I'm happy.
			$page_url  = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			$page_slug  = explode("/", $page_url);
			$page_name = $page_slug[1];
			if ( $page_name == '' ) {
				$page_name = 'home';
			}
		?>
		<section class="<?php echo $page_name; ?>">

			<?php if ( have_posts() ) : ?>

				<header>

					<h1 class="title"><?php echo ucwords( str_replace( '-', ' ', $page_name ) ); ?></h1>

				</header>

				<ul class="listing">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							// Thumbail?
							if ( has_post_thumbnail()) { 
								$figure = 'has-figure'; 
							} else { 
								$figure = 'no-figure'; 
							}
						?>

						<li id="post-<?php the_ID(); ?>" <?php post_class( $figure ) ?> >

							<article>

								<?php if ( has_post_thumbnail() ) : ?>
								<figure>

									<?php the_post_thumbnail(); ?>

								</figure>
								<?php endif; ?>

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