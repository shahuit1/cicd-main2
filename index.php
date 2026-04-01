<!-- Header Include -->
<?php
$pageTitle = "Creative Logo Design Company in USA | Business Logo Design";
$pageDescription = "We are a custom logo design company located in USA. We offer logo design and create memorable brand experience. Creative logo design for business, startups, startups companies and small businesses.";
include 'include/header.php'; ?>

<!-- Banner Section Start -->
<section class="banner">
    <div class="banner-overlay"></div>
    <video class="tag" autoplay="" muted="" loop="" id="myVideo" src="assets/images/home-banner-1.webm"></video>
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-lg-12">
                <div class="banner-content">
                    <?php
                    // Check if the 'submitted' parameter in the URL is set to 1
                    if (isset($_GET['submitted']) && $_GET['submitted'] == 1) : ?>
                        <p class="th-alert">Thanks for getting in touch, your query will be answered shortly.</p>
                    <?php endif; ?>
                    <h1 data-aos="fade-down" data-aos-duration="2000">Brand Building Made Easy <br> <span> With Business Logo Design</span></h1>
                    <h4>DISCUSS. DESIGN. DEVELOP. MARKET. GROW.</h4>
                    <p data-aos="fade-up" data-aos-duration="2000">Convert your product into a brand today to outsmart your competition and stay relevant in the market! <br> Business logo design is your trusted partner for complete and comprehensive digital solutions. We help you in building a solid and sustainable brand that makes you stand out from competition.</p>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary" data-aos="fade-up" data-aos-duration="3000">LET'S GET STARTED</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Portfolio Section Start -->
<section class="portfolio">
    <div class="container">
        <div class="top-headings">
            <h2 data-aos="fade-down" data-aos-duration="2000">Brand Creation made Simpler <br>Your Gateway to Digital Success</h2>
            <p>Your digital presence today is what you need to preserve to survive in today’s world – and we are experts in that. We help you from A to Z by helping you build your brand name to your complete brand creation to pave your own success path.</p>
        </div>
        <div class="row portfolio-row-1">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="assets/images/home-portfolio/01.webp" alt="Business Logo Design">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="assets/images/home-portfolio/02.webp" alt="Business Logo Design">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="assets/images/home-portfolio/03.webp" alt="Business Logo Design">
            </div>
        </div>
        <div class="row portfolio-row-2">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="assets/images/home-portfolio/04.webp" alt="Business Logo Design">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="assets/images/home-portfolio/05.webp" alt="Business Logo Design">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="assets/images/home-portfolio/06.webp" alt="Business Logo Design">
            </div>
        </div>
        <div class="row portfolio-row-3">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="assets/images/home-portfolio/07.webp" alt="Business Logo Design">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="assets/images/home-portfolio/08.webp" alt="Business Logo Design">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="assets/images/home-portfolio/09.webp" alt="Business Logo Design">
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Portfolio Section End -->

