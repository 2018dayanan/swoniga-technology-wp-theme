  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/bootstrap/css/bootstrap.min.css">

  <div class="single_page_bg"style="background:linear-gradient(to right, #0002, #0002),url(<?php echo get_template_directory_uri()?>/assets/images/bg-image.jpg); background-size: cover;background-repeat:no-repeat;background-positon:center;">

  
  <script src="assets/boot/js/popper.js"></script>

  <script src="assets/boot/js/bootstrap.min.js"></script>


   <?php
      $wptraining = array(
      'post_type' => 'training',
      'post_status' => 'publish',
      'posts_per_page' => 3
    );

    $trainingquery = new wp_Query($wptraining);
    while ($trainingquery -> have_posts()) {
      $trainingquery -> the_post();
      
  
    ?>

<?php
     $queryArgs = [
      'post_type'         => 'training',
      'post_status'       => 'publish',
      'posts_per_page' => 3,
  ];

      $query = new WP_Query($queryArgs);
      $posts = $query->get_posts();
      foreach ($posts as $post) {  
        $postId = $post->ID;            
        $title = get_field('training', $postId);       
    ?>



<title><?php echo get_bloginfo('title')?> | <?php echo get_bloginfo('description')?></title>
<a class="navbar-brand" href="<?php bloginfo('url'); ?>"> </a>


/* =================================== */
/* ========== Single Page Detail show ================= */
/* ==================================== */

<section id="single_page_contents">
   <div class="container">
   <?php
        $id = 155; // add the ID of the page where the zero is
        $p = get_page($id);
        $t = $p->post_title;
        echo '<h3>'.apply_filters('post_title', $t).'</h3>'; // the title is here wrapped with h3
        echo apply_filters('the_content', $p->post_content);
        echo apply_filters('the_post_thumbnail', $p->the_post_thumbnail);
?>
<?php 
$id = 155;
$backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->$id), 'full' );?>


<img src="<?php echo $backgroundImg[0]; ?>">

<h1>Hello</h1>


   </div>

</section>