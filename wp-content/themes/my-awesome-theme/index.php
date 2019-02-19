<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Twenty_Nineteen
 */

get_header();
?>
      <!-- Start Slider Section-->
      <section class="slider">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-6">
              <div class="slider-txt">
                <h1 data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">Is It <span>Web Design</span><br>You’re Looking For ?</h1>
                <p data-aos="fade-up" data-aos-once="true" data-aos-duration="2000">Whether you need a new logo, website, video, marketing campaign, or eBook created for your business, the key to making the project a success starts with having well-thought-out creative brief.</p>
                <button class="main-btn" data-aos="fade-up" data-aos-once="true" data-aos-duration="2500">Ask the Offer!</button>
                <button data-aos="fade-up" data-aos-once="true" data-aos-duration="3000">Coll Us!</button>
              </div>
            </div>
            <div class="col-xs-12 col-md-6 hidden-xs hidden-sm">
              <div class="slider-img" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"><img src="<?php echo get_template_directory_uri().'/images/slider-1.png'?>"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Slider Section-->

      <!-- Start Features Section-->
	  <section class="features">
            <div class="container">
                  <div class="title-section">
                    <h2>What Drives Your Website Great Results</h2>
                    <p>A set of services to promote websites from market professionals with more than 15 years of experience. Quisque in lorem quis velit imperdiettique in nec enim.</p>
                  </div>
              <div class="features-info">
                <div class="row">
                  <div class="col-xs-12 col-md-3">
                    <div class="feat" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"><img src="<?php echo get_template_directory_uri().'/images/features/feat-1.png'?>" alt="feat-1">
                      <h3>SEO Performance</h3>
                      <p>Maecenas scelerisque commodo turpis, quis eleifend.</p>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-3">
                    <div class="feat" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500"><img src="<?php echo get_template_directory_uri().'/images/features/feat-2.png'?>" alt="feat-2">
                      <h3>Best Solutions</h3>
                      <p>Maecenas scelerisque commodo turpis, quis eleifend.</p>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-3">
                    <div class="feat" data-aos="fade-up" data-aos-once="true" data-aos-duration="2000"><img src="<?php echo get_template_directory_uri().'/images/features/feat-3.png'?>" alt="feat-3">
                      <h3>Speed Optimization</h3>
                      <p>Maecenas scelerisque commodo turpis, quis eleifend.</p>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-3">
                    <div class="feat" data-aos="fade-up" data-aos-once="true" data-aos-duration="2500"><img src="<?php echo get_template_directory_uri().'/images/features/feat-4.png'?>" alt="feat-4">
                      <h3>Network Protection</h3>
                      <p>Maecenas scelerisque commodo turpis, quis eleifend.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      <!-- End Features Section-->
      <!-- Start About Us Section-->
          <section class="about-us">
            <div class="container-fluid"> 
              <div class="row">

                <div class="col-xs-12 col-md-6">
                  <div class="about-txt" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
				  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home right sidebar ") ) : ?>
