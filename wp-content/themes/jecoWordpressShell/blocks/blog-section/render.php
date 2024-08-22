<?php
$data = get_field('data');
$blockID = $block['id'];

$blog_section_query = get_query(['posts_per_page' => 3]);
?>
<style>
  #<?= $blockID ?> {
    background-color: <?= $data['background_color'] ?>;
  }
</style>
<div class="blog-section" id="<?= $blockID ?>">
  <div class="wrapper">
    <div class="btn_container">
      <?php
      $link = $data['button'];
      if ($link):
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
        <a class="h1" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
      <?php endif; ?>
    </div>
    <div class="posts">
      <?php
      if ($blog_section_query->have_posts()): ?>
        <?php
        while ($blog_section_query->have_posts()):
          $blog_section_query->the_post();
          $the_id = get_the_ID();
          $thumbnail_url = get_the_post_thumbnail_url();
          $thumbnail_id = get_post_thumbnail_id($the_id);
          $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>
          <div class="post">
            <div class="image">
              <a href="<?php the_permalink() ?>"><img loading="lazy"  src="<?= $thumbnail_url ?>" alt="<?= esc_attr($alt_text) ?>"></a>
            </div>
            <a href="<?php the_permalink() ?>">
              <h2 class="title"><?php the_title(); ?></h2>
            </a>
            <hr class="divider">
            <div class="excerpt"><?php the_excerpt() ?></div>
            <div><a href="<?php the_permalink() ?>" class="button button-primary-outline">Read more</a></div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>