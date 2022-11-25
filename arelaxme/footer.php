<?php
/**
 * footer
 */
?>

    <footer>
      <div class="container">
        <nav class="footer-nav">
          <?php wp_nav_menu(array('menu' => 'footer', 'container' => '')); ?>
        </nav>
        <div class="copyright">Copyright &copy; <?php echo date('Y'); ?> <?php echo bloginfo('name'); ?> All rights reserved.</div>
      </div>
    </footer>
  </div><!-- /#frame -->

  <?php wp_footer(); ?>
</body>
</html>