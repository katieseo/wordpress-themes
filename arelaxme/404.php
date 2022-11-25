<?php
/**
 * 404
 */
?>

<?php get_header(); ?>
  
  <main>
    <div class="container">
    <h2>Oops. Page not found!</h2>
    <p>It looks like you've reached a URL that doesn't exist.</p>
    <p>Please use the navigation above or go back to <a href="<?php echo home_url(); ?>">homepage</a>.</p>
    </div>
  </main>
  
<?php get_footer(); ?>