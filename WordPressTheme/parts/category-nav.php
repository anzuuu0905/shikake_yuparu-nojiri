<?php
/*
Template Name: 下層ページナビゲーション
*/
?>
	<?php
    global $home;
  ?>

<nav class="blog-navi__inner inner">
	<ul class="blog-navi__items blog-navi__items--article">
    <li class="blog-navi__item blog-navi__item--current">
    <!-- <li class="blog-navi__item"> -->
      <a href="<?php $blogs ?>">全て</a>
    </li>
      <?php
      // 今のカテゴリ
      $curent_category = get_the_category();
      $curent_slug = $curent_category[0]->slug;
      
      // 全てのカテゴリ
      $categories = get_categories();
      foreach($categories as $category) {
        if(mb_substr($category->slug, 0, 2) == 'y-'){
          // この辺りは不要かも？？？　START
          // WordPress機能でcurrentクラスがつく？
          if($curent_slug === $category->slug){
            $current_class = 'blog-navi__item--current';
          }else{
            $current_class = '';
          }
          // この辺りは不要かも？？？　END
          echo '<li class="blog-navi__item ' .$current_class .'"><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></li>';
        }
      }
      ?>
    </ul>
</nav>