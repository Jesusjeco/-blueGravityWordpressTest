<?php
$footer_data = get_field('footer_data', 'option');
?>
<footer>
    <div class="wrapper">
        <div class="logo"><img src="<?= $footer_data['logo']['url'] ?>" alt="<?= $footer_data['logo']['alt'] ?>"></div>
        <div class="text"><?= $footer_data['text'] ?></div>
        <div class="socials">
            <?php
            if ($footer_data['socials'] && count($footer_data['socials']) > 0) {
                foreach ($footer_data['socials'] as $key => $social) { ?>
                    <div class="social">
                        <a target="_blank" href="<?= $social['url'] ?>">
                            <img src="<?= $social['icon']['url'] ?>" alt="<?= $social['icon']['alt'] ?>">
                        </a>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <div class="columns">
            <?php
            if ($footer_data['columns'] && count($footer_data['columns']) > 0) {
                foreach ($footer_data['columns'] as $key => $column) { ?>
                    <div class="column">
                        <?= $column['column'] ?>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <div class="copyright">© 2024 Blue Gravity Studios</div>
    </div>
</footer>
<?php wp_footer() ?>

<script>
    //This is for the toggle of the menu
    jQuery(document).ready(function($) {
        $('.navbar-toggler').on('click', function() {
            $(this).toggleClass('open');
            $('.navbar-nav').toggleClass('open');
        });
    });
</script>
</body>

</html>