<?php

/**
 * Template name: About us
 */
$data = get_field("data");
get_header(); ?>
<div class="about">
  <div class="ourStory">
    <h1 class="title"><?= $data['title'] ?></h1>
    <div class="mainText"><?= $data['main_text'] ?></div>
  </div>

  <div class="aboutOurGames">
    <h2 class="h1">About our games</h2>
    <div class="games">
      <div class="box1">
        <div class="image1"><img loading="lazy"  src="<?= $data['image1']['url'] ?>" alt=""></div>
        <div class="text1"><?= $data['text1'] ?></div>
      </div>
      <div class="box2 text2"><?= $data['text2'] ?></div>
      <div class="box3">
        <div class="text3"><?= $data['text3'] ?></div>
        <div class="image2"><img loading="lazy"  src="<?= $data['image2']['url'] ?>" alt=""></div>
      </div>
    </div>
  </div>

  <div class="meetTheTeam">
    <h2 class="title2 h1"><?= $data['title2'] ?></h2>
    <div class="team">
      <?php
      if ($data['team']) {
        foreach ($data['team'] as $key => $member) { ?>
          <div class="member">
            <div class="profile"><img loading="lazy"  src="<?= $member['profile']['url'] ?>" alt=""></div>
            <div class="name"><?= $member['name'] ?></div>
            <div class="job_title"><?= $member['job_title'] ?></div>
          </div>
      <?php
        }
      } //Team
      ?>
    </div>
  </div>
</div>
<?php
get_footer();
