<!-- カテゴリー、月別ページ -->

<?php get_header();?>

<!-- パンくずリストを読み込み -->
<?php get_template_part('template-parts/breadcrumb');?>

<div>
  <!-- 月別アーカイブの時だけ日付を表示して、それ以外の時はカテゴリを表示 -->
  <?php if(is_month() ): ?>
    <h2><?php the_time('Y年m月') ?></h2>
  <?php else: ?>
    <h2><?php wp_title('')?></h2>
  <?php endif; ?>  
</div>

  <!-- 投稿が存在した場合、投稿を表示 -->
<?php if (have_posts()):?>
<?php while(have_posts()):the_post();?>
<div>
  <!-- loop-news.phpを読み込む -->
 <?php get_template_part('template-parts/loop','news');?>
</div>
<?php endwhile;?>
<?php endif;?>

<div>
  <!-- sidebar-categories.phpの読み込み -->
 <?php get_sidebar('categories');?>
 <!-- sidebar-archives.phpの読み込み -->
 <?php get_sidebar('archives');?>
</div>

<?php get_footer();?>