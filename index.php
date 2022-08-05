<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo (is_front_page()) ? 'Base ' . get_bloginfo('description') : wp_title(' ', false);?></title>

<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo TEMPDIR; ?>/style.css?v=1.0">
</head>
<body <?php body_class(); ?>>


<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo TEMPDIR; ?>/js/script.js?ver=1.0"></script>
</body>
</html>