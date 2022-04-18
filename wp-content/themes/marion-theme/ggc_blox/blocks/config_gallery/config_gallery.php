<?php
  global $post;

  $filter_post_type = get_sub_field('filter_by');

  $args = array(
      'numberposts'   => 100,
      'orderby'       => 'date',
      'order'         => 'DESC',
      'post_type'     => 'typical_config',
      'fields'        => 'ids',
  );

  if( $post->post_type == 'process'){

        if( $filter_post_type == 'process' ){
          $relationship_id = get_sub_field('chosen_process');
        }
        if( $filter_post_type == 'industry' ){
          $relationship_id = get_sub_field('chosen_industry');
        }
        if( $filter_post_type == 'typical_config' ){
          $relationship_id = get_sub_field('typical_config');
        }

  }

  if( $filter_post_type == 'industry'){

      if( $filter_post_type == 'process' ){
        $relationship_id = get_sub_field('chosen_process');
      }
      if( $filter_post_type == 'industry' ){
        $relationship_id = get_sub_field('chosen_industry');
      }
      if( $filter_post_type == 'typical_config' ){
        $relationship_id = get_sub_field('typical_config');
      }

  }

  if( $post->post_type == 'typical_config' ){
    $relationship_id = get_field('related_product_type');
  }
  if( $post->post_type == 'product_type'){
    $relationship_id = get_the_ID();
  }


  $configs = get_posts( $args );
  $config_gallery = array();

  foreach( $configs as $config_id ){

    $industry =  get_field('related_industries', $config_id);
    $process =  get_field('related_process', $config_id);
    $product_type =  get_field('related_product_type', $config_id);

    if( in_array( $relationship_id, $industry) || in_array( $relationship_id, $process )|| $relationship_id == $product_type ){
        $config = array();
        $config['ID'] = $config_id;
        $config['industry'] =  $industry;
        $config['process'] =  $process;
        $config['title'] = get_the_title($config_id);
        $config['post_name'] = get_post_field( 'post_name', $config_id );
        $config_image = get_field('product_image', $config_id);
        $config['image'] = $config_image['sizes']['large'];
        $config['image_width'] = $config_image['sizes']['large-width'];
        $config['image_height'] = $config_image['sizes']['large-height'];
        $config_content = get_field('product_content_group', $config_id);
        $config['description'] = $config_content['product_description'];
        $config['summary'] = get_field('summary', $config_id);
        array_push( $config_gallery, $config );
    }

  }

?>

<?php if( is_array( $config_gallery ) ): ?>
  <?php if( sizeof( $config_gallery ) > 1 ): ?>
    <section class="row config-gal">
      <div class="col   <?php if( sizeof( $config_gallery ) == 1 ): ?> col-md-10 offset-md-1<?php endif; ?> px-0">
        <div class="row owl-carousel owl-theme mx-0 my-5">
            <?php foreach( $config_gallery as $configuration ): ?>
              <div class="col-owl item py-4" data-hash="<?php echo $configuration['post_name']; ?>">
                <div class="row align-items-center h-100 px-5">
                  <div class="col-12 col-md-6 py-5">
                      <img src="<?php echo $configuration['image'];?>" width="<?php echo $configuration['image_width'];?>" height="<?php echo $configuration['image_height'];?>" class="img-fluid" />
                  </div>
                  <div class="col-12 col-md-6">
                    <h4 class="pb-1"><?php echo $configuration['title']; ?></h3>
                    <span class="industries d-inline-block pb-3 pr-5">
                      <strong><?php if( sizeof( $configuration['industry'] ) > 1 ): ?>Industries<?php else: ?>Industry<?php endif; ?>:</strong>
                      <?php foreach($configuration['industry'] as $i => $ind): $i++; ?>
                        <a href="<?php echo get_the_permalink($ind);?>"><?php echo get_the_title($ind);?></a><?php if($i < sizeof($configuration['industry']) ): echo ', '; endif; ?>
                      <?php endforeach; ?>
                    </span>
                    <p><?php echo $configuration['summary']; ?></p>
                    <a href="<?php echo get_the_permalink($configuration['ID']); ?>">View Configuration Details</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
        </div>
      </div>
      <?php if( sizeof( $config_gallery ) > 1 ): ?>
        <script>
          jQuery( document ).ready(function() {

          jQuery('button').on( 'click', function() {
            var hash = window.location.hash;
            var link = $('a');
            jQuery('a').click(function(e) {
              e.preventDefault();
              hash = link.attr("href");
              window.location = hash;
            });
          });

          jQuery('.owl-carousel').owlCarousel({
            stagePadding: 200,
            center: true,
            items:1,
            loop:true,
            margin:100,
            dots: false,
            nav: true,
            URLhashListener: true,
            startPosition: 'URLHash',
            responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:false,
                        stagePadding: 20,
                    },
                    991:{
                        items:1,
                        nav:true,
                    }
                }
          })
        });
        </script>
      <?php endif; ?>
    </section>
  <?php endif; ?>
<?php endif; ?>
