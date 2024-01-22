

<style>
.event-announcement {
    color: #2d1674;
    position: relative;
    transition: color 0.3s, border 0.3s;
}

.gallery-item::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0%;
    height: 2px; /* Border thickness */
    background-color: #2d1674;
    transition: width 0.3s, border-width 0.3s, left 0.3s;
}

.event-announcement:hover {
    color: #F2921D;
    text-decoration: none;
}

.gallery-item:hover::after {
    width: 100%;
    left: 0;
}

/* You can customize the border properties on hover */
.gallery-item:hover::after {
    border-width: 4px; /* Increase border thickness on hover */
    background-color: #ffc107; /* Change border color on hover */
}



.background-event {
            width: 100vw; /* Full width of the viewport */
            height: 100vh; /* Full height of the viewport */
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(0deg, rgba(45, 22, 116, 0.4) 0%, rgba(45, 22, 116, 0.4) 100%),
                        url('../assets/home/home-bg.png') center/cover no-repeat;
            flex-shrink: 0;
            overflow: hidden; /* Hide content overflow */
        }

        .event-title {
            color: #FFF;
            font-size: 3rem; /* Adjust the font size as needed */
            font-weight: 400;
            text-align: center;
            letter-spacing: -0.55px;
        }
        .header1 {
        font-size: larger; 
        font-weight: bold;
    }

    .header1 br {
        display: none; 
    }

    @media (max-width: 768px) {
        .header1 br {
            display: block; 
        }
        .header-text{
            font-size: 40px;
        }
    }

</style>

<?php 
if ($id === null ){
    $id = false;
}
$checkSession = $id ? true : false;

if(!$checkSession){
    echo ' <section id="home" class="home" >
    <div class="background" ></div>
    <div class="content" >
        <div class="column" >
            <h1 >eBarangay Portal:</h1>
            <h2>Connect Communities, One Click at a Time</h2>
            <p>Welcome to the eBarangay Portal, your vibrant digital hub where community meets technology. Get ready to unlock the 
                full potential of your barangay with seamless access to essential services and a vibrant online community.</p>
     
                
            
        </div>
    </div>
 </section>';
} else {
    echo '<section id="home" class="home" >
    <div class="background-event">
        <div class="event-title">
            <div class="header-text"><span class="header1"> Home</span></div>
        </div>
    </div>
</section>';
}
?>



 <!-- Events Section -->
<section id="events" class="events">
    <div class="event-heading">
        <h1>Events & Announcements</h1>
       
    </div>

      <!-- Gallery Items -->
  <div class="gallery">

    <?php  foreach($events as $event){
        if($event['activity'] == 1){
            $title = "Event";
            $icon = "bi bi-calendar4-event";
            
        } else {
            $title = "Announcement";
            $icon = "bi bi-megaphone";
        }
    ?>


            <div class="gallery-item">
                <a href="#" onclick="specific(<?= $event['activity_id'] ?>)" class="event-announcement">
                <p>
                    <span class="title" style="font-weight:bold;"><?= $title ?> <i class="<?= $icon ?>"></i></span>
                    
                </p>

                <h2><?= $event['title'] ?></h2>
                <div class="item-details">
                    <p class="caption"><?= $event['heading'] ?></p>
                </div>
                <div class="divider"></div>
                <p class="date"><?= $event['date'] ?></p></a>
            </div>
           
      <?php  } ?>
      </div>

        <div class="read-more-container"><center>
            <button class="read-more-button" onclick="events()">Read More</button></center>
        </div>
</section>



 <!-- Projects Section -->
<section id="projects" class="projects">
    <div class="projects-heading">
        <h1>Recent Projects</h1>
    </div>
    <div class="projects-gallery">
    <?php  foreach($events as $event){ ?>
    <div class="projects-item">
        <div class="prj">
            <div class="small-image">
                <img src="../assets/projects/<?= $event['image'] ?>" alt="<?= $event['image'] ?>">
               
            </div>
        </div>
       
    </div>
    <?php } ?>
   
</div>
</section>


