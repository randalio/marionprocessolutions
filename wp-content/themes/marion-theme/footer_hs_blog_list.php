<?php
  $most_recent_array = array();
  $resources_array = array();
  $hbspt_hapi_key = get_field('hs_hapi_key', 'option');
  $hbspt_blog_curl = curl_init();
  //$hbspt_hapi_key = 'fc6c88de-7638-4571-be18-b4ef06b804e8';
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
          $summary = strip_tags($hs_blog->meta->post_summary);
          $summary = explode('. ', $summary)[0];
          $array['summary'] = $summary;
          $array['post_type'] = 'blog';
          $array['btn_text'] = 'Read Blog';
          array_push($most_recent_array, $array );
        }
      }
    }
  }
?>
<?php if( sizeof($most_recent_array) >= 1 ): ?>
  <section class="resource-list row mb-4 pad-top-<?php echo $pad_top;?> pad-bot-<?php echo $pad_bot;?>">
    <div class="col mr-md-2 <?php echo $post_type; ?>-list">
      <div class="row list-title mr-md-0 pb-3">
        <div class="col pl-0 ">
          <h3 class="d-inline">Blog</h3>
        </div>
      </div>
      <?php foreach( $most_recent_array as $i => $resource ): ?>
        <?php if( $i < 3 ): ?>
          <div class="row blog-post mr-md-0">
            <div class="col pl-0 pb-4">
              <a href="<?php echo $resource['link']; ?>" class="d-block">
                <b><?php echo $resource['title']; ?></b>
                  <?php if( $resource['summary'] != '' ): ?>
                    <p><?php echo $resource['summary']; ?></p>
                  <?php endif; ?>
                <span class="link d-block pt-2"><?php echo $resource['btn_text']; ?></span>
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
