<!-- Header Include -->
<?php
$pageTitle = "Creative Logo Design Company in USA | Business Logo Design";
$pageDescription = "We are a custom logo design company located in USA. We offer logo design and create memorable brand experience. Creative logo design for business, startups, startups companies and small businesses.";
include 'include/header.php'; ?>

<!-- Banner Section Start -->
<section class="banner">
    <div class="banner-overlay"></div>
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-content">
                    <?php
                    // Check if the 'submitted' parameter in the URL is set to 1
                    if (isset($_GET['submitted']) && $_GET['submitted'] == 1) : ?>
                        <p class="th-alert">Thanks for getting in touch, your query will be answered shortly.</p>
                    <?php endif; ?>
                    <h1 data-aos="fade-down" data-aos-duration="2000">Specialized Logo Design service in just</h1>
                    <h2 class="price">$ 35.99</h2>
                    <!-- <h4>DISCUSS. DESIGN. DEVELOP. MARKET. GROW.</h4> -->
                    <h4><span>+20% OFF</span> on your future orders*</h4>
                    <p data-aos="fade-up" data-aos-duration="2000">Affordable & Professional Logo Designing
                        Services by Industry’s Leading Designers</p>
                    <ul class="banner-list">
                        <li><i class="fa-solid fa-square-check fa-fade"></i>4 Custom Logo Concepts</li>
                        <li><i class="fa-solid fa-square-check fa-fade"></i>FREE Revisions</li>
                        <li><i class="fa-solid fa-square-check fa-fade"></i>FREE File Formats</li>
                        <li><i class="fa-solid fa-square-check fa-fade"></i>100% Money Back Guarantee</li>
                    </ul>
                    <div class="owl-carousel owl-theme" id="logos-carousel">
                        <div class="item">
                            <img src="assets/images/banner-logo-1.webp" alt="Business Logo Design">
                        </div>
                        <div class="item">
                            <img src="assets/images/banner-logo-2.webp" alt="Business Logo Design">
                        </div>
                        <div class="item">
                            <img src="assets/images/banner-logo-3.webp" alt="Business Logo Design">
                        </div>
                        <div class="item">
                            <img src="assets/images/banner-logo-4.webp" alt="Business Logo Design">
                        </div>
                        <div class="item">
                            <img src="assets/images/banner-logo-5.webp" alt="Business Logo Design">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-form" data-aos="fade-left" data-aos-duration="3000">
                    <h3>Activate Your <span>70%</span></h3>
                    <h4>Discount Coupon Now</h4>
                    <form class="bannerForm" id="bannerForm" method="POST" action="form-bootstrap/lead.php" enctype="multipart/form-data">
                        <input type="hidden" id="price" name="price" value="$35.99">
                        <input type="hidden" id="title" name="package" value="LOGO SPECIAL PACKAGE">
                        <input type="hidden" name="source" value="1">
                        <input type="hidden" name="status" value="2">
                        <div class="row">
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <input type="text" name="name" class="form-control name" placeholder="Your Name *">
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <input type="email" class="form-control email" placeholder="Your Email Address *" name="email">
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <input class="form-control phone" type="tel" name="phonenumber" id="phone-banner">
                                        <span id="valid-msg-banner" class="hide">✓ Valid</span>
                                        <span id="error-msg-banner" class="hide"></span>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <textarea name="description" id="project-details" class="form-control" rows="5" placeholder="Tell us about your project *"></textarea>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <ul class="submit-ul">
                                    <li>
                                        <input type="submit" id="banner-submit" value="Activate your Coupon">
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <ul class="submit-ul">
                                    <li>
                                        <a class="chat chatt live_chat" href="javascript:void(0)">Any Confusion? Why not discuss your idea?</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Reviews Section Start -->
