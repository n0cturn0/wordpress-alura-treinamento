<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/fonts.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/style.css' ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
   
</head>
<header class="section page-header">
<div class="rd-navbar-wrap">


    <?php 
    // wp_die(var_dump(get_registered_nav_menus('primary_menu')));
        wp_nav_menu( array(
           
            'theme_location'    => 'primary_menu',
            'container'         => 'nav',
            'container_class'    => 'rd-navbar rd-navbar-minimal" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-fixed" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true"',
           
           
            'menu_id'           => 'collapse'
            
        ));
     ?>
<div class="rd-navbar-main-outer">
<div class="rd-navbar-main">
<!-- RD Navbar Panel-->
<div class="rd-navbar-panel">
<!-- RD Navbar Toggle-->
<button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
<!-- RD Navbar Brand--><a class="rd-navbar-brand" href="index.html"><img src="images/logo-default-161x39.png" alt="" width="161" height="39" srcset="images/logo-default-322x78.png 2x"/></a>
</div>
<div class="rd-navbar-main-element" style="height: 100px;">
                  <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                   
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Home</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">Features</a>
                      
                        <ul class="rd-menu rd-navbar-megamenu">
                          <li class="rd-megamenu-item">
                            <ul class="rd-megamenu-list">
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Typography</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="buttons.html">Buttons</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="forms.html">Forms</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="progress-bars.html">Progress bars</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tabs.html">Tabs</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tables.html">Tables</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="accordions.html">Accordions</a></li>
                            </ul>
                          </li>
                          <li class="rd-megamenu-item">
                            <ul class="rd-megamenu-list">
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="blog-layouts.html">Blog Layouts</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="calls-to-action.html">Calls to Action</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="footers.html">Footers</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="maps-and-contacts.html">Maps &amp; Contacts</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="navigation-bars.html">Navigation Bars</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="screens.html">Screens</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="portfolio-and-galleries.html">Portfolio &amp; Galleries</a></li>
                            </ul>
                          </li>
                          <li class="rd-megamenu-item">
                            <ul class="rd-megamenu-list">
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="small-features.html">Small Features</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="team.html">Team</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="testimonials.html">Testimonials</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="large-features.html">Large Features</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="pricing.html">Pricing</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="services.html">Services</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">Blog</a>
                       
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-blog.html">Grid Blog</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="sidebar-blog.html">Sidebar Blog</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-blog-post.html">Single Blog Post</a></li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">Portfolio</a>
                     
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-layout.html">Grid Layout</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="masonry-layout.html">Masonry Layout</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="modern-layout.html">Modern Layout</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-project.html">Single Project</a></li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">Pages</a>
                      
                        <ul class="rd-menu rd-navbar-megamenu">
                          <li class="rd-megamenu-item">
                            <div class="banner" style="background-image: url(images/megamenu-banner-1-570x368.jpg);"><a class='button button-sm button-primary button-winona' href='#get-template'>Buy Theme</a>
                            </div>
                          </li>
                          <li class="rd-megamenu-item">
                            <ul class="rd-megamenu-list">
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="404-page.html">404 Page</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="503-page.html">503 Page</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="coming-soon.html">Coming Soon</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="under-construction.html">Under Construction</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="about-us.html">About Us</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="about-me.html">About Me</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="grid-gallery.html">Grid Gallery</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="masonry-gallery.html">Masonry Gallery</a></li>
                            </ul>
                          </li>
                          <li class="rd-megamenu-item">
                            <ul class="rd-megamenu-list">
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="careers.html">Careers</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="search-results.html">Search results</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="services.html">Services</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="single-service.html">Single Service</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="single-job.html">Single Job</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="privacy-policy.html">Privacy policy</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="modern-gallery.html">Modern Gallery</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contacts</a>
                      </li>
                    </ul>
                  </div>
                  <!-- RD Navbar Search-->
                  <div class="rd-navbar-search" id="rd-navbar-search-1">
                    <button class="rd-navbar-search-toggle rd-navbar-fixed-element-2" data-rd-navbar-toggle="#rd-navbar-search-1"><span></span></button>
                    <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live-1" method="GET">
                      <div class="form-wrap">
                        <label class="form-label" for="rd-navbar-search-form-input-1">Search...</label>
                        <input class="form-input rd-navbar-search-form-input" id="rd-navbar-search-form-input-1" type="text" name="s" autocomplete="off">
                        <div class="rd-search-results-live" id="rd-search-results-live-1"></div>
                      </div>
                      <button class="rd-search-form-submit fa-search" type="submit"></button>
                    </form>
                  </div>
                </div>
                <!-- Menu de acordo com oficial -->



</div>
</div>
</div>
</header>
</div>
<body>

