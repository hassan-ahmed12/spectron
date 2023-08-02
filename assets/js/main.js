//
function btnfun() {
    alert("Fuck Off!");
  }

  //Mobile Menu 
function MobileMenu() {
  var x = document.getElementById("hdr-menu");
  if (x.className === "head-menu") {
    x.className += " responsive";
  } else {
    x.className = "head-menu";
  }

  var x = document.getElementById("m-nav-btn");
  if (x.className === "m-nav-btn") {
    x.className += " draw";
  } else {
    x.className = "m-nav-btn";
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

  var x = document.getElementById("menu-logo");
  if (x.className === "menu-logo") {
    x.className += " top";
  } else {
    x.className = "menu-logo";
  }
}

// Jquery code to add active class on menu by url
$(document).ready(function() {
  $("[href]").each(function() {
    if (this.href == window.location.href) {
      $(this).addClass("active");
    }
  });
});

// Sticky header
document.addEventListener('DOMContentLoaded', function() {
  window.addEventListener('scroll', myFunctionForSticky);
  window.onscroll = function() {myFunctionForSticky()};

  var header = document.getElementById("myHeader");
  var sticky = header.offsetTop;
  
  function myFunctionForSticky() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }
})

  // // Jquery code to add class on click function
  // $(document).ready(function(){
  //   $('.head-menu ul li').click(function(){
  //     $('.head-menu li').removeClass("active");
  //     $(this).addClass("active");
  // });
  // });