<?php endif;?>

                    <button class="main-btn">Learn More</button>
                  </div>
                </div>
                <div class="col-xs-12 col-md-6 hidden-xs hidden-sm">
                  <div class="about-img" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500"><img src="<?php echo get_template_directory_uri().'/images/about/about-us.png'?>" alt="About Us"></div>
				</div>
				
			  </div>
            </div>
          </section>
      <!-- End About Us Section-->
      <!-- Start Services Section-->
          <section class="services">
            <div class="container">
                  <div class="title-section">
                    <h2>We offer premium services at reasonable prices</h2>
                    <p>For startups and growing businesses, an online specialist can develop a digital marketing plan to help you grow and retain a happy client base.</p>
                  </div>
              <div class="row"> 
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="ser" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
                    <div class="ser-img"><img src="<?php echo get_template_directory_uri().'/images/services/web-design.svg'?>" alt=""></div>
                    <div class="ser-txt">
                      <h4>Web Design</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="ser" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
                    <div class="ser-img"><img src="<?php echo get_template_directory_uri().'/images/services/graphic-design.svg'?>" alt=""></div>
                    <div class="ser-txt">
                      <h4>Graphic Design</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="ser" data-aos="fade-up" data-aos-once="true" data-aos-duration="2000">
                    <div class="ser-img"><img src="<?php echo get_template_directory_uri().'/images/services/programming.svg'?>" alt=""></div>
                    <div class="ser-txt">
                      <h4>Programming</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="ser" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
                    <div class="ser-img"><img src="<?php echo get_template_directory_uri().'/images/services/mobile-app.svg'?>" alt=""></div>
                    <div class="ser-txt">
                      <h4>Mobile Applications </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="ser" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
                    <div class="ser-img"><img src="<?php echo get_template_directory_uri().'/images/services/hosting-icon.svg'?>" alt=""></div>
                    <div class="ser-txt">
                      <h4>Hosting Services</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="ser" data-aos="fade-up" data-aos-once="true" data-aos-duration="2000">
                    <div class="ser-img"><img src="<?php echo get_template_directory_uri().'/images/services/advertising.svg'?>" alt=""></div>
                    <div class="ser-txt">
                      <h4>Advertising Services</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.  </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      <!--End Services Section-->
      <!-- Start Get Started section-->
          <section class="get-started">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-md-8">
                  <div class="get-txt">
                    <h2>Are you ready<br>to start an enjoyable experience ?</h2>
                    <button>Contact Us</button>
                    <button>Our Work</button>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="get-img hidden-xs hidden-sm"><img src="<?php echo get_template_directory_uri().'/images/rocket.svg'?>"></div>
                </div>
              </div>
            </div>
          </section>
      <!-- End Get Started Section-->
      <!-- Start Get Started section-->
          <section class="hosting">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <div class="hosting-txt" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
                    <h2>Best web hosting service for your website.</h2>
                    <p>Get the best speed for your website. Don’t lose anymore clients for the slowest speed of your hosting service that you need Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua ut enim adminim veni am for humanity for savings anything. dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididunt.</p>
                    <button class="main-btn">More Details</button>
                  </div>
                </div>
                <div class="col-xs-12 col-md-6"> 
                  <div class="hosting-img" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500"><img src="<?php echo get_template_directory_uri().'/images/hosting.svg'?>"></div>
                </div>
              </div>
            </div>
          </section>
      <!-- End Get Started Section-->
      <!-- Start Our Work Section-->
          <section class="our-work">
            <div class="container">
                  <div class="title-section">
                    <h2>Our Creative Work</h2>
                    <p>Don’t Miss Your Chance to Discover &amp; Enjoy Our incredible Projects</p>
                  </div>

              <div class="row">

              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("photo") ) : ?>
