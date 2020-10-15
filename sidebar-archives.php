<!-- サイドバー（アーカイブ） -->

<aside>
 <h2>月別アーカイブ</h2>
 <ul>
   <?php 
    $args = array(
      'type' =>'monthly',
    );
    wp_get_archives( $args );
   ?>
 </ul>
</aside>

