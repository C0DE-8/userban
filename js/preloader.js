(function ($) {
  "use strict";

  /*============= preloader js css =============*/
  var cites = [];
  cites[0] =
    "Simplify all your banking and loan methods.";
  cites[1] = "Get your loan approved in 3 steps.";
  cites[2] = "Believing, banking and achieving different.";
  cites[3] = "We're Here To Help";
  cites[4] = "Best Ways to Send Your Money From Anywhere You Like";
  var cite = cites[Math.floor(Math.random() * cites.length)];
  $("#preloader p").text(cite);
  $("#preloader").addClass("loading");

  $(window).on("load", function () {
    setTimeout(function () {
      $("#preloader").fadeOut(500, function () {
        $("#preloader").removeClass("loading");
      });
    }, 500);
  });
})(jQuery);
