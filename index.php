<?php get_header(); ?>
<div class="custom_logo">
	<a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/ravlogo-flat6.png" /></a>
</div>
<div class="index-header">
	<h1 class="index-title">Seneste nyheder</h1>
</div>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<header>
<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>
</header>
</article>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<div id="nyhedsbrev_cnt">
	<div class="paamind">Få en påmindelse før Ravfestival</div>
	<?php echo do_shortcode('[contact-form-7 id="180" title="Nyhedsbrev"]'); ?>
</div>
<?php get_footer(); ?>