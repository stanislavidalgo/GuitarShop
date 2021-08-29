const toggleButton = document.getElementsByClassName("toggle-button")[0];
const navbarLinks = document.getElementsByClassName("navbar-links")[0];

toggleButton.addEventListener("click", () => {
  navbarLinks.classList.toggle("active");
});

// galerija============================

function myFunction(imgs) {
  let expandImg = document.getElementById("expandedImg");

  let imgText = document.getElementById("imgtext");

  expandImg.src = imgs.src;

  imgText.innerHTML = imgs.alt;

  expandImg.parentElement.style.display = "block";
}

// scroll up butonas========================================================

$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 40) {
      $("#topBtn").fadeIn();
    } else {
      $("#topBtn").fadeOut();
    }
  });

  $("#topBtn").click(function () {
    $("html ,body").animate({ scrollTop: 0 }, 800);
  });
});
