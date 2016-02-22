<?php
$title = get_the_title();
$content = wpautop( get_field('post_credits') );
$image = get_the_post_thumbnail( $post->ID, 'large' );

$width = get_field( 'post_width' );
$width_class = 'width-' . $width;

$pos = get_field( 'post_alignment' );
$pos_class = 'pos-' . $pos;

$offset = get_field( 'post_offset' );
if( $offset < 0 ){
  $offset_class = ' pull' . $offset;
} else if( $offset > 0) {
  $offset_class = ' push-' . $offset;
} else {
  $offset_class = '';
}

$class_section = 'project ' . $width_class . ' ' . $pos_class . $offset_class;
?>

<section class="<?php echo $class_section; ?>">
  <?php echo $image; ?>
  <div class="project-info">
    <h2 class="is-bold"><?php echo $title; ?></h2>
    <?php echo $content; ?>
  </div>
</section>