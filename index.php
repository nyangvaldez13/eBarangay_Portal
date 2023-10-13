<!DOCTYPE html>
<html lang="en">

<style>

/* Notifier */
.notifier {
    display: none;
    background-color: rgba(255, 255, 255, 0.74);
    border-radius: 5px;
    padding: 12px;
    margin-top: 8px;
    position: fixed;
    top: 10px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 1000;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    transition: top 0.5s;
}

.request{
    height: 100vh;
    padding: 20px;
    margin-bottom: 30px;
}

.about {
    position: relative;
    height: 100vh;
    background-color: #2D1674;
    padding: 0; 
    overflow: hidden;
    display: flex;
    flex-direction: column; 
}

.about-row {
    flex: 1; 
    display: flex;
    overflow: hidden;
}

.bg-image {
    flex: 1; 
    background-size: cover; 
    background-repeat: no-repeat;
    background-position: center;
    position: relative;
}

.bg-image img {
    width: 100%; 
    height: 100%;
    object-fit: cover;
    position: absolute; 
    top: 0;
    left: 0;
}

.about-desc {
    flex: 1; 
    background-color: #2D1674; 
    color: #fff; 
    display: flex;
}

.desc-column {
    text-align: left; 
    margin: 0;
    position: absolute; 
}

.desc-column h1 {
    font-size: 27px;
    padding-left: 128px;
    padding-top: 50px;
    color:#69D19E;
    margin-bottom: 10px;
    margin-top: 7px;
}

.desc-column h2 {
    font-size: 36px;
    padding-left: 128px;
    width: 700px;
    font-weight: bold;
    margin: 10px 0;
}

.desc-column h3 {
    font-size: 28px;
    padding-top: 15px;
    padding-left: 128px;
    width: 425px;
    font-weight:600;
    
}

.desc-column p{
    font-size: 20px;
    width: 425px;
    padding-left: 128px;
}

.desc-button{
    padding-top: 60px;
    padding-left: 128px;
}

.about-more-button {
    font-weight: 600;
    font-size: 14px;
    background-color: #C5BBD3;
    color: #2D1674;
    border: none;
    padding: 10px 21px;
    display: flex;
    justify-content: center;
    border-radius: 5px;
    cursor: pointer;
}

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Webpage Title -->
    <title>eBarangay Landing Page</title>

    <!-- Branding -->
    <link rel="icon" href="assets/branding/logo-lightmode.png">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/unicons.css">
