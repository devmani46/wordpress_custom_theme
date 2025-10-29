<!-- individual post template file -->
 

<!-- <h1>Welcome to our website</h1> -->

<?php
    while(have_posts()) {
        the_post();?>
        <!-- asdasd -->
        <div>
            <h2><?php the_title(); ?></h2>
            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
        <?php }
?>
<p>Footer</p>