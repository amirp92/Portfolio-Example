<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Portfolio</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

      $('form').submit(function (event) {
        event.preventDefault();
        var name = $("#mail-name").val();
        var email = $("#mail-email").val();
        var message = $("#mail-message").val();
        var submit = $("#mail-submit").val();
        $(".form-message").load("mail.php", {
          name: name,
          email: email,
          message: message,
          submit: submit
        });
      });
    });



    function select_offer_1() {
      $("#mail-message").val("Hey Amir I would like one landing page, maybe like...");
    }
    function select_offer_2() {
      $("#mail-message").val("Hey Amir, could you make me 3-page Website, something like...");
    }
    function select_offer_3() {
      $("#mail-message").val("Hey Amir can you make 5-page Website for me. I tought about making...");
    }

    </script>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script type="text/javascript" src="js/main.js"></script>
  </head>
  <body>

    <div class="wrapper">
        <header>
          <nav>
            <div class="menu-icon">
              <i class="fa fa-bars fa-2x"></i>
            </div>
            <div class="logo">
              Amir Pasic
            </div>
            <div class="menu">
              <ul>
                <li><a href="#about">Portfolio</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#form">Contact</a></li>
              </ul>
            </div>
          </nav>
          <div class="content-header">
            <h1>It is in your moments of decision that your destiny is shaped</h1>
            <h2>Turn your <span>vision</span> into <span>reality</span></h2>
            <a href="#services"><i class="fa fa-angle-down fa-2x"></i></a>
          </div>
        </header>

      <section id="about">
        <div class="about-image" data-aos="fade-up">
          <img src="images/portret.jpg" alt="portret">
        </div><br>

        <div class="about-content" data-aos="fade-left" data-aos-delay="100">
          <h2>Hey, that's me!</h2>
          <span>______________</span>
          <p>I enjoy spending my time doing something that I love, while turning visions into reality, and at the same time making people happy :)</p>
          <br>
          <p>I am aspiring, young Web Developer, highly motivated and passionate. I mostly do my work with pure HTML, CSS and Javascript, I use frameworks occasionaly, when needed. I am also good at PHP which i implement in my pages regulary.
             Feel free to share all your toughts with me, I will be more than glad to listen :)</p>
        </div>
      </section>

      <section id="services">
        <div class="offer offer-1 chosen" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700" data-aos-offset="200">

          <h3>Landing Page</h3>
          <span>______________</span>
          <p>I will create Professional, Classy, Beautiful, simple landing page for your product, attractive and reponsive aswell.</p>
          <p>Designed by latest trends and standards, with guaranteed 100% Satisfaction.</p>
          <button onclick="select_offer_1()" id="button-1" type="button" name="button">BUY</button><h2>40$</h2>
        </div>
        <div class="offer offer-2" data-aos="fade-down"  data-aos-delay="100" data-aos-duration="700" data-aos-offset="200">

          <h3>3 Page Website</h3>
          <span>______________</span>
          <p>I will create Professional, simple website that contains 3 pages for your business or passion, the website will be responsive aswell!</p>
          <p>Designed by latest trends and standards, with guaranteed 100% Satisfaction.</p>
          <button onclick="select_offer_2()" type="button" name="button">BUY</button><h2>50$</h2>
        </div>
        <div class="offer offer-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700" data-aos-offset="200">

          <h3>5 Page Website</h3>
          <span>______________</span>
          <p>I will create Professional, and very attractive website which will contain 5 pages for your business or passion. Website responsiveness is included, ofcourse :)</p>
          <p class="offer-bonus">+10$ for additional page</p>
          <button onclick="select_offer_3()" type="button" name="button">BUY</button><h2>65$</h2>
        </div>
      </section>

      <section id="form">
        <h1 data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">Contact me</h1>
        <div class="form-content" >
          <form action="mail.php" method="POST" data-aos="zoom-in-up" data-aos-duration="1000">
            <input type="text" name="name" id="mail-name" placeholder="Your Name">
            <br>
            <input type="text" id="mail-email" name="email" placeholder="somebody@something.somewhat">
            <br>
            <label for="form-message">Feel free to leave me a message: </label>
            <textarea name="message" id="mail-message" rows="8" cols="80"></textarea>

            <button type="submit" name="submit" id="mail-submit">Send Info</button>
            <p class="form-message"></p>
          </form>
        </div>
      </section>

      <footer>
        <div class="follow-links" data-aos="fade-left" data-aos-offset="0" data-aos-duration="1000">
          Follow me : <i class="fa fa-facebook fa-lg"></i><i class="fa fa-twitter fa-lg"></i>
        </div>
        <div class="copyright" data-aos="fade-right" data-aos-offset="0" data-aos-duration="1000">
          &copy;copyright Amir Pasic 2018. All Rights Reserved.
        </div>
      </footer>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-localScroll/2.0.0/jquery.localScroll.min.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
      AOS.init();

      $(document).ready(function () {
        $(".menu-icon").on("click", function() {
          $("nav ul").toggleClass("showing");
        });

        // Scrolling effect

        $(window).on("scroll",function() {
          if ($(window).scrollTop()) {
            $('nav').addClass('black');
          }
          else {
            $('nav').removeClass('black');
          }
        });
      });

        // Smooth scrolling

        $("nav").localScroll();
        $(".content-header").localScroll();

    </script>
  </body>
</html>
