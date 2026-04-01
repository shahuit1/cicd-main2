<!-- Header Include -->
<?php
$pageTitle = "Brief Form | Business Logo Design";
$pageDescription = "";
include 'include/header.php'; ?>

<!-- Banner Section Start -->
<section class="banner inner-banner">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-lg-12">
                <div class="banner-content">
                    <h1 data-aos="fade-down" data-aos-duration="2000">Brief Form</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Checkout Section Start -->
<section class="privacy-terms checkout brief-form">
    <div class="container">
        <h2 class="mb-5">Logo Design Service Request</h2>
        <form id="brief-form">

            <input type="hidden" name="lead_id" value="<?= $_GET['lead_id'] ?>">
            <input type="hidden" name="source" value="https://businesslogodesign.us">
            <!-- Business Name Input -->
            <div class="mb-5">
                <label for="businessName" class="form-label">Business Name</label>
                <input type="text" class="form-control" id="businessName" name="businessName" placeholder="Enter your business name" required>
            </div>

            <!-- Industry Type -->
            <div class="mb-5">
                <label for="industryType" class="form-label">Industry Type</label>
                <input type="text" class="form-control" id="industryType" name="industryType" placeholder="E.g., Technology, Healthcare, Fashion" required>
            </div>

            <!-- Tagline or Slogan -->
            <div class="mb-5">
                <label for="tagline" class="form-label">Tagline or Slogan (Optional)</label>
                <input type="text" class="form-control" id="tagline" name="tagline" placeholder="Enter a tagline or slogan (if any)">
            </div>

            <!-- Logo Type Preferences -->
            <div class="mb-5">
                <label for="logoType" class="form-label">Logo Type Preferences</label>
                <select class="form-select" id="logoType" name="logoType" required>
                    <option value="" selected disabled>Choose a logo type</option>
                    <option value="wordmark">Wordmark (Text-Based)</option>
                    <option value="iconic">Iconic (Symbol + Text)</option>
                    <option value="abstract">Abstract</option>
                    <option value="mascot">Mascot</option>
                    <option value="lettermark">Lettermark (Initials)</option>
                </select>
            </div>

            <!-- Preferred Design Style -->
            <div class="mb-5">
                <label for="designStyle" class="form-label">Preferred Design Style</label>
                <select class="form-select" id="designStyle" name="designStyle" required>
                    <option value="" selected disabled>Choose a style</option>
                    <option value="minimal">Minimalist</option>
                    <option value="modern">Modern</option>
                    <option value="vintage">Vintage</option>
                    <option value="abstract">Abstract</option>
                    <option value="playful">Playful</option>
                </select>
            </div>

            <!-- Color Preferences -->
            <div class="mb-5">
                <label for="colorPreferences" class="form-label">Color Preferences</label>
                <input type="text" class="form-control" id="colorPreferences" name="colorPreferences" placeholder="E.g., Blue, Red, Black" required>
            </div>

            <!-- Additional Information -->
            <div class="mb-5">
                <label for="additionalInfo" class="form-label">Additional Information</label>
                <textarea class="form-control" id="additionalInfo" name="additionalInfo" rows="4" placeholder="Provide any additional details or requests..." required></textarea>
            </div>

            <!-- Submit Button -->
            <button type="button" id="post_brief" class="btn btn-primary">Submit Request</button>
        </form>

    </div>
</section>
<!-- Checkout Section End -->


<!-- Footer Include -->
<?php include 'include/footer.php'; ?>

<!-- CRM Service -->
<script>
    var api_base_url = "https://dashboard.businesslogodesign.us/dynamic_form/api/"
    var form = $('#brief-form')

    $(document).ready(function() {

        $(document).on('click', '#post_brief', function(e) {
            e.preventDefault();
            submitBrief();
        })
    })

    async function getApiToken() {
        let endpoint = "token";

        let response = await $.get(api_base_url + endpoint);
        return JSON.parse(response);
    }

    async function submitBrief() {
        let package_name = "<?= $_GET['package'] ?>";
        let package_price = "<?= $_GET['price'] ?>";
        // let api_token = await getApiToken();
        var formData = new FormData(form[0]);
        formData.append("package_name", package_name);
        await $.ajax({
            url: api_base_url + "post/1/", // here 1 is form ID which represents type of form
            cache: false,
            type: "post",
            dataType: 'json',
            contentType: false,
            processData: false,
            data: formData,
            success: function(response) {
                if (response.status == true) {
                    // let payment_page_url = "../checkout.php?lead_id=" + <?= $_GET['lead_id'] ?> + "&package=<?= urlencode($_GET['package']) ?>" + "&price=<?= urlencode($_GET['price']) ?>";
                    let payment_page_url = "checkout.php?lead_id=" + <?= $_GET['lead_id'] ?> + "&package=" + package_name + "&price=" + package_price;
                    window.location = payment_page_url;
                } else {
                    alert(response.message);
                }
            }
        });
    }


    $('.wrapper').before('<h2 class="country-orign">Select Country of Origin <span class="text-tm-red-required">*</span></h2>');

    $('.mt-3').eq(1).hide();
    $('.mt-3').eq(2).hide();
    $('.mt-3').eq(3).hide();
    $('.mt-3').eq(4).hide();

    $('input[type="checkbox"]').change(function() {
        if ($('input[type="checkbox"]').eq(0).is(':checked')) {
            $('input[type="checkbox"]').eq(0).parent().css('background', '#EFF6FF');
            $('.mt-3').eq(1).show();

        } else {
            $('input[type="checkbox"]').eq(0).parent().css('background', '#fff');
            $('.mt-3').eq(1).hide();
        }

        if ($('input[type="checkbox"]').eq(1).is(':checked')) {
            $('input[type="checkbox"]').eq(1).parent().css('background', '#EFF6FF');
            $('.mt-3').eq(2).show();

        } else {
            $('input[type="checkbox"]').eq(1).parent().css('background', '#fff');
            $('.mt-3').eq(2).hide();

        }

        if ($('input[type="checkbox"]').eq(2).is(':checked')) {
            $('input[type="checkbox"]').eq(2).parent().css('background', '#EFF6FF');
            $('.mt-3').eq(3).show();
        } else {
            $('input[type="checkbox"]').eq(2).parent().css('background', '#fff');
            $('.mt-3').eq(3).hide();
        }

        if ($('input[type="checkbox"]').eq(3).is(':checked')) {
            $('input[type="checkbox"]').eq(3).parent().css('background', '#EFF6FF');
            $('.mt-3').eq(4).show();
        } else {
            $('input[type="checkbox"]').eq(3).parent().css('background', '#fff');
            $('.mt-3').eq(4).hide();
        }
    })


    $('input[type="file"]').change(function() {
        var logoUpload = $('input[type="file"]').eq(0).val().split('\\')[2]
        $('.brandlogo').text(logoUpload)
    })

    $('input[type="file"]').change(function() {
        var logoUpload = $('input[type="file"]').eq(1).val().split('\\')[2]
        $('.brandaudio').text(logoUpload)
    })
</script>

<!--Package Select Form Button Script-->
<script>
    // Disable the button by default
    // document.getElementById("post_brief").disabled = true;

    // // Add event listener to elements with class "package-select"
    // var packageSelectInputs = document.getElementsByClassName("package-select");
    // for (var i = 0; i < packageSelectInputs.length; i++) {
    //     packageSelectInputs[i].addEventListener("click", function() {
    //         // Enable the button when any element with class "package-select" is clicked
    //         document.getElementById("post_brief").disabled = false;
    //     });
    // }
</script>