<?php /* Template Name: Our Team*/ ?>
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
<section id="our_team">
<div class="container">
    <div class="col-12 mb-5 text-justify tema_description">
            <?php the_content(); ?>

    </div>

<div class="row justify-content-center">
<?php if( have_rows('our_team') ): 

   
while( have_rows('our_team') ) : the_row();
    $team_image = get_sub_field('team_image');
    $team_name = get_sub_field('team_name');
    $team_designation = get_sub_field('designation');
    $team_s_link = get_sub_field('social_links');

?>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <div class="our_team">
            <div class="team_image">
                <img src="<?php echo $team_image; ?>" class="img-fluid" alt="Profile Picture">
                <div class="our_team_social_links">
                    <a href="<?php echo $team_s_link['facebook']; ?>"><i class="fa-brands fa-facebook"></i></a>
                    <a href="<?php echo $team_s_link['twitter']; ?>"><i class="fa-brands fa-twitter"></i></a>
                    <a href="<?php echo $team_s_link['github']; ?>"><i class="fa-brands fa-github"></i></a>
                    <a href="<?php echo $team_s_link['instagram']; ?>"><i class="fa-brands fa-square-instagram"></i></a>
                </div>
            </div>
            <div class="team_name">
                <h5><?php echo $team_name; ?></h2>
           
                <p>
                    <?php if(!empty($team_designation)):
                    $team_designation = $team_designation;
                    else: $team_designation= "Add Degination";
                endif;
                echo $team_designation;
                ?>



                </p>

        </div>
            
        </div>
    </div> <!-- End of Col -->    
<?php
endwhile;


else : echo "No Team Found";
endif;
?>




</div>

</section>
</div>
</section>
<!-- Footer -->
<?php get_footer(); ?>






