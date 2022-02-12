document.addEventListener("DOMContentLoaded", function () {
  const menu = document.querySelectorAll(".news-article");
  function toggle() {
    const content = this.children[1].querySelector(".news-detail");

    content.classList.toggle("is-active");
    // content.classList.toggle("is-open");
  }

  for (let i = 0; i < menu.length; i++) {
    menu[i].addEventListener("click", toggle);
  }
});