<section class="reviews logo-types">
    <div class="container">
        <div class="top-headings">
            <h2>What Type Is <span>Your</span> Logo?</h2>
        </div>
        <div class="owl-carousel owl-theme" id="logo-types-carousel">
            <div class="item">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <img loading="lazy" src="assets/images/logo-types/3d.webp" alt="Business Logo Design">
                    </div>
                    <div class="col-lg-8">
                        <div class="top-headings">
                            <h2>3D Logo Design</h2>
                            <p>Images that incorporate an additional element can make a brand more noticeable and perform exceptionally well on digital platforms. Compared to traditional 2D logos, 3D logo designs stand out more and are easier to remember. They are also an excellent starting point for animation.</p>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary">LET'S GET STARTED</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <img loading="lazy" src="assets/images/logo-types/an-sliderlogo.webp" alt="Business Logo Design">
                    </div>
                    <div class="col-lg-8">
                        <div class="top-headings">
                            <h2>Animated Logo Design</h2>
                            <p>Animated logos are a modern way to gain an advantage in the competitive world of branding. This art form involves creating special effects and designs that can be used in various forms of media, including video games, movies, and even social media posts. From simple effects to full visual presentations, animated logos are an effective way to make your brand stand out.</p>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary">LET'S GET STARTED</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <img loading="lazy" src="assets/images/logo-types/flat.webp" alt="Business Logo Design">
                    </div>
                    <div class="col-lg-8">
                        <div class="top-headings">
                            <h2>Flat Logo Design</h2>
                            <p>A flat logo design is a simple 2D image with a silhouette that often doesn't include highlights, shadows, or intricate details. This type of design is popular when the focus is on typography and conveying a meaningful message with minimal elements.</p>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary">LET'S GET STARTED</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <img loading="lazy" src="assets/images/logo-types/icon-based.webp" alt="Business Logo Design">
                    </div>
                    <div class="col-lg-8">
                        <div class="top-headings">
                            <h2>Icon Based Logo</h2>
                            <p>A brand mark or logo symbol is a pictorial or iconic representation of a real entity that can be the first image that comes to mind when thinking of a logo. This graphic emphasizes your brand and creates a lasting identity.</p>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary">LET'S GET STARTED</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <img loading="lazy" src="assets/images/logo-types/illustrative.webp" alt="Business Logo Design">
                    </div>
                    <div class="col-lg-8">
                        <div class="top-headings">
                            <h2>Illustrative Logo Design</h2>
                            <p>An illustrative logo design is composed of intricate design elements, such as diagrams or drawings, that effectively communicate what the company does and tell its story. This type of logo focuses on the overall look, incorporating colors, fonts, and layouts to create a unique and original image. Illustrators are particularly skilled at creating specific images that convey a sense of originality.</p>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary">LET'S GET STARTED</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <img loading="lazy" src="assets/images/logo-types/abstract.webp" alt="Business Logo Design">
                    </div>
                    <div class="col-lg-8">
                        <div class="top-headings">
                            <h2>Abstract Logo Design</h2>
                            <p>An abstract logo design is a symbol or image that may not be immediately recognizable, but rather a complex design that conveys your brand in a more theoretical way. This category has the ability to incorporate layers of meaning into an image, making it a memorable and thought-provoking design that can spark discussion.</p>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary">LET'S GET STARTED</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <img loading="lazy" src="assets/images/logo-types/mascot-logo.webp" alt="Business Logo Design">
                    </div>
                    <div class="col-lg-8">
                        <div class="top-headings">
                            <h2>Mascot Logo Design</h2>
                            <p>A mascot logo design is an image that represents a recognizable ambassador of a brand, often in the form of a relatable cartoon character that helps audiences easily connect and understand the company or brand. This type of logo design originated from the sports industry and tends to be more noticeable and memorable.</p>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary">LET'S GET STARTED</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <img loading="lazy" src="assets/images/logo-types/typo.webp" alt="Business Logo Design">
                    </div>
                    <div class="col-lg-8">
                        <div class="top-headings">
                            <h2>Typography Logo Design</h2>
                            <p>Typography logo design is a form of text-based imagery that may incorporate symbols or codes as well. This type of logo is a simple and affordable option for new startups looking to establish their identity. It's worth noting that many typography designs have a great deal of design expertise behind them.</p>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary">LET'S GET STARTED</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Reviews Section End -->

