<!-- トップページ -->


<!-- ヘッダーの読み込み -->
<?php get_header();?>



  <!-- 投稿を表示 -->
<?php if (have_posts()):?>
<?php while(have_posts()):the_post();?>
<div>
 
<!-- loop-news.phpを読み込む -->
 <?php get_template_part('template-parts/loop','news');?>

</div>
<?php endwhile;?>
<?php endif;?>

<!-- 私たちについて～記事idはURLから調べる idからとび先
を指定するテンプレート-->
<div>
<a href="<?php echo get_permalink(22);?>">
<h2>私たちについて</h2>
</a>
</div>

<!-- アクセス～記事idはURLから調べる idからとび先を指定するテンプレート-->
<div>
<a href="<?php echo get_permalink(29);?>">
<h2>アクセス</h2>
</a>
</div>


<!-- idではなく、スラッグからとび先を指定するテンプレート -->
<div>
  <a href="<?php echo home_url('/contact/');?>">
  <h2>お問い合わせ</h2>
  </a>
</div>

<div>
  <!-- sidebar-categories.phpの読み込み -->
 <?php get_sidebar('categories');?>
 <!-- sidebar-archives.phpの読み込み -->
 <?php get_sidebar('archives');?>
</div>

<!-- フッターの読み込み -->
<?php get_footer();?>