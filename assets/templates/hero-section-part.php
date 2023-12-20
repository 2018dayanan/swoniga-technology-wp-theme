<?php
  $wpnews = array(
      'post_type' => 'hero',
      'post_status' => 'publish',
      'posts_per_page' => 1
    );

    $newsquery = new wp_Query($wpnews);
    while ($newsquery -> have_posts()) {
      $newsquery -> the_post();
      $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
  
    ?>
<section id="home">
  <div class="container-fluid px-0 hero-bg"
    style="background:linear-gradient(to right, #fff, #0000), url(<?php echo $imagepath[0]; ?>); background-size: cover;">
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-5 col-md-6 mh-100 hero-text">
          <h1>
            <?php the_title(); ?>
    
          </h1>
          <p class="mt-2">
            <?php the_excerpt(); ?>
          </p>
          <div class="mt-2">
            <a class="swtech_button" href="<?php the_permalink(); ?>">Explore Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>