// On Click Service Change
$(".change_selected_service_field").click(function (e) {
  let service_type = $(this).data("service");
  $("#selected_service_field").val(service_type);
});

// Internationl Phone Field List With Validation For Banner Form
document.addEventListener("DOMContentLoaded", function () {
  const input = document.querySelector("#phone");
  // const button = document.querySelector("#banner-submit");
  const errorMsg = document.querySelector("#error-msg");
  const validMsg = document.querySelector("#valid-msg");
  const form = document.querySelector("#bannerForm"); // Assuming the form has an ID of 'yourFormId'

  const iti = window.intlTelInput(input, {
    initialCountry: "auto",
    geoIpLookup: (callback) => {
      fetch("https://ipapi.co/json")
        .then((res) => res.json())
        .then((data) => callback(data.country_code))
        .catch(() => callback("us"));
    },
    strictMode: true,
    separateDialCode: true,
    fixDropdownWidth: true,
    validationNumberType: "MOBILE",
    nationalMode: true,
    hiddenInput: () => ({ phone: "phonenumber", country: "country_code" }),
  });

  const errorMap = [
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
  ];

  const reset = () => {
    input.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("hide");
    validMsg.classList.add("hide");
  };

  const showError = (msg) => {
    input.classList.add("error");
    errorMsg.innerHTML = msg;
    errorMsg.classList.remove("hide");
  };

  form.addEventListener("submit", (event) => {
    reset();
    let valid = true;

    if (!input.value.trim()) {
      showError("please enter phone number.");
      valid = false;
    } else if (iti.isValidNumber()) {
      // validMsg.classList.remove("hide");
    } else {
      const errorCode = iti.getValidationError();
      const msg = errorMap[errorCode] || "phone number is not valid.";
      showError(msg);
      valid = false;
    }

    if (!valid) {
      event.preventDefault();
    }
  });

  input.addEventListener("change", reset);
  input.addEventListener("keyup", reset);
});

// Internationl Phone Field List With Validation For Contact Form
document.addEventListener("DOMContentLoaded", function () {
  const input = document.querySelector("#phone-contact");
  // const button = document.querySelector("#contact-submit");
  const errorMsg = document.querySelector("#error-msg-contact");
  const validMsg = document.querySelector("#valid-msg-contact");
  const form = document.querySelector("#contactForm"); // Assuming the form has an ID of 'yourFormId'

  const iti = window.intlTelInput(input, {
    initialCountry: "auto",
    geoIpLookup: (callback) => {
      fetch("https://ipapi.co/json")
        .then((res) => res.json())
        .then((data) => callback(data.country_code))
        .catch(() => callback("us"));
    },
    strictMode: true,
    separateDialCode: true,
    fixDropdownWidth: true,
    validationNumberType: "MOBILE",
    nationalMode: true,
    hiddenInput: () => ({ phone: "phonenumber", country: "country_code" }),
  });

  const errorMap = [
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
  ];

  const reset = () => {
    input.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("hide");
    validMsg.classList.add("hide");
  };

  const showError = (msg) => {
    input.classList.add("error");
    errorMsg.innerHTML = msg;
    errorMsg.classList.remove("hide");
  };

  form.addEventListener("submit", (event) => {
    reset();
    let valid = true;

    if (!input.value.trim()) {
      showError("please enter phone number.");
      valid = false;
    } else if (iti.isValidNumber()) {
      // validMsg.classList.remove("hide");
    } else {
      const errorCode = iti.getValidationError();
      const msg = errorMap[errorCode] || "phone number is not valid.";
      showError(msg);
      valid = false;
    }

    if (!valid) {
      event.preventDefault();
    }
  });

  input.addEventListener("change", reset);
  input.addEventListener("keyup", reset);
});

// Internationl Phone Field List With Validation For Popup Form
document.addEventListener("DOMContentLoaded", function () {
  const input = document.querySelector("#popup-footer");
  // const button = document.querySelector("#footer-submit");
  const errorMsg = document.querySelector("#error-msg-popup");
  const validMsg = document.querySelector("#valid-msg-popup");
  const form = document.querySelector("#popupForm"); // Assuming the form has an ID of 'yourFormId'

  const iti = window.intlTelInput(input, {
    initialCountry: "auto",
    geoIpLookup: (callback) => {
      fetch("https://ipapi.co/json")
        .then((res) => res.json())
        .then((data) => callback(data.country_code))
        .catch(() => callback("us"));
    },
    strictMode: true,
    separateDialCode: true,
    fixDropdownWidth: true,
    validationNumberType: "MOBILE",
    nationalMode: true,
    hiddenInput: () => ({ phone: "phonenumber", country: "country_code" }),
  });

  const errorMap = [
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
  ];

  const reset = () => {
    input.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("hide");
    validMsg.classList.add("hide");
  };

  const showError = (msg) => {
    input.classList.add("error");
    errorMsg.innerHTML = msg;
    errorMsg.classList.remove("hide");
  };

  form.addEventListener("submit", (event) => {
    reset();
    let valid = true;

    if (!input.value.trim()) {
      showError("please enter phone number.");
      valid = false;
    } else if (iti.isValidNumber()) {
      // validMsg.classList.remove("hide");
    } else {
      const errorCode = iti.getValidationError();
      const msg = errorMap[errorCode] || "phone number is not valid.";
      showError(msg);
      valid = false;
    }

    if (!valid) {
      event.preventDefault();
    }
  });

  input.addEventListener("change", reset);
  input.addEventListener("keyup", reset);
});

