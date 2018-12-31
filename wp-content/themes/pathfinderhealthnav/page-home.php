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
    <h2 class="container mb-4"><?php echo get_field('services_section_title'); ?></h2>
    <section class="services container">
        <article class="card">
            <div class="card-body">
                <h4 class="card-title"><?php echo get_field('service_1_card_title'); ?></h4>
                <p class="card-text"><?php echo get_field('service_1_card_text'); ?></p>
                <a href="<?php echo get_field('service_1_card_link'); ?>" class="btn btn-primary card-link">Learn more</a>
            </div>
        </article>
        <article class="card">
            <div class="card-body">
                <h4 class="card-title"><?php echo get_field('service_2_card_title'); ?></h4>
                <p class="card-text"><?php echo get_field('service_2_card_text'); ?></p>
                <a href="<?php echo get_field('service_2_card_link'); ?>" class="btn btn-primary card-link">Learn more</a>
            </div>
        </article>
        <article class="card">
            <div class="card-body">
                <h4 class="card-title"><?php echo get_field('service_3_card_title'); ?></h4>
                <p class="card-text"><?php echo get_field('service_3_card_text'); ?></p>
                <a href="<?php echo get_field('service_3_card_link'); ?>" class="btn btn-primary card-link">Learn more</a>
            </div>
        </article>
        <article class="card">
            <div class="card-body">
                <h4 class="card-title"><?php echo get_field('service_4_card_title'); ?></h4>
                <p class="card-text"><?php echo get_field('service_4_card_text'); ?></p>
                <a href="<?php echo get_field('service_4_card_link'); ?>" class="btn btn-primary card-link">Learn more</a>
            </div>
        </article>
    </section>
    
<?php require('footer.php'); ?>
