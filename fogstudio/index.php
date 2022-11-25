<?php 
    /* Index */
?>

<?php get_header(); ?>

    <main id="content">
        <div class="container">   
            <div class="inner">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
                    <h3><?php the_title(); ?></h3>
                    <p><?php The_excerpt(); ?><a href="<?php the_permalink() ?>">View details.</a></p>
                <?php endwhile; ?>
            </div>
        </div>
    </main>
    
<?php get_footer(); ?>