// Header BG on Scroll Change
// $(document).ready(function () {
//   $(window).scroll(function () {
//     if ($(this).scrollTop() > 0) {
//       $("header").css({
//         background: "#fff",
//         "box-shadow": "0px 10px 20px -10px rgba(0, 0, 0, 0.2)",
//       });
//     } else {
//       $("header").css({
//         background: "#ffffffeb",
//         "box-shadow": "none",
//       });
//     }
//   });
// });

// Packages Item Hide
$(document).ready(function () {
  // Initially hide all list items except the 'hide-list' items
  $("#datalist li").each(function () {
    if (
      !$(this).hasClass("hide-list") &&
      $(this).prev().hasClass("hide-list")
    ) {
      $(this).hide();
    }
  });

  $("#datalist .hide-list").click(function () {
    var nextItems = $(this).nextUntil(".hide-list");
    nextItems.toggle(); // Toggle visibility of related items
    var icon = $(this).find("i");
    if (nextItems.is(":visible")) {
      icon.removeClass("fa-plus").addClass("fa-minus");
    } else {
      icon.removeClass("fa-minus").addClass("fa-plus");
    }
  });
});

// Reviews Carousel JS
$(document).ready(function () {
  $("#reviews-carousel").owlCarousel({
    loop: true,
    margin: 0,
    dots: true,
    responsiveClass: true,

    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      600: {
        items: 1,
        nav: false,
      },
      1000: {
        items: 1,
        nav: false,
        loop: false,
      },
    },
  });
});

// Dropdown Menu on Hover
$(document).ready(function () {
  function applyDropdownHover() {
    if ($(window).width() >= 991) {
      $(".dropdown").hover(
        function () {
          $(this)
            .find(".dropdown-menu")
            .stop(true, true)
            .delay(200)
            .slideDown(300);
        },
        function () {
          $(this)
            .find(".dropdown-menu")
            .stop(true, true)
            .delay(200)
            .slideUp(300);
        }
      );
    } else {
      $(".dropdown").off("mouseenter mouseleave"); // Remove the hover event if the window width is greater than 991px
    }
  }

  // Apply the function on page load
  applyDropdownHover();

  // Reapply the function on window resize
  $(window).resize(function () {
    applyDropdownHover();
  });
});

// Banner Reviews Carousel JS
$(document).ready(function () {
  $("#banner-carousel").owlCarousel({
    loop: true,
    margin: 0,
    dots: true,
    autoplay: true,
    responsiveClass: true,

    responsive: {
      0: {
        items: 2,
        nav: false,
      },
      600: {
        items: 2,
        nav: false,
      },
      1000: {
        items: 2,
        nav: false,
        loop: false,
      },
    },
  });
});

// Counter Section JS Start
$(document).ready(function () {
  $(".counter h4").each(function () {
    $(this)
      .prop("Counter", 0)
      .animate(
        {
          Counter: $(this).text(),
        },
        {
          duration: 4000,
          easing: "swing",
          step: function (now) {
            $(this).text(Math.ceil(now));
          },
        }
      );
  });
});

// Scroll Top Button JS
// Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

// Packages Carousel JS
$(document).ready(function () {
  $(
    "#packages-carousel, #packages-carousel-1, #packages-carousel-2, #packages-carousel-3, #packages-carousel-4, #packages-carousel-5, #packages-carousel-6"
  ).owlCarousel({
    loop: true,
    margin: 30,
    dots: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      600: {
        items: 1,
        nav: false,
      },
      1000: {
        items: 3,
        nav: false,
        loop: false,
      },
    },
  });
});

// Reviews Carousel Main Page JS
$(document).ready(function () {
  $("#reviews-carousel-main").owlCarousel({
    loop: true,
    margin: 0,
    dots: true,
    responsiveClass: true,

    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      600: {
        items: 1,
        nav: false,
      },
      1000: {
        items: 2,
        nav: false,
        loop: false,
      },
    },
  });
});