<!-- Packages Section Start -->
<section class="packages">
    <div class="container">
        <div class="top-headings">
            <h2 data-aos="fade-down" data-aos-duration="2000"> Startup Packages</h2>
            <p>Your digital presence today is what you need to preserve to survive in today’s world – and we are experts in that. We help you from A to Z by helping you build your brand name to your complete brand creation to pave your own success path.</p>
        </div>
    </div>
    <div class="container">
        <!-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-trademark-registration-tab" data-bs-toggle="pill" data-bs-target="#pills-trademark-registration" type="button" role="tab" aria-controls="pills-trademark-registration" aria-selected="true">Trademark Registration</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-copyright-registration-tab" data-bs-toggle="pill" data-bs-target="#pills-copyright-registration" type="button" role="tab" aria-controls="pills-copyright-registration" aria-selected="false">Copyright Registration</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-company-formation-tab" data-bs-toggle="pill" data-bs-target="#pills-company-formation" type="button" role="tab" aria-controls="pills-company-formation" aria-selected="false">Company Formation </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-trademark-search-tab" data-bs-toggle="pill" data-bs-target="#pills-trademark-search" type="button" role="tab" aria-controls="pills-trademark-search" aria-selected="false">Trademark Search </button>
            </li>
        </ul> -->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-trademark-registration" role="tabpanel" aria-labelledby="pills-trademark-registration-tab">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="owl-carousel owl-theme" id="packages-carousel">
                            <div class="item">
                                <div class="package-box package-1">
                                    <div class="pck-head">
                                        <h4 class="pck-title">
                                            <span>Professional Logo Plan</span>
                                        </h4>
                                        <span class="pNote">For businesses waiting to introduce or reintroduce themselves in market</span>
                                        <div class="pck-price">
                                            <h5><span class="dollar">$</span><strong class="price">125</strong></h5>
                                            <strike>$416 <span> <br>Monthly</span></strike>
                                        </div>
                                    </div>
                                    <div class="pck-content">
                                        <div class="pck-topContent">
                                            <ul class="scrollbar">
                                                <li><i class="ic-tik fa-solid fa-check"></i>UNLIMITED Logo Design Concepts</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>By 4 Designers</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>UNLIMITED Revisions</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Stationary Design (Business Card, Letterhead, Envelope)</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>FREE MS Word Letterhead</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>48 to 72 hours TAT</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>100% Satisfaction Guarantee</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>100% Unique Design Guarantee</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>100% Money Back Guarantee *</li>
                                            </ul>
                                            <span class="pNote"><strong>20%</strong> more OFF on Next Order</span>
                                            <div class="actions">

                                                <div class="row">
                                                    <div class="col-md-6 col-xs-6 col-6">
                                                        <a href="tel:9712574479" class="action-no clearfix pur"> <span><small>Speak with us <br></small>(971) 257-4479</span></a>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 col-6">
                                                        <a href="javascript:setButtonURL()" class="chat chatt"> <span><small>Want to discuss?<br></small> Live Chat Now</span></a>
                                                    </div>
                                                </div>
                                                <a class="btn btn-primary w-100 js-popup-link" href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="package-box package-1">
                                    <div class="pck-head">
                                        <h4 class="pck-title">
                                            <span>Basic Website Package</span>
                                        </h4>
                                        <span class="pNote">Best seller for start-ups looking to establish a brand</span>
                                        <div class="pck-price">
                                            <h5><span class="dollar">$</span><strong class="price">199</strong></h5>
                                            <strike>$663 <span> <br>Only</span></strike>
                                        </div>
                                    </div>
                                    <div class="pck-content">
                                        <div class="pck-topContent">
                                            <ul class="scrollbar">
                                                <li><i class="ic-tik fa-solid fa-check"></i>1 Page Website Design</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>HTML Based</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>1 Banner Design</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Contact/Query Form</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>3 Revisions</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Complete W3C Certified HTML</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Complete Deployment</li>
                                                <li class="heading">– Value Added Services</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Dedicated Project Manager</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>100% Ownership Rights</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>100% Satisfaction Guarantee</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>100% Money Back Guarantee</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>*NO MONTHLY OR ANY HIDDEN FEE*</li>
                                            </ul>
                                            <span class="pNote"><strong>20%</strong> more OFF on Next Order</span>
                                            <div class="actions">
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-6 col-6">
                                                        <a href="tel:9712574479" class="action-no clearfix pur"> <span><small>Speak with us <br></small>(971) 257-4479</span></a>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 col-6">
                                                        <a href="javascript:setButtonURL()" class="chat chatt"> <span><small>Want to discuss?<br></small> Live Chat Now</span></a>
                                                    </div>
                                                </div>
                                                <a class="btn btn-primary w-100 js-popup-link" href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="package-box package-1">
                                    <div class="pck-head">
                                        <h4 class="pck-title">
                                            <span>Startup Video Animation</span>
                                        </h4>
                                        <span class="pNote">Communicate your message visually to your target audience</span>
                                        <div class="pck-price">
                                            <h5><span class="dollar">$</span><strong class="price">349</strong></h5>
                                            <strike>$1163 <span> <br>Monthly</span></strike>
                                        </div>
                                    </div>
                                    <div class="pck-content">
                                        <div class="pck-topContent">
                                            <ul class="scrollbar">
                                                <li><i class="ic-tik fa-solid fa-check"></i>30 Second Video</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Professional Script</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Storyboard</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Animation</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Voice - Over &amp; Sound Effects</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>4 weeks Delivery</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Unlimited Revisions</li>
                                            </ul>
                                            <span class="pNote"><strong>20%</strong> more OFF on Next Order</span>
                                            <div class="actions">
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-6 col-6">
                                                        <a href="tel:9712574479" class="action-no clearfix pur"> <span><small>Speak with us <br></small>(971) 257-4479</span></a>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 col-6">
                                                        <a href="javascript:setButtonURL()" class="chat chatt"> <span><small>Want to discuss?<br></small> Live Chat Now</span></a>
                                                    </div>
                                                </div>
                                                <a class="btn btn-primary w-100 js-popup-link" href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="package-box package-1">
                                    <div class="pck-head">
                                        <h4 class="pck-title">
                                            <span>Social Package</span>
                                        </h4>
                                        <span class="pNote">Engage with your audience and enhance your social presence *Text edit Cancel Anytime</span>
                                        <div class="pck-price">
                                            <h5><span class="dollar">$</span><strong class="price">499</strong></h5>
                                            <strike>$1330 <span> <br>Monthly</span></strike>
                                        </div>
                                    </div>
                                    <div class="pck-content">
                                        <div class="pck-topContent">
                                            <ul class="scrollbar">
                                                <li><i class="ic-tik fa-solid fa-check"></i>3 postings per week (per network)</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Social Account Setup</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Business Page Optimization</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Social Media Strategy (Overview)</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Content Creation</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Increase in followers</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Account Management</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Monthly Progress report</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>No Setup Fee</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Cancel any tim</li>
                                            </ul>
                                            <span class="pNote"><strong>20%</strong> more OFF on Next Order</span>
                                            <div class="actions">

                                                <div class="row">
                                                    <div class="col-md-6 col-xs-6 col-6">
                                                        <a href="tel:9712574479" class="action-no clearfix pur"> <span><small>Speak with us <br></small>(971) 257-4479</span></a>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 col-6">
                                                        <a href="javascript:setButtonURL()" class="chat chatt"> <span><small>Want to discuss?<br></small> Live Chat Now</span></a>
                                                    </div>
                                                </div>
                                                <a class="btn btn-primary w-100 js-popup-link" href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Packages Section End -->

