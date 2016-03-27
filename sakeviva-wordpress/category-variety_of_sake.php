<?php get_header(); ?>
<!-- メイン -->
<div id="content">
	<div id="destination_page">
		<article class="post">
		<?php 
		if(is_category()) {
			$obj = get_queried_object();
			$title = '<span>「'.get_cat_name($obj->term_id).'」</span>';
		} elseif (is_tag()) {
			$obj = get_queried_object();
			$title = '<span>「'.single_tag_title($obj->term_id,false).'」</span>';
		} else {
			$title = 'アーカイブ記事一覧';
		}
		if(have_posts()) {
			echo '<h2 class="post-title">'.$title.'</h2>';
			// 固定ページ "how_to_drink_sake" の本文を挿入する。固定ページのスラッグを入れる↓
			$cat_discription_page = get_page_by_path('variety-of-sake');
			if(isset($cat_discription_page)) {
				echo '<div class="post-content">'.apply_filters('the_content', $cat_discription_page->post_content).'</div>';
			}
			while(have_posts()) {
				the_post();
				get_template_part('content','excerpt');
			}
			get_template_part('pagination','pages');
		} else {
			echo '<p>該当する記事がありません</p>';
		}
		?>
		</article>
	</div><!-- #main -->
	<div id="side">
		<?php get_sidebar(); ?>
	</div>
</div>
<!-- #content -->
<?php get_footer();