<!-- Header Include -->
<?php
$pageTitle = "Contact Us | Business Logo Design";
$pageDescription = "";
include 'include/header.php'; ?>

<!-- Banner Section Start -->
<section class="banner inner-banner">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-lg-12">
                <div class="banner-content">
                    <h1 data-aos="fade-down" data-aos-duration="2000">Contact Us</span></h1>
                    <p>Connect with our team or give us a call for free consultation to get the best ideas for your business.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- About Section Start -->
<section class="about inner-about amr-about-1 contact-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 align-self-center">
                <div class="top-headings-left">
                    <!-- <h6 class="cl-iPrimary">WE CATER YOUR DIGITAL NEEDS</h6> -->
                    <h3>Fill out the form to get in touch with Business Logo Design team</h3>
                    <p>Tell us about your requirements and join hands to create something remarkable together. Get started on your project right away by telling us the details.</p>
                    <h4 class="cl-iPrimary">Additional Information</h4>
                    <p>For support or queries, call us on the given numbers today!</p>
                    <div class="bottom-links">
                        <a href="tel:9712574479" class="btn-link"> <i class="ic-5 fa-solid fa-phone fa-beat"></i> (971) 257-4479 </a>
                        <a href="mailto:hello@businesslogodesign.us" class="btn-link"> <i class="ic-3 fa-solid fa-envelope fa-beat"></i>hello@businesslogodesign.us</a>
                        <a href="https://maps.app.goo.gl/65SZXyJvsArxm1HR9" class="btn-link"> <i class="fa-solid fa-location-dot fa-beat"></i>159 N. Sangamon Street Chicago IL 60607</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form class="mt-4 form-box" id="contactForm" method="POST" action="contact-mail.php">
                        <fieldset class="header-form">
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <label for="name">Name <span>*</span></label>
                                    <input type="text" class="form-control name" placeholder="Enter Your Full Name" name="name">
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="email">Email <span>*</span></label>
                                    <input type="email" class="form-control email" placeholder="Enter Your Email Address" name="email">
                                </div>
                                <div class="col-lg-12 mb-3 phone-banner banner-field-container">
                                    <label for="phonenumber">Phone <span>*</span></label>
                                    <input class="form-control phone" type="tel" name="phonenumber" id="phone-contact">
                                    <span id="valid-msg-contact" class="hide">✓ Valid</span>
                                    <span id="error-msg-contact" class="hide"></span>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="description">Project Details <span>*</span></label>
                                    <textarea name="description" class="form-control textarea" placeholder="Tell us about your project *" rows="5"></textarea>
                                </div>
                                <div class="form-group col-lg-5">
                                    <button class="btn btn-primary submitform submit" id="submit" type="submit">Submit Now <i class="fa fa-chevron-right"></i></button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Footer Include -->
<?php include 'include/footer.php'; ?>