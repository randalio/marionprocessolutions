<?php

$year = date("Y");

$fb = get_field('facebook', 'option');
$tw = get_field('twitter', 'option');
$li = get_field('linkedin', 'option');
$yt = get_field('youtube', 'option');


$privacy = get_field('privacy_policy_link', 'option');

?>


<footer>
    <div class="container-fluid social text-center mt-5">
      <div class="container">
        <div class="row">
          <div class="col py-4">

            <?php if( $fb != '' ): ?>
              <a href="<?php echo $fb; ?>" target="_blank" class="d-inline-block social-icon fb"><i class="fab fa-facebook-f"></i></a>
            <?php endif; ?>

            <?php if( $tw != '' ): ?>
              <a href="<?php echo $tw; ?>" target="_blank" class="d-inline-block social-icon tw"><i class="fab fa-twitter"></i></a>
            <?php endif; ?>

            <?php if( $li != '' ): ?>
              <a href="<?php echo $li; ?>" target="_blank" class="d-inline-block social-icon li"><i class="fab fa-linkedin-in"></i></a>
            <?php endif; ?>

            <?php if( $yt != '' ): ?>
              <a href="<?php echo $yt; ?>" target="_blank" class="d-inline-block social-icon yt"><i class="fab fa-youtube"></i></a>
            <?php endif; ?>

          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid legal text-center">
      <div class="container">
        <div class="row">
          <div class="col py-2 small">
            &copy; <?php echo $year .' '. get_bloginfo(); ?>. All Rights Reserved. <?php if( is_array($privacy) ): ?> <a href="<?php echo $privacy['url'];?>" class="px-2 d-inline-block">Privacy Policy</a> <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </footer>

   <?php wp_footer(); ?>
</div> <!-- #superMain -->
</body>
</html>
