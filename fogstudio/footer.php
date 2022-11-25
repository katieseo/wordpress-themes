    <footer id="footer">
        <div class="container">
            <div class="social">
                <a href="<?php echo home_url(); ?>"><img src="<?php print IMAGES; ?>/brand-ico-houzz.png" alt="houzz" title="houzz" ></a>
                <a href="<?php echo home_url(); ?>"><img src="<?php print IMAGES; ?>/brand-ico-pinterest.png" alt="pinterest" title="pinterest" ></a>
                <a href="<?php echo home_url(); ?>"><img src="<?php print IMAGES; ?>/brand-ico-instagram.png" alt="instagram" title="instagram" ></a>
                <a href="<?php echo home_url(); ?>"><img src="<?php print IMAGES; ?>/brand-ico-fb.png" alt="facebook" title="facebook" ></a>
                <a href="<?php echo home_url(); ?>"><img src="<?php print IMAGES; ?>/brand-ico-linkedin.png" alt="linkedin" title="linkedin" ></a>
            </div>
            <div class="copyright">Copyright &copy; <?php echo date('Y'); ?> <?php echo bloginfo('name'); ?>, LLC. All rights reserved. Various trademarks held by their respective owners.</div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>