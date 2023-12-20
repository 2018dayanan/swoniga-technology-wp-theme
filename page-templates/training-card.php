<section id="professional_training">
  <div class="container">
    <!-- <h1 class="professional_training_title">Professional Training</h1> -->
    <div class="row d-flex justify-content-center">
    <?php


     if(have_rows('professional_training') ): 

   
    while(have_rows('professional_training') ) :the_row();

    
    $training_title = get_sub_field('training_title');
    $training_description = get_sub_field('training_description');
    $training_level   = get_sub_field('training_level');
    $training_hours = get_sub_field('training_hours');
    // $tags = get_sub_field('tags');
      
    ?>
    
    
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="training_card">
          <ul class="subtext_list p-0 mt-1">
            <li class="subtext_list_item">Learning Journey</li>
            <li class="subtext_list_item"><?php echo $training_level; ?></li>
            <li class="subtext_list_item"><?php echo $training_hours; ?></li>
          </ul>
          <h3 class="training_card_title"><a href="<?php the_permalink(); ?>"><?php echo $training_title; ?></a></h3>
          <p class="read_more_text"><?php echo  $training_description; ?></p>
          <div class="tag_list">
        
             <?php
               if(have_rows('tags') ): 
                while(have_rows('tags') ) :the_row();
                 $tag = get_sub_field('tag');
                  ?>
               <p><?php echo $tag; ?></p>
               <?php
              endwhile;
              else : echo "<p>Tags</p>";
              endif;
              ?>
      
          </div>
        </div>
      </div>
    <?php
  endwhile;


  else : echo "No post found";
  endif;

?>

</div>
  </div>   <!-- container -->

</section>