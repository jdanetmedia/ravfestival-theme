<?php 
	
	/* 
	
	Template Name: Certifikat
	
	*/
	
?>

<?php get_header(); ?>
<div class="custom_logo">
	<a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/ravlogo-flat6.png" /></a>
</div>
<div id="certifikat_first_cnt">
<div id="certifikat_pic_cnt">
	<div id="diplom"></div>
</div>
	<div id="certifikat_text_cnt">
		<section id="content" role="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<section class="entry-content">
				<?php the_content(); ?>
				<div class="clear"></div>
				<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2Fravfestival&width=200&layout=button_count&action=like&show_faces=true&share=true&height=46&appId=378241528946652" width="200" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
				<div class="entry-links"><?php wp_link_pages(); ?></div>
			</section>
			</article>
			<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
			<?php endwhile; endif; ?>
		</section>
	</div>
</div>

<div id="certifikat_second_cnt">
	<div id="byg_text"><h2>Byg dit redskab</h2><p>Find de nødvendige materialer og byg en kjæse.</p></div>
	<div id="byg_cnt_mobile"></div>
	<div id="byg_cnt">
		<div id="kaesehandle"></div>
		<div id="kaesenetholder"></div>
		<div id="kaesenet"></div>
	</div>
</div>
<div id="certifikat_third_cnt">
	<div id="third_cnt">
		<div id="drengkigger"></div>
		<div id="third_text"><h2>Find dit rav</h2><p>Gå på ravjagt på stranden og find ravet med dit hjemmelavede værktøj.</p></div>
	</div>
</div>
<div id="certifikat_fourth_cnt">
	<div id="slib_text" onmouseover="ravslibeffekt()" onmouseout="ravslibeffektOut()">

	<div class="picture_cnt">
		<div id="sliber_text_holder"><h2>Slib dit Rav</h2><p>Tag din ravklump med til en af de lokale slibere og slib dit rav så det skinner!</p></div>
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
		<div id="smykke_text"><h2>Lav dit ravsmykke</h2><p>Hos en af vores mange workshop kan du lave en armbånd, halskæde eller ring!</p></div>
		<div id="ravsmykkeglow"></div>
	</div>
</div>
<div id="nyhedsbrev_cnt">
	<div class="paamind">Få en påmindelse før Ravfestival</div>
	<?php echo do_shortcode('[contact-form-7 id="180" title="Nyhedsbrev"]'); ?>
</div>
<?php get_footer(); ?>