</head>
<body>
    <!-- Top navbar -->
    <?php
    require_once('partials/topnav.html');
    ?>

    <!-- Notifier -->
    <div class="notifier">Sign-in first to request a document</div>

    <!-- Home Section -->
    <section id="home" class="home">
        <div class="background"></div>
        <div class="content">
            <div class="column">
                <h1>eBarangay Portal:</h1>
                <h2>Connect Communities, One Click at a Time</h2>
                <p>Welcome to the eBarangay Portal, your vibrant digital hub where community meets technology. Get ready to unlock the 
                    full potential of your barangay with seamless access to essential services and a vibrant online community.</p>
                <a href="#get-started" class="btn">GET STARTED</a>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="events">
        <div class="event-heading">
            <h1>Events & Announcements</h1>
            <div class="filter-dropdown">
                <button class="dropdown-button" id="dropdown-btn">Filter by category &#9660;</button>
                <div class="dropdown-content" id="dropdown-content">
                    <div class="dropdown-option" data-filter="all">
                        <span>All</span>
                        <span class="check-icon">&#10004;</span>
                    </div>
                    <div class="dropdown-option" data-filter="events">
                        <span>Events</span>
                        <span class="check-icon">&#10004;</span>
                    </div>
                    <div class="dropdown-option" data-filter="announcements">
                        <span>Announcements</span>
                        <span class="check-icon">&#10004;</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery Items -->
        <div class="gallery">
            <div class="gallery-item">
                <p>
                    <span class="title">Event</span>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAWElEQVR4nGNgGCggICDgD
                    8LUUkcfC0RFRSX4+PjcYZpIxSC9IDNwWkCJ4QJIlhD0LqWYYdQCAUqDiKgkhwWMWkAQjAYRQTAaRJQHEc2La1FaVzijgAELAADOwV4xqxkl/AAAAABJRU5ErkJggg==">
                </p>
                <div class="item-details">
                    <p class="caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="divider"></div>
                <p class="date">MM-DD-YYYY</p>
            </div>

            <div class="gallery-item">
                <p>Title 2</p>
                <div class="item-details">
                    <p class="caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="divider"></div>
                <p class="date">MM-DD-YYYY</p>
            </div>

            <div class="gallery-item">
                <p>
                    <span class="title">Event</span>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAWElEQVR4nGNgGCggICDgD
                    8LUUkcfC0RFRSX4+PjcYZpIxSC9IDNwWkCJ4QJIlhD0LqWYYdQCAUqDiKgkhwWMWkAQjAYRQTAaRJQHEc2La1FaVzijgAELAADOwV4xqxkl/AAAAABJRU5ErkJggg==">
                </p>
                <div class="item-details">
                    <p class="caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="divider"></div>
                <p class="date">MM-DD-YYYY</p>
            </div>

            <div class="gallery-item">
                <p>Title 4</p>
                <div class="item-details">
                    <p class="caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="divider"></div>
                <p class="date">MM-DD-YYYY</p>
            </div>

            <div class="gallery-item">
                <p>
                    <span class="title">Event</span>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAWElEQVR4nGNgGCggICDgD
                    8LUUkcfC0RFRSX4+PjcYZpIxSC9IDNwWkCJ4QJIlhD0LqWYYdQCAUqDiKgkhwWMWkAQjAYRQTAaRJQHEc2La1FaVzijgAELAADOwV4xqxkl/AAAAABJRU5ErkJggg==">
                </p>
                <div class="item-details">
                    <p class="caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="divider"></div>
                <p class="date">MM-DD-YYYY</p>
            </div>

            <div class="gallery-item">
                <p>
                    <span class="title">Event</span>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAWElEQVR4nGNgGCggICDgD
                    8LUUkcfC0RFRSX4+PjcYZpIxSC9IDNwWkCJ4QJIlhD0LqWYYdQCAUqDiKgkhwWMWkAQjAYRQTAaRJQHEc2La1FaVzijgAELAADOwV4xqxkl/AAAAABJRU5ErkJggg==">
                </p>
                <div class="item-details">
                    <p class="caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="divider"></div>
                <p class="date">MM-DD-YYYY</p>
            </div>
        </div>

        <div class="read-more-container">
            <button class="read-more-button">Read More</button>
        </div>

    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="projects-heading">
            <h1>Recent Projects</h1>
        </div>
        <div class="projects-gallery">
        <div class="projects-item">
            <div class="prj">
                <div class="small-image">
                    <img src="assets/projects/Project 1.png" alt="Project 1">
                    <div class="projects-overlay-text">Overlay Text 1</div>
                </div>
            </div>
            <div class="prj">
                <div class="larger-image">
                    <img src="assets/projects/Project 2.png" alt="Project 2">
                    <div class="projects-overlay-text">Overlay Text 2</div>
                </div>
            </div>
        </div>
        <div class="projects-item">
        <div class="prj">
                <div class="larger-image">
                    <img src="assets/projects/Project 3.png" alt="Project 1">
                    <div class="projects-overlay-text">Overlay Text 3</div>
                </div>
            </div>
            <div class="prj">
                <div class="small-image">
                    <img src="assets/projects/Project 4.png" alt="Project 2">
                    <div class="projects-overlay-text">Overlay Text 4</div>
                </div>
            </div>
        </div>

        <div class="projects-item">
        <div class="prj">
                <div class="small-image">
                    <img src="assets/projects/Project 5.png" alt="Project 1">
                    <div class="projects-overlay-text">Overlay Text 5</div>
                </div>
            </div>
            <div class="prj">
                <div class="larger-image">
                    <img src="assets/projects/Project 6.png" alt="Project 2">
                    <div class="projects-overlay-text">Overlay Text 6</div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Request Section -->
    <section id="request" class="request">
        <div class="request-heading">
            <h1 class= "a">Request</h1>
            <h1 class="b">Documents</h1>
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
                <div class="request-button-container">
                    <button class="request-button-button" data-target-page="request_mainpage.php" name="accessForm-button">Request</button>
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
                    <button class="request-button-button" data-target-page="request_mainpage.php" name="accessForm-button">Request</button>
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
                    <button class="request-button-button" data-target-page="request_mainpage.php" name="accessForm-button">Request</button>
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
                        <button class="about-more-button">Read More</button>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once('partials/footer.html'); ?>

    <!-- Scripts -->
    <script src="js/home/script.js"></script>
    <script>
    //Request Section
    document.addEventListener("DOMContentLoaded", function() {
    const requestButton = document.querySelector(".request-button-button");
    const notifier = document.querySelector(".notifier");
    
    requestButton.addEventListener("click", function() {

        notifier.style.display = "block";

        notifier.style.top = "0";

        setTimeout(function() {
   
            notifier.style.top = "-50px";
        }, 3000); 
    });
});

    </script>
</body>
</html>
