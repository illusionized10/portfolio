<?php
/**
 * Template Name: Custom Homepage
 *
 * @package calin-cohan
 */

get_header(); ?>

<div class="section section-item home-section overflow hide-overlay overlay-color bg-image-1 wow" id="home-section">
    <div class="inner-container ">
        <div class="container">
            <div class="row">
                
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">

                    <div class="home-content-outer text-center">
                        
                        <div class="overflow">
                            <div class="heading-outer left-right relative">
                                <div class="heading-outer top-bottom relative">
                                    <div class="overflow p-t-40 p-l-40 p-r-40 p-b-40">
                                        <div class="section-heading-outer">
                                            <h1 class="heading">Hello. I'm <span class="color">Calin Cohan</span>.<br> I develop &amp; design beautiful UX's.</h1>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <div class="overflow m-t-30">
                            <div class="list-view">
                                <ul class="nav" id="introduction-navigation">
                                    <li><a class="btn-mask" href="#services-section">&nbsp;&nbsp;&nbsp;UX DESIGN&nbsp;&nbsp;&nbsp;</a></li>
                                    <li><a class="btn-mask" href="#services-section">&nbsp;&nbsp;&nbsp;WEB DEVELOPMENT&nbsp;&nbsp;&nbsp;</a></li>
                                    <li><a class="btn-mask" href="#services-section">&nbsp;&nbsp;&nbsp;MARKETING &amp; SEO&nbsp;&nbsp;&nbsp;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                
                <!-- SCROLL DOWN ARROW -->
                <div class="footer-button">
                    <div class="overflow m-t-30">
                        <div class="btn-form-outer btn-scroll">  <!-- Button Area -->
                            <a href="#services-section" class="btn"><i class="icon icon-arrow-carrot-down"></i></a>
                        </div>
                    </div>
                </div>
                <!-- END SCROLL DOWN ARROW -->

                <!-- NAVIGATION -->
                <nav class="navbar navbar-fixed-top main-navbar-top home-nav overflow">
                    <div class="container relative home-nav-inner">
                        
                        <div class="navbar-header">
                            <a class="navbar-brand light-logo" href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-icon.png" alt="" class="img-responsive">
                            </a>
                        </div>

                        <div class="navbar-collapse-right" >
                            <ul class="nav navbar-nav navbar-right btn-scroll">
                                <li>
                                    <a class="btn-nav btn-mask" id="contact-button" href="#contact-us-section">Get in Touch <i class="icon icon-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </nav>
                <!-- END NAVIGATION -->

            </div>
        </div>
    </div>
</div>


