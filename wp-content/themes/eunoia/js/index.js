jQuery(function ($) {
  $("#navbarNav").on("shown.bs.collapse", function () {
    $("body").addClass("no-scroll");
  });

  $("#navbarNav").on("hidden.bs.collapse", function () {
    $("body").removeClass("no-scroll");
  });
});
