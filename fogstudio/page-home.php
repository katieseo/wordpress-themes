<?php 
    /* Template Name: Home */
?>

<?php get_header(); ?>

    <main id="content" class="page-home">
        <div class="container" 
 
        <?php if (has_post_thumbnail()){ ?>
        <?php $domsxe = simplexml_load_string(get_the_post_thumbnail());
              $thumbnailsrc = $domsxe->attributes()->src; ?>
            style="background-image:url(<?php echo $thumbnailsrc ?>)"
        <?php } ?>
        >
            <?php while (have_posts()) : the_post(); ?>
            <div class="home-contents"><?php the_content(); ?></div>
            <?php endwhile;?>
        </div>
    </main>

<?php get_footer(); ?>