<?php
  // print_r($images[1]->status);exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Restaurant Template</title>

  <meta name="description" content="">
  <meta name="theme-color" content="#444444">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="<?=base_url($assets_dir).'/'?>img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url($assets_dir).'/'?>img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url($assets_dir).'/'?>img/apple-touch-icon-114x114.png">

  <link rel="stylesheet" href="<?=base_url($assets_dir).'/'?>css/styles.css">

  <style type="text/css">
    <?php
      foreach ($images as $images_value) {
        if( $images_value->status == 1 )
        {
          
          echo ".logo {
            background: url(".base_url()."/upload/".$images_value->file.") 50% 50% no-repeat;
          }";
          
        }
        if( $images_value->status == 2 )
        {
          
          echo ".banner {
            background: url(".base_url()."/upload/".$images_value->file.") 50% 50% no-repeat;
          }";
          
        }
      }
    ?>
   /* .logo {
      background: url(<?=base_url($assets_dir).'/'?>img/reviews-bg.jpg) 50% 50% no-repeat;
    }
    .about-block {
      background: url(<?=base_url($assets_dir).'/'?>img/restaurant_icons.png) 0 0 repeat;
    }*/
  </style>
</head>
<body>

<div class="banner">
  <div class="header">
    <div class="header-inner container clear">
      <a class="logo" href="#"><span class="sr">Lambda Logo</span></a>
      <input type="checkbox" id="navigation-toggle-checkbox" name="navigation-toggle-checkbox" class="navigation-toggle-checkbox sr">
      <label for="navigation-toggle-checkbox" class="navigation-toggle-label" onclick>
        <span class="navigation-toggle-label-inner">
          <span class="sr">Navigation</span>
        </span>
      </label>
      <div class="navigation">
        <ul class="navigation-menu">
          <li class="navigation-item"><a href="#about">About</a></li>
          <li class="navigation-item"><a href="#menu">Menu</a></li>
          <li class="navigation-item"><a href="#reviews">Reviews</a></li>
          <li class="navigation-item"><a href="#reservations">Reservations</a></li>
        </ul>
        <ul class="navigation-social">
          <li class="navigation-item-social"><a class="social social-twitter" href="#"><span class="sr">Twitter</span></a></li>
          <li class="navigation-item-social"><a class="social social-facebook" href="#"><span class="sr">Facebook</span></a></li>
          <li class="navigation-item-social"><a class="social social-google-plus" href="#"><span class="sr">Google Plus</span></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="banner-inner container">
    <h1 class="banner-lead">
      <span class="banner-lead-1">Amm Catering</span>
      <span class="banner-lead-2"></span>
    </h1>
    <div class="banner-buttons">
      <a href="#reservations" class="button but ton-primary">Contact Us</a>
    </div>
  </div>
</div>

<div id="about" class="content-block about-block">
  <div class="about-block-inner container">
    <div class="clear text-center">
      <div class="about-block-content col-6-l">
        <h2 class="heading">Just the right food</h2>
        <p>
          If you've been to one of our restaurants, you've seen - and tasted - what keeps our customers coming back for more. <br>
          Perfect materials and freshly baked food, delicious Lambda cakes, muffins, and gourmet coffees makes us hard to resist! <br>
          Stop in today and check us out!
        </p>
        <img class="img-fluid about-chef" src="<?=base_url($assets_dir).'/'?>img/chef.png" alt="Chef">
      </div>
      <div class="about-block-img col-6-l none-m block-l">
        <img class="img-fluid" src="<?=base_url($assets_dir).'/'?>img/dish.png" alt="Dish of food">
      </div>
    </div>
  </div>
</div>

<div id="ingredients" class="content-block ingredients-block">
  <div class="ingredients-block-inner container clear">
    <div class="feature-box text-center col-6-l right-m">
      <h2 class="heading-secondary">Fine ingredients</h2>
      <div class="feature-box-content">
        <p>
          If you've been to one of our restaurants, you've seen - and tasted - what keeps our customers coming back for more. <br>
          Perfect materials and freshly baked food, delicious Lambda cakes, muffins, and gourmet coffees makes us hard to resist! <br>
          Stop in today and check us out!
        </p>
        <div class="feature-image-group clear">
          <img class="img-fluid feature-image feature-image-1" src="<?=base_url($assets_dir).'/'?>img/01-wheat.jpg" alt="Wheat">
          <img class="img-fluid feature-image feature-image-2" src="<?=base_url($assets_dir).'/'?>img/02-spices.jpg" alt="Spices">
          <img class="img-fluid feature-image feature-image-3" src="<?=base_url($assets_dir).'/'?>img/03-bread.jpg" alt="Bread">
        </div>
      </div>
    </div>
  </div>
</div>


