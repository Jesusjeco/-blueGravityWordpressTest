<?php get_header(); ?>

<div class="games-archive">
  <div class="wrapper">
    <main id="main" class="site-main">
      <header class="page-header">
        <h1 class="page-title">Games</h1>
      </header>

      <div class="games">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post();
            $thumbnail_url = get_the_post_thumbnail_url();
            $thumbnail_id = get_post_thumbnail_id($post->ID);
            $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>
            <article class="game" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <div class="image">
                <a href="<?php the_permalink() ?>"><img loading="lazy"  src="<?= $thumbnail_url ?>" alt="<?= esc_attr($alt_text) ?>"></a>
              </div>
              <header class="entry-header">
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              </header>

              <div class="entry-content">
                <?php the_excerpt(); ?>
              </div>
            </article>
          <?php endwhile; ?>

          <?php the_posts_navigation(); ?>

        <?php else : ?>
          <p>No games found.</p>
        <?php endif; ?>
      </div>
    </main>
  </div>
</div>

<?php get_footer(); ?>