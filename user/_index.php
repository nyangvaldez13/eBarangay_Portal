<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Webpage Title -->
    <title>eBarangay User Page</title>

    <!-- Branding -->
    <link rel="icon" href="../assets/branding/logo-lightmode.png">

    <!-- Styles -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/unicons.css">
</head>
<body>
    <!-- Top navbar -->
    <nav id="top-navbar" class="top-navbar">
        <div class="row">
            <div class="logo">
                <img src="../assets/branding/logo-darkmode.png" alt="">
            </div>
            <div class="links">
                <ul>
                &nbsp;
                    <li><a href="#home" id="home-link">Home</a></li>
                    <li><a href="#events" id="events-link">Events</a></li>
                    <li><a href="#request" id="request-link">Request</a></li>
                    <li><a href="#about" id="about-link">About</a></li>
                    <li><a href="#contact" id="contact-link">Contact</a></li>
                </ul>
            </div>
            <div class="user-buttons">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABWElEQVR4nO2WvUpDMRSAr7/oUDv5Uytd1TqJk/gAYidRVPAN/NsEH0BcFUGwDioKXXwAHXVVXARfwcFZXFT85MAphDvUJOdSFPpB4CQ3J18SbkiSpMVfA8gDuQbfc9InS2EbsAGcAgWnvZCqDwNnwLrkWKVdwAkwn2pfAb6AT2A59W0BqEquRXwATDv1CnCnwjoS3wJzTr8ZYD9WWgE2nZVf8DvnQKfmbAGzMeIa0K7xEf4cak6HjBEqnQC2NS4D3wFi6TumuTvAeIhY/uJJjfcIZ1dzp4C1EPEq0KPxTYT4WnN7Zayg7XYm8RwhfoqSuQCvEeKXxALQnTqzvnzUj1WsuEw8oxbxkkG8aBHXDOLLWOkA8G4QvwH9odIh4AE798BgiPiK7Ljyleb1rs0KOY59PuIS8JhxKXlvd4OJjeirxC1F88Ceb7CqXn9SjpNmAhSbstIW/5YfKtTbo6Ea3+YAAAAASUVORK5CYII=">
             &nbsp;
            <a href="../index.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAACXBIWXMAAAsTAAALEwEAmpwYAAACJElEQVR4nM2Wu0tdQRDGDdHORwofRC9poykt0mgE00UsfQSJFsYIGhME2xRaibYmvl+l2gvmplD8C6LRUrCJImrhI2IK/cngCMe9u3v2qoF8sHCYndnv7uw3Mzcj438EkAs0AJPAEvBLl3xPAPVAzkMQFQPjwDmwAQwAH4BaXfI9CGyqzyjw9K5kn4BTYB4oC/B/ASwAJ0BnOkRZeqsdoNLYywfeAl+AbqAaeGT4vNJYuW1WCKGQ/QRKDHsPcEYqFoGXhm9CzxgLSeNvC1kTflwA7yykctOPPoHIm1VY9kSRcTgAMo24Sn3TVCGpvOcs9hzgkjA8t8SLkEZtdSayLrUEFBGOcod6z2/VKdAIrDtSnZ3GDROOM6SG66MG6SD9Nmfd3w4gOzRLJBIvDWM8akgC7z11uR9AuO+qO6AN+G6qsMbhnEc48hxn1AiHmeM3npSuBpCteOKFcCNq+AG0egIKHV3mBn/ExxMvKU0Gi0Z9RjyEwzGxA6ZoGlxlYTQAaVUmduJmIddPVhc1PAH+2grfCFyzEK7FxJRp4efaUpbS2iL7BY7yEFu+J24B+GbbSKgwzBn4DOgF9jxvKHt94mvEVqmgil2/pkPfpESHa1JHTyguVPGv9YxdoN2XciGd1VFzXxwAM14yJXwcUwKhmDLnYxzxZ+D4DkRHQFcwkUEq7zCt/wTicKoNxC6QNIml6FuAr8AysKVLvoeAZpmb9yb6F7gC0wSa9m6alFAAAAAASUVORK5CYII="></a>
            </div>
        </div>
    </nav>

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
                    <img src="../assets/projects/Project 1.png" alt="Project 1">
                    <div class="projects-overlay-text">Overlay Text 1</div>
                </div>
            </div>
            <div class="prj">
                <div class="larger-image">
                    <img src="../assets/projects/Project 2.png" alt="Project 2">
                    <div class="projects-overlay-text">Overlay Text 2</div>
                </div>
            </div>
        </div>
        <div class="projects-item">
        <div class="prj">
                <div class="larger-image">
                    <img src="../assets/projects/Project 3.png" alt="Project 1">
                    <div class="projects-overlay-text">Overlay Text 3</div>
                </div>
            </div>
            <div class="prj">
                <div class="small-image">
                    <img src="../assets/projects/Project 4.png" alt="Project 2">
                    <div class="projects-overlay-text">Overlay Text 4</div>
                </div>
            </div>
        </div>

        <div class="projects-item">
        <div class="prj">
                <div class="small-image">
                    <img src="../assets/projects/Project 5.png" alt="Project 1">
                    <div class="projects-overlay-text">Overlay Text 5</div>
                </div>
            </div>
            <div class="prj">
                <div class="larger-image">
                    <img src="../assets/projects/Project 6.png" alt="Project 2">
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
                    <a href="request_mainpage.php"><button class="request-button-button" name="accessForm-button">Request</button></a>
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
                    <a href="request_mainpage.php"> <button class="request-button-button" name="accessForm-button">Request</button></a>
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
                    <a href="request_mainpage.php"><button class="request-button-button" name="accessForm-button">Request</button></a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="about-row">
            <div class="bg-image">
                <img src="../assets/home/about.png" alt="about">
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
    <?php require_once('../partials/footer.html'); ?>

    <!-- Scripts -->
    <script src="../js/home/script.js"></script>
</body>
</html>