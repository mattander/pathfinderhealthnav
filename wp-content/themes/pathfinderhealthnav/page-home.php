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
    <section class="services container">

        <article class="card">
            <div class="card-body">
                <h4 class="card-title">Service 1</h4>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi fugiat alias voluptates! Consequuntur enim velit necessitatibus. Dolores, aliquid error aspernatur vitae culpa maxime debitis vel saepe ratione atque, consectetur obcaecati?</p>
                <a href="" class="btn btn-primary">Learn more</a>
            </div>
        </article>
        <article class="card">
            <div class="card-body">
                <h4 class="card-title">Service 2</h4>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi fugiat alias voluptates! Consequuntur enim velit necessitatibus. Dolores, aliquid error aspernatur vitae culpa maxime debitis vel saepe ratione atque, consectetur obcaecati?</p>
                <a href="" class="btn btn-primary">Learn more</a>
            </div>
        </article>
        <article class="card">
            <div class="card-body">
                <h4 class="card-title">Service 3</h4>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi fugiat alias voluptates! Consequuntur enim velit necessitatibus. Dolores, aliquid error aspernatur vitae culpa maxime debitis vel saepe ratione atque, consectetur obcaecati?</p>
                <a href="" class="btn btn-primary">Learn more</a>
            </div>
        </article>
    </section>
    
<?php require('footer.php'); ?>
