<?php get_header(); ?>
<div class="custom_logo">
	<a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/ravlogo-flat6.png" /></a>
</div>
<div class="index-header">
	<h1 class="index-title"><?php the_title(); ?></h1>
</div>
<section id="content" role="main">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<div class="clear"></div>
<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2Fravfestival&width=200&layout=button_count&action=like&show_faces=true&share=true&height=46&appId=378241528946652" width="200" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
<div class="entry-links"><?php wp_link_pages(); ?></div>
<?php endwhile; endif; ?>
<footer class="footer">
</footer>
</section>
<div id="nyhedsbrev_cnt">
	<div class="paamind">Få en påmindelse før Ravfestival</div>
	<?php echo do_shortcode('[contact-form-7 id="180" title="Nyhedsbrev"]'); ?>
</div>
<?php get_footer(); ?>