<?php
  $resources = get_sub_field('resources_grid_content');
  $pad_top = get_sub_field('resources_grid_padding_top');
  $pad_bot = get_sub_field('resources_grid_padding_bot');
  $grid = array();
  foreach( $resources as $r){
    $resource = array();
    $resource['title'] = $r['resource_object']->post_title;

    if( $r['resource_object']->post_type == 'case-study'){
      $resource['post_type'] = 'Case Study';
      $resource['button_text'] = 'Read Case Study';
    }
    if( $r['resource_object']->post_type == 'white-paper'){
      $resource['post_type'] = 'White Paper';
      $resource['button_text'] = 'Read White Paper';
    }
    if( $r['resource_object']->post_type == 'video'){
      $resource['post_type'] = 'Video';
      $resource['button_text'] = 'Watch Video';
    }

    if( $r['alt_content'] == 1){
      $resource['summary'] = $r['alt_text'];
      $cover = $r['alt_image'];
    }else{
      $resource['summary'] = get_field('summary', $r['resource_object']->ID );
      $cover = get_field('cover', $r['resource_object']->ID );
    }

    $resource['cover'] = $cover['sizes']['video-cover'];
    $redirect = get_field('redirect', $r['resource_object']->ID);
    if( $redirect == 1 ){
      $resource['url'] = get_field('destination_url', $r['resource_object']->ID);
    }else{
      $resource['url'] = get_the_permalink( $r['resource_object']->ID);
    }
    array_push($grid, $resource);
  }
?>

<section class="resource-grid row pad-top-<?php echo $pad_top;?> pad-bot-<?php echo $pad_bot;?>">
  <div class="col">

    <div class="row">
      <?php foreach( $grid as $tile ): ?>
        <div class="col-12 col-md-4 p-4">

          <div class="row tile py-2">
            <div class="col px-2">
              <div class="row post-label">
                <div class="col">
                  <span class="d-block px-3"><?php echo $tile['post_type']; ?></span>
                </div>
              </div>
              <div class="row post-image">
                <div class="col">
                  <a href="<?php echo $tile['url']; ?>">
                    <img src="<?php echo $tile['cover'];?>" class="img-fluid w-100"/>
                  </a>
                  <?php if( $tile['post_type'] == 'Video' ): ?>
                    <div class="play_dot animate_this">
                      <div class="play_icon">
                        <i class="fas fa-play"></i>
                      </div>
                    </div>
                  <?php endif; ?>
                </div>


              </div>
              <div class="row post-title pt-4 px-4">
                <div class="col">
                  <h6><?php echo $tile['title']; ?></h6>
                </div>
              </div>
              <div class="row post-summary px-4">
                <div class="col">
                  <p><?php echo $tile['summary']; ?></p>
                </div>
              </div>
              <div class="row post-link px-4 mb-4">
                <div class="col">
                  <a href="<?php echo $tile['url']; ?>"><?php echo $tile['button_text']; ?></a>
                </div>
              </div>
            </div>
          </div>





        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
