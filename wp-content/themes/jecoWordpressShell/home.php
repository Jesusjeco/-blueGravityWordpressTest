<?php
get_header(); ?>

<div class="home">
	<div class="wrapper">
		<?php if (have_posts()) { ?>
			<h1>Latest Blog Posts</h1>
			<div class="posts">
				<?php
				while (have_posts()) {
					the_post();
					$the_title = get_the_title();
					$the_permalink = get_permalink();
					$thumbnail_url = get_the_post_thumbnail_url();
					$thumbnail_id = get_post_thumbnail_id($post->ID);
					$alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>
					<div class="post">
						<div class="image">
							<a href="<?= $the_permalink ?>">
								<img loading="lazy" src="<?= $thumbnail_url ?>" alt="<?= esc_attr($alt_text) ?>">
								<span class="sr-only"><?= $the_title  ?></span>
							</a>
						</div>
						<a href="<?= $the_permalink ?>">
							<h2 class="title"><?= $the_title  ?></h2>
						</a>
						<hr class="divider">
						<div class="excerpt"><?php the_excerpt() ?></div>
						<div><a href="<?= $the_permalink ?>" class="button button-primary-outline">Take a look!</a></div>
					</div>
				<?php
				} ?>
			</div>
		<?php
			the_posts_navigation(
				[
					'mid_size' => 2,
					'prev_text' => 'Previous Page',
					'next_text' => 'Next Page',
				]
			);
			wp_reset_postdata(); // end while
		} //end if
		else { ?>
			<div class="message">No posts where found</div>
		<?php
		} // end else
		?>

	</div>
</div>
<?php
get_footer();
