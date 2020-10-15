<!-- 固定ページのレイアウト -->

<!-- お問い合わせ -->



<!-- ヘッダー の読み込み-->
<?php get_header();?>

<!-- パンくずリストを読み込み -->
<?php get_template_part('template-parts/breadcrumb');?>

<!-- 記事の表示 -->
<?php if(have_posts()):?>
<?php while (have_posts()):the_post();?>

<!-- タイトルを表示 -->
<h2><?php the_title();?></h2>

<!-- スラッグを表示 -->
<h3><?php echo strtoupper($post->post_name);?></h3>

<div>

<!-- 本文の読み込み -->
<?php the_content();?>

</div>

<?php endwhile;?>
<?php endif;?>

<?php get_footer()?>