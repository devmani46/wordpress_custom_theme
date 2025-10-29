<!-- <h1>Welcome to our website</h1> -->

<h2>
    <?php the_archive_title(); ?>
</h2>

<?php
    while(have_posts()) {
        the_post();?>
        <!-- asdasd -->
        <div>
            <h3><a href=" <?php the_permalink(); ?> "><?php the_title(); ?>  </a></h3>
        </div>
        <?php }
?>
<p>Footer</p>