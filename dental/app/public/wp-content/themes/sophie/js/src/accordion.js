jQuery(document).ready(function ($) {
  $(".js-accordion-article").accordion({
    header: ".js-accordion-ttl",
    collapsible: true,
    active: false,
    animate: 200,
  });
});
