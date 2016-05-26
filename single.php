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
<div class="entry-links"><?php wp_link_pages(); ?></div>
<?php endwhile; endif; ?>
<footer class="footer">
</footer>
</section>
<?php get_footer(); ?>