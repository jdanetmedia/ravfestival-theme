<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
<div class="footer_widget_area">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget Area')) : ?>
<?php endif; ?>
</div>
<!--
<div id="copyright">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'ravfestival_theme' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'ravfestival_theme' ), '<a href="http://tidythemes.com/">TidyThemes</a>' ); ?>
</div>
-->

</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>