<div class=" section section-item combine-section hide-overlay overflow semi-dark-background" id="services-section">
    <div class="inner-container services-section ">
         <div class="container">
            <div class="row">

                <div class="section-header col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="overflow">
                        <div class="line-outer">
                            <div class="line wow"></div>
                        </div>
                    </div>
                    <div class="overflow">
                        <div class="section-heading-outer m-b-15">
                            <p class="sub-heading wow">PROFESSIONS</p>
                        </div> 
                    </div>
                    <div class="overflow">
                        <div class="section-heading-outer p-l-50 p-r-50">
                            <h2 class="section-heading wow">From executing modern designs, to programming websites &amp; mobile applications.</h2>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                
                <div class="each-services-outer overflow section-separator sp-bottom">

                    <div class="each-services col-sm-4 col-xs-12">
                        <div class="each-services-inner">
                            
                            <div class="overflow">
                                <div class="features-icon-outer wow">
                                    <i class="fas fa-object-group"></i>
                                </div>
                            </div>
                            <div class="overflow">
                                <div class="title-outer wow">
                                    <h4 class="title">UX Design.</h4>
                                </div>
                            </div>
                            <div class="overflow">
                                <div class="pera-outer wow">
                                    <p>Without a user-friendly interface visitors are likely to leave your website, resulting in conversion loss. I can help create
                                    an engaging and user friendly experience.</p>
                                </div>
                            </div>
                            <div class="overflow m-t-30">
                                <div class="btn-form-outer wow">  <!-- Button Area -->
                                    <a href="#services-1" class="btn right-icon btn-services btn-mask">LEARN MORE <i class="icon icon-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div> 

                    <div class="each-services col-sm-4 col-xs-12">
                        <div class="each-services-inner">
                            
                            <div class="overflow">
                                <div class="features-icon-outer wow">
                                    <i class="fab fa-html5"></i>
                                </div>
                            </div>
                            <div class="overflow">
                                <div class="title-outer wow">
                                    <h4 class="title">Web Development.</h4>
                                </div>
                            </div>
                            <div class="overflow">
                                <div class="pera-outer wow">
                                    <p>Front-end and back-end programming applications and websites requires working knowledge of how a back-end is to function with a nice looking front-end user interface.</p>
                                </div>
                            </div>
                            <div class="overflow m-t-30">
                                <div class="btn-form-outer wow">  <!-- Button Area -->
                                    <a href="#services-2" class="btn right-icon btn-services btn-mask">LEARN MORE <i class="icon icon-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div> 

                    <div class="each-services col-sm-4 col-xs-12">
                        <div class="each-services-inner">

                            <div class="overflow">
                                <div class="features-icon-outer wow">
                                    <i class="fab fa-searchengin"></i>
                                </div>
                            </div>
                            <div class="overflow">
                                <div class="title-outer wow">
                                    <h4 class="title">Marketing &amp; SEO.</h4>
                                </div>
                            </div>
                            <div class="overflow">
                                <div class="pera-outer wow">
                                    <p>SEO stands for "Search Engine Optimization". It is the process of getting traffic from the free, organic, editorial or natural search results on search engines.</p>
                                </div>
                            </div>
                            <div class="overflow m-t-30">
                                <div class="btn-form-outer wow">  <!-- Button Area -->
                                    <a href="#services-3" class="btn right-icon btn-services btn-mask">LEARN MORE <i class="icon icon-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div> 

                </div>
                

                <!-- Start: Each Services Part Full Detail -->
                <div class="services-full-view">
                    
                    <div class="services-details" id="services-1">
                        <div class="services-inner relative overflow">

                            <!-- Features Image -->
                            <div class="col-sm-6 col-xs-12">
                                <div class="features-image-outer">
                                    <div class="image-outer">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/services-1.jpg" alt="Services Image" class="img-responsive">
                                    </div>
                                </div>
                            </div> <!-- Features Image Area -->

                            <!-- Content Area -->
                            <div class="col-sm-6 col-xs-12">
                                <div class="services-content-outer">

                                    <div class="line-outer">
                                        <div class="line"></div>
                                    </div>

                                    <div class="section-title-outer overflow">
                                        <h3 class="section-title">UX Design.</h3>
                                    </div>

                                    <div class="overflow m-b-15">
                                        <div class="title-outer">
                                            <h6 class="title relative">A FRIENDLY USER EXPERIENCE IS EVERYTHING</h6>
                                        </div>
                                    </div>

                                    <div class="overflow">
                                        <div class="pera-outer">
                                            <p>User Experience (UX) refers to a person's emotions and attitudes about using a particular product, system or service. It includes the practical, experiential, affective, meaningful and valuable aspects of human–computer interaction and product ownership. Additionally, it includes a person’s perceptions of system aspects such as utility, ease of use and efficiency. User experience may be considered subjective in nature to the degree that it is about individual perception and thought with respect to the system.</p>
                                        </div>
                                    </div>

                                    <div class="overflow">
                                        <div class="pera-outer">
                                            <p>User experience is dynamic as it is constantly modified over time due to changing usage circumstances and changes to individual systems as well as the wider usage context in which they can be found. In the end user experience is about how the user interacts and experiences the product.
                                        </div>
                                    </div>

                                    <div class="overflow">
                                        <div class="btn-outer m-t-50">
                                            <a href="#8" class="btn btn-fill right-icon">GET IN TOUCH <i class="icon icon-arrow-right"></i></a>
                                        </div>
                                    </div>

                                </div> <!-- .services-content-outer -->
                            </div> <!-- Content Area -->
                            
                            <!-- Button Area -->
                            <div class="back-button-outer overflow">  
                                <a href="#" class="btn btn-services-back btn-mask"><i class="icon icon-arrow-carrot-left-alt2"></i></a>
                            </div>

                        </div> <!-- .services-inner -->
                    </div> <!-- .services-details -->

                    <div class="services-details" id="services-2">
                        <div class="services-inner relative overflow">

                            <!-- Features Image -->
                            <div class="col-sm-6 col-xs-12">
                                <div class="features-image-outer">
                                    <div class="image-outer">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/web-development.jpg" alt="Services Image" class="img-responsive">
                                    </div>
                                </div>
                            </div> <!-- Features Image Area -->

                            <!-- Content Area -->
                            <div class="col-sm-6 col-xs-12">
                                <div class="services-content-outer">

                                    <div class="line-outer">
                                        <div class="line"></div>
                                    </div>

                                    <div class="section-title-outer overflow">
                                        <h3 class="section-title">Web Development.</h3>
                                    </div>

                                    <div class="overflow m-b-15">
                                        <div class="title-outer">
                                            <h6 class="title relative">The world wide web is a wonderful place.</h6>
                                        </div>
                                    </div>

                                    <div class="overflow">
                                        <div class="pera-outer">
                                            <p>A more comprehensive list of tasks to which web development commonly refers, may include web engineering, web design, web content development, client liaison, client-side/server-side scripting, web server and network security configuration, and e-commerce development. </p>
                                        </div>
                                    </div>

                                    <div class="overflow">
                                        <div class="pera-outer">
                                            <p>Among web professionals, "web development" usually refers to the main non-design aspects of building web sites: writing markup and coding. Most recently Web development has come to mean the creation of content management systems or CMS. These CMS can be made from scratch, proprietary or open source. In broad terms the CMS acts as middleware between the database and the user through the browser. A principle benefit of a CMS is that it allows non-technical people to make changes to their web site without having technical knowledge.</p>
                                        </div>
                                    </div>

                                    <div class="overflow">
                                        <div class="btn-outer m-t-50">
                                            <a href="#8" class="btn btn-fill right-icon">GET IN TOUCH <i class="icon icon-arrow-right"></i></a>
                                        </div>
                                    </div>

                                </div> <!-- .services-content-outer -->
                            </div> <!-- Content Area -->
                            
                            <!-- Button Area -->
                            <div class="back-button-outer overflow">  
                                <a href="#" class="btn btn-services-back btn-mask"><i class="icon icon-arrow-carrot-left-alt2"></i></a>
                            </div>

                        </div> <!-- .services-inner -->
                    </div> <!-- .services-details -->

                    <div class="services-details" id="services-3">
                        <div class="services-inner relative overflow">

                            <!-- Features Image -->
                            <div class="col-sm-6 col-xs-12">
                                <div class="features-image-outer">
                                    <div class="image-outer">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/branding-seo.jpg" alt="Services Image" class="img-responsive">
                                    </div>
                                </div>
                            </div> <!-- Features Image Area -->

                            <!-- Content Area -->
                            <div class="col-sm-6 col-xs-12">
                                <div class="services-content-outer">

                                    <div class="line-outer">
                                        <div class="line"></div>
                                    </div>

                                    <div class="section-title-outer overflow">
                                        <h3 class="section-title">Marketing &amp; SEO</h3>
                                    </div>

                                    <div class="overflow m-b-15">
                                        <div class="title-outer">
                                            <h6 class="title relative">PERFECT STARATEGY FORYOUR BRAND</h6>
                                        </div>
                                    </div>

                                    <div class="overflow">
                                        <div class="pera-outer">
                                            <p>Search engine optimization (SEO) is the process of affecting the online visibility of a website or a web page in a web search engine's unpaid results—often referred to as "natural", "organic", or "earned" results. In general, the earlier (or higher ranked on the search results page), and more frequently a website appears in the search results list, the more visitors it will receive from the search engine's users; these visitors can then be converted into customers. SEO may target different kinds of search, including image search, video search, academic search, news search, and industry-specific vertical search engines.</p>
                                        </div>
                                    </div>

                                    <div class="overflow">
                                        <div class="pera-outer">
                                            <p>SEO differs from local search engine optimization in that the latter is focused on optimizing a business' online presence so that its web pages will be displayed by search engines when a user enters a local search for its products or services. The former instead is more focused on national or international searches.</p>
                                        </div>
                                    </div>

                                    <div class="overflow">
                                        <div class="btn-outer m-t-50">
                                            <a href="#8" class="btn btn-fill right-icon">GET IN TOUCH <i class="icon icon-arrow-right"></i></a>
                                        </div>
                                    </div>

                                </div> <!-- .services-content-outer -->
                            </div> <!-- Content Area -->
                            
                            <!-- Button Area -->
                            <div class="back-button-outer overflow">  
                                <a href="#" class="btn btn-services-back btn-mask"><i class="icon icon-arrow-carrot-left-alt2"></i></a>
                            </div>

                        </div> <!-- .services-inner -->
                    </div> <!-- .services-details -->

                </div>
                <!-- Each Services Part Full Detail -->

            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- . -->
