<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta name="description" content="日本酒のあれこれを発信する日本酒情報メディア|Sakeviva" />
<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php wp_head(); ?>
<?php include_once("analyticstracking.php") ?>
</head>
<body>

	<div id="header">
		<div class="title">
			<p class="header_title"><a href="http://sakeviva.com/blog"><img src="http://sakeviva.com/blog/wp-content/uploads/2016/04/logo_header.jpg" width="200" height="70" alt="日本酒メディアトップの写真" /></a></p>
		</div>
		<nav class="media_nav">
			<div class="media_nav_inner">
				<ul>
					<a href="http://sakeviva.com/blog/how_to_drink_sake/"><li>日本酒の飲み方</li></a><!--
					--><a href="http://sakeviva.com/blog/variety_of_sake"><li>日本酒の種類</li></a><!--
					--><a href="http://sakeviva.com/blog/sake_events/"><li>日本酒イベント</li><!--
					--><li>日本の酒蔵</li><!--
					--><li>各地の地酒</li><!--
					--><li>酒粕のレシピ</li>
				</ul>
			</div>
		</nav>
		<div class="top_main_pic">
			<a href="<?php bloginfo('url'); ?>">
				<img src="http://sakeviva.com/blog/wp-content/uploads/2016/03/logo.jpg" width="100%" height="400" alt="日本酒メディアトップの写真" />
			</a>
		</div>
		<div class="breadcrumbs">
		    <?php if(function_exists('bcn_display'))
		    {
		        bcn_display();
		    }?>
		</div>
	</div>
