<?php
/**
 * Template Name: Design Portfolio
 *
 * @package calin-cohan
 */

get_header(); ?>

<div class=" section section-item combine-section hide-overlay overflow wow" id="contact-us-section">
    <div class="overlay-color relative bg-image-2">

        <div class="inner-container contact-us" id="contact">
            <div class="container">
                <div class="row">
                    
                    <!-- Contact Section Heading -->
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
                    <div class="clearfix"></div>

                    <!-- Contact Form -->
                    <div class="custom-contact-form">
                        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 overflow">
                            <div class="row single-form-outer wow">
                                <?php echo do_shortcode('[contact-form-7 id="27" title="Contact Form"]'); ?>
                            </div>
                        </div> 
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();