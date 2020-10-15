<!-- 検索フォーム -->

<!-- アクション属性はトップページへのURLを指定する -->
<form action="<?php echo home_url('/');?>" method="get">

  <!-- name属性はs value属性は the_search_query() を指定する-->
  <input type="text" name="s" value="<?php the_search_query();?>" placeholder="キーワードを入力">

  <!-- icon -->
  
  <button type="submit">
  <i class="fas fa-search"></i> 
</button>

  <!-- <i class="fas fa-search"></i> -->

</form>
