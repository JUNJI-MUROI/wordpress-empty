<!-- ヘッダー -->


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_enqueue_script('jquery');?>
  <?php wp_enqueue_style('font-awesome','https://use.fontawesome.com/releases/v5.6.1/css/all.css')?>
  <?php wp_head();?>
</head>
<body>
<?php wp_body_open();?>


<!-- サイトのキャッチフレーズを表示 -->
<div><p><?php bloginfo('description')?></p></div>


<!-- トップページに表示するアイコン -->
<h1><a href="<?php echo home_url();?>/"><img src="<?php echo get_template_directory_uri();?>/img/hello.jpeg"></a></h1>


<!-- ナヴィゲーションメニュー -->
<nav>
  <?php 
  $args = array(
    'menu' => 'global-navigation',//メニューの名前
    'menu_class' => '',//空のクラス名をつける
    'container' => 'false',//ラッピングしないのでfalse
    
  );
  
  wp_nav_menu($args);
   //ナビゲーションメニューを使う時のワードプレステンプレート
   // $argsに上記の情報を代入して、引数にしてわたしている。
  ?>
</nav>

<!-- searchform.php(検索フォーム)の読み込み -->

<?php get_search_form();?>

  
