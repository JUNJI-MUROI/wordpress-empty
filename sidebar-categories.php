<!-- サイドバー（カテゴリー） -->

<aside>

 <h2>カテゴリ 一覧</h2>

 <ul>
   <?php 
    $args = array(
      'title_li' =>'',
    );
    wp_list_categories( $args );
   ?>
 </ul>
 
</aside>