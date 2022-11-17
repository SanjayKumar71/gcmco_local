// Pre Loader Js
$(window).on("load", function () {
  console.log("test");
  $("#preloader").fadeOut(1000);
});
// Pre Loader Js

// Mobile Header Js
$("header .canvas_btn").click(function () {
  $(".mobile_header").addClass("show");
});

$(".mobile_header .cancel").click(function () {
  $(".mobile_header").removeClass("show");
});
// Mobile Header Js

// Quantity Counter
$("document").ready(function () {
  $("button.addCount").click(function () {
    getID = $(this).attr("getid");

    var value = parseInt(document.getElementById(getID).value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById(getID).value = value;
  });
  $("button.removeCount").click(function () {
    getID = $(this).attr("getid");

    var value = parseInt(document.getElementById(getID).value, 10);
    value = isNaN(value) ? 0 : value;
    value--;
    document.getElementById(getID).value = value;
  });
});
// Quantity Counter

// Menu Active Js
// const CurrentLocation = location.href;
// const menuItem = document.querySelectorAll(".navs-menu li a");
// const menuLength = menuItem.length;
// for (let i = 0; i < menuLength; i++) {
//   if (menuItem[i].href === CurrentLocation) {
//     menuItem[i].className = "active_tab";
//   }
// }
// Menu Active Js