<?php endif;?>
            </div>
          </section>
      <!-- End Our Work Section-->
      <!-- Start Our Pricing Section-->
          <section class="pricing">
            <div class="container">
                  <div class="title-section">
                    <h2>Choose Your Best Plan</h2>
                    <p>We enjoy adapting our strategies to offer every client the best solutions that are at the forefront of the industry.</p>
                  </div>
              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <div class="pricing-box" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
                    <div class="h-pricing">Basic</div>
                    <div class="box-title"><img src="images/paper-plane.svg" alt="">
                      <h4><span>$</span> 59.<span>99</span></h4><span class="s-span">Per Month</span>
                      <p>best for personal use</p>
                    </div>
                    <div class="detils-box">
                      <div class="s-det">100 GB Disk Space</div>
                      <div>1 Sub-Domain</div>
                      <div class="s-det">5 E-Mail Accounts</div>
                      <div>24/7 Support</div>
                      <div class="s-det">Control Panel</div>
                      <button class="b-btn">Get Started Now</button>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-md-4">
                  <div class="pricing-box b-box" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
                    <div class="h-pricing h-plan">Standard</div>
                    <div class="box-title"><img src="images/air-freight.svg" alt="">
                      <h4><span>$</span> 69.<span>99</span></h4><span class="s-span">Per Month</span>
                      <p>best for personal use</p>
                    </div>
                    <div class="detils-box">
                      <div class="s-det">100 GB Disk Space</div>
                      <div>1 Sub-Domain</div>
                      <div class="s-det">5 E-Mail Accounts</div>
                      <div>24/7 Support</div>
                      <div class="s-det">Control Panel</div>
                      <button class="b-btn">Get Started Now</button>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-md-4">
                  <div class="pricing-box" data-aos="fade-up" data-aos-once="true" data-aos-duration="2000">
                    <div class="h-pricing">Unlimited</div>
                    <div class="box-title"><img src="images/rocket.svg" alt="">
                      <h4><span>$</span> 79.<span>99</span></h4><span class="s-span">Per Month</span>
                      <p>best for personal use</p>
                    </div>
                    <div class="detils-box">
                      <div class="s-det">100 GB Disk Space</div>
                      <div>1 Sub-Domain</div>
                      <div class="s-det">5 E-Mail Accounts</div>
                      <div>24/7 Support</div>
                      <div class="s-det">Control Panel</div>
                      <button class="b-btn">Get Started Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      <!-- End Our Pricing Section-->
      <!-- Start Our Team Section-->
          <section class="our-team">
            <div class="container">
                  <div class="title-section">
                    <h2>Our Awesome Team</h2>
                    <p>Our success is a result of teamwork and building upon our technical expertise and creative style providing a full-service solution to our clients.</p>
                  </div>
              <div class="row">
				  <?php 
				 $arg = array(
					'post_type' => 'xgenious_teams',
					'posts_per_page'=> 4,
				);
			
		
			$get_post_data = new WP_Query($arg);
			
			while($get_post_data->have_posts()): $get_post_data->the_post();

			$post_id = get_the_ID();

			$position = get_post_meta( $post_id, 'position', true ); 
			if (!empty($position)) {
				$position = get_post_meta( $post_id, 'position', true ); 
			}else{
				$position = ''; 
			}
			$facebook_link = get_post_meta( $post_id, 'facebook_link', true ); 
			if (!empty($facebook_link)) {
				$facebook_link = get_post_meta( $post_id, 'facebook_link', true ); 
			}else{
				$facebook_link = '#'; 
			}
		
			$twitter_link = get_post_meta( $post_id, 'twitter_link', true ); 
			if (!empty($twitter_link)) {
				$twitter_link = get_post_meta( $post_id, 'twitter_link', true ); 
			}else{
				$twitter_link = '#'; 
			}
		
			$google_plus_link = get_post_meta( $post_id, 'google_plus_link', true ); 
			if (!empty($google_plus_link)) {
				$google_plus_link = get_post_meta( $post_id, 'google_plus_link', true ); 
			}else{
				$google_plus_link = '#'; 
			}
			$linkedin_link = get_post_meta( $post_id, 'linkedin_link', true ); 
			if (!empty($linkedin_link)) {
				$linkedin_link = get_post_meta( $post_id, 'linkedin_link', true ); 
			}else{
				$linkedin_link = '#'; 
			}
	

		echo	$xgenious_team_slider_markup_5 = '
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="team-box" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
			  <div class="team-img"><img src="'.esc_url(get_the_post_thumbnail_url( $post_id,'xteam_thumb_5' )).'" alt="Our Team"></div>
			  <div class="team-txt"><h3>'.esc_html(get_the_title($post_id)).'</h3>
				<span>'.esc_html( $position ).'</span>
					<ul class="list-inline list-unstyled">
					<a href="'.esc_url( $facebook_link ).'"><i class="fa fa-facebook"></i></a>
					<a href="'.esc_url( $twitter_link ).'"><i class="fa fa-twitter"></i></a>
					<a href="'.esc_url( $google_plus_link ).'"><i class="fa fa-google-plus"></i></a>
					<a href="'.esc_url( $linkedin_link ).'"><i class="fa fa-linkedin"></i></a>
					</ul>
			  </div>
			</div>
		  </div>';
		endwhile;

				  ?>


            </div>
          </section>
      <!-- End Our Team Section-->
      <!-- Start Testimonials Section-->
          <section class="testimonials">
            <div class="container">
                  <div class="title-section">
                    <h2>What Clients Say About Us</h2>
                    <p>Seofy`s clients and their results are the best proof that our methodologies work. But we’ve also received numerous awards and praise from the media and our peers.</p>
                  </div>
              <div class="row"> 
                <div class="col-xs-12 col-md-4">
                  <div class="testi-box" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
                    <div class="box-title">
                      <div class="box-img"><img src="images/team/team_4.jpg" alt=""></div>
                      <div class="box-info">   
                        <h4>Osama Mohamed</h4>
                        <p>Front-end Developer</p>
                            <ul class="list-inline list-unstyled">
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                      </div>
                    </div>
                    <div class="box-txt">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua ut enim adminim veni am for humanity for savings anything. dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor </p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-md-4">
                  <div class="testi-box" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
                    <div class="box-title">
                      <div class="box-img"><img src="images/team/team_4.jpg" alt=""></div>
                      <div class="box-info">   
                        <h4>Osama Mohamed</h4>
                        <p>Front-end Developer</p>
                            <ul class="list-inline list-unstyled">
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                      </div>
                    </div>
                    <div class="box-txt">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua ut enim adminim veni am for humanity for savings anything. dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-md-4">
                  <div class="testi-box" data-aos="fade-up" data-aos-once="true" data-aos-duration="2000">
                    <div class="box-title">
                      <div class="box-img"><img src="images/team/team_4.jpg" alt=""></div>
                      <div class="box-info">   
                        <h4>Osama Mohamed</h4>
                        <p>Front-end Developer</p>
                            <ul class="list-inline list-unstyled">
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                      </div>
                    </div>
                    <div class="box-txt">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua ut enim adminim veni am for humanity for savings anything. dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      <!-- End Testimonials Section-->
      <!-- Start Cslients Section-->
          <section class="clients">
            <div class="container">
              <div class="row">
                <div class="clients-Slider hidden-xs">
                  <div class="col-md-2"><img src="images/clients/icon_1.png" alt=""></div>
                  <div class="col-md-2"><img src="images/clients/icon_2.png" alt=""></div>
                  <div class="col-md-2"><img src="images/clients/icon_3.png" alt=""></div>
                  <div class="col-md-2"><img src="images/clients/icon_4.png" alt=""></div>
                  <div class="col-md-2"><img src="images/clients/icon_5.png" alt=""></div>
                  <div class="col-md-2"><img src="images/clients/icon_6.png" alt=""></div>
                </div>
              </div>
            </div>
          </section>
      <!-- End Cslients Section-->
      <!-- Start Button Scroll To Top-->
          <div class="scroll" id="scrollBtn"><i class="fa fa-angle-up fa-2x"></i></div>
      <!-- End Button Scroll To Top-->
      <!-- Start Chat Button-->
          <div class="chat-btn" id="chatBtn"><i class="fa fa-comments"></i></div>
      <!-- End Chat Button-->
      <!-- Start Contact Us Section-->
          <section class="contact-us">
            <div class="overlay-bac"></div>
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <div class="contact-title">
                    <h2>Get In Touch</h2>
                    <p>Seofy is a USA search engine marketing agency, that deliver digital marketing strategies to companies worldwide. Contact us today to find out how we can help you.</p>
                  </div>
                  <div class="row"> 
                    <div class="contact-info">
                      <div class="col-xs-12">
                        <div class="info"><img src="images/email.svg" alt="">info@clicktopass.com</div>
                        <div class="info"><img src="images/pin.svg" alt="">1010 Grand Avenue New York, USA</div>
                        <div class="info"><img src="images/phone-call.svg" alt="">888-123-4567 / 0123456789</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-md-6">
                  <div class="contact-form">
                    <div class="form-box">
                      <form action="" method="">
                        <input type="text" placeholder="Your Name">
                        <input type="text" placeholder="Your E-mail">
                        <textarea placeholder="Your Message"></textarea>
                        <button class="main-btn">Send Your Message</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      <!-- End Contact Us Section-->
      <!-- Statr Footer Section-->
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-4">
              <div class="footer-txt">
                <h3>About Us</h3>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora</p>
                    <ul class="list-inline list-unstyled">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
              </div>
            </div>
            <div class="col-xs-12 col-md-2">
              <div class="footer-service">
                <h3>Services</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Web Design</a></li>
                  <li><a href="#">Graphic Design</a></li>
                  <li><a href="#">Programming</a></li>
                  <li><a href="#">Mobile Applications</a></li>
                  <li><a href="#">Hosting Services</a></li>
                  <li><a href="#">Advertising Services</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xs-12 col-md-2">
              <div class="instagram-photo">
                <h3>Instagram Photo</h3>
                <div class="row">
                  <div class="col-xs-6">
                    <div class="insta-img"><img src="<?php echo get_template_directory_uri().'/images/portfolio/image_6.jpg'?>" alt=""></div>
                  </div>
                  <div class="col-xs-6">
                    <div class="insta-img"><img src="<?php echo get_template_directory_uri().'/images/portfolio/image_7.jpg'?>" alt=""></div>
                  </div>
                  <div class="col-xs-6">
                    <div class="insta-img"><img src="<?php echo get_template_directory_uri().'/images/portfolio/image_8.jpg'?>" alt=""></div>
                  </div>
                  <div class="col-xs-6">
                    <div class="insta-img"><img src="<?php echo get_template_directory_uri().'/images/portfolio/image_10.jpg'?>" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-4">
              <div class="news-footer">
                <h3>Newsletter</h3>
                <p>Sing up to our Newsletter for the latest news and updates fresh for click2pass</p>
                <input type="text" placeholder="Insert Your E-mail">
                <button class="main-btn">Submit</button>
              </div>
            </div>
          </div>
        </div>

<?php

get_footer();
