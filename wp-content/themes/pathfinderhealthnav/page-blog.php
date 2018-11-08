<?php require('header.php');?>
<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<div class="main-content__container container">
  <article>
    <h1>The blog</h1>
      <p>I'll be working on this website quite a bit while I get it up and running so I figure I'd better write a blog to capture my thoughts and working process. The way I see it, this is more valuable than any resume. Watch me work and see what goes on in this crazy thing I call a brain.</p>

      <h2>Follow along as I work</h2>
    <?php // Display blog posts on any page @ https://m0n.co/l
    $temp = $wp_query; $wp_query= null;
    $wp_query = new WP_Query(); $wp_query->query('posts_per_page=10' . '&paged='.$paged);
    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div class="row">
  <div class="col">
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <p><a href=""><?php previous_posts_link('Newer Posts &raquo;'); ?></a></p>
  </div>
</div>

    <?php endwhile; ?>

    <?php if ($paged > 1) { ?>

    <nav id="nav-posts">
  <div class="prev"><?php next_posts_link('< Prev post'); ?></div>
  <div class="next"><?php previous_posts_link('Next post >'); ?></div>
    </nav>

    <?php } else { ?>

    <nav id="nav-posts">
  <div class="prev"><?php next_posts_link('< Prev post'); ?></div>
    </nav>

    <?php } ?>

    <?php wp_reset_postdata(); ?>

  </article>
</div>
<?php require('footer.php');?>
