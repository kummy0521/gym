<?php get_header(); ?>


<?php
if (have_posts()) {
	while (have_posts()) : the_post();
		// アイキャッチ画像情報を取得
		$single_image = get_the_post_thumbnail($post->ID, 'full', array('class' => 'single_image'));
		if (!$single_image) {
			$single_image = '';
		}
?>

		<main class="main">

			<div class="single_inner">

				<!-- タイトル -->
				<h1 class="single_title"><?php the_title(); ?></h1>

				<?php
				// アイキャッチ画像
				echo $single_image;
				?>

				<!-- 投稿内容 -->
				<div class="single_content">
					<?php
					the_content();
					?>
				</div>

			</div>

			<!-- 一覧ボタン -->
			<div class="button_area">
				<a href="../" class="button">全てのお知らせを見る</a>
			</div>

		</main>


<?php
	endwhile;
}
?>


<?php get_footer(); ?>