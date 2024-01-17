<!DOCTYPE html>
<html lang="en">

<style>
/* Heading */
.about-banner {
    height: 60vh;
    position: relative;
    border: 1px solid #9B9988;
}

.about-heading {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-top: 150px;
    width: 100%; /* Use 100% width to make it responsive */
    height: 182px;
    flex-shrink: 0;
    object-fit: cover;
    background: linear-gradient(0deg, rgba(45, 22, 116, 0.40) 0%, rgba(45, 22, 116, 0.40) 100%), url(https://s3-alpha-sig.figma.com/img/f642/6245/de806648bf7971cfcb15f0c6133c89e1?Expires=1705276800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Mpq~kWD-1zkhg3T8tuzLHjQ1JUVCgXx4qNv7xlHvPclDgDje~Qs7OpTqVLW9l0GySF27--jv4sPxcoGZmam06dZ6L30nF6U-f0XQzgRNNVoPYtwb9w-5wCoVcnrGOPGwroxnHWrc3k8E4lTK1mATkxHkCDbeWuELEIP25Kw2lY~qFCkTR6vT07B5Qi3hIiEeucsQd4tjb2F2iUEPp9fsv4oKZjhgR87WM9yqMTNiif651xn7T1QWzqDU~CXvXEaF0LVbWs2EOoZghSNvM5TeK7u1w35IxVT5o0pJvv8XZSY~TfgTXvAltGgt5VZnsPb2Ke57IDDqo6Djb5p-c4urag__), lightgray 0px -123.549px / 100% 191.742% no-repeat;
    background-size: cover;
    background-position: center;
}

.about-heading h1 {
    color: #FFF;
text-align: center;
font-family: Harabara Mais Demo;
font-size: 70px;
font-style: normal;
font-weight: 400;
line-height: normal;
letter-spacing: -0.9px;
}

.about-heading h2 {
    color: rgba(45, 22, 116, 0.50);
    font-family: Harabara Mais Demo;
    font-size: 75px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    letter-spacing: -0.75px;
}

.aboutpage {
    height: 60vh;
    position: relative;
    border: 1px solid #9B9988;
}

.row {
    display: flex;
}

.col {
    box-sizing: border-box;
    padding: 50px;
}

.col-50 {
    width: 50%;
    padding: 50px
}

/* Welcome */
.welcome p {
    color: #140A32;
    font-family: Inter;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    letter-spacing: 0.75px;
    text-align: justify;
}

.images {
    /* Placeholder style for images */
    width: 100px;
    height: 100px;
    background-color: lightgray;
}

.welcome {
    color: #140A32;
    font-family: Inter;
    font-size: 25px;
    font-style: normal;
    font-weight: bold;
    line-height: normal;
    letter-spacing: 0.75px;
}

.missionvision {
    display: flex;
    flex-direction: row;
}

.mission,
.vision {
    flex: 1;
    padding: 20px;
}

.mission h3,
.vision h3 {
    margin-bottom: 10px;
}
.mission h3{
    color: #69D19E;

text-align: center;
font-family: Harabara Mais Demo;
font-size: 55px;
font-style: normal;
font-weight: 400;
line-height: normal;
letter-spacing: -0.55px;
}

.vision h3{
    color: #FC0;
font-family: Harabara Mais Demo;
font-size: 55px;
font-style: normal;
font-weight: 400;
line-height: normal;
letter-spacing: -0.55px;
text-align: center;
}

.mission p,
.vision p{
    color: #140A32;

text-align: center;
font-family: Inter;
font-size: 25px;
font-style: normal;
font-weight: 400;
line-height: normal;
letter-spacing: 0.75px;
}
.images {
    width: 400px;
    height: 200px;
    flex-shrink: 0;
    border-radius: 12px;
    background: url(https://s3-alpha-sig.figma.com/img/261c/d939/f5b31ea8107ff9b06b9f5333a4508c63?Expires=1705276800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=KrPPPO-s3oH0haws~epU8ohdr0BLg3t~Mjg3bNXVz20aifMX07y6Wm0obQ7Pu5RbBj-LZ3-ZQVAP1KfMi1hfErWpEUpRuFOFOCLrJZEmyvoXPVuBqkoYi2nibSKLmPcDiAm7jlfugbzNd3IsWydLRxtkhjcnPTUnEiP4jpkf7RAlnWXtH19D5ZlF359RQ0mTpgHo14sP6IAnMfCTh3icMBung9pLAJSTEE75Lef1rC7Vh-hq53QsNEokgVdMXjBaoucVoSF5Erjtg8J5B0tLHxo93RL7Vc8erEcWzV9gaIk14I75HkRNnzo6QWRYM3iDQEGfYyoLOHvp1ygAvINFyw__);
    background-size: cover;
    background-position: center;
    box-shadow: 0px 2px 10px 1px rgba(0, 0, 0, 0.10);
}
/*.community{
    width: 400px;
    height: 200px;
    flex-shrink: 0;
    border-radius: 12px;
    background: url(https://s3-alpha-sig.figma.com/img/1368/eed0/ac1de0b47631c904cf4cba4ddf352c46?Expires=1705276800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=LUbpnKKX47pn9PoO2GX75GT0T8CIPhVTjG5vi7-eRsj2tepRdWJfcgJXWxBAO0br0XoM8eGcB-BC5Nj9IclirI0I0xMYUDsehI-gt9g9ZBLCpOJq1YwuN~zeBS6GSS6J7G~wtc0x54UTedBgQE9YTNCKsABJU1ewMzC8yPozJ5qyOcPfWG0dSn7sXKnNGARxFGCEEFal3CbDg7rZKG~B3CAsOl9BQJCIDFgPIiYiids9vGi9Zt0vsEgPqlzhlgr-8BaE6qGQ06TF43ecbBQ~vuy9dwlYXPUTLqNawXDCnK2YvkJg~Sx~oIVpzUcyQ43kNm2LP2n2sH1SmrJXl-J4fQ__);
    background-size: cover;
    background-position: center;
    box-shadow: 0px 2px 10px 1px rgba(0, 0, 0, 0.10);
}*/
.ebrgy-imgs h2{
    color: #2D1674;;
font-family: Harabara Mais Demo;
font-size: 40px;
font-style: bold;
font-weight: 400;
line-height: normal;
letter-spacing: -0.75px;

}
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Webpage Title -->
    <title>eBarangay About Page</title>

    <!-- Branding -->
    <link rel="icon" href="../assets/branding/logo-lightmode.png">

    <!-- Styles -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/unicons.css">
</head>

<body>
    <!-- Top navbar -->
    <?php require_once('../partials/user_topnav.html'); ?>

    <!-- Heading Section -->
    <section id="about-banner" class="about-banner">
        <div class="about-heading">
            <h1>About</h1>
        </div>
    </section>

    <!-- Welcome and eBarangay Portal Section -->
    <section id="aboutpage" class="aboutpage">
        <div class="row">
            <!-- Welcome Section -->
            <div class="col col-50">
                <div class="welcome">
                    <p>Welcome to eBarangay Portal, the digital heartbeat of our vibrant community. Our mission is simple yet powerful: to bridge the gap between technology and community, making life in our barangay more accessible, engaging, and efficient.</p>
                    <br>
                    <p>eBarangay Portal is a dedicated team of community enthusiasts, technologists, and local government supporters. We are committed to harnessing the power of technology to improve the lives of barangay residents.</p>
                </div>
            </div>

            <!-- eBarangay Portal Section -->
            <div class="col col-50">
    <div class="ebrgy-imgs">
        <h2>eBarangay</h2>
        <h2>Portal</h2>
        <div class="image-container">
            <div class="images">
                <!-- Your .images content goes here -->
            </div>
            <div class="community">
                <!-- Your .community content goes here -->
            </div>
        </div>
    </div>
</div>
    </section>

<section id="obj" class="obj">
</section>

    <!-- Mission and Vision Section -->
    <section id="Mission" class="Mission">
        <div class="missionvision">
            <div class="col col-50">
                <div class="mission">
                    <h3>Mission</h3>
                    <p>Our mission is to digitally transform and strengthen the bonds within our community. We are committed to empowering residents with convenient access to essential services, fostering community engagement, and promoting transparency in local governance. Through innovation and inclusivity, we strive to make our barangay a more vibrant, informed, and connected place for all.</p>
                </div>
            </div>

            <div class="col col-50">
                <div class="vision">
                    <h3>Vision</h3>
                    <p>Our vision is of a united and thriving barangay, where technology and community converge seamlessly. We aspire to be the catalyst for positive change, simplifying processes, inspiring active participation, and building trust among residents. We envision eBarangay as the digital heart of our community, driving progress, and enhancing the quality of life for everyone we serve.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once('../partials/footer.html'); ?>
</body>

</html>