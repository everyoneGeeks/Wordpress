<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <section class="box-chat" id="boxChat">
      <div class="chat-title">
        <h4>Talk to us now</h4>
      </div>
    </section> 
	<?php wp_head(); ?>
  </head>

<body >
<main>
      <!-- Start Header section-->
      <section class="header">
        <div class="top-bar hidden-xs" id="top-bar">
          <div class="container">
            <div class="row">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("header") ) : ?>
<?php endif;?>
            </div>
          </div>
        </div>
        <div class="navBar" id="navBar">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="logo"> 
                  <h4>Clicktopass</h4>
                </div>
              </div>
              <div class="col-sm-9">
                <div class="links hidden-xs">   
                      <ul class="list-inline list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="services.html">Our Services</a></li>
                        <li><a href="ourWork.html">Our Work</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                      </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Header Section-->
      <!-- Start Left Side Menu The Menu Show Only In Small Screen-->
      <div class="btn-menu hidden-sm hidden-md hidden-lg" id="btn-menu">
        <div class="bar-1"></div>
        <div class="bar-2"></div>
        <div class="bar-3"></div>
      </div>
      <div class="left-menu" id="left-menu">
        <div class="container">
              <ul class="list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="services.html">Our Services</a></li>
                <li><a href="ourWork.html">Our Work</a></li>
                <li><a href="contact.html">Contact Us</a></li>
              </ul>
        </div>
      </div>
	  <!-- End Left Side Menu The Menu Show Only In Small Screen-->
	  
