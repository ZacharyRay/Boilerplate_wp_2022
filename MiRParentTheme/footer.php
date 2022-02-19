</div><!-- end .content-wrapper-->

<footer class="footer">

    <div class="footer_container">
   
        <div class="footer__1">
        <?php  wp_nav_menu(array(
                'menu' => 'Footer menu',
                'theme_location' => 'footer_menu',
                'menu_class'=> 'menu menu--vertical', 
                'container' => '')
                ); ?>
        </div>
        <div class="footer__2">
            <p class="footer_address">
            Mobile Industrial Robots A/S
            Emil Neckelmanns Vej 15F
            DK-5220 Odense SØ
            </p>
            <p class="footer_contact">
            <a href="mailto:mail@mir-robots.com">mail@mir-robots.com</a> 
            <a href="tel:+4520377577">T: +45 20 377 577</a>
            CVR: 35251235
            </p>
        </div>
        <div class="footer__3">
            <p class="footer_copyright">
                Copyright @ Mobile Industrial Robots <?= date("Y"); ?> 
            </p>
        </div>
 
    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>