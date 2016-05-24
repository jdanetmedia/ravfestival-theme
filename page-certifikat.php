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
<div id="certifikat_third_cnt">
	<div id="third_cnt">
		<div id="drengkigger"></div>
		<div id="third_text"><h1>Find dit rav</h1><p>Gå på ravjagt på stranden og find ravet med dit værktøj og eagle vision!</p></div>
	</div>
</div>
<div id="certifikat_fourth_cnt">
	<div id="slib_text" onmouseover="ravslibeffekt()" onmouseout="ravslibeffektOut()">

	<div class="picture_cnt">
		<div id="sliber_text_holder"<h1>Slib dit Rav</h1><p>Tag din ravklump med til en af de lokale slibere og slib dit rav så det skinner!</p></div>
		<div id="sliber"></div>
		<div id="ravhaand"></div>
		<div id="glans"></div>
		<div id="glans2"></div>
	</div>
</div>
</div>
<div id="certifikat_fifth_cnt">
	<div id="smykke_cnt">
		<div id="smykke"></div>
		<div id="smykke_text"><h1>Lav dit ravsmykke</h1><p>Hos en af vores mange workshop kan du lave en armbånd, halskæde eller ring!</p></div>
		<div id="ravsmykkeglow"></div>
	</div>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>