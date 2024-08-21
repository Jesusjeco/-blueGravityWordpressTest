<?php
$footer_data = get_field('footer_data', 'option');
?>
<footer>
    <p>footer</p>
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