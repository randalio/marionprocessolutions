<?php

$gallery = get_sub_field('image_gallery_repeater');
$pad_top = get_sub_field('image_gallery_padding_top');
$pad_bot = get_sub_field('image_gallery_padding_bot');


$items = array();
foreach( $gallery as $i => $gal ){
  //  print_r($gal);
  $item = array();
  $item['id'] = 'item_'.$i;

  if( sizeof($gallery) == 1 ){
    $item['image'] = $gal['image']['sizes']['grid-one-item'];
    $item['col'] = 'col-12';
  }
  if( sizeof($gallery) == 2 ){
    $item['image'] = $gal['image']['sizes']['grid-two-items'];
    $item['col'] = 'col-12 col-md-6';
  }
  if( sizeof($gallery) == 3 ){
    $item['image'] = $gal['image']['sizes']['grid-three-items'];
    $item['col'] = 'col-12 col-md-4';
  }
  if( sizeof($gallery) == 4 ){
    $item['image'] = $gal['image']['sizes']['grid-four-items'];
    $item['col'] = 'col-12 col-md-3';
  }
  $item['title'] = $gal['image_headline'];
  $item['caption'] = $gal['image_caption'];

  if( $gal['image_popup'] == 1){
    $item['pop'] = 'true';
  }else{
    $item['pop'] = 'false';
  }

  $item['pop-image'] = $gal['image']['sizes']['large'];
  array_push($items, $item);
}

?>

<section class="image-gallery row pad-top-<?php echo $pad_top; ?> pad-bot-<?php  echo $pad_bot; ?>">
  <div class="col px-md-0">

    <div class="row">
      <?php foreach( $items as $item ): ?>
        <div class="col <?php echo $item['col']; ?> item pb-5 pb-md-0 px-auto px-md-0">

          <div class="row px-0">
            <div class="col <?php if( $item['pop'] == 'true' ): ?>id="<?php echo $item['id']; ?>_container" data-toggle="modal" data-target="#<?php echo $item['id']; ?>"<?php endif; ?>">

              <div class="image_wrap tile">
                <img src="<?php echo $item['pop-image'];?>" class="img-fluid w-100 px-4"/>
                <h5 class="caption-head d-block px-4 pt-4"><?php echo $item['title'];?></h5>
                <span class="caption d-block px-4 pb-4 pt-2"><?php echo $item['caption']; ?></span>

                <div class="rule mx-4"></div>
              </div>


              <?php if( $item['pop'] == 'true' ): ?>
                <div class="modal fade" id="<?php echo $item['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <div class="image_wrap">
                          <img src="<?php echo $item['pop-image'];?>" class="img-fluid w-100"/>
                          <div class="caption-wrap">
                            <h5 class="caption-head d-block px-4 pt-4 pb-0 mb-0"><?php echo $item['title'];?></h5>
                            <span class="caption d-block p-4"><?php echo $item['caption']; ?></span>
                          </div>
                        </div>
                        <button type="button" class="btn btn-quaternary float-right px-3" data-dismiss="modal"><i class="fas fa-times"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>


        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
