<?php get_header(); ?>

    <main id="content" class="single-portfolio">
        <div class="container">
            <h2 class="page-title"><img src="<?php print IMAGES; ?>/page-title-portfolio.png" alt="Portfolio" title="Portfolio" ></h2>
            <div class="inner">
                <div class="inner">
                    <div class="breadcrumb">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'portfolio' ) ) ); ?>">Overview</a> <img src="<?php print IMAGES; ?>/nav-arrow-right.png" class="breadcrumb-arrow" /> <span class="current">Details</span>
                    </div>

                    <div class="portfolio-slide">
                        <?php $attachments = new Attachments( 'portfolio_attachments' ); /* pass the instance name */ ?>
                        <?php if( $attachments->exist() ) : ?>
                            <?php while( $attachments->get() ) : ?>
                              <div>
                                <?php echo $attachments->image( 'full' ); ?>
                              </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <h3><?php the_title(); ?></h3>
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>