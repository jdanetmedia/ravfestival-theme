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
			<div id="headertext_cnt">Ravfestival starter om:</div>
                        <div id="countdown_cnt">
                            <div id="clockdiv">
                                <div>
                                    <span class="days"></span>
                                    <div class="smalltext">Dage</div>
                                </div>
                                <div>
                                    <span class="hours"></span>
                                    <div class="smalltext">Timer</div>
                                </div>
                                <div>
                                    <span class="minutes"></span>
                                    <div class="smalltext">Minutter</div>
                                </div>
                                <div>
                                    <span class="seconds"></span>
                                    <div class="smalltext">Sekunder</div>
                                </div>
                            </div>
                        </div>
		</div>
	</div>
</div>
<div id="front_page_cnt2">
	<div id="second_cnt">
		<div id="second_left_cnt">
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
		<div id="second_right_cnt">ss</div>
	</div>
</div>
<div id="front_page_cnt3"></div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>