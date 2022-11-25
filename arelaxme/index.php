<?php 
/**
 * index
 */
?>

<?php get_header(); ?>
  
    <main>
      <?php if (has_post_thumbnail()) : ?>
        <div class="main-image">
          <?php the_post_thumbnail(); ?>
        </div>      
      <?php endif; ?>
      
      <div class="container">
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      </div>
    </main>
  
<?php get_footer(); ?>/wordpress-elementor/wp-content/uploads/2022/11/pexels-ivan-samkov-5659008.jpg