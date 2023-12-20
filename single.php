<?php get_header(); ?>
<!-- Floating Action Button -->
<?php get_template_part( 'assets/templates/floating-action-button'); ?>

<section class="mt-5" id="custom_single_post" >

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    
<div class="top_section_background"style="background:linear-gradient(to right, #0002, #0002),url(<?php echo $image[0]; ?>); background-size: cover;background-repeat:no-repeat;background-positon:center;">
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
<div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="post_description">
        <?php the_content(); ?>
    </div>
</div>    

    </div>
</div>
</section>
<!-- Footer -->
<?php get_footer(); ?>
