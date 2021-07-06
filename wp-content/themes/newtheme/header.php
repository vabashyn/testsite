<?php defined('ABSPATH') OR exit('No direct script access allowed'); ?>
<!--<?php language_attributes(); ?>
<?php echo esc_url(home_url('/')); ?> -->
<?php do_action('body_head'); ?>
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тестовое задание</title>
    <?php wp_head(); ?>
</head>
<body>
<form class="decor" id="ajax_form"  name="myForm" action="" method="POST">
    <div class="form-left-decoration"></div>
    <div class="form-right-decoration"></div>
    <div class="circle"></div>
    <div class="form-inner">
        <h3>Написать нам</h3>
        <input type=text name="name" class="form-field form-name" placeholder="Username" onkeydown="limitname(this);" onkeyup="limitname(this);">
        <input type="email" name="email" class="form-field form-email" placeholder="Email" id="emailid">
        <input type="text" name="tel" class="form-field form-tel" placeholder="Tel" onkeydown="limittel(this);" onkeyup="limittel(this);">
        <textarea placeholder="Сообщение..." class="form-field form-text" name="sends" rows="3" onkeydown="limittext(this);" onkeyup="limittext(this);"></textarea>
        <input type="submit" class="send_from" id="btn" value="Отправить">
    </div>
</form>
<h2><strong>Name:</strong> <?php the_field('name'); ?></h2>
<h2><strong>Email:</strong> <?php the_field('email'); ?></h2>
<h2><strong>Tel:</strong> <?php the_field('tel'); ?></h2>
<h2><strong>Text:</strong> <?php the_field('text'); ?></h2>
<?php custom_ajax_form_send(); ?>
</body>
</html>

