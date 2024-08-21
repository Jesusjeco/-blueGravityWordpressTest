<link rel="stylesheet" href="<?= BLOCKS_STYLES_PATH . "/hero-video/style.css" ?>">
<?php
$data = get_field('data');
$blockID = $block['id'];
?>
<style>
  #<?= $blockID ?> {
    background: url(<?= $data['background']['url'] ?>);
    object-fit: cover;
    object-position: center center;
  }
</style>
<div class="hero-video" id="<?= $blockID ?>">
  <div class="wrapper">
    <div class="top_text"><?= $data['top_text'] ?></div>
    <div class="video_iframe border-radius">
      <?= $data['video_iframe'] ?>
    </div>
  </div>
</div>