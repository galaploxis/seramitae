<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
  <h2 style="font-family:Orbitron;"><?php bloginfo('name'); ?></h2>
  <nav>
    <a href="<?php echo home_url(); ?>">Home</a>
  </nav>
</header>

<div class="hero">
  <h1>Blog</h1>
</div>