<div id="menu" class="content-block food-menu-block">
  <div class="food-menu-block-inner container">
    <div class="clear">
      <div class="food-menu-content">
        <h2 class="heading">Appetisers</h2>
        <ul class="food-menu-list">
          <li class="food-menu-item">
            <div class="food-menu-item-header clear">
              <h3 class="food-menu-heading">Tzatski</h3>
              <span class="food-menu-price">$3.99</span>
            </div>
            <div class="food-menu-summary">
              <p>
                Refreshing traditional cucumber and garlic in yoghurt dip.
              </p>
            </div>
          </li>
          <li class="food-menu-item">
            <div class="food-menu-item-header clear">
              <h3 class="food-menu-heading">Aubergine Salad</h3>
              <span class="food-menu-price">$5.50</span>
            </div>
            <div class="food-menu-summary">
              <p>
                Pureed eggplant garlic, green pepper and tomato dip.
              </p>
            </div>
          </li>
          <li class="food-menu-item">
            <div class="food-menu-item-header clear">
              <h3 class="food-menu-heading">Aubergine Salad</h3>
              <span class="food-menu-price">$5.25</span>
            </div>
            <div class="food-menu-summary">
              <p>
                Pureed eggplant garlic, green pepper and tomato dip.
              </p>
            </div>
          </li>
        </ul>

        <h2 class="heading">Salads</h2>
        <ul class="food-menu-list">
          <li class="food-menu-item">
            <div class="food-menu-item-header clear">
              <h3 class="food-menu-heading">Olive Special</h3>
              <span class="food-menu-price">$5.99</span>
            </div>
            <div class="food-menu-summary">
              <p>
                Refreshing traditional cucumber and garlic in yoghurt dip.
              </p>
            </div>
          </li>
          <li class="food-menu-item food-menu-item-special">
            <div class="food-menu-item-header clear">
              <h3 class="food-menu-heading">Greek Salad</h3>
              <span class="food-menu-price">$5.50</span>
            </div>
            <div class="food-menu-summary">
              <p>
                Pureed eggplant garlic, green pepper and tomato dip.
              </p>
            </div>
          </li>
          <li class="food-menu-item">
            <div class="food-menu-item-header clear">
              <h3 class="food-menu-heading">Gusto Salad</h3>
              <span class="food-menu-price">$5.25</span>
            </div>
            <div class="food-menu-summary">
              <p>
                Pureed eggplant garlic, green pepper and tomato dip.
              </p>
            </div>
          </li>
        </ul>
      </div>
      <div class="food-menu-content">
        <h2 class="heading">Starters</h2>
        <ul class="food-menu-list">
          <li class="food-menu-item">
            <div class="food-menu-item-header clear">
              <h3 class="food-menu-heading">Haloumi</h3>
              <span class="food-menu-price">$3.99</span>
            </div>
            <div class="food-menu-summary">
              <p>
                Refreshing traditional cucumber and garlic in yoghurt dip.
              </p>
            </div>
          </li>
          <li class="food-menu-item">
            <div class="food-menu-item-header clear">
              <h3 class="food-menu-heading">Spinach Pie</h3>
              <span class="food-menu-price">$5.50</span>
            </div>
            <div class="food-menu-summary">
              <p>
                Pureed eggplant garlic, green pepper and tomato dip.
              </p>
            </div>
          </li>
        </ul>

        <h2 class="heading">Main Dishes</h2>
        <ul class="food-menu-list">
          <li class="food-menu-item">
            <div class="food-menu-item-header clear">
              <h3 class="food-menu-heading">Cornish Mackerel</h3>
              <span class="food-menu-price">$5.99</span>
            </div>
            <div class="food-menu-summary">
              <p>
                Refreshing traditional cucumber and garlic in yoghurt dip.
              </p>
            </div>
          </li>
          <li class="food-menu-item food-menu-item-special">
            <div class="food-menu-item-header clear">
              <h3 class="food-menu-heading">Roast Lamb</h3>
              <span class="food-menu-price">$5.50</span>
            </div>
            <div class="food-menu-summary">
              <p>
                Pureed eggplant garlic, green pepper and tomato dip.
              </p>
            </div>
          </li>
          <li class="food-menu-item">
            <div class="food-menu-item-header clear">
              <h3 class="food-menu-heading">Fried Chicken</h3>
              <span class="food-menu-price">$5.25</span>
            </div>
            <div class="food-menu-summary">
              <p>
                Pureed eggplant garlic, green pepper and tomato dip.
              </p>
            </div>
          </li>
          <li class="food-menu-item">
            <div class="food-menu-item-header clear">
              <h3 class="food-menu-heading">Pastitsio</h3>
              <span class="food-menu-price">$5.99</span>
            </div>
            <div class="food-menu-summary">
              <p>
                Pureed eggplant garlic, green pepper and tomato dip.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div id="reviews" class="content-block reviews-block">
  <div class="reviews-block-inner container">
    <div class="feature-box text-center col-12-m col-8-l no-float center">
      <h2 class="heading-secondary">Guest Reviews</h2>
      <blockquote class="pad-30">
        <p>
          If you've been to one of our restaurants, you've seen - and tasted - what keeps our customers coming back for more.
          Perfect materials and freshly baked food, delicious Lambda cakes, muffins, and gourmet coffees makes us hard to resist!
          Stop in today and check us out!
        </p>
        <cite>
          food inc, New York
        </cite>
      </blockquote>
    </div>
  </div>
