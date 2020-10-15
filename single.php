<!-- 投稿ページ -->

<!-- ヘッダーを読み込み -->
<?php get_header();?>

<!-- パンくずリストを読み込み -->
<?php get_template_part('template-parts/breadcrumb');?>


<!-- 投稿を表示 -->
<?php if (have_posts()):?>
<?php while(have_posts()):the_post();?>
<div>
 <article id = "post-<?php the_ID();?>" <?php post_class('任意のクラス名を指定');?>>
   
  <header>
    <!-- タイトルを表示 -->
   <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
   <div>
     <!-- カテゴリーを表示 -->
     <?php the_category();?>
     <time datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y年m月d日');?></time>
   </div>
  </header>

  <div>
    <div>
      <!-- 本文を表示 -->
      <?php the_content();?>
    </div>
  </div>

  <div>
    <div>
      <!-- ひとつ前の投稿を表示 -->
      <?php previous_post_link('<i class = "fas fa-chevron-left"></i>%link');?>
    </div>
    <div>
      <!-- ひとつ後ろの投稿を表示 -->
      <?php next_post_link('%link<i class = "fas fa-chevron-right"></i>');?>
    </div>
  </div>

 </article>
</div>
<?php endwhile;?>
<?php endif;?>


<div>
  <!-- sidebar-categories.phpの読み込み -->
 <?php get_sidebar('categories');?>
 <!-- sidebar-archives.phpの読み込み -->
 <?php get_sidebar('archives');?>
</div>

<!-- フッターの読み込み -->
<?php get_footer();?>