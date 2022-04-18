<?php

$phone = get_field('contact_phone', 'option');
$contact_page = get_field('contact_link', 'option');

$empty_message = get_sub_field('empty_result_message', 'option');


$args = array(
  'post_type' => 'representative',
  'numberposts' => -1,
  'fields' => 'ids'

);
$reps_array = get_posts($args);

$reps = array();
$pins = array();
foreach( $reps_array as $rep_id ){
  $rep = array();
  $pin = array();
  $rep['name'] = get_the_title($rep_id);
  $uid = preg_replace('/[^\w\s]/', '', get_the_title($rep_id));
  $uid = preg_replace('/\s+/', '_', $uid);
  $uid = strtolower($uid);
  $rep['uid'] = $uid;
  $rep['zip_codes'] = get_field('zip_codes', $rep_id);
  $rep['address_formatted'] = get_field('address_formatted', $rep_id);
  $rep['email'] = get_field('email_address', $rep_id);
  $rep['website'] = get_field('website_url', $rep_id);
  $rep['phone'] = get_field('phone', $rep_id);
  $rep['logo'] = get_field('logo', $rep_id);
  $rep['bio'] = get_field('biography', $rep_id);
  $location_ID = 'rep_'.rand(100000, 999999);
  $rep['location_id'] = $location_ID;

  array_push($reps, $rep);
  array_push($pins, $pin);
}
?>

<section class="rep-locator row pad-top-1 pad-bot-4">

  <div class="col-12">
    <div class="row inputs py-5 mx-0 ">
      <div class="col-12 col-md-8 offset-md-2 mb-4 mb-md-0">
        <label class="user_location" for="user_location">Look Up By ZIP Code:</label>
      </div>

      <div class="col-12 col-md-5 col-xl-6 offset-md-2 mb-4 mb-md-0">
        <input type="text" name="user_location" id="user_location" placeholder="Your ZIP Code"/>
      </div>

      <div class="col-12 col-md-3 col-xl-2 pb-4 text-center px-0 px-md-auto">
        <a href="#" class="btn btn-orange w-100">Find Rep</a>
      </div>



    </div>
  </div>

  <div class="col-12 map">

    <script type='text/javascript'>

      jQuery(document).on("keypress", "input", function(e){
          if(e.which == 13 && jQuery(this).val().length >= 5 ){
            jQuery('.inputs .btn').click();
          }
      });

      jQuery('.inputs .btn').on( 'click', function(e){

        e.preventDefault();

        var x = 0;
        var user_location = jQuery('.inputs #user_location').val();
        var position = 0;

        if( user_location.length >= 5 ){
            jQuery('.tile_wrap').addClass('d-none');
            jQuery('.no-results-tile-wrap').addClass('d-none');

            jQuery('.tile_wrap').each(function(){
              var zips = jQuery(this).data('zips');
              if( zips.indexOf(user_location) >= 0 ){
                jQuery(this).removeClass('d-none');
                position = jQuery(this).offset().top;
                x++;
              }
            });


            if( x == 0){
              jQuery('.no-results-tile-wrap').removeClass('d-none');
            }else{
              jQuery("body, html").animate({
              		scrollTop: position
              });
            }
        }

      }); // CLICK EVENT

    </script>
  </div>

  <div class="col-12">
    <div class="row" id="tiles_container">

      <?php foreach( $reps as $i => $rep ): ?>

        <div class="col-12 mt-3 tile_wrap d-none" id="#<?php echo $rep['uid'];?>" data-zips="<?php echo $rep['zip_codes']; ?>">

          <div class="row rep-tile mx-0 py-5 d-flex flex-wrap align-items-center" id="<?php echo $rep['location_id']; ?>">

            <div class="col-12 col-md-12 col-lg-3 offset-lg-1 logo">
              <?php if( is_array($rep['logo']) ): ?>
                <img src="<?php echo $rep['logo']['sizes']['medium']; ?>" class="img-fluid d-block mx-auto my-auto"/>
              <?php endif; ?>
            </div>
            <div class="col-12 col-md-6 col-lg-4 info pt-3">

              <span class="rep-name d-block mb-2"><strong><?php echo $rep['name']; ?></strong></span>
              <span class="rep-address d-block mb-3">
              <?php echo $rep['address_formatted']; ?>
              </span>
              <span class="rep-distance d-none"><i class="fas fa-map-marker-alt"></i> &nbsp; <span class="distance">00.00</span> miles</span>
            </div>
            <div class="col-12 offset-0 offset-md-0 col-md-6 offset-lg-0 col-lg-4 contact pt-3">
              <span class="connect-phone d-block mb-2"><i class="fas fa-envelope"></i> <a href="mailto:<?php echo $rep['email']; ?>"><?php echo $rep['email']; ?></a></span>
              <span class="connect-email d-block mb-2"><i class="fas fa-phone"></i> <a href="tel:<?php echo $rep['phone']; ?>"><?php echo $rep['phone']; ?></a></span>
              <span class="connect-email d-block"><i class="fas fa-laptop"></i> <a href="<?php echo $rep['website']; ?>" target="_blank">Website</a></span>
            </div>

          </div>
          <?php if( $rep['bio'] != '' ): ?>
            <div class="row mx-0">
              <div class="col-12">
                <strong>About <?php echo $rep['name']; ?></strong>
                <?php echo $rep['bio']; ?>
              </div>
            </div>
          <?php endif; ?>


        </div>
      <?php endforeach; ?>


      <div class="col-12 mt-3 no-results-tile-wrap d-none">

        <div class="row mx-0 py-5" id="no_results">

          <div class="col-11 offset-1 col-md-6 col-lg-7 info">
            <?php echo $empty_message; ?>
          </div>

          <div class="col-12 offset-0 offset-md-1 col-md-4 offset-lg-0 col-lg-4 contact">
            <span class="connect-headline d-block mb-3">Set up a Consultation</span>
            <span class="connect-phone d-block mb-2"><i class="fas fa-envelope"></i> <a href="<?php echo $contact_page['url'];?>">Contact Us</a></span>
            <span class="connect-email d-block"><i class="fas fa-phone"></i> <a href="tel:<?php echo preg_replace("/[^0-9]/", "", $phone );;?>"><?php echo $phone;?></a></span>
          </div>

        </div>
      </div>

    </div>
  </div>


</section>
