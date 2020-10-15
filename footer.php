<!-- ナヴィゲーションメニュー -->
<nav>
  <?php 
  $args = array(
    'menu' => 'global-navigation',//メニューの名前
    'menu_class' => '',//空のクラス名をつける
    'container' => 'false',//ラッピングしないのでfalse
    
  );
  
  wp_nav_menu($args);
   // ナビゲーションメニューを使う時のワードプレステンプレート。
   // $argsに上記の情報を代入して、引数にして渡している。
  ?>
</nav>

<?php wp_footer();?>

</body>
</html>