</div>

<div class=" section section-item dark-background" id="portfolio-section">
    <div class="inner-container ">
         <div class="container">
            <div class="row section-separator">

                <div class="col-sm-12 overflow">
                    <div class="row portfolio-container wow">
                        <div class="portfolio-wrapper pagination-style-1 owl-carousel">

                            <!-- SLIDES -->

                            <div class="item ">
                                
                                <div class="porifolio-section overflow">

                                    <div class="col-xs-10 col-xs-offset-1">
                                        <div class="row">
                                            <div class="image text-center">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/project-bbwebsites.jpg" alt="Features Image">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="each-portfolio-heading">
                                        <div class="heading-text overflow wow">
                                            <div class="line"></div>
                                            <div class="overflow">
                                                <div class="sub-heading-outer">
                                                    <p class="sub-heading">DESIGN &AMP; PROGRAMMING</p>
                                                </div>
                                            </div>
                                            <div class="text overflow">
                                                <div class="inner">Big Bear Websites</div>
                                            </div>
                                        </div>

                                        <div class="link-list overflow wow">
                                            <div class="link one overflow">
                                                <div class="inner">
                                                    <a class="btn btn-project-detail right-icon btn-mask" href="#" data-element="project-detail">DETAILS <i class="icon icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                            <!--
                                             <div class="link two overflow">
                                                <div class="inner">
                                                    <a class="btn btn-slider right-icon btn-mask"  data-element="slider">VIEW SLIDES <i class="icon icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                            -->
                                            <div class="line hidden-xs"></div>
                                        </div>
                                    </div>

                                    <!-- 
                                    <div class="col-md-10 col-md-offset-1 col-sm-12 slider-outer">
                                        <div class="overflow">
                                            <div class="slider text-center">
                                                
                                                <div class="project-slider-outer">
                                                    <div class="project-slider owl-carousel">

                                                        <div class="item">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/features-3.jpg" alt="Slider Images" class="img-responsive">
                                                        </div>
                                                        <div class="item">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/features-4.jpg" alt="Slider Images" class="img-responsive">
                                                        </div>
                                                        <div class="item">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/features-5.jpg" alt="Slider Images" class="img-responsive">
                                                        </div>
                                                        <div class="item">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/features-6.jpg" alt="Slider Images" class="img-responsive">
                                                        </div>
                                                        <div class="item">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/features-7.jpg" alt="Slider Images" class="img-responsive">
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                                <div class="btn-outer text-left">
                                                    <a href="#" class="btn left-icon btn-slider-back btn-mask"><i class="icon icon-arrow-left"></i> BACK TO PORTFOLIO</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    -->

                                    <div class="col-xs-12 project-detail-outer">
                                            
                                        <div class="project-detail">
                                            <div class="project-detail-inner relative semi-dark-background overflow">

                                                <div class="col-sm-6 col-xs-12 vertical-middle project-detail-content">
                                                        
                                                    <div class="overflow">
                                                        <div class="heading-outer">
                                                            <h2 class="heading">Big Bear Websites</h2>
                                                        </div>
                                                    </div> <!-- .overflow -->

                                                    <div class="overflow">
                                                        <ul class="nav list">
                                                            <li><p class="sub-heading">DESIGN</p></li>
                                                            <li><p class="sub-heading">PROGRAMMING</p></li>
                                                        </ul>
                                                    </div> <!-- .overflow -->

                                                    <div class="overflow">
                                                        <div class="pera-outer m-t-30">
                                                            <p>
                                                                Big Bear Websites is a division of <a href="http://www.bigbearsoftware.ca" target="_blank">Big Bear Software</a>. They are dedicated to helping businesses with custom website development services be the best they can be by creating unique, responsive websites for companies that are just starting to those with an established presence.</p>
                                                            <p>
                                                                This project was a fun project for me because I was able to be as creative as I wanted to be. A custom animation was created for the landing page of this website, it is a mouse cursor integrated animation which follows the user's mouse wherever it's hovered on the introduction panel of the website. Alongside the animation, the design is a modern responsive design which allows for any and all mobile devices to view the website with all elements intact. Feel free to visit the website by clicking on the link below:
                                                            </p>
                                                        </div>
                                                    </div> <!-- .overflow -->

                                                    <div class="overflow">
                                                        <div class="full-view-outer">
                                                            <a href="http://www.bigbearwebsites.com" target="_blank" class="btn right-icon btn-mask">SEE THE PROJECT <i class="icon icon-arrow-right"></i></a>
                                                        </div>
                                                    </div> <!-- .overflow -->

                                                </div> <!-- END LEFT SIDE -->

                                                <!-- Right side Image -->
                                                <div class="col-sm-6 col-xs-12 vertical-middle overflow project-detail-image">
                                                    <div class="row text-right display-full">
                                                        <div class="project-detail-image-outer display-full">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/project-bbwebsites-small.jpg" alt="Portfolio Image">
                                                        </div>
                                                    </div>
                                                </div> <!-- RIGHT SIDE -->

                                            </div> <!-- .project-detail-content -->

                                            <div class="clearfix"></div>
                                            
                                            <!-- Back Button Area -->
                                            <div class="overflow">
                                                <div class="btn-outer text-center m-t-30">
                                                    <a href="#" class="btn left-icon btn-slider-back btn-mask"><i class="icon icon-arrow-left"></i> BACK TO PORTFOLIO</a>
                                                </div>
                                            </div>
                                            <!-- Back Button Area -->

                                        </div> <!-- .project-detail -->

                                    </div> <!-- .col-xs-12 -->

                                </div> 

                            </div> <!-- .item -->
                            <div class="item ">
                                
                                <div class="porifolio-section overflow">

                                    <div class="col-xs-10 col-xs-offset-1">
                                        <div class="row">
                                            <div class="image text-center">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/project-pastafermentata.jpg" alt="Features Image">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="each-portfolio-heading">
                                        <div class="heading-text overflow wow">
                                            <div class="line"></div>
                                            <div class="overflow">
                                                <div class="sub-heading-outer">
                                                    <p class="sub-heading">DESIGN &AMP; PROGRAMMING</p>
                                                </div>
                                            </div>
                                            <div class="text overflow">
                                                <div class="inner">Pasta Fermentata</div>
                                            </div>
                                        </div>

                                        <div class="link-list overflow wow">
                                            <div class="link one overflow">
                                                <div class="inner">
                                                    <a class="btn btn-project-detail right-icon btn-mask" href="#" data-element="project-detail">PROJECT DETAILS <i class="icon icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                            <!--
                                             <div class="link two overflow">
                                                <div class="inner">
                                                    <a class="btn btn-slider right-icon btn-mask"  data-element="slider">VIEW SLIDES <i class="icon icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                            -->
                                            <div class="line hidden-xs"></div>
                                        </div>
                                    </div>

                                    <!-- 
                                    <div class="col-md-10 col-md-offset-1 col-sm-12 slider-outer">
                                        <div class="overflow">
                                            <div class="slider text-center">
                                                
                                                <div class="project-slider-outer">
                                                    <div class="project-slider owl-carousel">

                                                        <div class="item">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/features-3.jpg" alt="Slider Images" class="img-responsive">
                                                        </div>
                                                        <div class="item">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/features-4.jpg" alt="Slider Images" class="img-responsive">
                                                        </div>
                                                        <div class="item">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/features-5.jpg" alt="Slider Images" class="img-responsive">
                                                        </div>
                                                        <div class="item">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/features-6.jpg" alt="Slider Images" class="img-responsive">
                                                        </div>
                                                        <div class="item">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/features-7.jpg" alt="Slider Images" class="img-responsive">
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                                <div class="btn-outer text-left">
                                                    <a href="#" class="btn left-icon btn-slider-back btn-mask"><i class="icon icon-arrow-left"></i> BACK TO PORTFOLIO</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    -->

                                    <div class="col-xs-12 project-detail-outer">
                                            
                                        <div class="project-detail">
                                            <div class="project-detail-inner relative semi-dark-background overflow">

                                                <div class="col-md-6 col-sm-12 vertical-middle project-detail-content">
                                                        
                                                    <div class="overflow">
                                                        <div class="heading-outer">
                                                            <h2 class="heading">Pasta Fermentata</h2>
                                                        </div>
                                                    </div> <!-- .overflow -->

                                                    <div class="overflow">
                                                        <ul class="nav list">
                                                            <li><p class="sub-heading">DESIGN</p></li>
                                                            <li><p class="sub-heading">PROGRAMMING</p></li>
                                                        </ul>
                                                    </div> <!-- .overflow -->

                                                    <div class="overflow">
                                                        <div class="pera-outer m-t-30">
                                                            <p>Pasta Fermentata is more or less now the main focus of a local bakery based in Kaslo, British Columbia by the name of Kaslo Sourdough. This company sells naturally fermented pasta and required an e-commerce website with customized shipping &amp; pricing rules to fit their company needs. Pasta Fermentata uses Canada Post to ship out their items, thus a shipping calculator was required for their website.</p>
                                                            <p>Alongside the shipping calculator, a number of other modules were programmed and integrated into the website. Some of these modules include: blog/news reel, custom recipe pages, store/shop locator, automated e-mail forms, search engine optimization &amp; more. This website is a full content management system, which means the administrator can freely edit the content of the website without having programming knowledge. Click below to view the website.</p>
                                                        </div>
                                                    </div> <!-- .overflow -->

                                                    <div class="overflow">
                                                        <div class="full-view-outer">
                                                            <a href="http://www.pastafermentata.com" target="_blank" class="btn right-icon btn-mask">SEE THE PROJECT <i class="icon icon-arrow-right"></i></a>
                                                        </div>
                                                    </div> <!-- .overflow -->

                                                </div> <!-- END LEFT SIDE -->

                                                <!-- Right side Image -->
                                                <div class="col-md-6 col-sm-12 vertical-middle overflow project-detail-image">
                                                    <div class="row text-right display-full">
                                                        <div class="project-detail-image-outer display-full">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/project-pastafermentata-small.jpg" alt="Pasta Fermentata Portfolio Image">
                                                        </div>
                                                    </div>
                                                </div> <!-- RIGHT SIDE -->

                                            </div> <!-- .project-detail-content -->

                                            <div class="clearfix"></div>
                                            
                                            <!-- Back Button Area -->
                                            <div class="overflow">
                                                <div class="btn-outer text-center m-t-30">
                                                    <a href="#" class="btn left-icon btn-slider-back btn-mask"><i class="icon icon-arrow-left"></i> BACK TO PORTFOLIO</a>
                                                </div>
                                            </div>
                                            <!-- Back Button Area -->

                                        </div> <!-- .project-detail -->

                                    </div> <!-- .col-xs-12 -->

                                </div> 

                            </div> <!-- .item -->
                            <div class="item ">
                                
                                <div class="porifolio-section overflow">

                                    <div class="col-xs-10 col-xs-offset-1">
                                        <div class="row">
                                            <div class="image text-center">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/project-southokanagan.jpg" alt="Features Image">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="each-portfolio-heading">
                                        <div class="heading-text overflow wow">
                                            <div class="line"></div>
                                            <div class="overflow">
                                                <div class="sub-heading-outer">
                                                    <p class="sub-heading">DESIGN &AMP; PROGRAMMING</p>
                                                </div>
                                            </div>
                                            <div class="text overflow">
                                                <div class="inner">
                                                    South Okanagan Properties
                                                </div>
                                            </div>
                                        </div>

                                        <div class="link-list overflow wow">
                                            <div class="link one overflow">
                                                <div class="inner">
                                                    <a class="btn btn-project-detail right-icon btn-mask" href="#" data-element="project-detail">PROJECT DETAILS <i class="icon icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                            <!--
                                             <div class="link two overflow">
                                                <div class="inner">
                                                    <a class="btn btn-slider right-icon btn-mask"  data-element="slider">VIEW SLIDES <i class="icon icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                            -->
                                            <div class="line hidden-xs"></div>
                                        </div>
                                    </div>

                                    <!-- 
                                    <div class="col-md-10 col-md-offset-1 col-sm-12 slider-outer">
                                        <div class="overflow">
                                            <div class="slider text-center">
                                                
                                                <div class="project-slider-outer">
                                                    <div class="project-slider owl-carousel">

                                                        <div class="item">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/features-3.jpg" alt="Slider Images" class="img-responsive">
                                                        </div>
                                                        <div class="item">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/features-4.jpg" alt="Slider Images" class="img-responsive">
                                                        </div>
                                                        <div class="item">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/features-5.jpg" alt="Slider Images" class="img-responsive">
                                                        </div>
                                                        <div class="item">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/features-6.jpg" alt="Slider Images" class="img-responsive">
                                                        </div>
                                                        <div class="item">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/features-7.jpg" alt="Slider Images" class="img-responsive">
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                                <div class="btn-outer text-left">
                                                    <a href="#" class="btn left-icon btn-slider-back btn-mask"><i class="icon icon-arrow-left"></i> BACK TO PORTFOLIO</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    -->

                                    <div class="col-xs-12 project-detail-outer">
                                            
                                        <div class="project-detail">
                                            <div class="project-detail-inner relative semi-dark-background overflow">

                                                <div class="col-md-6 col-sm-12 vertical-middle project-detail-content">
                                                        
                                                    <div class="overflow">
                                                        <div class="heading-outer">
                                                            <h2 class="heading">South Okanagan Properties</h2>
                                                        </div>
                                                    </div> <!-- .overflow -->

                                                    <div class="overflow">
                                                        <ul class="nav list">
                                                            <li><p class="sub-heading">DESIGN</p></li>
                                                            <li><p class="sub-heading">PROGRAMMING</p></li>
                                                        </ul>
                                                    </div> <!-- .overflow -->

                                                    <div class="overflow">
                                                        <div class="pera-outer m-t-30">
                                                            <p>South Okanagan Properties is a content management system real estate website with the ability to dynamically collect MLS listings, and have them posted on this respective website. Chris Marte, a real estate agent from the South Okanagan Properties wanted to feature their listings as well as all of the south okanagan listings on their website - the trick here is they wanted their listings to show first.</p>
                                                            <p>Aside from pulling in data from the MLS, this website has the ability of creating custom house postings, which are outside the MLS. This gives these real estate agents the ability to post private listings on their website which most other real estate websites do not have this ability. Alongside the listings, there is a news reel/blog, automated email forms, and a custom-timeline specifically designed for the companies historical timeline.</p>
                                                        </div>
                                                    </div> <!-- .overflow -->

                                                    <div class="overflow">
                                                        <div class="full-view-outer">
                                                            <a href="#" class="btn right-icon btn-mask">SEE THE PROJECT <i class="icon icon-arrow-right"></i></a>
                                                        </div>
                                                    </div> <!-- .overflow -->

                                                </div> <!-- END LEFT SIDE -->

                                                <!-- Right side Image -->
                                                <div class="col-md-6 col-sm-12 vertical-middle overflow project-detail-image">
                                                    <div class="row text-right display-full">
                                                        <div class="project-detail-image-outer display-full">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/project-southokanagan-small.jpg" alt="Portfolio Image">
                                                        </div>
                                                    </div>
                                                </div> <!-- RIGHT SIDE -->

                                            </div> <!-- .project-detail-content -->

                                            <div class="clearfix"></div>
                                            
                                            <!-- Back Button Area -->
                                            <div class="overflow">
                                                <div class="btn-outer text-center m-t-30">
                                                    <a href="#" class="btn left-icon btn-slider-back btn-mask"><i class="icon icon-arrow-left"></i> BACK TO PORTFOLIO</a>
                                                </div>
                                            </div>
                                            <!-- Back Button Area -->

                                        </div> <!-- .project-detail -->

                                    </div> <!-- .col-xs-12 -->

                                </div> 

                            </div> <!-- .item -->

                        </div> <!-- .swiper-wrapper -->
                    </div> <!-- .testimonials-container -->
                </div> <!-- col-xs-12 -->

            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .inner-container -->
