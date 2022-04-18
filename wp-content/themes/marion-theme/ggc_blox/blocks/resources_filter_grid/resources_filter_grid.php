<?php
$default_cover = get_field('default_resource_image', 'option');

$args = array(
    'numberposts' => -1,
    'post_type' => array('case_study','literature','video', 'webinar'),
    'orderby' => 'DATE',
    'order' => 'DESC',
);
$resources_results = get_posts($args);

$resources_grid = array();

$process_filters = array();
$industry_filters = array();
$product_filters = array();
$type_filters = array();

foreach( $resources_results as $result ):
  $array = array();

  $process_filter = array();
  $industry_filter = array();
  $product_filter = array();
  $type_filter = array();

  $related_process = get_field('related_process', $result->ID);
  $related_industry = get_field('related_industry', $result->ID);
  $related_product = get_field('related_product_type', $result->ID);

  //print_r($related_process);
  if( is_array($related_process) ){
    foreach( $related_process as $process ){
      $array['process'][]['name'] = $process->post_title;
      $array['process'][]['slug'] = $process->post_name;

      $process_filter['name'] = $process->post_title;
      $process_filter['slug'] = $process->post_name;
    }
  }

  if( is_array($related_industry) ){
    foreach( $related_industry as $ind ){
      $array['industry'][]['name'] = $ind->post_title;
      $array['industry'][]['slug'] = $ind->post_name;

      $industry_filter['name'] = $ind->post_title;
      $industry_filter['slug'] = $ind->post_name;
    }
  }

  if( is_array($related_product) ){
    foreach( $related_product as $ptype ){
      $array['product_type'][]['name'] = $ptype->post_title;
      $array['product_type'][]['slug'] = $ptype->post_name;

      $product_filter['name'] = $ptype->post_title;
      $product_filter['slug'] = $ptype->post_name;
    }
}

  $redirect = get_field('redirect', $result->ID);
  $destination = get_field('destination_url', $result->ID );

  if( $redirect == 1 && $destination != '' ){
    $array['link'] = $destination;
    $array['target'] = '_blank';
  }else{
    $array['link'] = get_the_permalink($result->ID);
    $array['target'] = '_self';
  }

  $array['title'] = $result->post_title;
  // $array['link'] = get_the_permalink($result->ID);
  $post_type_label = ucwords ( str_replace('_', ' ', $result->post_type) );
  $array['post_type'] = $result->post_type;
  $array['post_type_label'] = $post_type_label;

  $type_filter['post_type'] = $result->post_type;


  if( $result->post_type == 'video' ){
    $array['button_text'] = 'Watch Video';
    $array['post_type_label'] = 'Video';
    $type_filter['post_type_label'] = 'Videos';
  }
  if( $result->post_type == 'webinar' ){
    $array['button_text'] = 'Access Webinar';
    $array['post_type_label'] = 'Webinar';
    $type_filter['post_type_label'] = 'Webinars';
  }
  if( $result->post_type == 'literature' ){
    $array['button_text'] = 'Download Resource';
    $array['post_type_label'] = 'Handbook, Brochure, Guide';
    $type_filter['post_type_label'] = 'Handbooks, Brochures & Guides';
  }
  if( $result->post_type == 'case_study' ){
    $array['button_text'] = 'Read Case Study';
    $array['post_type_label'] = 'Case Study';
    $type_filter['post_type_label'] = 'Case Studies';
  }

  $cover = get_field('image', $result->ID);
  if( is_array($cover) ){
    $array['cover'] = $cover['sizes']['cover-small'];
    $array['cover_width'] = $cover['sizes']['cover-small-width'];
    $array['cover_height'] = $cover['sizes']['cover-small-height'];
  }else{
    //print_r( $default_cover );
    $array['cover'] = $default_cover['sizes']['cover-small'];
    $array['cover_width'] = $default_cover['sizes']['cover-small-width'];
    $array['cover_height'] = $default_cover['sizes']['cover-small-height'];
  }
  $array['summary'] = get_field('summary', $result->ID);

  array_push( $resources_grid, $array );
  array_push( $process_filters, $process_filter );
  array_push( $industry_filters, $industry_filter );
  array_push( $product_filters, $product_filter );
  array_push( $type_filters, $type_filter );

endforeach;
$process_filters = array_map("unserialize", array_unique(array_map("serialize", $process_filters)));
$industry_filters = array_map("unserialize", array_unique(array_map("serialize", $industry_filters)));
$product_filters = array_map("unserialize", array_unique(array_map("serialize", $product_filters)));
$type_filters = array_map("unserialize", array_unique(array_map("serialize", $type_filters)));
?>

