<?php 
    /* Template Name: Portfolio */
?>

<?php get_header(); ?>
    <main id="content" class="page-portfolio">
        <div class="container">
            <h2 class="page-title"><img src="<?php print IMAGES; ?>/page-title-portfolio.png" alt="Portfolio" title="Portfolio" ></h2>
            <div class="inner">
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <div class="page-summary"><?php the_content(); ?></div>
                <?php endwhile; endif; ?>

                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                      $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 3, 'paged'=>$paged );
                      $loop = new WP_Query( $args );  ?>

                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="portfolio-item">
                    <?php if ( has_post_thumbnail() ) { ?>
                    <div class="thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                    <?php } ?>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <?php endwhile; ?>
                <?php wp_pagenavi( array( 'query' => $loop ) ); ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </main>
    
<?php get_footer(); ?>