</div>
 
<!-- TESTIMONIALS -->
<div class=" section section-item combine-section hide-overlay semi-dark-background" id="testimonial-section">
    <div class="inner-container testimonial-section semi-dark-background" id="testimonial">
         <div class="container">
            <div class="row section-separator sp-bottom">
                
                <!-- Start: Section Heading -->
                <div class="section-header col-sm-10 col-sm-offset-1">
                    <div class="overflow">
                        <div class="line-outer">
                            <div class="line wow"></div>
                        </div>
                    </div>
                    <div class="overflow">
                        <div class="section-heading-outer m-b-15">
                            <p class="sub-heading wow">Testimonials</p>
                        </div> 
                    </div>
                    <div class="overflow">
                        <div class="section-heading-outer p-l-50 p-r-50">
                            <h2 class="section-heading wow">I have been lucky to work with some awesome companies</h2>
                        </div>
                    </div>
                </div>
                <!--  Section Heading -->

                <div class="clearfix"></div>

                <div class="col-xs-12 m-t-30">
                    <div class="overflow text-center">
                        
                        <!-- OUR CLIENTS LOGO -->
                        <ul class="nav client-logo wow">
                            <li><a href="https://us.pg.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/clients-logo/png.png" alt="P&G"></a></li>
                            <li><a href="http://www.bigbearsoftware.ca/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/clients-logo/bigbearSoftware.png" alt="Big Bear Software"></a></li>
                            <li><a href="http://halltreefarms.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/clients-logo/halltreefarms.png" alt="Hall Tree Farms"></a></li>
                            <li><a href="http://surveylife.software/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/clients-logo/surveyLife.png" alt="Survey Life"></a></li>
                            <li><a href="https://www.okanagancelebrations.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/clients-logo/marteLogo.png" alt="South Okanagan Properties"></a></li>
                            <li><a href="http://www.in-toronto-web-design.ca/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/clients-logo/geekpower.png" alt="Geek Power Web Design"></a></li>
                            <li><a href="http://www.pastafermentata.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/clients-logo/pastaFermentata.png" alt="Kaslo Sourdough"></a></li>
                        </ul>

                    </div> <!--  .overflow -->
                </div> <!--  .col-xs-12 -->

                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 overflow">
                    <div class="testimonial-container wow">
                        <div class="testimonial-wrapper pagination-style-1 owl-carousel">

                            <!-- SLIDES -->
                            <div class="item">
                                <!--
                                 <div class="overflow">
                                    <div class="image-outer">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/1.jpg">
                                    </div>
                                </div>
                                -->
                                <div class="overflow m-t-40">
                                    <div class="text-outer">
                                        <blockquote>“Calin was able to work closely with us and help provide a number of multimedia assets which we were in need of at Hall Tree Farms. The work completed was presented to us in a timely manner and we were very happy with everything done by this creative individual.”</blockquote>
                                    </div>
                                </div>
                                <div class="overflow m-t-40 m-b-30">
                                    <div class="profile-outer">
                                        <span class="name">PETER HALL</span>
                                        <span class="position">CEO, Hall Tree Farms</span>
                                    </div>
                                </div>

                            </div> <!--  .swiper-slider -->
                            <div class="item">
                                <!--
                                 <div class="overflow">
                                    <div class="image-outer">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/2.jpg">
                                    </div>
                                </div>
                                -->
                                <div class="overflow m-t-40">
                                    <div class="text-outer">
                                        <blockquote>“The level of professionalism which is portrayed through our website is outstanding. We are very happy with the end product and would recommend working with Calin if you need a modern website. His high level of understanding the web means less headaches for everyone!”</blockquote>
                                    </div>
                                </div>
                                <div class="overflow m-t-40 m-b-30">
                                    <div class="profile-outer">
                                        <span class="name">CHRIS MARTE</span>
                                        <span class="position">Real Estate Broker, South Okanagan Properties</span>
                                    </div>
                                </div>

                            </div> <!--  .swiper-slider -->
                            <div class="item">
                                <!-- 
                                <div class="overflow">
                                    <div class="image-outer">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/2.jpg">
                                    </div>
                                </div>
                                -->
                                <div class="overflow m-t-40">
                                    <div class="text-outer">
                                        <blockquote>“Working with Calin I was able to finally open up my own local start-up and have it truly reflect what I had in mind when it came to starting my own business. The web-design process felt very seamless and easy with someone that knows what they are doing!”</blockquote>
                                    </div>
                                </div>
                                <div class="overflow m-t-40 m-b-30">
                                    <div class="profile-outer">
                                        <span class="name">DAN WILTON</span>
                                        <span class="position">CEO, Okanagan Celebrations</span>
                                    </div>
                                </div>

                            </div> <!--  .swiper-slider -->

                        </div> <!--  .swiper-wrapper -->
                    </div> <!--  .testimonials-container -->
                </div> <!--  .col-xs-12 -->

            </div> <!--  .row -->
        </div> <!--  .container -->
    </div> <!--  .inner-container -->

