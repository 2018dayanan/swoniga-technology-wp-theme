<!-- ========================================== -->
  <!-- ========= Footer ========== -->
  <!-- ========================================== -->
  <footer id="footer-section">
    <div class="footer_bg" style="background:linear-gradient(to right, #000e, #000e),url(<?php echo get_template_directory_uri();?>/assets/images/swoniga-map.png); background-size: cover;background-repeat:no-repeat;background-positon:center;">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mt-4">
          <div class="footer-col">
            <div class="footer-heading">
            <?php
        $id = 155; // add the ID of the page where the zero is
        $p = get_page($id);
        $t = $p->post_title;
        echo '<h1>'.apply_filters('post_title', $t).'</h1>'; // the title is here wrapped with h3
        echo apply_filters('the_content', $p->post_content);
     
        ?>
            </div>
          </div>
        </div>
        <div class="col-md-3 mt-4">
          <div class="footer-col">
            <div class="footer-heading">
              <h1>Quick Links</h1>
              <!-- <ul>
                <li><a href="">Company Information</a></li>
                <li><a href="">Events</a></li>
                <li><a href="">News And Press</a></li>
                <li><a href="">Professional Training</a></li>
                <li><a href="">Career</a></li>
              </ul> -->
              <?php 
      wp_nav_menu(
        array(
            'theme_location' => 'footer_menu',
           
            
        )
        );
      ?>
            </div>
          </div>
        </div>
        <div class="col-md-3 mt-4">
          <div class="footer-col">
            <div class="footer-heading">
              <h1>Contact us</h1>
              <p>Swoniga Technology</p>
              <p>Itahari, Sunsari, Nepal</p>
              <p>+977 98070253698</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mt-4">
          <div class="footer-col">
            <div class="footer-heading">
              <h1>Facebook</h1>
              <iframe
                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fswonigatechnology&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=147760802714312"
                width="100%" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                allowfullscreen="true"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
          </div>
        </div>
      </div>
      </div>

      </div> <!-- footer bg -->
      <!-- Bottom footer -->

      <div class="container">
      <div class="bottom-footer">
        <div class="footer-logo">
        <?php the_custom_logo();?>      
          </div>
        <div class="footer-copyright">
          <p class="mt-3">&copy;2023 Swoniga Technology. All Rights Reserved </p>
        </div>
        <div class="social-links">
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-discord"></i>
        </div>
      </div>
      
    </div>
  </footer>
  <?php wp_footer();?>

</body>

</html>