<!-- CTA 1 Section Start -->
<section class="cta cta-1">
    <div class="container">
        <div class="row">
            <div class="top-headings">
                <h2><span>SHOW-OFF</span> your <span>Brand’s Persona</span> and <br>Transform Into a <span>Revenue Multiplying Entity</span></h2>
            </div>
            <button class="theme-btn-links">
                <ul>
                    <li><i class="fa-solid fa-comments fa-beat"></i><a class="chat chatt live_chat" href="javascript:void(0)">LIVE CHAT</a></li>
                    <li><i class="ic-3 fa-solid fa-phone fa-beat"></i><a href="tel:9712574479" target="_blank">CALL US: (971) 257-4479</a></li>
                </ul>
            </button>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary">LET'S GET STARTED</a>
        </div>
    </div>
</section>
<!-- CTA 1 Section End -->

<!-- Portfolio Section Start -->
<section class="portfolio">
    <div class="container">
        <div class="top-headings">
            <h2>Explore our <span>Decades</span> Long <span>Collection</span></h2>
        </div>
        <div class="row portfolio-row-1">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="assets/images/logos-portfolio/01.webp" alt="Business Logo Design">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="assets/images/logos-portfolio/02.webp" alt="Business Logo Design">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="assets/images/logos-portfolio/03.webp" alt="Business Logo Design">
            </div>
        </div>
        <div class="row portfolio-row-2">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="assets/images/logos-portfolio/04.webp" alt="Business Logo Design">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="assets/images/logos-portfolio/05.webp" alt="Business Logo Design">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="assets/images/logos-portfolio/06.webp" alt="Business Logo Design">
            </div>
        </div>
        <div class="row portfolio-row-3">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="assets/images/logos-portfolio/07.webp" alt="Business Logo Design">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="assets/images/logos-portfolio/08.webp" alt="Business Logo Design">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="assets/images/logos-portfolio/09.webp" alt="Business Logo Design">
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
            <h2> Affordable & Professional <span>Logo Designing</span> Packages</h2>
            <p>Let’s get started and define parameters yourself we don’t want to limit the Creative Work.</p>
        </div>
    </div>
    <div class="container">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-trademark-registration" role="tabpanel" aria-labelledby="pills-trademark-registration-tab">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="owl-carousel owl-theme" id="packages-carousel">
                            <div class="item">
                                <div class="package-box package-1">
                                    <div class="pck-head">
                                        <h4 class="pck-title">
                                            <span>LOGO SPECIAL PACKAGE</span>
                                        </h4>
                                        <!-- <span class="pNote">For businesses waiting to introduce or reintroduce themselves in market</span> -->
                                        <div class="pck-price">
                                            <h5><span class="dollar">$</span><strong class="price">35.99</strong></h5>
                                            <strike>$119 <span> <br>70% OFF!</span></strike>
                                        </div>
                                    </div>
                                    <div class="pck-content">
                                        <div class="pck-topContent">
                                            <ul class="scrollbar">
                                                <li> <i class="ic-tik fa-solid fa-check"></i>4 Original Logo Concepts</li>
                                                <li> <i class="ic-tik fa-solid fa-check"></i>2 Dedicated Logo Designer</li>
                                                <li> <i class="ic-tik fa-solid fa-check"></i>Unlimited Revisions</li>
                                                <li> <i class="ic-tik fa-solid fa-check"></i>JPEG Format</li>
                                                <li> <i class="ic-tik fa-solid fa-check"></i>24 - 48 Hours Turn Around Time</li>
                                                <li class="features">MORE FEATURES</li>
                                                <li> <i class="ic-tik fa-solid fa-check"></i>100% Satisfaction</li>
                                                <li> <i class="ic-tik fa-solid fa-check"></i>Money Back Guarantee</li>
                                                <li> <i class="ic-tik fa-solid fa-check"></i>Dedicated Account Manager</li>
                                            </ul>
                                            <!-- <span class="pNote"><strong>20%</strong> more OFF on Next Order</span> -->
                                            <div class="actions">
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-6 col-6">
                                                        <a href="tel:9712574479" class="action-no clearfix pur"> <span><small>Speak with us <br></small>(971) 257-4479</span></a>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 col-6">
                                                        <a href="javascript:setButtonURL()" class="chat chatt"> <span><small>Want to discuss?<br></small> Live Chat Now</span></a>
                                                    </div>
                                                </div>
                                                <a class="btn btn-primary w-100 js-popup-link popup_form_price_change" href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-package_name="LOGO SPECIAL PACKAGE"  data-package_price="35.99">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="package-box package-1">
                                    <div class="pck-head">
                                        <h4 class="pck-title">
                                            <span>LOGO PLUS PACKAGE</span>
                                        </h4>
                                        <!-- <span class="pNote">Best seller for start-ups looking to establish a brand</span> -->
                                        <div class="pck-price">
                                            <h5><span class="dollar">$</span><strong class="price">119.99</strong></h5>
                                            <strike>$399 <span> <br>70% OFF!</span></strike>
                                        </div>
                                    </div>
                                    <div class="pck-content">
                                        <div class="pck-topContent">
                                            <ul class="scrollbar">
                                                <li> <i class="ic-tik fa-solid fa-check"></i>12 Original Logo Concepts</li>
                                                <li> <i class="ic-tik fa-solid fa-check"></i>4 Dedicated Logo Designer (Industry Specific)</li>
                                                <li> <i class="ic-tik fa-solid fa-check"></i>Unlimited Revisions</li>
                                                <li> <i class="ic-tik fa-solid fa-check"></i>Stationery Design (Business Card, Letterhead, Envelope)</li>
                                                <li> <i class="ic-tik fa-solid fa-check"></i>Free Icon Design</li>
                                                <li> <i class="ic-tik fa-solid fa-check"></i>Final File Formats</li>
                                                <li> <i class="ic-tik fa-solid fa-check"></i>24 - 48 Hours Turn Around Time</li>
                                                <li class="features">MORE FEATURES</li>
                                                <li> <i class="ic-tik fa-solid fa-check"></i>100% Satisfaction</li>
                                                <li> <i class="ic-tik fa-solid fa-check"></i>100% Ownership Price</li>
                                                <li> <i class="ic-tik fa-solid fa-check"></i>Money Back Guarantee</li>
                                                <li> <i class="ic-tik fa-solid fa-check"></i>Dedicated Account Manager</li>
                                            </ul>
                                            <!-- <span class="pNote"><strong>20%</strong> more OFF on Next Order</span> -->
                                            <div class="actions">
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-6 col-6">
                                                        <a href="tel:9712574479" class="action-no clearfix pur"> <span><small>Speak with us <br></small>(971) 257-4479</span></a>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 col-6">
                                                        <a href="javascript:setButtonURL()" class="chat chatt"> <span><small>Want to discuss?<br></small> Live Chat Now</span></a>
                                                    </div>
                                                </div>
                                                <a class="btn btn-primary w-100 js-popup-link popup_form_price_change" href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-package_name="LOGO PLUS PACKAGE"  data-package_price="119.99">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="package-box package-1">
                                    <div class="pck-head">
                                        <h4 class="pck-title">
                                            <span>LOGO PLATINUM PACKAGE</span>
                                        </h4>
                                        <!-- <span class="pNote">Communicate your message visually to your target audience</span> -->
                                        <div class="pck-price">
                                            <h5><span class="dollar">$</span><strong class="price">299.99</strong></h5>
                                            <strike>$999 <span> <br>70% OFF!</span></strike>
                                        </div>
                                    </div>
                                    <div class="pck-content">
                                        <div class="pck-topContent">
                                            <ul class="scrollbar">
                                                <li><i class="ic-tik fa-solid fa-check"></i>Unlimited Logo Concepts</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>8 Dedicated Logo Designer (Industry Specific)</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Unlimited Revisions</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Stationery Design (Business Card, Letterhead, Envelope)</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>500 Business Cards Print</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>With Grey Scale Format</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Free Icon Design</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Final File Formats</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>24 - 48 Hours Turn Around Time</li>
                                                <li class="features">MORE FEATURES</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>100% Satisfaction</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Money Back Guarantee</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Dedicated Account Manager</li>
                                            </ul>
                                            <!-- <span class="pNote"><strong>20%</strong> more OFF on Next Order</span> -->
                                            <div class="actions">
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-6 col-6">
                                                        <a href="tel:9712574479" class="action-no clearfix pur"> <span><small>Speak with us <br></small>(971) 257-4479</span></a>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 col-6">
                                                        <a href="javascript:setButtonURL()" class="chat chatt"> <span><small>Want to discuss?<br></small> Live Chat Now</span></a>
                                                    </div>
                                                </div>
                                                <a class="btn btn-primary w-100 js-popup-link popup_form_price_change" href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-package_name="LOGO PLATINUM PACKAGE"  data-package_price="299.99">Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="package-box package-1">
                                    <div class="pck-head">
                                        <h4 class="pck-title">
                                            <span>GOLD PACKAGE</span>
                                        </h4>
                                        <!-- <span class="pNote">Engage with your audience and enhance your social presence *Text edit Cancel Anytime</span> -->
                                        <div class="pck-price">
                                            <h5><span class="dollar">$</span><strong class="price">499.99</strong></h5>
                                            <strike>$1666 <span> <br>70% OFF!</span></strike>
                                        </div>
                                    </div>
                                    <div class="pck-content">
                                        <div class="pck-topContent">
                                            <ul class="scrollbar">
                                                <li><i class=" ic-tik fa-solid fa-check"></i>Unlimited Original Logo Concepts</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>8 Dedicated Logo Designer (Industry Specific)</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i> Unlimited Revisions</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Stationery Design (Business Card, Letterhead, Envelope)</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Social Media Design On Two Platforms</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>1000 Business Cards</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Email Signature Design</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>With Grey Scale Format</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Free Icon Design</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Formats: PNG, PDF, JPEG, PSD, EPS, AI, PNG, TIFF</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>24 - 48 Hours Turn Around Time</li>
                                                <li class="features">MORE FEATURES</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>100% Satisfaction</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Money Back Guarantee</li>
                                                <li><i class="ic-tik fa-solid fa-check"></i>Dedicated Account Manager</li>
                                            </ul>
                                            <!-- <span class="pNote"><strong>20%</strong> more OFF on Next Order</span> -->
                                            <div class="actions">

                                                <div class="row">
                                                    <div class="col-md-6 col-xs-6 col-6">
                                                        <a href="tel:9712574479" class="action-no clearfix pur"> <span><small>Speak with us <br></small>(971) 257-4479</span></a>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 col-6">
                                                        <a href="javascript:setButtonURL()" class="chat chatt"> <span><small>Want to discuss?<br></small> Live Chat Now</span></a>
                                                    </div>
                                                </div>
                                                <a class="btn btn-primary w-100 js-popup-link popup_form_price_change" href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-package_name="GOLD PACKAGE"  data-package_price="499.99">Get Started</a>
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
                        <h3>A 1 Stop Value for all <span>Start-Ups</span> and <span>Businesses</span></h3>
                        <h2> All-In-One Combo</h2>
                        <p>Our <strong>All-in-1 Combo</strong> suitable for startups and business looking for repositioning and a fresh new feel to enhance their <strong>Digital Presence</strong> and <strong>Reach.</strong> Benefit from All-in-1 Combo designed to meet your needs.</p>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary">LET'S GET STARTED</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="right-col">
                    <div class="package-box package-1">
                        <div class="pck-head">
                            <h4 class="pck-title">
                                <span>BUSINESS PLATINUM LOGO PACKAGE</span>
                            </h4>
                            <span class="pNote">Complete Branding Solution.</span>
                            <div class="pck-price">
                                <h5><span class="dollar">$</span><strong class="price">999.99</strong></h5>
                                <strike>$3333 <span> <br>70% OFF</span></strike>
                            </div>
                        </div>
                        <div class="pck-content">
                            <div class="pck-topContent">
                                <ul class="scrollbar">
                                    <li><i class="ic-tik fa-solid fa-check"></i>Unlimited Original Logo Concepts </li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>12 Dedicated Logo Designer (Industry Specific) </li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>Unlimited Revisions </li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>7 Page Informative Website </li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>Stationery Design (Business Card, Letterhead, Envelope) </li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>Brand Book</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>500 Business Cards</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>500 Letterheads</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>Email Signature Design</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>Social Media Designs (Facebook, Twitter, Instagram)</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>2 Sided Flyer OR Bi-Fold Brochure Design</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>With Grey Scale Format </li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>Free Icon Design </li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>Formats: JPEG, PSD, EPS, AI, PNG, TIFF, SVG</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>24 - 48 Hours Turn Around Time</li>
                                    <li><i class="ic-tik fa-solid fa-check"></i><span>MORE FEATURES</span></li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>100% Satisfaction </li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>100% Ownership Rights </li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>Money Back Guarantee </li>
                                    <li><i class="ic-tik fa-solid fa-check"></i>Dedicated Account Manager </li>
                                </ul>
                                <!-- <span class="pNote"><strong>Add on: </strong> $50 for expedited services</span> -->
                                <div class="actions">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6 col-6">
                                            <a href="tel:9712574479" class="action-no clearfix pur"> <span><small>Speak with us <br></small>(971) 257-4479</span></a>
                                        </div>
                                        <div class="col-md-6 col-xs-6 col-6">
                                            <a href="javascript:setButtonURL()" class="chat chatt"> <span><small>Want to discuss?<br></small> Live Chat Now</span></a>
                                        </div>
                                    </div>
                                    <a class="btn btn-primary w-100 js-popup-link popup_form_price_change" href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-package_name="BUSINESS PLATINUM LOGO PACKAGE"  data-package_price="999.99">Get Started</a>
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
            <h2>Our <span>Process</span></h2>
            <p>Our order process comprises of 4 easy & simple steps that will save you a great deal of time.</p>
        </div>
        <div class="row boxes-container">
            <div class="col-lg-3 col-md-3 col-12">
                <div class="box">
                    <div class="icon-box">
                        <i class="fa-solid fa-book-open fa-beat"></i>
                    </div>
                    <h3>DEFINITION</h3>
                    <p>At our company, we believe in transparency by sharing our expertise and ensuring constant communication throughout any project. </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="box">
                    <div class="icon-box">
                        <i class="fa-solid fa-people-arrows fa-beat"></i>
                    </div>
                    <h3>DISCUSSION</h3>
                    <p>We strive to create a perfect blend of your brand personality, focusing on user-friendliness and effective communication to achieve your business objectives and establish your identity.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="box">
                    <div class="icon-box">
                        <i class="fa-solid fa-pen-nib fa-beat"></i>
                    </div>
                    <h3>DESIGN</h3>
                    <p>Our team of creative thinkers with innovative design skills guarantees that our designs will leave a lasting impression on both you and your audience.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="box">
                    <div class="icon-box">
                        <i class="fa-solid fa-list-check fa-beat"></i>
                    </div>
                    <h3>REVOLUTIONIZE</h3>
                    <p>Our goal is to serve you, not just during the project, but until you are completely satisfied with the end result. We promise to handle everything to ensure your satisfaction.</p>
                </div>
            </div>
        </div>
        <div class="btn-wrap">
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary">LET'S GET STARTED</a>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- CTA 2 Section Start -->
<section class="cta cta-1">
    <div class="container">
        <div class="row">
            <div class="top-headings">
                <h2>Have Any<span> Question?</span><br>We Are <span>Here 24x7!</span></h2>
            </div>
            <button class="theme-btn-links">
                <ul>
                    <li><i class="fa-solid fa-comments fa-beat"></i><a class="chat chatt live_chat" href="javascript:void(0)">LIVE CHAT</a></li>
                    <li><i class="ic-3 fa-solid fa-phone fa-beat"></i><a href="tel:9712574479" target="_blank">CALL US: (971) 257-4479</a></li>
                </ul>
            </button>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary">LET'S GET STARTED</a>
        </div>
    </div>
</section>
<!-- CTA 2 Section End -->

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
            <h2>Awards & <span>Recognitions</span></h2>
            <p>We've been Honored & Recognized for our Outstanding Achievements in the Industry.</p>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-12">
                <div class="img-box">
                    <img src="assets/images/pldaward.webp" alt="Business Logo Design">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
                <div class="img-box">
                    <img src="assets/images/pldaward2.webp" alt="Business Logo Design">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
                <div class="img-box">
                    <img src="assets/images/pldaward3.webp" alt="Business Logo Design">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
                <div class="img-box">
                    <img src="assets/images/pldaward4.webp" alt="Business Logo Design">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
                <div class="img-box">
                    <img src="assets/images/pldaward5.webp" alt="Business Logo Design">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
                <div class="img-box">
                    <img src="assets/images/pldaward6.webp" alt="Business Logo Design">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Partners Section End -->

<!-- Footer Include -->
<?php include 'include/footer.php'; ?>