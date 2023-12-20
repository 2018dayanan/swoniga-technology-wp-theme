<?php 
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
<!-- Floating Action Button -->
<?php get_template_part( 'assets/templates/floating-action-button'); ?>

<section class="" id="single_page">
    <div class="single_page_bg"style="background:linear-gradient(to right, #0002, #0002),url(<?php echo get_template_directory_uri()?>/assets/images/bg-image.jpg); background-size: cover;background-repeat:no-repeat;background-positon:center;">
        <div class="container">
            <div class="top_single_page">
                <div class="top_single_page_title">
                    <h1 class="mt-5">Blogs</h1>
                </div>
            </div>
        </div>
    </div> <!-- End of single post bg -->
</section>
<!-- show all blog posts here -->
<section id="blog_section" class="mb-5">
    <div class="container">
      <div class="row d-flex justify-content-center">



   
      <?php 
 
      if ( have_posts() ) {
	  while ( have_posts() ) {
      the_post(); ?>
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
      <div class="pagination">
        <div class="previous">
      <?php previous_posts_link('<i class="fa-solid fa-angles-left"></i>'); ?>

        </div>
        <div class="next">
      <?php next_posts_link('<i class="fa-solid fa-angles-right"></i>'); ?>

        </div>
      </div> <!--End of pagination-->

    </div>

  </section>

<?php get_footer(); ?>

