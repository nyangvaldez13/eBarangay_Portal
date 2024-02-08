

<!DOCTYPE html>
<html lang="en">
<?php 
include 'test_head.php'; 
$id = null;

?>

<style>
    
.navbar-nav .nav-link i {
  margin-right: 5px;
}

.navbar-nav .nav-link:hover .notification-area, .navbar-nav .nav-link:hover .profile-area {
  display: block;
}


/* Default styling for the top navbar */
.top-navbar {
    background: linear-gradient(to bottom,  rgba(45, 22, 116, 1) 0%, rgba(45, 22, 116, 0) 100%);
    position: flex;
    width: 100%;
    z-index: 1;
    transition: background 0.6s;
  }
  
  .top-navbar.scrolled {
    background-color:red;
  }
  
  .top-navbar .row {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 14px 20px; /* Adjust padding for smaller screens */
  }
  
  .top-navbar .logo img {
    height: 46.57px;
    width: 56.57px;
  }
  
  .top-navbar .links ul {
    list-style: none;
    display: flex;
    flex-wrap: wrap; /* Allow links to wrap to the next line on smaller screens */
    padding: 14px;/* Remove default padding */
  }
  
  .top-navbar .links ul li {
    margin: 0 10px; /* Adjust margin for smaller screens */
  }
  
  .top-navbar .links ul li a {
    text-decoration: none;
    color: #ffffff;
    font-weight: bold;
    font-size: 14px;
  }
  
  /* Media query for tablets and smaller screens */
  @media only screen and (max-width: 768px) {
    .top-navbar .row {
      padding: 10px; /* Adjust padding for smaller screens */
    }
  }
  
  /* Media query for mobile devices */
  @media only screen and (max-width: 480px) {
    .top-navbar .logo img {
      display: none;
    }
  
    .top-navbar .links ul li {
      margin: 5px; /* Further adjust margin for smaller screens */
    }
  }
  

</style>


<body>
<nav id="top-navbar" class="top-navbar">
        <div class="row">
           
            <div class="links">
                <ul class="justify-content-between align-items-center">
                <div class="logo">
                <img src="../assets/branding/logo-darkmode.png" alt="">
            </div>  
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
  window.location.href="final_views/index";
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