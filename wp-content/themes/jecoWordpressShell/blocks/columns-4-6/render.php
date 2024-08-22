<?php
$data = get_field('data');
$blockID = $block['id'];
?>
<style>
  #<?= $blockID ?> {
    background-color: <?= $data['background_color'] ?>;
  }
</style>
<div class="columns-4-6" id="<?= $blockID ?>">
  <div class="container">
    <div class="wrapper">
      <div class="title"><?= $data['title'] ?></div>
      <div class="text"><?= $data['text'] ?></div>
    </div>
    <div class="image"><img loading="lazy"  src="<?= $data['image']['url'] ?>" alt="<?= $data['image']['alt'] ?>"></div>
  </div>
</div>