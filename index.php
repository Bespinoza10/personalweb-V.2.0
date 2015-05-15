<html>
  <head>
    <title>Brandon Espinoza | Front End Developer</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="bower_components/foundation/css/foundation.css">
    <link rel="stylesheet" href="bower_components/slick.js/slick/slick.css">
    <link rel="stylesheet" href="bower_components/slick.js/slick/slick-theme.css">
  </head>
  <body>

    <!-----NAV BAR------>
    <header>
      <div class="navbar">
        <ul class="nav">
          <li class="item">
            <a href="#">Home</a>
          </li>

          <li class="item">
            <a class="links" href="#about">About Me</a>
          </li>
          <li class="item">
            <a href="#contact" class="contact">Contact</a>
          </li>
        </ul>

        <div class="logo">
          <a href="#"><h1 class="brandN">Brandon Espinoza</h1></a>
        </div>
      </div>
    </header>

<!--     SLIDER -->
    <div class="large-12 columns sliderMain"></div>
<!--     ABOUT SECTION -->
    <div id="about" class="large-12 columns">
      <div class="large-4 large-centered columns">
        <h2 class="name">Brandon Espinoza </h2>
      </div>
      <div class="large-4 large-centered columns">
        <h4 class="name2">Web Designer/Developer, Photographer, Graphic Designer </h4>
      </div>

      <div class="large-2 large-centered columns"><hr class="hrs"></div>

      <div class="large-6 columns">
        <div class="large-2 large-offset-1 columns">
          <h4 class="bioHs">Profile:</h4>
        </div>
        <div class="large-7 columns">
          <h4 class="bioHs1">Web Designer/Developer, Photographer, Graphic Designer</h4>
        </div>
        <div class="large-2 large-offset-1 columns">
          <h4 class="bioHs">Skills in:</h4>
        </div>
            <!---PROGRESS BARS--->
        <div class="large-7 columns">
          <div class="progress large-12 secondary progBar round">
            <span class="meter progBar1"><span class="large-1 large-offset-1 columns bioHs2">HTML</span><span class="large-1 large-offset-9 columns bioHs2">90%</span></span>
          </div>
          <div class="progress large-12 secondary progBar round">
            <span class="meter progBar1"><span class="large-1 large-offset-1 columns bioHs2">CSS</span><span class="large-1 large-offset-9 columns bioHs2">90%</span></span>
          </div>
          <div class="progress large-12 secondary progBar round">
            <span class="meter progBar3"><span class="large-1 large-offset-1 columns bioHs2">JavaScript</span><span class="large-1 large-offset-9 bioHs2 columns">80%</span></span>
          </div>
          <div class="progress large-12 secondary progBar round">
            <span class="meter progBar3"><span class="large-1 large-offset-1 columns bioHs2">Photoshop</span><span class="large-1 large-offset-9 bioHs2 columns">80%</span></span>
          </div>
          <div class="progress large-12 secondary progBar round">
            <span class="meter progBar3"><span class="large-5 large-offset-1 columns bioHs2">Angular JS</span><span class="large-1 large-offset-5 bioHs2 columns">80%</span></span>
          </div>
          <div class="progress large-12 secondary progBar round">
            <span class="meter progBar3"><span class="large-1 large-offset-1 columns bioHs2">Firebase</span><span class="large-1 large-offset-9 bioHs2 columns">80%</span></span>
          </div>

          <div class="progress large-12 secondary progBar round">
            <span class="meter progBar1"><span class="large-6 large-offset-1 columns bioHs2">Microsoft Word</span><span class="large-1 large-offset-4 columns bioHs2">90%</span></span>
          </div>
        </div>
      </div>

      <div class="large-1 columns">
        <img src="img/me.JPG">
      </div>
      <div class="large-4 large-offset-1 columns">
        <h3 class="ps">I am assisting to the Nashville Software School. I enjoy coding and learning new languages. I also do some side jobs like making websites and photography, please contact me for serious inquiries only. Down below are some of my skills and some of my work, enjoy!</h3>
      </div>
    </div>

<!-- What I Offer -->

    <div class="large-12 columns">
      <div class="large-2 large-centered columns whtIoffer">
        <h4 class="name3">What I Offer </h4>
        <div class="large-4 columns"><hr class="hrs2"></div>
      </div>
    </div>

    <div class="large-12 columns">
      <div class="large-3 offset large-offset-1 columns">
        <img class="sqrs" src="img/responsive1.png">
      </div>
      <div class="large-3 offset columns">
        <img class="sqrs" src="img/clean-code.png">
      </div>
      <div class="large-3 offset columns">
        <img class="sqrs" src="img/design.png">
      </div>
    </div>

<!--     CONTACT FORM -->




	 	 		<?php

				 include('includes/mail_script.php');

				 ?>

    <div id="contact" class="large-12 columns contactForm">
    	<div class="large-10 large-centered columns forma">


    		<?php
             echo"<h6 style='color:red;'>".$ERmsg."</h6>";
            ?>


        <div class="section-container tabs large-10 large-centered columns" data-section>
          <section class="section">
            <div class="large-3 large-centered columns"><h2 class="contactH1"><a href="#panel1" style="color:#ff4a69;">Contact Me</a></h2></div>
            <div class="content" data-slug="panel1">




              <form action="" method="post">
                <div class="row collapse">


                  <div class="large-7 large-centered columns">
                    <input class="yourName" type="text" id="yourName" name="Name" placeholder="Your Name" value="<?php get_data("Name"); ?>" style="background: none;" >


                  </div>

                </div>
                <!-- START : EMAIL SECTION -->
                <div class="row collapse">



                  <div class="large-7 large-centered columns">
                    <input type="text" id="yourEmail" name="Email" placeholder="Your Email (e.g. jane@smithco.com)" value="<?php get_data("Email"); ?>" style="background: none;">
                  </div>

                </div>


                <!-- START : PHONE SECTION -->
                <div class="row collapse">



                  <div class="large-7 large-centered columns">
                    <input type="text" id="yourPhone" name="Phone" placeholder="Phone Number" value="<?php get_data("Phone"); ?>" style="background: none;">
                  </div>
                </div>

                <!-- START : COMMENTS SECTION -->

                <div class="large-7 large-centered columns"><textarea rows="4" name="Comments" placeholder="Your Message" style="background: none;"><?php get_data("Comments"); ?></textarea>
                <button style="background: #ff4a69;" type="submit" class="radius button">Submit</button></div>

              </form>


            </div>
          </section>




      </div>
  	</div>
  </div>



  </body>
  <script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>
  <script type="text/javascript" src="bower_components/foundation/js/foundation.js"></script>
  <script type="text/javascript" src="bower_components/slick.js/slick/slick.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script>
    $(document).foundation();
  </script>
  <script>
    $('.fade').slick({
        autoplay: true,
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
      });
  </script>
</html>