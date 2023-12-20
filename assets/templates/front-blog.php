<section id="blog_section" class="mb-5">
    <div class="container">
      <div class="blog-top-title">
        <div class="blog-top-title-left">
          <h1>Blog</h1>
        </div>
        <div class="blog-top-title-right">
          <a href="www.facebook.com">Show more <i class="fa-solid fa-chevron-right"></i></a>
        </div>
      </div>
      <div class="row d-flex justify-content-center">



   
      <?php 
      $swtechargs = array(  
        'post_status' => 'publish',
        'posts_per_page' => 3,  
        );
        $swtechloop = new WP_Query( $swtechargs  ); 
      if ( $swtechloop->have_posts() ) {
	  while ( $swtechloop->have_posts() ) {
      $swtechloop->the_post(); ?>
	  <div class="col-md-4 mt-5">
          <div class="blog-card">
            <div class="blog-card-image">
              <?php the_post_thumbnail( $post->ID); ?>
              <div class="blog-card-author">
                <span><?php echo get_the_author(); ?></span>
              </div>
            </div>
            <div class="blog-info">
              <div class="blog-card-title">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              </div>
              <div class="blog-card-description">
                <p><?php the_excerpt(); ?></p>
  
              </div>
              <div class="blog-card-button">
                <a href="<?php the_permalink(); ?>">Read more <i class="fa-solid fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End of Column -->

	<?php } ?>
    <?php wp_reset_postdata(); ?>

<?php } else{ ?>


<p>No post Found</p>

<?php } ?>
         
        
      </div>  <!-- End of Row --> 
      
    </div>

  </section>

  <!-- End of Blog -->