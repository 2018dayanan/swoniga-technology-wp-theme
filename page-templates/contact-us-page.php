<?php /* Template Name: Contact us*/ ?>
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
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="post_description">
                <?php //the_content(); ?>
                <div class="contact_form">
                    <form method="post" name="contact">
                        <input type="text" placeholder="Name" name="name" autocomplete="off" />
                        <input type="email" placeholder="Email" name="email" autocomplete="off" />
                        <textarea name="message" rows="5" placeholder="Message" autocomplete="off" ></textarea>
                        <input type="submit" value="Send"/>
                    </form>
                </div>
            </div>
        </div> 
        <div class="col-md-6">
            <div class="post_description google_map_item">
                <div class="google_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3565.580053775802!2d87.27226757439881!3d26.661925070824992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef6d49bf7b5ee5%3A0x66f10544db0cf44f!2sSwoniga%20Technology!5e0!3m2!1sen!2snp!4v1694593118267!5m2!1sen!2snp" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>   
    </div>
</div>
</section>
<script>
    // alert("tesing");
</script>
<!-- Footer -->
<?php get_footer(); ?>






