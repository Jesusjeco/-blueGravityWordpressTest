<link rel="stylesheet" href="<?= BLOCKS_STYLES_PATH . "/columns-4-6-button/style.css" ?>">
<?php
$data = get_field('data');
$blockID = $block['id'];
?>
<style>
  #<?= $blockID ?> {
    background-color: <?= $data['background_color'] ?>;
  }
  #<?= $blockID ?> .button{
    background-color: <?= $data['button_background_color']?>;
  }
  #<?= $blockID ?> .button:hover{
    background-color: <?= $data['button_background_color_hover']?>;
  }
</style>
<div class="columns-4-6-button" id="<?= $blockID ?>">
  <div class="container">
    <div class="wrapper">
      <?php
      $link = $data['button'];
      if ($link):
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
        <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
      <?php endif; ?>
      <div class="title"><?= $data['title'] ?></div>
      <div class="text"><?= $data['text'] ?></div>
    </div>
    <div class="image"><img src="<?= $data['image']['url'] ?>" alt="<?= $data['image']['alt'] ?>"></div>
  </div>
</div>