</div>



<div id="reservations" class="content-block reservations-block">
  <div class="reservations-block-inner container">
    <div class="clear">
      <div class="reservation-block-img col-3-l none block-l">
        <img class="img-fluid " src="<?=base_url($assets_dir).'/'?>img/food-01.jpg" alt="Food">
      </div>
      <div class="reservation-block-img col-6-m col-3-l none block-m">
        <img class="img-fluid " src="<?=base_url($assets_dir).'/'?>img/food-02.jpg" alt="Food">
      </div>
      <div class="reservation-block-form col-6-m">
        <div class="text-center">
          <h2 class="heading">Just the right food</h2>
          <p>
            If you've been to one of our restaurants, you've seen - and tasted - what keeps our customers coming back for more. Perfect materials and freshly baked food
          </p>
        </div>
        <form class="reservations-form" action="" method="POST">
          <fieldset class="reservations-form-wrap">
            <legend class="sr">Contact Us</legend>
            <div class="clear">
              <div class="col-6-m pad-top-10 pad-bottom-10">
                <label class="block strong" for="name">Nama</label>
                <input name="full-name" class="field" id="name" type="text" placeholder="Nama *">
              </div>
              <div class="col-6-m pad-top-10 pad-bottom-10">
                <label class="block strong" for="email">Email</label>
                <input name="email" class="field" id="email" type="email" placeholder="Email *">
              </div>
            </div>
            <div class="clear">
              <div class="col-6-m pad-top-10 pad-bottom-10">
                <label class="block strong" for="date">Subjek</label>
                <input name="date-of-booking" class="field" id="date" type="text" placeholder="Subjek *">
              </div>
              <div class="col-6-m pad-top-10 pad-bottom-10">
                <label class="block strong" for="date">Pesan</label>
                <input name="date-of-booking" class="field" id="date" type="text" placeholder="Pesan *">
              </div>
            </div>

            <style type="text/css">
              #g-recaptcha > div {
                margin: 0 auto;
              }
              #button-contact {
                display: none
              }
            </style>
            <script type="text/javascript">
              function myCallback() {
                $('#g-recaptcha').fadeOut();
                $('#button-contact').show();
              }
              var onloadCallback = function() {
                grecaptcha.render('g-recaptcha', {
                  'sitekey' : '6LeKDRkUAAAAAEsRh1xqsS-IsG8zaTlkxwGZnIgw',
                  'callback': myCallback,
                });
              };
            </script>
            <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
            <div id="g-recaptcha"></div>
            <div class="text-center" id="button-contact">
              <input type="submit" class="button reservations-submit" value="Book now!">
            </div>

          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>



<div class="footer">
  <div class="footer-inner container">
    <div class="clear">
      <div class="footer-column col-4-l">
        <h3 class="footer-heading">About us</h3>
        <p>
          Lambda's new and expanded Chelsea location represents a truly <strong>authentic</strong> Greek
          patisserie, featuring breakfasts of fresh croissants and steaming bowls of caf&eacute;.
        </p>
      </div>
      <div class="footer-column col-4-l">
        <h3 class="footer-heading">Opening Hours</h3>
        <p>
          <strong>Mon-Thu:</strong> 7.00am - 8.00pm <br>
          <strong>Fri-Sun:</strong> 7.00am - 10.00pm
        </p>
        <ul class="payment-types icon-list-inline">
          <li><span class="payment payment-mastercard"><span class="sr">Mastercard</span></a></li>
          <li><span class="payment payment-visa"><span class="sr">Visa</span></span></li>
          <li><span class="payment payment-american-express"><span class="sr">American Express</span></span></li>
          <li><span class="payment payment-paypal"><span class="sr">PayPal</span></span></li>
        </ul>
      </div>
      <div class="footer-column col-4-l">
        <h3 class="footer-heading">Our Location</h3>
        <p>
          19th Paradise Street Sitia <br>
          128 Meserole Avenue
        </p>
        <ul class="footer-social-list icon-list-inline">
          <li class="navigation-item-social"><a class="social social-twitter" href="#"><span class="sr">Twitter</span></a></li>
          <li class="navigation-item-social"><a class="social social-facebook" href="#"><span class="sr">Facebook</span></a></li>
          <li class="navigation-item-social"><a class="social social-google-plus" href="#"><span class="sr">Google Plus</span></a></li>
          <li class="navigation-item-social"><a class="social social-youtube" href="#"><span class="sr">YouTube</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<script src="<?=base_url($assets_dir).'/'?>js/vendor/wow.js"></script>
<script src="<?=base_url($assets_dir).'/'?>js/vendor/webfontloader.js"></script>
<script src="<?=base_url($assets_dir).'/'?>js/default.js"></script>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

</body>
</html>