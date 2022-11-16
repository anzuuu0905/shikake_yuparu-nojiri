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

    <?php
    var_dump(getimagesize(get_the_post_thumbnail_url()));
	// if ( has_post_thumbnail() ){
	// 	$image_info = getimagesize(get_the_post_thumbnail_url());
	// 	$image_width = $image_info[0];
	// 	$image_height = $image_info[1];
  //   var_dump($image_width);
  //   var_dump('----------');
  //   var_dump($image_height);
  //   var_dump('==========');
	// 	if($image_width > $image_height){
	// 		$class_name ='cover';
	// 	}else{
	// 		$class_name ='contain';
	// 	}
	// }else{
	// 	$class_name ='cover';
	// }
?>
<?php 
// var_dump(get_the_post_thumbnail_url());
  // $size = get_image_width_and_height(get_the_post_thumbnail_url());
  // var_dump($size);
?>


  <figure class="blog-card__img <?php //echo $class_name; ?>">
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
    <h3 class="blog-card__title"><?php the_title(); ?></h3>
    <div class="blog-card__info">
      <time class="blog-card__data" datetime="<?php the_time('Y-m-d'); ?>"><?php the_date(); ?></time>
      <span class="blog-card__author"><?php the_author_meta('nickname'); ?></span>
    </div>
  </div>
  <?php
      if(is_front_page() || (is_archive() && !is_category())):
      // カテゴリーのデータを取得
      $cat = get_the_category();
      $cat = $cat[0];
  ?>
      <div class="blog-card__foot">
        <span class="blog-card__text"><?php echo $cat->cat_name; ?></span>
      </div>
  <?php endif; ?>
</a>

