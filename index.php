<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


  <!-- Cover -->
  <main>
    <div class="hero">
      <a href="shop.php" class="btn1">View all products
</a>
    </div>
    <!-- Main -->
    <div class="wrapper">
            <h1>Featured Collection<h1>

      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer> <div class="page__footer">

      <div class="footer__nav">
        <div class="container clearfix">

          <div class="footer__nav__col footer__nav__col__info">
            <div class="footer__nav__heading">Information</div>
            <ul class="footer__nav__list">
              <li class="footer__nav__item">
                <a href="#" class="footer__nav__link">The brand</a>
              </li>
              <li class="footer__nav__item">
                <a href="#" class="footer__nav__link">Local stores</a>
              </li>
              <li class="footer__nav__item">
                <a href="#" class="footer__nav__link">Customer service</a>
              </li>
              <li class="footer__nav__item">
                <a href="#" class="footer__nav__link">Privacy &amp; cookies</a>
              </li>
              <li class="footer__nav__item">
                <a href="#" class="footer__nav__link">Site map</a>
              </li>
            </ul>
          </div>

          <div class="footer__nav__col footer__nav__col--whybuy">
            <div class="footer__nav__heading">Why buy from us</div>
            <ul class="footer__nav__list">
              <li class="footer__nav__item">
                <a href="#" class="footer__nav__link">Shipping &amp; returns</a>
              </li>
              <li class="footer__nav__item">
                <a href="#" class="footer__nav__link">Secure shipping</a>
              </li>
              <li class="footer__nav__item">
                <a href="#" class="footer__nav__link">Testimonials</a>
              </li>
              <li class="footer__nav__item">
                <a href="#" class="footer__nav__link">Award winning</a>
              </li>
              <li class="footer__nav__item">
                <a href="#" class="footer__nav__link">Ethical trading</a>
              </li>
            </ul>
          </div>

          <div class="footer__nav__col footer__nav__col--account">
            <div class="footer__nav__heading">Your account</div>
            <ul class="footer__nav__list">
              <li class="footer__nav__item">
                <a href="#" class="footer__nav__link">Sign in</a>
              </li>
              <li class="footer__nav__item">
                <a href="#" class="footer__nav__link">Register</a>
              </li>
              <li class="footer__nav__item">
                <a href="#" class="footer__nav__link">View cart</a>
              </li>
              <li class="footer__nav__item">
                <a href="#" class="footer__nav__link">View your lookbook</a>
              </li>
              <li class="footer__nav__item">
                <a href="#" class="footer__nav__link">Track an order</a>
              </li>
              <li class="footer__nav__item">
                <a href="#" class="footer__nav__link">Update information</a>
              </li>
            </ul>
          </div>


          <div class="footer__nav__col footer__nav__col__contacts">
            <div class="footer__nav__heading">Contact details</div>
            <address class="address">
            Head Office: Amy collections.<br>
            180-182 Regent Street, Nairobi.
          </address>
            <div class="phone">
              Telephone:
              <a class="phone__number" href="tel:0123456789">+254 722 795550</a>
            </div>
            <div class="email">
              Email:
              <a href="mailto:amy.misango@gmail.com" class="email__addr">amy.misango@gmail.com</a>
            </div>
          </div>

        </div>
      </div>

      <!-- <div class="banners">
        <div class="container clearfix">

          <div class="banner-award">
            <span>Award winner</span><br> Fashion awards 2016
          </div>

          <div class="banner-social">
            <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-pinterest-circled"></i>
          </a>
          </div>

        </div>
      </div> -->

      <div class="page__footer__subline">
        <div class="container clearfix">

          <div class="copyright">
            &copy; <?php echo date("Y");?> Ecommerce Website-PHP&trade;
          </div>

          <div class="developer">
            Developed by IJAMY VINCENT
          </div>

          <div class="designby">
            Design by IJAMY VINCENT
          </div>

        </div>
      </div>
</div>
</footer>
</body>

</html>
