<?php /* Template Name: Services*/ ?>
<?php get_header(); ?>
<?php get_header(); ?>
<!-- Floating Action Button -->
<?php get_template_part( 'assets/templates/floating-action-button'); ?>

<section class="mt-5" id="custom_single_post" >

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    
<div class="top_section_background"style="background:linear-gradient(to right, #0002, #0002),url(<?php echo $image[0]; ?>); background-size: cover;background-repeat:no-repeat;">
<?php endif; ?>
<div class="container">
    <div class="top_header">
        <div class="top_header_title">
            <div class="post_title">
                 <h1><?php the_title(); ?></h1>        
            </div>
        </div>
    </div>
</div>
</div>
<div class="container pt-5 all_services">
<div class="row d-flex justify-content-center">
      <?php 
        $wpservice = array(
          'post_type' => 'service',
          'post_status' => 'publish',
          'posts_per_page' => -1,
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
<!-- Footer -->
<?php get_footer(); ?>






