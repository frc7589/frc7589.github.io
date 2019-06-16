<?php
  function menuActive($menuId) {
    if (ACTIVEMENU==$menuId) return " active ";
    else                     return "";
  }
?>
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-3">
            <h1 class="mb-0"><a href="/" class="text-black h2 mb-0"><img src="images/magpie-logo.svg" style="height:1em" class="pr-2"/>FRC#7589</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="<?=menuActive('index')?>"><a href="index.html">Home</a></li>
<?php /*
                <li class="has-children <?=menuActive('indexx')?>">
                  <a href="destination.html">Destinations</a>
                  <ul class="dropdown">
                    <li><a href="#">Japan</a></li>
                    <li><a href="#">Europe</a></li>
                    <li><a href="#">China</a></li>
                    <li><a href="#">France</a></li>
                  </ul>
                </li>
*/ ?>
                <li class="has-children <?=menuActive('aboutUs')?>">
                  <a href="#">About us</a>
                  <ul class="dropdown">
                    <li><a href="#">About FRC</a></li>
                    <li><a href="#">About 7589</a></li>
                    <li><a href="#">About Our School</a></li>
                  </ul>
                </li>
                <li class="has-children <?=menuActive('events')?>">
                  <a href="#">Events</a>
                  <ul class="dropdown">
                    <li><a href="#">Competition</a></li>
                    <li><a href="#">Outreach</a></li>
                  </ul>
                </li>
                <li><a class="<?=menuActive('robots')?>" href="#">Robots</a></li>
                <li><a class="<?=menuActive('documents')?>" href="documents.html">Documents</a></li>
                <li><a class="<?=menuActive('sponsors')?>" href="#">Sponsors</a></li>
                <li><a class="<?=menuActive('links')?>" href="#">Links</a></li>
                
                <li><a class="<?=menuActive('contact')?>" href="#">Contact</a></li>
                <!-- <li><a href="booking.html">Book Online</a></li> -->
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-1 text-right">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="https://fb.me/FRC7589" class="pl-0 pr-2 text-black"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/frc_7589/" class="pl-2 pr-2 text-black"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="https://twitter.com/FRC7589" class="pl-2 pr-0 text-black"><span class="icon-twitter"></span></a>
                </li>
                
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>