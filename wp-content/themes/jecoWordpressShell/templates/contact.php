<?php

/**
 * Template name: Contact
 */
get_header();
$data = get_field('data'); ?>
<div class="contact">
  <div class="wrapper">
    <h1>Get In Touch</h1>
    <p>Whether you just want to give a shout out or are looking to make a game, feel free to email & we'll quickly be in touch.</p>
    <div class="container">
      <?php
      if ($data['contacts']) { ?>
        <div class="contacts">
          <?php foreach ($data['contacts'] as $key => $contact): ?>
            <div class="contact">
              <?= $contact['contact'] ?>
            </div>
          <?php endforeach; ?>
        </div>
      <?php
      }
      ?>
      <div class="image">
        <img loading="lazy"  src="<?= $data['image']['url'] ?>" alt="<?= $data['image']['alt'] ?>">
      </div>
    </div>
  </div>
</div>
<?php get_footer();
