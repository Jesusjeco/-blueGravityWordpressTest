<?php get_header(); ?>

<div class="games">
  <div class="wrapper">
    <main id="main" class="site-main">
      <header class="page-header">
        <h1 class="page-title">Games</h1>
      </header>

      <?php if (have_posts()) : ?>
        <div class="games-list">
          <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <header class="entry-header">
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              </header>

              <div class="entry-content">
                <?php the_excerpt(); ?>
              </div>
            </article>
          <?php endwhile; ?>
        </div>

        <?php the_posts_navigation(); ?>

      <?php else : ?>
        <p>No games found.</p>
      <?php endif; ?>
    </main>
  </div>
</div>

<?php get_footer(); ?>