<?php

$page_post_type = get_post_type();

$numposts = get_sub_field('resource_list_number');
$list_title = get_sub_field('resource_list_title');

$list_method = get_sub_field('resource_list_method');
$related_process = get_sub_field('resource_list_related_process');
$related_industry = get_sub_field('resource_list_related_industry');

$post_type = get_sub_field('resource_list_post_type');

if( $post_type == 'blog'){
  $post_type = 'blog';
  $category = get_sub_field('resource_list_blog_category');
}elseif( $post_type == 'case-study' ){
  $post_type = 'case-study';
}elseif( $post_type == 'white-paper' ){
  $post_type = 'white-paper';
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

// if( $related_topic != '' ){
//   $args['tax_query']['relation'] = "AND";
//   $args['tax_query'][0]['taxonomy'] = 'topic';
//   $args['tax_query'][0]['field'] = 'term_id';
//   $args['tax_query'][0]['terms'] = $related_topic;
//   $args['tax_query'][0]['operator'] = 'IN';
// }





$most_recent_array = array();
$resources_array = array();

if( $list_method != 'manual'){

if( $post_type != 'blog' ){
    $resource_query = get_posts( $args );

    foreach( $resource_query as $i => $resource ){
      $array =  array();
      $array['title']     = get_the_title( $resource->ID );
      $array['link']      = get_the_permalink( $resource->ID );
      $array['summary']   = get_field( 'summary', $resource->ID );
      $array['post_type'] = $post_type;
      if( $post_type == 'case_study' ){
        $array['btn_text'] = 'Read Case Study';
      }elseif( $post_type == 'literature' ){
        $array['btn_text'] = 'Download';
      }elseif( $post_type == 'video' ){
        $array['btn_text'] = 'Watch Video';
      }elseif( $post_type == 'webinar' ){
        $array['btn_text'] = 'Watch Webinar';
      }

      array_push($most_recent_array, $array );
    }


  }else{
    $hbspt_hapi_key = get_field('hs_hapi_key', 'option');
    $hbspt_blog_curl = curl_init();
    curl_setopt_array($hbspt_blog_curl, [
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_URL => 'https://api.hubapi.com/content/api/v2/blog-posts?hapikey='.$hbspt_hapi_key.'&limit=20&state=PUBLISHED',
    ]);
    $hubspot_blog_resp = curl_exec($hbspt_blog_curl);
    curl_close($hbspt_blog_curl);
    $hbspt_blog_resp = json_decode($hubspot_blog_resp);

    if( is_array($hbspt_blog_resp->objects) ){
      if( sizeof($hbspt_blog_resp->objects) > 0 ){
        foreach( $hbspt_blog_resp->objects as $i => $hs_blog ){
          $array = array();
          if( $hs_blog->html_title != '' && $hs_blog->published_url != '' ){
            $array['title'] = $hs_blog->html_title;
            $array['link'] = $hs_blog->published_url;
            $summary = '';
            //print_r( strip_tags($hs_blog->meta->post_summary) );
            $summary = strip_tags($hs_blog->meta->post_summary);
            $summary = explode('. ', $summary)[0];



            //$summary = substr($summary, $summary_period );
            $array['summary'] = $summary;
            $array['post_type'] = 'blog';
            $array['btn_text'] = 'Read Blog';
            array_push($most_recent_array, $array );
          }

        }
      }

    }


  }

  if( sizeof($resources_array) == 0 ):
    $resources_array = $most_recent_array;
    //print_r($most_recent_array);
  endif;
}

if( $list_method == 'manual'){

    switch ($post_type) {
        case 'blog':
            $blog_repeater = get_sub_field('resource_list_blog_repeater');
            //print_r($blog_repeater);
            foreach( $blog_repeater as $blog){
              $array = array();
              $array['title'] = $blog['resource_list_blog_title'];
              $array['link'] = $blog['resource_list_blog_link'];
              $array['btn_text'] = 'Read Blog';
              array_push($resources_array, $array );
            }
            break;
        case 'case-study':
            $case_study_repeater = get_sub_field('resource_list_case_study_repeater');
            //print_r($case_study_repeater);
            foreach( $case_study_repeater as $case){
              $array = array();
              $array['title'] = $case['resource_list_case_study_object']->post_title;
              $array['link'] = get_the_permalink($case['resource_list_case_study_object']->ID);
              $array['summary'] = get_field( 'summary', $case['resource_list_case_study_object']->ID );
              $array['btn_text'] = 'Read Case Study';
              array_push($resources_array, $array );
            }
            break;
        case 'white-paper':
            $white_paper_repeater = get_sub_field('resource_list_white_paper_repeater');
            //print_r($white_paper_repeater);
            foreach( $white_paper_repeater as $whtppr){
              //print_r($whtppr);
              $array = array();
              $array['title'] = $whtppr['resource_list_white_paper_object']->post_title;
              $array['link'] = get_the_permalink($whtppr['resource_list_white_paper_object']->ID);
              $array['summary'] = get_field( 'summary', $whtppr['resource_list_white_paper_object']->ID );
              $array['btn_text'] = 'Read White Paper';
              array_push($resources_array, $array );
            }
            break;
        case 'video':
            $video_repeater = get_sub_field('resource_list_video_repeater');
            //print_r($white_paper_repeater);
            foreach( $video_repeater as $vid){
              //print_r($whtppr);
              $array = array();
              $array['title'] = $vid['resource_list_video_object']->post_title;
              $array['link'] = get_the_permalink($vid['resource_list_video_object']->ID);
              $array['btn_text'] = 'Read White Paper';
              array_push($resources_array, $array );
            }
            break;
    }

}

?>

<?php if( sizeof($resources_array) >= 1 ): ?>

  <section class="resource-list row mb-4 pad-top-<?php echo $pad_top;?> pad-bot-<?php echo $pad_bot;?> px-4 px-lg-0">

    <div class="col mr-md-2 <?php echo $post_type; ?>-list">
        <div class="row list-title mr-md-0 pb-3">
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
                  <b><?php echo $resource['title']; ?></b>

                    <?php if( $resource['summary'] != '' ): ?>
                      <p><?php echo $resource['summary']; ?></p>
                    <?php endif; ?>


                  <span class="link d-block pt-2"><?php echo $resource['btn_text']; ?></span>
                </a>

              </div>

            </div>

            <?php if( $rules == 1): ?>
                <div class="row">
                  <div class="col px-0 pb-4">
                    <hr />
                  </div>
                </div>
            <?php endif; ?>

          <?php endif; ?>
        <?php endforeach; ?>

    </div>
  </section>
<?php endif; ?>
