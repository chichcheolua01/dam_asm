var btn_out = document.querySelector("#btn-out");
var menu = document.querySelector("#menu");
var btn_menu = document.querySelector("#btn-menu");
var btn_menu_div = document.querySelector("#btn-menu-div");

btn_out.addEventListener("click", function (e) {
  e.preventDefault();
  var count = 0;
  count += 1;
  for (var i = 0; i <= count; i++) {
    if (count % 2 == 1) {
      menu.classList.add("hidden");
      btn_out.classList.add("hidden");
      btn_menu_div.classList.remove("hidden");
    }
  }
});

btn_menu.addEventListener("click", function (e) {
  e.preventDefault();
  var count = 1;
  count += 1;
  for (var i = 0; i <= count; i++) {
    menu.classList.remove("hidden");
    btn_out.classList.remove("hidden");
    btn_menu_div.classList.add("hidden");
  }
});

const images = document.querySelectorAll(".slider");
var current = 0;
function changeImage() {
  setInterval(function () {
    for (let i = 0; i < images.length; i++) {
      images[i].style.opacity = 0;
    }
    if (current > images.length - 2) {
      current = 0;
    } else {
      current = current + 1;
    }
    images[current].style.opacity = 1;
  }, 2000);
}

changeImage();

