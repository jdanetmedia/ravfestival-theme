<?php get_header(); ?>
<div class="custom_logo">
	<a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/ravlogo-flat6.png" /></a>
</div>
<div class="index-header">
	<h1 class="index-title"><?php the_title(); ?></h1>
</div>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="entry-content">
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php endwhile; endif; ?>
</section>
<div id="nyhedsbrev_cnt">
	<div class="paamind">Få en påmindelse før Ravfestival</div>
	<?php echo do_shortcode('[contact-form-7 id="180" title="Nyhedsbrev"]'); ?>
</div>
<?php get_footer(); ?>