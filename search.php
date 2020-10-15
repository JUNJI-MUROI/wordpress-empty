<!-- 検索結果を表示 -->

<?php get_header();?>

<!-- パンくずリストを読み込み -->
<?php get_template_part('template-parts/breadcrumb');?>

<h2>サイト内検索</h2>

<!-- 検索したワードを表示するワードプレステンプレート -->
<h3>「<?php the_search_query();?>」の検索結果</h3>

<!-- 投稿が存在した場合、投稿を表示 -->

<?php if (have_posts()):?>
<?php while(have_posts()):the_post();?>

<div>
<!-- loop-news.phpを読み込む -->
 <?php get_template_part('template-parts/loop','news');?>
</div>

<?php endwhile;?>

<!-- 検索結果が1件も存在しなかった場合の処理 -->
<?php else :?>
  <p>検索結果はありませんでした。</p>

<?php endif;?>