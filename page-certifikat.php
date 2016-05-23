<?php 
	
	/* 
	
	Template Name: Certifikat
	
	*/
	
?>

<?php get_header(); ?>
<div id="certifikat_first_cnt">
	hej
	<div id="certifikat_text_cnt">
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
	</div>
</div>

<div id="certifikat_second_cnt"><h1>Byg dit redskab</h1></div>
<div id="certifikat_third_cnt"><h1>Find ravet</h1></div>
<div id="certifikat_fourth_cnt">
	<h1>Slib dit rav</h1>
	<div class="picture_cnt" onmouseover="ravslibeffekt()" onmouseout="ravslibeffektOut()">
		<div id="sliber"></div>
		<div id="ravhaand"></div>
	</div>
</div>
<div id="certifikat_fifth_cnt">Lav det til et stykke smykke</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>