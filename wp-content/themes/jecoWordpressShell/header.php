<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php is_front_page() ? the_title() : wp_title(''); ?>
    </title>
    <?php wp_head() ?>

    <link rel="stylesheet" href="<?= STYLES_PATH . "default.css" ?>">
</head>

<body>
    <?php
    $header_data = get_field('header_data', 'option');
    //var_dump($header_data);
    ?>
    <header class="menu">
        <div class="wrapper">
            <?php
            //Printing menu
            echo clean_custom_menus($header_data['logo']['url']); ?>
        </div>
    </header>