<!-- Combo Package Start -->
<section class="combo-package">
    <div class="combo-package-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8 col-12">
                <div class="left-col">
                    <div class="top-headings">
                        <h2> Let’s Build your Brand Together with Premium Digital Creation Services</h2>
                        <p>If you’re looking to build a brand from scratch or aiming to rejuvenate an already created brand, you’ve come to the right place. Whether you are looking for custom logo design, mobile app development, or any other digital service in USA or anywhere in the world, at Business Logo Design, we handle your brand like our own. Our combo package helps you to kickstart or revitalize your business. Our expert team of brand analysts enable you to cater all your needs keeping you on board at all stages.</p>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary">LET'S GET STARTED</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="right-col">
                    <div class="package-box package-1">
                        <div class="pck-head">
                            <h4 class="pck-title">
                                <span>Startup Combo</span>
                            </h4>
                            <span class="pNote">All you need for building a perfect brand.</span>
                            <div class="pck-price">
                                <h5><span class="dollar">$</span><strong class="price">1999</strong></h5>
                                <strike>$3999 <span> <br>Only</span></strike>
                            </div>
                        </div>
                        <div class="pck-content">
                            <div class="pck-topContent">
                                <ul class="scrollbar">
                                    <li><i class="ic-tik fa-solid fa-check"></i>Unlimited Custom Logo Design Concepts</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>6 Dedicated Designers</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>12-15 Page Website</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>Mobile Responsive</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>Icon Design</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>Business Card, Letterhead, Envelope</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>MS Word Letterhead</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>5 Stock Photos + 3 Banner Designs</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>Complete W3C Certified HTML</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>Complete Deployment</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>Facebook Page Design</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>All Final File Formats</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>Dedicated Account Manager</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>100% Ownership Rights</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>100% Satisfaction Guarantee</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>100% Unique Design Guarantee</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>100% Money Back Guarantee</li>
                                </ul>
                                <span class="pNote"><strong>Add on: </strong> $50 for expedited services</span>
                                <div class="actions">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6 col-6">
                                            <a href="tel:9712574479" class="action-no clearfix pur"> <span><small>Speak with us <br></small>(971) 257-4479</span></a>
                                        </div>
                                        <div class="col-md-6 col-xs-6 col-6">
                                            <a href="javascript:setButtonURL()" class="chat chatt"> <span><small>Want to discuss?<br></small> Live Chat Now</span></a>
                                        </div>
                                    </div>
                                    <a class="btn btn-primary w-100 js-popup-link" href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Combo Package End -->

