<?php require('header.php');?>
<?php define('WP_USE_THEMES', false); get_header(); ?>
<body>
        <?php wp_nav_menu()?>
<div class="container blog__container">
  <article>

    <?php // Display blog posts on any page @ https://m0n.co/l
    $temp = $wp_query; $wp_query= null;
    $wp_query = new WP_Query(); $wp_query->query('posts_per_page=1' . '&paged='.$paged);
    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
    <p>
      <a href="/blog">Back to all blog posts</a>
    </p>
    <h1><?php the_title(); ?></h1>
    <p class="blog__date">Published on <?php the_date(); ?></p>
    <div class="blog__content"><?php the_content(); ?></div>
    <p><a href=""><?php previous_posts_link('Newer Posts &raquo;'); ?></a></p>

    <?php endwhile; ?>

    <?php if ($paged > 1) {
        ?>

    <nav id="nav-posts">
  <div class="prev"><?php next_posts_link('< Prev post'); ?></div>
  <div class="next"><?php previous_posts_link('Next post >'); ?></div>
    </nav>

    <?php
    } else {
        ?>

    <nav id="nav-posts">
  <div class="prev"><?php next_posts_link('< Prev post'); ?></div>
    </nav>

    <?php
    } ?>

    <?php wp_reset_postdata(); ?>

  </article>
</div>
<?php require('footer.php');?>
