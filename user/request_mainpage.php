<!DOCTYPE html>
<html lang="en">

<style>

/* Heading */
.request-banner{
    height: 60vh;
    position: relative;
    border: 1px solid #9B9988;
}

.req-heading{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-top: 150px;
}

.req-heading h1{
    font-size: 40px;
}

.req-heading h2{
    font-size: 30px;
}

/* Forms */
.request-forms{
    
    padding: 20px;
    min-height: 60vh;
    position: relative;
    background-color: #f4f4f4;
}

/* Legal Doc */
.legal_doc{
    display: flex;
    flex-direction: column;
    
    padding-left: 100px;
    margin-top: 50px;
}

.legal_doc h1{
    font-size: 30px;
    color: #2D1674;
    text-decoration: none;
    margin-bottom: 40px;
}

.legal_doc-items {
    display: flex;
    flex-direction: row;
    margin-bottom: 55px;
}

.legal_doc-container {
    width: 250px; 
    height: 100px;
    margin-right: 50px;
    padding: 14px;
    position: relative;
    background-color: #f4f4f4;
    box-sizing: border-box;
    border: 1px solid #9B9988;
    border-radius: 15px;
    overflow: hidden;
}

.legal_doc-heading{
    padding-top: 6px;
    padding-left: 10px;
    display: flex;
    flex-direction: row;
}

.legal_doc-heading .legal_doc-logo{
    width: 65px; 
    height: 60px;
    padding: 15px;
    background-color: #2D167417;
    box-sizing: border-box;
    border-radius: 10px;
    overflow: hidden;
}

.legal_doc-heading p {
    font-size: 22px;
    font-weight: 600;
    color: #262626E5;
    padding-left: 15px;
    padding-top: 3px;
    text-align: left;
    position: relative;
}

/* Finance */
.finance{
    display: flex;
    flex-direction: column;
    padding-left: 100px;
}

.finance h1{
    font-size: 30px;
    color: #2D1674;
    text-decoration: none;
    margin-bottom: 40px;
}

/* Social */
.social{
    display: flex;
    flex-direction: column;
    padding-left: 100px;
    margin-bottom: 15px;
}

