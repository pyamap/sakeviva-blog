<div class="wrap">
	<?php get_header(); ?>
	<div id="content">
		<div id="main_introduction">
			<div class="destination_nav">
				<ul class="destination_list">
					<li class="destination_1">
						<article>
							<div class="thumbnail_1">
								<a href="http://sakeviva.com/blog/variety_of_sake/">
									<img src="<?php bloginfo('template_url'); ?>/images/variety_of_sake_pic.jpg" width="650" height="435" alt="日本酒の種類の画像" />
								</a>
							</div>
							<div class="text_1">
								<h1><a href="http://sakeviva.com/blog/variety_of_sake">日本酒の種類</a></h1>
								<p class="destination_intro_1">
								有名な日本酒から地方の珍しい地酒まで全国2万種類以上と言われている日本酒の中からおすすめの日本酒をピックアップ。あの有名酒に隠された誕生秘話、こだわりや込められた思い、ネーミングの意味までじっくりと背景を解説していきます。
								</p>
							</div>
						</article>
					</li>
					<li class="destination_2">
						<article>
							<div class="thumbnail_2">
								<a href="http://sakeviva.com/blog/how_to_drink_sake/">
								<img src="http://sakeviva.com/blog/wp-content/uploads/2016/03/2-6.jpg" width="244" height="190" alt="日本酒の飲み方の画像" /></a>
							</div>
							<div class="text_2">
								<h2><a href="http://sakeviva.com/blog/how_to_drink_sake/">日本酒の飲み方・楽しみ方</a></h2>
								<p class="destination_intro_2">
								吟醸と大吟醸、特撰と上撰の違いって？日本酒は太る？お酒にあうベストおつまみが知りたい！そもそも日本酒ってどんなお酒？という人から、もっと日本酒を楽しみたい、深く味わいたいという人まで、日本酒に関する知識、雑学はこちらから。
								</p>
							</div>
						</article>
					</li>
					<li class="destination_3">
						<article>
							<div class="thumbnail_3">
								<a href="http://sakeviva.com/blog/sake_events">
									<img src="<?php bloginfo('template_url'); ?>/images/sake_event_pic.jpg" width="244" height="190" alt="日本酒のイベントの画像" />
								</a>
							</div>
							<div class="text_3">
								<h2><a href="http://sakeviva.com/blog/sake_events">日本酒のイベント</a></h2>
								<p class="destination_intro_3">
								おいしい日本酒を普段より安く飲みたい。地域の人と皆で酒蔵開きを祝いたい。お酒とおいしい食べ物を一緒に味わいたい。そんな日本酒好きの欲求を掻き立てる日本酒のイベントはこちらから。今日はどのイベントにいきますか？
								</p>
							</div>
						</article>
					</li>
					<li class="destination_4">
						<article>
							<div class="thumbnail_4">
								<a href="http://sakeviva.com/blog/">
									<img src="<?php bloginfo('template_url'); ?>/images/sake_brewery_pic_coming_soon.jpg" width="244" height="190" alt="日本の酒蔵の画像" />
								</a>
							</div>
							<div class="text_4">
								<h2>日本の酒蔵</h2>
								<p class="destination_intro_4">
								2万種以上の日本酒を製造しているのは全国1500件の酒蔵。伝統と歴史、文化を支えてきた酒蔵から、新しい日本酒時代へチャレンジする酒蔵まで、こだわりや想いを伝えていきます。酒蔵見学や体験ツアー、酒蔵開きなど、参加できるイベントも盛りだくさん。
								</p>
							</div>
						</article>
					</li>
					<li class="destination_5">
						<article>
							<div class="thumbnail_5">
								<a href="http://sakeviva.com/blog/">
									<img src="<?php bloginfo('template_url'); ?>/images/best_sake_pic_coming_soon.jpg" width="244" height="190" alt="日本酒の飲み方の画像" />
								</a>
							</div>
							<div class="text_5">
								<h2>都道府県別、おすすめの地酒</h2>
								<p class="destination_intro_5">
								日本酒は蔵や原材料、製造方法、想い、こだわり、など様々な要因によって味わいが異なってくるものですが、環境や土地柄もその一つ。各地、地方にしかない地酒というものが味わい深いのもそこに理由がある？都道府県別のおすすめ地酒はこちらから。
								</p>
							</div>
						</article>
					</li>
					<li class="destination_6">
						<article>
							<div class="thumbnail_5">
								<a href="http://sakeviva.com/blog/">
									<img src="<?php bloginfo('template_url'); ?>/images/sakekasu_recipe_pic_coming_soon.jpg" width="244" height="190" alt="酒粕レシピの画像" />
								</a>
							</div>
							<div class="text_5">
								<h2>酒粕レシピ</h2>
								<p class="destination_intro_5">
								体内の糖質や脂肪分を分解しエネルギーに換える、腸内環境を綺麗にする、肥満抑制作用でダイエットにも最適！そんな身体に良い要素が盛りだくさんの発酵栄養食品、それが酒粕です。酒粕は苦手、使い方がわからないという人のための酒粕レシピをご紹介！
								</p>
							</div>
						</article>
					</li>
				</ul>
			</div>
		</div>
		<div id="side">
			<?php if (have_posts()) :
			while (have_posts()) : the_post();
			// この部分で記事を表示する処理をします。
			endwhile; // 繰り返し処理終了
			else : ?>
			<div class="post">
			<h2>記事はありません</h2>
			<p>お探しの記事は見つかりませんでした。</p>
		</div>
		<?php endif; ?>
		<?php get_sidebar(); ?>
	</div>
</div>
	<?php get_footer(); ?>
