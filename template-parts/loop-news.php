<!-- 投稿の表示をするテンプレートパーツ -->

<article id = "post-<?php the_ID();?>" <?php post_class('任意のクラス名を指定');?>>
   <div>
     <a href="<?php the_permalink();?>">
      <?php if(has_post_thumbnail()):?>
       <?php the_post_thumbnail('midium');?>
      <?php else:?>

        <!-- サムネイルが存在しない場合の画像を指定 -->
       <img src="<?php echo get_template_directory_uri();?>/img/no-image.png">

      <?php endif;?>
     </a>
   </div>
   <div>
     <!-- カテゴリーを表示 -->
     <?php the_category();?>
     <!-- 日付を表示 -->
     <time datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y年m月d日');?></time>
   </div>
   <!-- タイトルを表示 -->
   <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
   <div>
     <?php the_excerpt();?>
     <p><a href="<?php the_permalink();?>">[続きを読む]</a></p>
   </div>
 </article>