<section class="resource-filter-grid row pad-top-0 pad-bot-1">
  <div class="col">

      <div class="row controls my-5">
        <div class="col filter-group">

          <div class="row">
            <div class="col-md-3">
              <label for="type_filter" class="type_control d-block">Type:
                <select name="type" id="type_filter" class="filter-select" value-group="type">
                  <option value="*">All</option>
                  <?php foreach($type_filters as $category):?>
                    <?php if( $category['post_type'] != '' ): ?>
                      <option value=".<?php echo $category['post_type'];?>" data-slug="<?php echo $category['post_type'];?>"><?php echo $category['post_type_label'];?></option>
                    <?php endif; ?>
                  <?php endforeach;?>
                </select>
                <button id="for_type"><i class="fas fa-play fa-rotate-90"></i></button>

              </label>
            </div>

            <div class="col-md-3">
              <label for="process_filter" class="type_control d-block">Process:
                <select name="process" id="process_filter" class="filter-select" value-group="process">
                  <option value="*">All</option>
                  <?php foreach($process_filters as $category):?>
                    <?php if( $category['slug'] != '' ): ?>
                      <option value=".<?php echo $category['slug'];?>" data-slug="<?php echo $category['slug'];?>"><?php echo $category['name'];?></option>
                    <?php endif; ?>
                  <?php endforeach;?>
                </select>
                <button id="for_process"><i class="fas fa-play fa-rotate-90"></i></button>

              </label>
            </div>

            <div class="col-md-3">
              <label for="industry_filter" class="type_control d-block">Industry:
                <select name="industry" id="industry_filter" class="filter-select" value-group="industry">
                  <option value="*">All</option>
                  <?php foreach($industry_filters as $category):?>
                    <?php if( $category['slug'] != '' ): ?>
                      <option value=".<?php echo $category['slug'];?>" data-slug="<?php echo $category['slug'];?>"><?php echo $category['name'];?></option>
                    <?php endif; ?>
                  <?php endforeach;?>
                </select>
                <button id="for_industry"><i class="fas fa-play fa-rotate-90"></i></button>

              </label>
            </div>

            <div class="col-md-3">
              <label for="product_type_filter" class="type_control d-block">Product Type:
                <select name="product_type" id="product_type_filter" class="filter-select" value-group="product_type">
                  <option value="*">All</option>
                  <?php foreach($product_filters as $category):?>
                    <?php if( $category['slug'] != '' ): ?>
                      <option value=".<?php echo $category['slug'];?>" data-slug="<?php echo $category['slug'];?>"><?php echo $category['name'];?></option>
                    <?php endif; ?>
                  <?php endforeach;?>
                </select>
                <button id="for_product_type"><i class="fas fa-play fa-rotate-90"></i></button>

              </label>
            </div>


          </div>




        </div>
      </div>


    <div class="row resource-gallery">
      <?php foreach( $resources_grid as $tile ): ?>
        <div class="col col-md-4 mb-4 resource-tile <?php echo $tile['post_type']; ?>
        <?php
        if( array_key_exists('process',$tile) ):
          foreach( $tile['process'] as $process):
          echo $process['slug'].' ';
          endforeach;
        endif;

        if( array_key_exists('industry',$tile) ):
          foreach( $tile['industry'] as $industry):
          echo $industry['slug'].' ';
          endforeach;
        endif;

        if( array_key_exists('product_type',$tile) ):
          foreach( $tile['product_type'] as $product):
          echo $product['slug'].' ';
          endforeach;
        endif;
        ?>">

              <div class="row px-2">
                <div class="col tile-border">

                  <div class="row content-type text-center py-1">
                    <div class="col">
                      <span class="d-block"><?php echo $tile['post_type_label']; ?></span>
                    </div>
                  </div>

                  <div class="row image px-0">
                    <a href="<?php echo $tile['link']; ?>" class="" target="<?php echo $tile['target'];?>">
                      <div class="col px-0">
                        <img src="<?php echo $tile['cover']; ?>" class="img-fluid" width="<?php echo $tile['cover_width']; ?>" height="<?php echo $tile['cover_height']; ?>"/>
                      </div>
                    </a>
                  </div>

                  <div class="row title pt-4 px-4">
                    <div class="col">
                      <h3><?php echo $tile['title']; ?></h3>
                    </div>
                  </div>

                  <div class="row summary pb-3 px-4">
                    <div class="col">
                      <p><?php echo $tile['summary']; ?></p>
                    </div>
                  </div>

                  <div class="row link pb-5 px-4">
                    <div class="col">
                      <a href="<?php echo $tile['link']; ?>" class="" target="<?php echo $tile['target'];?>"><?php echo $tile['button_text']; ?></a>
                    </div>
                  </div>

                </div>
              </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
