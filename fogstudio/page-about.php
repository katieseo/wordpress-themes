<?php 
    /* Template Name: About */
?>

<?php get_header(); ?>

    <main id="content" class="page-about">
        <div class="container">
            <h2 class="page-title"><img src="<?php print IMAGES; ?>/page-title-about.png" alt="About" title="About" ></h2>
            <div class="inner">
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <div class="row">
                        <div class="col-about-img">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                        </div>
                        <div class="col-about-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </main>
    
<?php get_footer(); ?>