<?php 
    /* Template Name: Services */
?>

<?php get_header(); ?>

    <main id="content" class="page-services">
        <div class="container">
            <h2 class="page-title"><img src="<?php print IMAGES; ?>/page-title-services.png" alt="Services" title="Services" ></h2>
            <div class="inner">
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <div class="page-summary"><?php the_content(); ?></div>
                <?php endwhile; endif; ?>

                <?php $this_page_id=$wp_query->post->ID; ?>
                <?php query_posts(array('post_parent' => $this_page_id, 'post_type' => 'page', 'orderby'=> 'menu_order', 'order'=>'ASC')); 
                      while (have_posts()) { the_post(); ?>

                <div class="service-item">
                    <div class="col-service-img">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                    </div>
                    <div class="col-service-content">
                        <h3><?php the_title(); ?></h3>
                        <div class="service-details">
                            <?php global $more; $more = 0; ?>
                            <div class="details-excerpt">
                                <?php the_content('Read more.'); ?>
                            </div>
                            <div class="details-more">
                                <?php $aftermore = 11 + strpos($post->post_content, '<!--more-->');
                                  echo substr($post->post_content,$aftermore); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <?php } ?>

            </div>
        </div>
    </main>

<?php get_footer(); ?>