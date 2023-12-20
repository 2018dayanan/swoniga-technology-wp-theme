<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php bloginfo('name');?> <?php wp_title(); ?> <?php if(is_front_page()){ echo " | "; bloginfo('description');} ?> </title>

  
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/font-awesome/css/all.min.css">
<?php wp_head() ?>

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top">
      <div class="container">
      
        
          <?php the_custom_logo();?>
    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
          <i class="fa-solid fa-bars-staggered"></i>

        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
          <!-- <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Dropdown link
              </a>
              <div class="dropdown-menu">
                <ul>
                  <li><a class="dropdown-item" href="#">Premium Plan</a></li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Traning</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Price</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Softwares</a>
                  </li>

                </ul>
                <ul>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Traning</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Price</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Softwares</a>
                  </li>

                </ul>
                <ul>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Traning</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Price</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Softwares</a>
                  </li>
                </ul>

              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Traning</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Price</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>


          </ul> -->



          <?php 
      wp_nav_menu(
        array(
            'theme_location' => 'top-menu',
            'menu_id' => 'main-menu',
            'depth'         => 1,
            'fallback_cb'   => false,
            'container' => 'ul',
            'menu_class' => 'navbar-nav ms-auto',
            'add_a_class' => 'nav-link active',
            'mneu_class_ul'
        )
        );
      ?>
        </div>
      </div>
    </nav>
  </header>
<!-- End of Header -->

