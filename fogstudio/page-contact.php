<?php 
    /* Template Name: Contact */
?>

<?php get_header(); ?>

    <main id="content" class="page-contact">
        <div class="container">
            <h2 class="page-title"><img src="<?php print IMAGES; ?>/page-title-contact.png" alt="Contact" title="Contact" ></h2>
            <div class="inner">
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <div class="page-contact-img">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                    </div>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>