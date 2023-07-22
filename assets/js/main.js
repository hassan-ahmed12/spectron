// alert("main.js loaded");

//Loading header through jquery, this loads the whole header.html or element with #header id to the div with #dynamic-header id in any other html file.
// $(function(){
//     $("#dynamic-header").load("template/header.html #header");
//   });

function btnfun() {
    alert("Fuck off!");
  }

  function MobileMenu() {
    var x = document.getElementById("hdr-menu");
    if (x.className === "head-menu") {
      x.className += " responsive";
    } else {
      x.className = "head-menu";
    }

    var x = document.getElementById("hamburger");
    if (x.className === "hamburger") {
      x.className += " hamburger-hide";
    } else {
      x.className = "hamburger";
    }

    var x = document.getElementById("menu-close");
    if (x.className === "menu-close") {
      x.className += " menu-close-show";
    } else {
      x.className = "menu-close";
    }

  }