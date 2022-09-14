jQuery(document).ready(function ($) {
  $("#news .news-article").accordion({
    header: ".news-title",
    collapsible: true,
    active: false,
    animate: 200,
    heightStyle: "content",
  });
});
