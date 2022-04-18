<?php

$page_post_type = get_post_type();

$numposts = get_sub_field('resource_list_number');
$list_title = get_sub_field('resource_list_title');

$list_method = get_sub_field('resource_list_method');
$related_topic = get_sub_field('resource_list_related_topic');

$post_type = get_sub_field('resource_list_post_type');

if( $post_type == 'blog'){
  $post_type = 'post';
  $category = get_sub_field('resource_list_blog_category');
}elseif( $post_type == 'case_study' ){
  $post_type = 'case_study';
}elseif( $post_type == 'ebook' ){
  $post_type = 'ebook';
}elseif( $post_type == 'video' ){
  $post_type = 'video';
}

$pad_top = get_sub_field('resource_list_padding_top');
$pad_bot = get_sub_field('resource_list_padding_bot');

$rules = get_sub_field('resource_list_show_rules');


$args = array(
'numberposts' => -1,
'post_type' => $post_type,
'orderby' => 'DATE',
'order' => 'DESC',
);

if( $related_topic != '' ){
  $args['tax_query']['relation'] = "AND";
  $args['tax_query'][0]['taxonomy'] = 'topic';
  $args['tax_query'][0]['field'] = 'term_id';
  $args['tax_query'][0]['terms'] = $related_topic;
  $args['tax_query'][0]['operator'] = 'IN';
}



$most_recent_array = array();
$resources_array = array();

if( $list_method != 'manual'){
    $resource_query = get_posts( $args );
    foreach( $resource_query as $i => $resource ){
      $array =  array();
      $array['title']     = get_the_title( $resource );
      $array['link']      = get_the_permalink( $resource );
      //$array['summary']      = get_field( 'summary', $resource );
      $array['post_type'] = $post_type;
      if( $post_type == 'post'){
        $array['title'] = get_the_title($resource);;
        $array['link'] = get_the_permalink($resource);
        $array['btn_text'] = 'Read Blog Post';
        $array['summary'] = get_the_excerpt($resource);
      }elseif( $post_type == 'case_study' ){
        $array['title'] = get_the_title($resource);;
        $array['link'] = get_the_permalink($resource);
        $array['summary'] = get_field('summary', $resource);
        $array['btn_text'] = 'Read Case Study';
      }elseif( $post_type == 'ebook' ){
        $array['title'] = get_the_title($resource);;
        $array['link'] = get_the_permalink($resource);
        $array['summary'] = get_field('summary', $resource);
        $array['btn_text'] = 'Read Case Study';
        $array['btn_text'] = 'Downlaod E Book';
      }elseif( $post_type == 'video' ){
        $array['title'] = get_the_title($resource);;
        $array['link'] = get_the_permalink($resource);
        //$array['summary'] = get_field('summary', $resource);
        $array['btn_text'] = 'Read Case Study';
        $array['btn_text'] = 'Watch Video';
      }
      array_push($most_recent_array, $array );
  }
  if( sizeof($resources_array) == 0 ):
    $resources_array = $most_recent_array;
    //print_r($most_recent_array);
  endif;
}

if( $list_method == 'manual'){

    switch ($post_type) {
        case 'post':
            $blog_repeater = get_sub_field('resource_list_blog_repeater');
            foreach( $blog_repeater as $blog){
              print_r($blog);
              $array = array();
              $array['title'] = get_the_title($blog);;
              $array['link'] = get_the_permalink($blog);
              $array['btn_text'] = 'Read Blog Post';
              $array['summary'] = get_the_excerpt($blog);
              array_push($resources_array, $array );
            }
            break;
        case 'case_study':
            $case_study_repeater = get_sub_field('resource_list_case_study_repeater');
            foreach( $case_study_repeater as $case){
              $array = array();
              $array['title'] = get_the_title($case);;
              $array['link'] = get_the_permalink($case);
              $array['btn_text'] = 'Read Case Study';
              $array['summary'] = get_field('summary', $resource);
              array_push($resources_array, $array );
            }
            break;
        case 'ebook':
            $ebook_repeater = get_sub_field('resource_list_ebook_repeater');
            foreach( $ebook_repeater as $ebook){
              $array = array();
              $array['title'] = get_the_title($ebook);;
              $array['link'] = get_the_permalink($ebook);
              $array['btn_text'] = 'Download E Book';
              $array['summary'] = get_field('summary', $resource);
              array_push($resources_array, $array );
            }
            break;
        case 'video':
            $video_repeater = get_sub_field('resource_list_video_repeater');
            foreach( $video_repeater as $vid){
              $array = array();
              $array['title'] = $vid['resource_list_video_object']->post_title;
              $array['link'] = get_the_permalink($vid['resource_list_video_object']->ID);
              $array['btn_text'] = 'Watch Video';
              array_push($resources_array, $array );
            }
            break;
    }

}

?>

<?php if( sizeof($resources_array) >= 1 ): ?>

  <section class="resource-list row mb-4 pad-top-<?php echo $pad_top;?> pad-bot-<?php echo $pad_bot;?>">

    <div class="col mr-md-2 <?php echo $post_type; ?>-list px-5">
        <div class="row list-title mr-md-0 pb-4">
          <div class="col pl-0 ">
            <h3 class="d-inline"><?php echo $list_title;?></h3>
          </div>
        </div>
        <?php foreach( $resources_array as $i => $resource ): ?>
          <?php if( $i < $numposts ): ?>
            <div class="row blog-post mr-md-0">
              <div class="col pl-0 pb-4">
                <?php if( $post_type == 'video' ): ?>
                  <div class="play_dot">
                    <div class="play_icon">
                      <i class="fas fa-play"></i>
                    </div>
                  </div>
                <?php endif; ?>
                <a href="<?php echo $resource['link']; ?>" class="d-block">
                    <h5 class="mb-2"><?php echo $resource['title']; ?></h5>
                  <?php if( $post_type == 'case_study' || $post_type == 'post' || $post_type == 'ebook'  ): ?>
                    <?php if( $resource['summary'] != '' ): ?>
                      <p><?php echo $resource['summary']; ?></p>
                    <?php endif; ?>

                  <?php endif; ?>
                  <span class="link d-block pt-3"><?php echo $resource['btn_text']; ?></span>
                </a>

              </div>

            </div>

            <div class="row">
              <div class="col px-0 pb-4">
                <hr />
              </div>
            </div>


          <?php endif; ?>
        <?php endforeach; ?>

    </div>
  </section>
<?php endif; ?>
