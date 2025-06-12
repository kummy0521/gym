<?php get_header(); ?>

<main class="main">
	<div class="inner">
		<div class="content">
			<h1 class="section_title">News</h1>

<div class="news_archive">
	<?php
	$paged = get_query_var('paged') ? get_query_var('paged') : 1;

	$args = array(
		'post_type'      => 'news',
		'posts_per_page' => 10,
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
		'paged'          => $paged
	);

	$news_query = new WP_Query($args);
	?>

	<?php if ($news_query->have_posts()) : ?>
		<?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
			<div class="news_item">
				<a href="<?php the_permalink(); ?>" class="news_link">
					<time class="news_date" datetime="<?php echo get_the_date('Y.m.d'); ?>">
						<?php echo get_the_date('Y.m.d'); ?>
					</time>
					<p class="news_text"><?php the_title(); ?></p>
				</a>
			</div>
		<?php endwhile; ?>

		<!-- ページネーション -->
		<div class="pagination">
			<?php
			echo paginate_links(array(
				'total'   => $news_query->max_num_pages,
				'current' => $paged,
				'prev_text' => '&laquo;',
				'next_text' => '&raquo;',
			));
			?>
		</div>

		<?php wp_reset_postdata(); ?>
	<?php else : ?>
		<p>現在、ニュースはありません。</p>
	<?php endif; ?>
</div>

		</div>
	</div>
</main>

<?php get_footer(); ?>