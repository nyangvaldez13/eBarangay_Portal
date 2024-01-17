<!DOCTYPE html>
<html lang="en">
<?php 
include 'test_head.php'; 
$id = null;

?>

<body>
<nav id="top-navbar" class="top-navbar">
        <div class="row">
            <div class="logo">
                <img src="../assets/branding/logo-darkmode.png" alt="">
            </div>
            <div class="links">
                <ul class="justify-content-between align-items-center">
                &nbsp;
                    <li><a href="#home" id="home-link">Home</a></li>
                    <li><a href="#events" id="events-link">Events</a></li>
                    <li><a href="#request" id="request-link">Request</a></li>
                    <li><a href="#about" id="about-link">About</a></li>
                    <li></li>
                    <li></li>
                    <li><a class="btn btn-warning text-white fw-bold" onclick="direct()">Sign In</a></li>
                    

                </ul>
            </div>
          
            
        </div>
</nav>

<script>
function direct(){
  window.location.href="final_views/index.php";
}


 const homeLink = document.getElementById("home-link");
const eventsLink = document.getElementById("events-link");
const requestLink = document.getElementById("request-link");
const aboutLink = document.getElementById("about-link");


window.addEventListener("scroll", function () {
  const navbar = document.getElementById("top-navbar");
  if (window.scrollY > 0) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

document.querySelectorAll(".links ul li a").forEach((link) => {
  link.addEventListener("click", function (e) {
    e.preventDefault();

    const targetId = this.getAttribute("href").substring(1);
    const targetElement = document.getElementById(targetId);

    if (targetElement) {
      // Calculate the scroll position
      const offsetTop = targetElement.offsetTop;
      const scrollOptions = {
        top: offsetTop,
        behavior: "smooth", // Add smooth scrolling behavior
      };

      // Scroll to the target element
      window.scrollTo(scrollOptions);
    }
  });
});

</script>