.social h1{
    font-size: 30px;
    text-decoration: none;
    color: #2D1674;
    margin-bottom: 40px;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Webpage Title -->
    <title>eBarangay Request Page</title>

    <!-- Branding -->
    <link rel="icon" href="../assets/branding/logo-lightmode.png">

    <!-- Styles -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/unicons.css">
</head>
<body>
    <!-- Top navbar -->
    <?php
    require_once('../partials/user_topnav.html');
    ?>

    <!-- Heading Section -->
    <section id="request-banner" class="request-banner">
        <div class="req-heading">
            <h1>Request</h1>
            <h2>Documents</h2>
        </div>
    </section>

    <!-- Forms Section -->
    <section id="request-forms" class="request-forms">
        <div class="legal_doc">
            <h1>Legal Documents</h1>  
            <div class="legal_doc-items">
            <a href="brgy-form.php"><div class="legal_doc-container">
                <div class="legal_doc-heading">
                    <div class="legal_doc-logo">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAl0lEQVR4nGNgGHZAR6TUS0es+LGuWMl/3Lj4na5YcSF5FhA0vOS/jmjxfTBbtLi
                        BZAsIGa4rVvJfS7JcTle05C6U30F1CxgYGBjItoRYC8i2hBQLQEBfvFwBHifERDypFqBYIlryloEaFuiSYPmoBf9Hg+j/aCoahhlNh4gKRxcXFi15RNgHIsWeIIXkGK4nWuJB0IIhBwBs8O2ovYosugAAAABJRU5ErkJggg==">
                    </div>
                    <p>
                        <span class="item1">Barangay Certificate</span>
                    </p>
                </div>
            </div></a>
            <a href="#"><div class="legal_doc-container">
                <div class="legal_doc-heading">
                <div class="legal_doc-logo">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAl0lEQVR4nGNgGHZAR6TUS0es+LGuWMl/3Lj4na5YcSF5FhA0vOS/jmjxfTBbtLi
                        BZAsIGa4rVvJfS7JcTle05C6U30F1CxgYGBjItoRYC8i2hBQLQEBfvFwBHifERDypFqBYIlryloEaFuiSYPmoBf9Hg+j/aCoahhlNh4gKRxcXFi15RNgHIsWeIIXkGK4nWuJB0IIhBwBs8O2ovYosugAAAABJRU5ErkJggg==">
                    </div>
                    <p>
                        <span class="item1">Business Permit</span>
                    </p>
                </div>
            </div></a>
            </div>
        </div>
        </div>
        <div class="finance">
            <h1>Financial Assistance</h1>  
            <div class="legal_doc-items">
            <a href="#"><div class="legal_doc-container">
                <div class="legal_doc-heading">
                    <div class="legal_doc-logo">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAACcElEQVR4nLVWPWgUYRA9K8XCwuzMxSrNFZGbOSFBE0S0jmghWIk/QVACGs3dzAYLwyGGQLSJf2mEE0UrrRS1VFELNaBoSm38abQQ0ij+nDL7fbsJuHe3d8SFD67Yfe+b997MXC7X5Cl2j69n1BqDviPUX4z6Jzqg7xn1FYNet3dynTwMeoRQfySgSw6hfi3lZSdjeZBRnjDqWHvgqGMOTH4TysVit2zkIOzjQLYyyB1PYuQ1QrnCIN8I9EQm8CJUNhPKTy/JHkadYtDvESjoFwY5QCjTMUkxH+7gQPoJ9VEpLwOt8Fcw6HMPdppQZlMkqjPoMKHecyRy1T6krkovgz4wjIboTldnIgXh9jT9vXQLJahssQp8pXPuyAKh7mpIQCi3HEDlOKM8bEwQyXPGUuQJT/oLknmUCt7TU11lZpmxLh1ab04gn5KKUV4klwSZ719XXZ0mz4B/+SWjHG4GzskpD1og7FKFtaNrDIdRzlva0uQZ8R/WCPVSJgLQYQJ97UIh8+YDoXwgkKMpBFr12k4Qyv2MBKcI9Lb7LbujCgIZsgT+SwA6ExEEcoxRn2YhINAZi6n7LjwY9xGjnls2Aka9lo3gv0uEHZv8JpPJG/LjmxZjqoeWPaaFwujK9hpNPy42ms61bDTvw01fRdkGV4tOniaQG7Fv8agwT1LBowTY6I03ViBDjauIh10y1rMNOxu1BPLMmzbJqBdSCOol0P1x0toa10sXjttmujciiryJSD8XQfYxytlOF47zwjVbvDJno4QFYR8F4TZGuRuDd7QyExKUkWZL3/llMdXHtj/aAk9Iuiq9BHqZUd52+rflL+xMRGUULlW4AAAAAElFTkSuQmCC">
                    </div>
                    <p>
                        <span class="item1">Medical Assistance</span>
                    </p>
                </div>
            </div></a>
            <a href="#"><div class="legal_doc-container">
                <div class="legal_doc-heading">
                <div class="legal_doc-logo">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAACcElEQVR4nLVWPWgUYRA9K8XCwuzMxSrNFZGbOSFBE0S0jmghWIk/QVACGs3dzAYLwyGGQLSJf2mEE0UrrRS1VFELNaBoSm38abQQ0ij+nDL7fbsJuHe3d8SFD67Yfe+b997MXC7X5Cl2j69n1BqDviPUX4z6Jzqg7xn1FYNet3dynTwMeoRQfySgSw6hfi3lZSdjeZBRnjDqWHvgqGMOTH4TysVit2zkIOzjQLYyyB1PYuQ1QrnCIN8I9EQm8CJUNhPKTy/JHkadYtDvESjoFwY5QCjTMUkxH+7gQPoJ9VEpLwOt8Fcw6HMPdppQZlMkqjPoMKHecyRy1T6krkovgz4wjIboTldnIgXh9jT9vXQLJahssQp8pXPuyAKh7mpIQCi3HEDlOKM8bEwQyXPGUuQJT/oLknmUCt7TU11lZpmxLh1ab04gn5KKUV4klwSZ719XXZ0mz4B/+SWjHG4GzskpD1og7FKFtaNrDIdRzlva0uQZ8R/WCPVSJgLQYQJ97UIh8+YDoXwgkKMpBFr12k4Qyv2MBKcI9Lb7LbujCgIZsgT+SwA6ExEEcoxRn2YhINAZi6n7LjwY9xGjnls2Aka9lo3gv0uEHZv8JpPJG/LjmxZjqoeWPaaFwujK9hpNPy42ms61bDTvw01fRdkGV4tOniaQG7Fv8agwT1LBowTY6I03ViBDjauIh10y1rMNOxu1BPLMmzbJqBdSCOol0P1x0toa10sXjttmujciiryJSD8XQfYxytlOF47zwjVbvDJno4QFYR8F4TZGuRuDd7QyExKUkWZL3/llMdXHtj/aAk9Iuiq9BHqZUd52+rflL+xMRGUULlW4AAAAAElFTkSuQmCC">
                    </div>
                    <p>
                        <span class="item1">Burial Assistance</span>
                    </p>
                </div>
            </div></a>
            <a href="#"><div class="legal_doc-container">
                <div class="legal_doc-heading">
                <div class="legal_doc-logo">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAACcElEQVR4nLVWPWgUYRA9K8XCwuzMxSrNFZGbOSFBE0S0jmghWIk/QVACGs3dzAYLwyGGQLSJf2mEE0UrrRS1VFELNaBoSm38abQQ0ij+nDL7fbsJuHe3d8SFD67Yfe+b997MXC7X5Cl2j69n1BqDviPUX4z6Jzqg7xn1FYNet3dynTwMeoRQfySgSw6hfi3lZSdjeZBRnjDqWHvgqGMOTH4TysVit2zkIOzjQLYyyB1PYuQ1QrnCIN8I9EQm8CJUNhPKTy/JHkadYtDvESjoFwY5QCjTMUkxH+7gQPoJ9VEpLwOt8Fcw6HMPdppQZlMkqjPoMKHecyRy1T6krkovgz4wjIboTldnIgXh9jT9vXQLJahssQp8pXPuyAKh7mpIQCi3HEDlOKM8bEwQyXPGUuQJT/oLknmUCt7TU11lZpmxLh1ab04gn5KKUV4klwSZ719XXZ0mz4B/+SWjHG4GzskpD1og7FKFtaNrDIdRzlva0uQZ8R/WCPVSJgLQYQJ97UIh8+YDoXwgkKMpBFr12k4Qyv2MBKcI9Lb7LbujCgIZsgT+SwA6ExEEcoxRn2YhINAZi6n7LjwY9xGjnls2Aka9lo3gv0uEHZv8JpPJG/LjmxZjqoeWPaaFwujK9hpNPy42ms61bDTvw01fRdkGV4tOniaQG7Fv8agwT1LBowTY6I03ViBDjauIh10y1rMNOxu1BPLMmzbJqBdSCOol0P1x0toa10sXjttmujciiryJSD8XQfYxytlOF47zwjVbvDJno4QFYR8F4TZGuRuDd7QyExKUkWZL3/llMdXHtj/aAk9Iuiq9BHqZUd52+rflL+xMRGUULlW4AAAAAElFTkSuQmCC">
                    </div>
                    <p>
                        <span class="item1">Financial Assistance</span>
                    </p>
                </div>
            </div></a>
            </div>
        </div>
        <div class="social">
            <h1>Social Welfare</h1>  
            <div class="legal_doc-items">
            <a href="#"><div class="legal_doc-container">
                <div class="legal_doc-heading">
                    <div class="legal_doc-logo">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAACt0lEQVR4nO2Wy2sTURTGB3ygoMSYntNQhSxctCb3pEoRxAe6Ef0DWrC6qZuCopTMOcGAjwgiblypC18LQVFBRUEUFBRduiiiIj4QRYSK78dCqkIit5PYZObO3DEqbnphNnMev3u/891JHGdi/c9FyNsJ5TMhPyXk/ZQoJePW5kDmEcp5BfJagbxVKDsiC7o6SikCPkPIXwil2vgo4NvZbHmqDdo9uzBHwwL1yC+zac4aixTIaX9B0wMyYAMT8KGwegV8MViQKCUJ+FsEuELIg3awXIsAvwkU5ECWRp4WZZvOW+GUJxO6Qwp5WIF8JeRXCmRLvU8mU55GyFdDFBs1SdQbvlO53+f0TepxBqeEN+UXeZCNule+ndEzZiDvYQCcb+e1oWAU1/MAb7aoUs2Du6wm+TGDwZ4EwArd9dZmyDdtYG2u2iY3GKR+EASbEus7Tbld3ub4kRWMfHlMQXBXB2Jt3GMASylcaneVB5YrdrAc8NRx+33jumW8BgrlbIR8u2zjaMjtrc14X+P7halihxHsXQNZp4CPEPAlnykO1qRmG7huRELe2/jeCPUv79qMF9U/ldpkCvlH+GllNAuyoDa6U81xtz8SqiEEcth3j49qRUwnac7jPTqnOzE0S6F89MUrCvkctRWXG6Tmgv6Yh5zm5Bg4UUoq4OdBqDzTQNvmyPPBCf0FdOanOaNQHlvmV8mDrBlrnCp2BuKpYqeO5dp5pUL5bvcCs3bghRjXpKJHUFfIH2+4Hcdj9KoS8h0Nfh+5O5DruTQvGocWKJhXoHo8B+4SAr5hOfGnWE7/5QOQAUIZMTQb0V+/xXML052/tbKwaYYC2U3A72JI+EG7uzNVnPlH0J7k1oT+7Y03tyYph3Vty2CFUv5daAN8Z+tgkHutggn4bstgMv+TiHvi+M6dWM4/XD8BLUn0aiHgVi0AAAAASUVORK5CYII=">
                    </div>
                    <p>
                        <span class="item1">Senior Citizen Form</span>
                    </p>
                </div>
            </div></a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once('../partials/footer.html'); ?>
</body>

</html>