<!-- Request Section -->
<section id="request" class="request">
    <div class="request-heading">
        <h1 class= "a"><span style="color:#2D1674;">Request</span> <span style="color:#FFCC00
;">Documents</span></h1>
    </div>
    <div class="request-desc">
        <p>Need an essential document from your barangay? Say goodbye to time-consuming trips and paperwork hassles. 
            With this feature, you can obtain the documents you need quickly and conveniently, all from the comfort of your home.</p>
    </div>

    <!-- Request Items -->
    <div class="request-items">
        <div class="request-container">
            <div class="request-heading">
                <div class="item-logo">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAl0lEQVR4nGNgGHZAR6TUS0es+LGuWMl/3Lj4na5YcSF5FhA0vOS/jmjxfTBbtLi
                    BZAsIGa4rVvJfS7JcTle05C6U30F1CxgYGBjItoRYC8i2hBQLQEBfvFwBHifERDypFqBYIlryloEaFuiSYPmoBf9Hg+j/aCoahhlNh4gKRxcXFi15RNgHIsWeIIXkGK4nWuJB0IIhBwBs8O2ovYosugAAAABJRU5ErkJggg==">
                </div>
                <p>
                    <span class="item1">Legal Documents</span>
                </p>
            </div>
            <div class="divider-container">
                <div class="line"></div>
            </div>
            <ul class="bullet-list">
                <li>Barangay certificate</li>
                <li>Business Permit</li>
            </ul>
            <div class="request-button-container" onclick="request()">
                <a href="request?header=1" class="btn btn-secondary "  name="accessForm-button">Request</a>
            </div>
        </div>
        <div class="request-container">
            <div class="request-heading">
            <div class="item-logo">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAACcElEQVR4nLVWPWgUYRA9K8XCwuzMxSrNFZGbOSFBE0S0jmghWIk/QVACGs3dzAYLwyGGQLSJf2mEE0UrrRS1VFELNaBoSm38abQQ0ij+nDL7fbsJuHe3d8SFD67Yfe+b997MXC7X5Cl2j69n1BqDviPUX4z6Jzqg7xn1FYNet3dynTwMeoRQfySgSw6hfi3lZSdjeZBRnjDqWHvgqGMOTH4TysVit2zkIOzjQLYyyB1PYuQ1QrnCIN8I9EQm8CJUNhPKTy/JHkadYtDvESjoFwY5QCjTMUkxH+7gQPoJ9VEpLwOt8Fcw6HMPdppQZlMkqjPoMKHecyRy1T6krkovgz4wjIboTldnIgXh9jT9vXQLJahssQp8pXPuyAKh7mpIQCi3HEDlOKM8bEwQyXPGUuQJT/oLknmUCt7TU11lZpmxLh1ab04gn5KKUV4klwSZ719XXZ0mz4B/+SWjHG4GzskpD1og7FKFtaNrDIdRzlva0uQZ8R/WCPVSJgLQYQJ97UIh8+YDoXwgkKMpBFr12k4Qyv2MBKcI9Lb7LbujCgIZsgT+SwA6ExEEcoxRn2YhINAZi6n7LjwY9xGjnls2Aka9lo3gv0uEHZv8JpPJG/LjmxZjqoeWPaaFwujK9hpNPy42ms61bDTvw01fRdkGV4tOniaQG7Fv8agwT1LBowTY6I03ViBDjauIh10y1rMNOxu1BPLMmzbJqBdSCOol0P1x0toa10sXjttmujciiryJSD8XQfYxytlOF47zwjVbvDJno4QFYR8F4TZGuRuDd7QyExKUkWZL3/llMdXHtj/aAk9Iuiq9BHqZUd52+rflL+xMRGUULlW4AAAAAElFTkSuQmCC">
                </div>
                <p>
                    <span class="item1">Financial Assistance</span>
                </p>
            </div>
            <div class="divider-container">
                <div class="line"></div>
            </div>
            <ul class="bullet-list">
                <li>Medical Assistance</li>
                <li>Burial Assistance</li>
                <li>Financial Assistance</li>
            </ul>
            <div class="request-button-container">
            <a href="request?header=1" class="btn btn-secondary"  name="accessForm-button">Request</a>
            </div>
        </div>
        <div class="request-container">
            <div class="request-heading">
                <div class="item-logo">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAACt0lEQVR4nO2Wy2sTURTGB3ygoMSYntNQhSxctCb3pEoRxAe6Ef0DWrC6qZuCopTMOcGAjwgiblypC18LQVFBRUEUFBRduiiiIj4QRYSK78dCqkIit5PYZObO3DEqbnphNnMev3u/891JHGdi/c9FyNsJ5TMhPyXk/ZQoJePW5kDmEcp5BfJagbxVKDsiC7o6SikCPkPIXwil2vgo4NvZbHmqDdo9uzBHwwL1yC+zac4aixTIaX9B0wMyYAMT8KGwegV8MViQKCUJ+FsEuELIg3awXIsAvwkU5ECWRp4WZZvOW+GUJxO6Qwp5WIF8JeRXCmRLvU8mU55GyFdDFBs1SdQbvlO53+f0TepxBqeEN+UXeZCNule+ndEzZiDvYQCcb+e1oWAU1/MAb7aoUs2Du6wm+TGDwZ4EwArd9dZmyDdtYG2u2iY3GKR+EASbEus7Tbld3ub4kRWMfHlMQXBXB2Jt3GMASylcaneVB5YrdrAc8NRx+33jumW8BgrlbIR8u2zjaMjtrc14X+P7halihxHsXQNZp4CPEPAlnykO1qRmG7huRELe2/jeCPUv79qMF9U/ldpkCvlH+GllNAuyoDa6U81xtz8SqiEEcth3j49qRUwnac7jPTqnOzE0S6F89MUrCvkctRWXG6Tmgv6Yh5zm5Bg4UUoq4OdBqDzTQNvmyPPBCf0FdOanOaNQHlvmV8mDrBlrnCp2BuKpYqeO5dp5pUL5bvcCs3bghRjXpKJHUFfIH2+4Hcdj9KoS8h0Nfh+5O5DruTQvGocWKJhXoHo8B+4SAr5hOfGnWE7/5QOQAUIZMTQb0V+/xXML052/tbKwaYYC2U3A72JI+EG7uzNVnPlH0J7k1oT+7Y03tyYph3Vty2CFUv5daAN8Z+tgkHutggn4bstgMv+TiHvi+M6dWM4/XD8BLUn0aiHgVi0AAAAASUVORK5CYII=">
                </div>
                <p>
                    <span class="item1">Social Welfare</span>
                </p>
            </div>
            <div class="divider-container">
                <div class="line"></div>
            </div>
            <ul class="bullet-list">
                <li>Senior Citizen Form</li>
            </ul>
            <div class="request-button-container">
            <a href="request?header=1" class="btn btn-secondary"  name="accessForm-button">Request</a>
            </div>
        </div>
    </div>
</section>

 <!-- About Section -->
 <section id="about" class="about">
    <div class="about-row">
        <div class="bg-image">
            <img src="assets/home/about.png" alt="about">
        </div>
        <div class="about-desc">
            <div class="desc-column">
                <h1>About the</h1>
                <h2>eBarangay Portal</h2>
                <h3>The heart of our community's digital transformation.</h3>
                <p>We are dedicated to ushering in a new era of connectivity and empowerment, reimagining the way you engage with your barangay. 
                    Our mission is simple but profound: to make your barangay experience more convenient, engaging, and accessible than ever before.</p>
                <div class="desc-button">
                    <a href="about?header=1"><button class="about-more-button">Read More</button></a> 
                </div>
            </div>
            
        </div>
    </div>
</section>


<script>
    function login(){
        window.location.href="/final_views/index";
    }

    function request(){
        window.localion.href="/final_views/request?header=1";
    }
    const specific = (id) => {
        window.location.href=`/final_views/specific-event?event-id=${id}&header=1`;
    }

    const events = () => {
        window.location.href=`/final_views/events?query=1&header=1`;
    }
</script>
