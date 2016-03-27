<?php get_header(); ?>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

	<div id="article_content">
		<div id="article_box">
			<div class="inner_article">
				<h2 class="article_title"><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
		</div>
		<div id="side">
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php
endwhile;
endif;
?>
<?php comments_template(); ?>
<?php get_footer(); ?>