<!-- About Section Start -->
<section class="about">
    <div class="container">
        <div class="top-headings">
            <h2>Creating a Strong Brand Legacy that Resonates with your Audience and Lasting for Years to Come!</h2>
            <p>Our team of experts at Business Logo Design are highly specialized and experience in creating a brand legacy that not only connects with your audience but carries a legacy that lasts forever. By choosing Business Design Logo, you are on the pathway of growth and success.</p>
        </div>
        <div class="row boxes-container">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="box">
                    <div class="icon-box">
                        <i class="fa-solid fa-chess-queen fa-beat"></i>
                    </div>
                    <h3>01. Strategy</h3>
                    <p>The first step of every successful project is to strategize the whole thing. Our brand managers and analysts help you in strategizing the complete blue print of your project outlining the goals and making sure that those goals are met at the end of project. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="box">
                    <div class="icon-box">
                        <i class="fa-solid fa-pen-nib fa-beat"></i>
                    </div>
                    <h3>02. Design</h3>
                    <p>Our analysts prepare a foolproof strategy to be implemented by our team of skilled and experienced individuals to create an outcome that ensures customer is satisfied 100%.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="box">
                    <div class="icon-box">
                        <i class="fa-solid fa-square-poll-vertical fa-beat"></i>
                    </div>
                    <h3>03. Results</h3>
                    <p>Our commitment to result is the reason we strive for excellence in our work and deliver only the absolute best. We keep on focusing on your needs until you are fully satisfied. </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap">
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary">LET'S GET STARTED</a>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Reviews Section Start -->
<section class="reviews">
    <div class="container">
        <div class="owl-carousel owl-theme" id="reviews-carousel">
            <div class="item">
                <div class="slider-wrap">
                    <div class="slider-content">
                        <div class="top-headings">
                            <h2>Highly Impressed with <br> the service</h2>
                            <p>“We initially thought to go with the logo design services with BLD. While the team was communicative and the communication was excellent, the result was far above our expectations. The team loved it! Would like to avail more services from them in future.”</p>
                        </div>
                    </div>
                    <div class="slider-img">
                        <img loading="lazy" src="assets/images/t1.webp" alt="Business Logo Design">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-wrap">
                    <div class="slider-content">
                        <div class="top-headings">
                            <h2>Top-Notch Service <br> Quality</h2>
                            <p>“I am highly impressed with their designs. We availed the combo package and I must say that it did not disappoint. Our brand has since become a well-known one and we thank Business Logo Design for their services. The account manager was helpful and was communicative at all points in time, helped us to decide on our needs and polish more ideas. Kudos to the team.”</p>
                        </div>
                    </div>
                    <div class="slider-img">
                        <img loading="lazy" src="assets/images/t2.webp" alt="Business Logo Design">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-wrap">
                    <div class="slider-content">
                        <div class="top-headings">
                            <h2>Amazing Team to <br> Work with</h2>
                            <p>“The guys at Business Design Logo are like superheroes. My team had been searching for a company to help us make our digital presence felt worldwide. After trying out many designers individually, we caught up with BDL and they have not disappointed us. They are amazing to work with and their creativity is out of this world.”</p>
                        </div>
                    </div>
                    <div class="slider-img">
                        <img loading="lazy" src="assets/images/t3.webp" alt="Business Logo Design">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Reviews Section End -->

<!-- Partners Section Start -->
<section class="partners">
    <div class="container">
        <div class="top-headings">
            <h2>A Trusted Name in Digital Service Industry <br> Award Winning Brand</h2>
            <p>We believe we are the magicians but actually we are not. It takes a lot of effort to build a brand comprehensively and our team is expert in this task. Having the experience of building more than 100 brands, we trust our ability to deliver the best and proudly serve you at your best.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="img-box">
                    <img src="assets/images/clientimg-1.png" alt="Business Logo Design">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="img-box">
                    <img src="assets/images/clientimg-2.png" alt="Business Logo Design">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="img-box">
                    <img src="assets/images/clientimg-3.png" alt="Business Logo Design">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Partners Section End -->

<!-- Footer Include -->
<?php include 'include/footer.php'; ?>