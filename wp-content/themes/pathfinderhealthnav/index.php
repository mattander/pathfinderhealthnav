<?php require('header.php'); ?>

<div class="page-content mt-4">
<h1><?php the_title(); ?></h1>
<section id="main-content">
  <?php echo get_field('content'); ?>
</section>
</div>

<?php require('footer.php'); ?>
