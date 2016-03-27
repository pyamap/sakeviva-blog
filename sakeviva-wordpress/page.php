<?php get_header(); ?>
	<!-- main -->
	<div id="content">
		<div id="destination_page">
			<?php if (have_posts()) : // WordPress ループ
			while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
			<?php the_content(); ?>
		</div>
		<?php endwhile; // 繰り返し処理終了
		else : // ここから記事が見つからなかった場合の処理 ?>
		<div class="post">
			<h2>記事はありません</h2>
			<p>お探しの記事は見つかりませんでした。</p>
			</div>
			<?php endif; ?>
		</div>
	<!-- /main -->
		<div id="side">
		<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>