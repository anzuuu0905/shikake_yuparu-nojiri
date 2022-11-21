<?php
/*
Template Name: ブログカード
*/
?>

<a class="blog-card card-list__item" href="<?php the_permalink(); ?>">
  <?php
    $post_time = get_the_time('U');
    $days = 7; //Newを表示させる日数
    $last = time() - ($days * 24 * 60 * 60);
  ?>
  <?php if ($post_time > $last) : ?>
  <div class="blog-card__new">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/new-icon.png" alt="">
  </div>
  <?php endif;?>

  <figure class="blog-card__img">
  <img src="<?php
    if (has_post_thumbnail()):
      $thumbID = get_post_thumbnail_id( $post->ID );
      $thumbAlt = get_post_meta( $thumbID, '_wp_attachment_image_alt', true );
      the_post_thumbnail_url('full'); 
    else :
      echo home_url('wp-content/uploads/2022/04/thumbnail.jpg');
      $thumbAlt = "ゆ〜ぱるのじり";
    endif;
    ?>" alt="<?php echo $thumbAlt;?>">
    </figure>
    
  <div class="blog-card__body">
    <h3 class="blog-card__title"><?php my_trim(get_the_title(), 18); ?></h3>
    <div class="blog-card__info">
      <time class="blog-card__data" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time("Y.m.d"); ?></time>
      <span class="blog-card__author"><?php the_author_meta('nickname'); ?></span>
    </div>
  </div>
  <?php
      if(is_front_page() || is_tag() || is_search() || (is_archive() && !is_category())):
      // カテゴリーのデータを取得
      $cat = get_the_category();
      $cat = $cat[0];
  ?>
      <div class="blog-card__foot">
        <span class="blog-card__text"><?php echo $cat->cat_name; ?></span>
      </div>
  <?php endif; ?>
</a>

