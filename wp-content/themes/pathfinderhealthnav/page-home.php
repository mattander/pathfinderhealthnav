<?php require('header.php');
show_admin_bar(false);
?>
    <section class="jumbotron">
        <article class="jumbotron__container container">
            <div class="row">
                <div class="col-xs-10 col-sm-9">
                    <h1 class="display-4"><?php echo get_field('header_title') ?></h1>
                    <div class="lead"><?php echo get_field('header_content') ?></div>
                    <a href="<?php echo get_field('header_button_link') ?>" class="btn btn-lg btn-primary"><?php echo get_field('header_button_text') ?></a>
                </div>
            </div>
        </article>
    </section>
    <?php if (have_rows('service_cards')) : ?>
    <h2 class="container mb-4"><?php echo get_field('services_section_title'); ?></h2>
        <section class="services container">
            <?php while (have_rows('service_cards')) : the_row(); 
            //vars
            $title = get_sub_field('service_title');
            $text = get_sub_field('service_text');
            $link = get_sub_field('service_link');
            ?>

        <article class="card">
            <div class="card-body">
                <h4 class="card-title"><?php echo $title; ?></h4>
                <p class="card-text"><?php echo $text; ?></p>
                <a href="<?php echo $link; ?>" class="btn btn-primary card-link">Learn more</a>
            </div>
        </article>  
            <?php endwhile; ?>
        </section>
    <?php endif; ?>

    <section class="lower-content container homepage__lower-content mt-4">
        <h2><?php the_field('lower_section_title'); ?></h2>
        <div>
            <?php the_field('lower_section_text') ?>
        </div>    
    </section>
<?php require('footer.php'); ?>
