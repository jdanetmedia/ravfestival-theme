<?php 
	
	/* 
	
	Template Name: Forside
	
	*/
	
?>

<?php get_header(); ?>

<div id="front_page_cnt">
	<div id="overlay">
		<div id=main_cnt>
			<div id="logo_cnt"></div>
			<div id="headertext_cnt"></div>
			<div id="countdown_cnt"></div>
		</div>
	</div>
</div>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>