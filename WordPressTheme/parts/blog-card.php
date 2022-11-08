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
  <img src="
    <?php
    if (has_post_thumbnail()) :
      the_post_thumbnail_url('full'); 
    else :
      echo home_url('wp-content/uploads/2022/04/thumbnail.jpg');
    endif;
    ?>
    ">
    </figure>
  <div class="blog-card__body">
    <h3 class="blog-card__title"><?php the_title(); ?></h3>
    <div class="blog-card__info">
      <time class="blog-card__data" datetime="<?php the_time('Y-m-d'); ?>"><?php the_date(); ?></time>
    </div>
  </div>
  <div class="blog-card__foot">
      <span class="blog-card__author"><?php the_author_meta('nickname'); ?></span>
  </div>
</a>
