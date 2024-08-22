<?php
$data = get_field('data');
$blockID = $block['id'];
?>
<div class="services" id="<?= $blockID ?>">
  <?php
  if ($data['services']):
    foreach ($data['services'] as $key => $service): ?>
      <div class="service">
        <div class="text"><?= $service['text'] ?></div>
        <div class="image"><img src="<?= $service['image']['url'] ?>" alt="<?= $service['image']['alt'] ?>"></div>
      </div>
  <?php endforeach;
  endif;
  ?>
</div>