<!DOCTYPE html>
<html lang="en">
<?php 

include 'test_head.php';

?>

<style>
.notification-area,
.profile-area {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    padding: 10px;
    border-radius: 5px;
}

.nav-item:hover .notification-area,
.nav-item:hover .profile-area {
    display: block;
}

@media (max-width: 767px) {
    .notification-area,
    .profile-area {
        right: 0;
        left: 0;
        top: 100%;
        min-width: 80%;
    }
}

@media (max-width: 390px) {
    .notification-area,
    .profile-area {
        right: 0;
        left: 0;
        top: 100%;
        min-width: 80%;
    }
}

</style>

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
                    <li>
                    <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-bell-fill text-white"></i>
                    <div class="notification-area text-dark">
                        Notification 1<br>
                        Notification 2<br>
                        Notification 3
                    </div>
                </a>
            </li>
                    
                    <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="bi bi-person-circle text-white"></i>
                    <div class="profile-area">
                        <a href="" class="text-dark">Edit Profile</a><br>
                        <a href="" onclick="logout()" class="text-dark cursor-pointer" >Logout</a>
                    </div>
                </a>
            </li>
                  </li>
            
                </ul>
            </div>
          
            
        </div>
</nav>

<script>
function direct(){
    window.location.href="test_index.php";
}

function logout(){
  window.location.href="../final_backend/login&register/logout.php"
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