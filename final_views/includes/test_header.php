<!DOCTYPE html>
<html lang="en">
<?php 

include 'test_head.php';
include '../final_backend/login/auth.php';
include '../final_backend/helper/helpers.php';
include '../final_backend/login/notification.php';







?>

<style>
.notification-area,
.profile-area {
    display: none;
    position: absolute;
    background-color: rgba(249, 249, 249);
    min-width: 160px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    padding: 3px;
    border-radius: 5px;
}
.notification-area {
  max-height: 300px;
  overflow-y: auto;
  margin-right: 100px;
}
.notification-inside:hover {
            color:#11009E;
            background-color:#FAE7F3 ;
            transition: background-color 0.3s, color 0.3s;
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
        min-width: 50%;
    }
}

@media (max-width: 390px) {
    .notification-area,
    .profile-area {
        right: 0;
        left: 0;
        top: 100%;
        min-width: 50%;
    }
}

</style>

<?php 
if (isset($_GET['header']) == 1) {
  $eventLink = 'onclick="event_link()"';
  $requestLink = 'onclick="request_link()"';
  $aboutLink = 'onclick="about_link()"';
  $homeLink = 'onclick="home()"';
} else {
  $eventLink = 'class="none"';
  $requestLink = 'class="none"';
  $aboutLink = 'class="none"';
  $homeLink = 'class="none"';
}



?>


<body>
<nav id="top-navbar" class="top-navbar">
        <div class="row">
           
            <div class="links">
                <ul class="justify-content-around align-items-center">
                &nbsp;
                <div class="logo">
                <img src="../assets/branding/logo-darkmode.png" alt="">
            </div>
                    <li><a href="#home" <?= $homeLink ?> id="home-link">Home</a></li>
                    <li><a href="#events" <?=  $eventLink ?> id="events-link">Events</a></li>
                    <li><a href="#request"<?=  $requestLink ?>  id="request-link">Request</a></li>
                    <li><a href="#about" <?=  $aboutLink ?> id="about-link">About</a></li>
                    <li></li>
                    <li>
                      <?php if($id == null){
                        echo '<li><a class="btn btn-warning text-white fw-bold" onclick="direct()">Sign In</a></li>';
                      } else {
                        echo '';
                      }?>

                    <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-bell-fill text-white"></i>
                    <div class="notification-area text-dark">
                      <?php 

                      
              
                      if($notificationCounter == 0){
                        echo "No notification";
                      } else {
                        echo $notificationsHTML;
                      }

                     
                      ?>
                    </div>
                </a>
            </li>
                    
                    <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="bi bi-person-circle text-white"></i>
                    <div class="profile-area">
                        <span class="text-dark"><?= $firstname ?> <?= $lastname ?></span>
                        <div class="notification-inside"> <a href="" class="text-dark">Edit Profile</a></div>
                        <div class="notification-inside"> <a href="" onclick="logout()" class="text-dark cursor-pointer" >Logout</a></div>
                       
                        
                    </div>
                </a>
            </li>
                  </li>
            
                </ul>
            </div>
          
            
        </div>
</nav>

<script>


function logout(){
  window.location.href="../final_backend/login/logout"
}

const home = () => {
  window.location.href="main"
}
const event_link = () => {
  window.location.href="events?query=1&header=1"
}
const request_link = () => {
  window.location.href="request?header=1"
}
const about_link = () => {
  window.location.href="about?header=1"
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