</div>
<!-- 4th Section  
    - TESTIMONIAL PAGE
====================================-->


<div class=" section section-item combine-section hide-overlay overflow dark-background" id="team-section">
    <div class="inner-container team-member dark-background">
        <div class="container">
            <div class="row section-separator sp-bottom">
                
                <!-- Start: Section Heading -->
                <div class="section-header col-sm-10 col-sm-offset-1">
                    <div class="overflow">
                        <div class="line-outer">
                            <div class="line wow"></div>
                        </div>
                    </div>
                    <div class="overflow">
                        <div class="section-heading-outer m-b-15">
                            <p class="sub-heading wow">MY SKILLS</p>
                        </div> 
                    </div>
                    <div class="overflow">
                        <div class="section-heading-outer p-l-50 p-r-50">
                            <h2 class="section-heading wow">Programming &amp; Design Related</h2>
                            <h2 id="sub-heading" class="section-heading wow">* tap or hover to reveal text *</h2>
                        </div>
                    </div>
                </div>
                <!--  Section Heading -->

                <div class="clearfix"></div>

                <div class="col-sm-12 grid-item m-t-30">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 col-xs-12 each-item overflow text-center relative wow">
                            <div class="item-inner overflow absolute">

                                <div class="profile-outer center">
                                    <div class="profile-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/html5.png" alt="Team Member" class="">
                                    </div>
                                    <div class="profile-content">
                                        <span class="name">HTML</span>
                                        <span class="position">10+ years of experience</span>
                                    </div>
                                </div>
                                <div class="content-detail">
                                    <p>My love and interest for HTML started way back in my 9th grade in high school. Ever since the first introduction to web course, I have been always learning and reading about how I can improve my working knowledge of HTML. HTML is a constantly changing and evolving language, and I love keeping up with it.</p>
                                </div>

                            </div>
                        </div> <!--  .each-item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 each-item overflow text-center relative wow">
                            <div class="item-inner overflow absolute">

                                <div class="profile-outer center">
                                    <div class="profile-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/css3.png" alt="Team Member" class="">
                                    </div>
                                    <div class="profile-content">
                                        <span class="name">CSS</span>
                                        <span class="position">10+ years of experience</span>
                                    </div>
                                </div>
                                <div class="content-detail">
                                    <p>Alongside with my introduction to HTML, I essentially learned how to write cascading stylesheets (CSS) hand-in-hand with my HTML courses. The ability to create custom styles which supports the markup language used for front-end purposes made my passion for the web industry even stronger.</p>
                                </div>

                            </div>
                        </div> <!--  .each-item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 each-item overflow text-center relative wow">
                            <div class="item-inner overflow absolute">

                                <div class="profile-outer center">
                                    <div class="profile-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/javascript.png" alt="Team Member" class="">
                                    </div>
                                    <div class="profile-content">
                                        <span class="name">JAVASCRIPT</span>
                                        <span class="position">10+ years of experience</span>
                                    </div>
                                </div>
                                <div class="content-detail">
                                    <p>I started writing JavaScript also in high school with the introduction courses. Eventually, this led to teaching myself how to program custom macros for a video game using colour detection methods from a widely used JavaScript library. Since that project, I've never looked away from JavaScript.</p>
                                </div>

                            </div>
                        </div> <!--  .each-item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 each-item overflow text-center relative wow">
                            <div class="item-inner overflow absolute">

                                <div class="profile-outer center">
                                    <div class="profile-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/php.png" alt="Team Member" class="">
                                    </div>
                                    <div class="profile-content">
                                        <span class="name">PHP</span>
                                        <span class="position">8+ years of experience</span>
                                    </div>
                                </div>
                                <div class="content-detail">
                                    <p>My introduction to PHP was more or less a love-hate relationship since most of the languages I knew at this time were not server-side languages. The learning curve was rather steep, however after being introducted to WordPress, learning PHP almost felt like it was a must.</p>
                                </div>

                            </div>
                        </div> <!--  .each-item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 each-item overflow text-center relative wow">
                            <div class="item-inner overflow absolute">

                                <div class="profile-outer center">
                                    <div class="profile-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/wordpressLogo.png" alt="Wordpress Logo" class="">
                                    </div>
                                    <div class="profile-content">
                                        <span class="name">WordPress</span>
                                        <span class="position">5+ years of experience</span>
                                    </div>
                                </div>
                                <div class="content-detail">
                                    <p>I started developing WordPress websites at my first web-developer job and have fallen in love with it ever since. When developing websites, I use WordPress religously. WordPress is a great framework to develop full content management systems websites for those that want the ability to maintain and update their own website without having to pay a web-developer to do so.</p>
                                </div>

                            </div>
                        </div> <!--  .each-item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 each-item overflow text-center relative wow">
                            <div class="item-inner overflow absolute">

                                <div class="profile-outer center">
                                    <div class="profile-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/photoshopIcon.png" alt="Photoshop Logo" class="">
                                    </div>
                                    <div class="profile-content">
                                        <span class="name">ADOBE PHOTOSHOP</span>
                                        <span class="position">8+ years of experience</span>
                                    </div>
                                </div>
                                <div class="content-detail">
                                    <p>Photoshop was a program that I personally always loved. I never have been able to be as creative on paper than I was with a computer, this program enabled me to do so. Numerous tutorials, articles, and personal projects led me to my passion with web design, and this software made it possible.</p>
                                </div>

                            </div>
                        </div> <!--  .each-item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 each-item overflow text-center relative wow">
                            <div class="item-inner overflow absolute">

                                <div class="profile-outer center">
                                    <div class="profile-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/illustratorIcon.png" alt="Team Member" class="">
                                    </div>
                                    <div class="profile-content">
                                        <span class="name">ADOBE ILLUSTRATOR</span>
                                        <span class="position">4+ years of experience</span>
                                    </div>
                                </div>
                                <div class="content-detail">
                                    <p>Illustrator somewhat fell into my hands after I had been working in the industry for a few years. The use of vector graphics are being used more and more widely throughout the web. Thus, learning how to create and generate vector graphics with Illustrator is essential for any professional graphic designer.</p>
                                </div>

                            </div>
                        </div> <!--  .each-item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 each-item overflow text-center relative wow">
                            <div class="item-inner overflow absolute">

                                <div class="profile-outer center">
                                    <div class="profile-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/indesignIcon.png" alt="Team Member" class="">
                                    </div>
                                    <div class="profile-content">
                                        <span class="name">ADOBE INDESIGN</span>
                                        <span class="position">4+ years of experience</span>
                                    </div>
                                </div>
                                <div class="content-detail">
                                    <p>InDesign more or less follows the same pattern and trend as my knowledge for Illustrator. Learning how to use a program that is focused on print materials is somewhat essential for myself, especially since I wanted to be able to print my own business cards. InDesign makes generating text-based graphics a breeze.</p>
                                </div>

                            </div>
                        </div> <!--  .each-item -->


                    </div>
                </div> <!--  .col-xs-12 -->

            </div> <!--  .row -->
        </div> <!--  .container -->
    </div> <!--  .inner-container -->

