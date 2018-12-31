<?php require('header.php'); ?>

<div class="container mt-4">
<h1><?php echo get_field('title'); ?></h1>
<section id="main-content">
  <?php echo get_field('content'); ?>
</section>
</div>

<?php require('footer.php'); ?>
