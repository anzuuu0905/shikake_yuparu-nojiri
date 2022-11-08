<?php
/*
Template Name: パンくずリスト
*/
?>
<?php
  global $home;
  global $blogs;
?>
<div class="breadcrumb__inner inner">
  <ol class="breadcrumb__items">
    <li class="breadcrumb__item"><a href="<?php echo $home; ?>">TOP</a></li>
    <?php if(is_category()): ?>
      <?php
      $current_cat = get_queried_object();
      $cat_name = $current_cat->name;
      ?>
      <li class="breadcrumb__item">
        <a href="<?php echo $blogs; ?>">スタッフブログ</a></li>
      <li class="breadcrumb__item breadcrumb__item--current"><?php echo $cat_name; ?></li>
    <?php elseif(is_single()): ?>
      <?php 
        $current_cat = get_the_category();//現在のカテゴリを取得
        $current_cat = $current_cat[0];
        $cat_name = $current_cat->cat_name;
        $cat_slug = $current_cat->slug;
      ?>
      <li class="breadcrumb__item"><a href="<?php echo $blogs; ?>">スタッフブログ</a></li>
      <li class="breadcrumb__item"><a href="<?php echo $blogs; ?>/<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></a></li>
      <li class="breadcrumb__item breadcrumb__item--current"><?php echo the_title(); ?></li>
    <?php else: ?>
      <li class="breadcrumb__item breadcrumb__item--current">スタッフブログ</li>
    <?php endif; ?>

  </ol>
</div>