</div>
<!-- 5th Section  
    - OUR TEAM PAGE
====================================-->


<!--Start: 6th Section  
    - CONTACT US PAGE
====================================-->
<div class=" section section-item combine-section hide-overlay overflow wow" id="contact-us-section">
    <div class="overlay-color relative bg-image-2">

        <div class="inner-container contact-us" id="contact">
            <div class="container">
                <div class="row">
                    
                    <!-- Start: Section Heading -->
                    <div class="section-header col-sm-10 col-sm-offset-1">
                        <div class="overflow">
                            <div class="line-outer">
                                <div class="line wow"></div>
                            </div>
                        </div>
                        <div class="overflow">
                            <div class="section-heading-outer m-b-15">
                                <p class="sub-heading wow">CONTACT</p>
                            </div> 
                        </div>
                        <div class="overflow">
                            <div class="section-heading-outer p-l-50 p-r-50">
                                <h2 class="section-heading wow">Let's have a coffee &amp; chat.</h2>
                            </div>
                        </div>
                    </div>
                    <!--  Section Heading -->

                    <div class="clearfix"></div>

                    <div class="custom-contact-form">
                        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 overflow">
                            <div class="row single-form-outer wow">
                                <?php //echo do_shortcode('[contact-form-7 id="9" title="Contact Form"]'); ?>
                            </div>
                        </div> <!--  .col-xs-12 -->
                    </div>


                    <div class="clearfix"></div>

                </div> <!--  .row -->
            </div> <!--  .container -->
        </div> <!--  .inner-container -->
    </div>
</div>

<?php
get_footer();