<?php
$data = get_field('data');
$blockID = $block['id'];
?>
<style>
  #<?= $blockID ?> {
    background: url(<?= $data['background']['url'] ?>);
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
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