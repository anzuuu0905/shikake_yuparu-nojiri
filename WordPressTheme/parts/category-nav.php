<?php
/*
Template Name: 下層ページナビゲーション
*/
?>
	<?php
    global $home;
    global $blogs;
  ?>

<nav class="blog-navi__inner inner">
  <?php if(is_single()): ?>
    <ul class="blog-navi__items blog-navi__items--article">
  <?php else: ?>
    <ul class="blog-navi__items">
  <?php endif; ?>
    <?php if(is_category() || is_single()): ?>
      <li class="blog-navi__item">
    <?php else: ?>
      <li class="blog-navi__item blog-navi__item--current">
    <?php endif; ?>
    <a href="<?php echo $blogs; ?>">全て</a>
    </li>
      <?php
      // 今のカテゴリ
      $curent_category = get_the_category();
      if($curent_category){
        $curent_slug = $curent_category[0]->slug;
      }else{
        $curent_slug = "";
      }

      // 全てのカテゴリ
      $categories = get_categories('hide_empty=0');//空のカテゴリも表示

      foreach($categories as $category) {
        // y-XXXXが親カテゴリのため。y-recruitは別ページとなるため、除外
        if(mb_substr($category->slug, 0, 2) == 'y-' && $category->slug !='y-recruit'){
        // 投稿ページかカテゴリアーカイブページの場合、該当のカテゴリの場合、色を変える
          if($curent_slug === $category->slug && 
          (is_category() || is_single())){
            $current_class = 'blog-navi__item--current';
          }else{
            $current_class = '';
          }
          echo '<li class="blog-navi__item ' .$current_class .'"><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></li>';
        }
      }
      ?>
  </ul>
  <?php if(!is_single()): ?>
  <!-- 検索窓 -->
  <div class="search__wrap"><?php get_search_form(); ?></div>
  <?php endif; ?>
</nav>