<?php

	if ( !empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME']) )
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		This post is password protected. Enter the password to view comments.
	<?php
		return;
	}
?>
	
<?php if ( have_comments() ) : ?>

	<section id="comments" class="comments">

		<header>

			<h2 class="title">Comments</h2>

			<nav class="pagination">

				<ul>
					<li class="next"><?php previous_comments_link() ?></li>
					<li class="prev"><?php next_comments_link() ?></li>
				</ul>

			</nav>

		</header>

		<ul class="listing">

			<?php wp_list_comments(); ?>

		</ul>

		<footer>

			<nav class="pagination">

				<ul>
					<li class="next"><?php previous_comments_link() ?></li>
					<li class="prev"><?php next_comments_link() ?></li>
				</ul>
				
			</nav>

		</footer>

	</section>

<?php else : // No Comments ?>

	<section id="comments" class="comments">

		<header>

			<h2 class="title">Comments</h2>

		</header>

		<ul class="listing">

			<?php if ( comments_open() ) : ?>

				<li>
					<p>No one has commented yet, feel free to add one!</p>
				</li>

			<?php else : ?>

				<li>
					<p>Comments are closed.</p>
				</li>

			<?php endif; ?>

		</ul>

		<footer></footer>

	</section><!-- #comments -->

<?php endif; ?>

<?php if ( comments_open() ) : ?>

	<section id="post-comment" class="comments">

		<header>

			<h2 class="title">Leave a Reply</h2>

		</header>

		<div id="comment-form">

			<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>

				<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>

			<?php else : ?>

				<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" role="form">

					<textarea name="comment" id="comment" cols="58" rows="10" tabindex="4" required></textarea>

					<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
					
					<?php comment_id_fields(); ?>

					<?php do_action('comment_form', $post->ID); ?>

				</form>

			<?php endif; ?>

		</div>

		<footer>

			<?php cancel_comment_reply_link(); ?>

		</footer>

	</section><!-- #post-comment -->

<?php endif; ?>
