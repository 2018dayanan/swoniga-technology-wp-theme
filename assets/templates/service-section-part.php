<section id="services">
  <div class="container">
    <h1 class="services-text mb-2">Our Services</h1>
    <div class="row d-flex justify-content-center">
      <?php 
        $wpservice = array(
          'post_type' => 'service',
          'post_status' => 'publish',
          'posts_per_page' => 4,
        );
        $servicequery = new wp_Query($wpservice);
        while ($servicequery -> have_posts()) {
          $servicequery-> the_post();
          $serviceimg = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');

        ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="box">
          <div class="box-inner">
            <div class="image">
              <img src="<?php echo $serviceimg[0]; ?>" class="img-fluid" alt="">
            </div>
            <div class="box-title">
              <h1>
                <?php the_title(); ?>
              </h1>
            </div>
            <div class="box-subtitle">
              <p>
                <?php echo wp_trim_words(get_the_excerpt(), 15); ?>

              </p>
            </div>
            <div class="box-link">

              <a href="<?php the_permalink(); ?>">Read more <i class="fa-solid fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>

    </div>
  </div>

</section>