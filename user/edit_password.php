<!DOCTYPE html>
<html lang="en"></html>

<style>

/* user-topnav */
.user-dropdown-button {
    background-color: transparent;
    color: #000000;
    cursor: pointer;
    font-size: 15px;
    position: relative;
}

.user-profile{
    margin-top: 20px;
    margin-bottom: 30px;
    justify-content: center;
    align-items: center;
}

.dot {
  height: 78px;
  width: 78px;
  align-items: center;
  background-color: #bbb;
  border-radius: 50%;
  margin-left: 28%;
  margin-bottom: 3px;
  display: inline-block;
}

.user-profile p{
    color: #000000;
}

.user-dropdown-content {
    display: none;
    position: absolute;
    margin-top: 5px;
    margin-left: -115px;
    background-color: #f4f4f4;
    min-width: 185.5px;
    border-radius: 8px;
    border: 1px solid #9B9988;
    z-index: 10;
}

.user-dropdown-option {
    font-size: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 5px 16px;
    margin-bottom: 10px;
    cursor: pointer;
}

.user-dropdown-option a{
    text-decoration: none;
    color: #000000;
}

.profile{
    min-height: 100vh;
    margin-bottom: 45px;
    display: flex;
    flex-direction: row;
}

.sidenav{
    width: 170px;
    margin-top:180px;
    margin-left: 120px;
}

.sidenav h2{
    padding-bottom: 1.2rem;
}

.h4{
    display: flex;
    flex-direction: row;
}

.h4 img{
    height: 26px;
    margin-top: 15px;
    margin-right: 8px;
}

.h4 a{
    text-decoration: none;
}

.h4-edit{
    margin-bottom: -5px;
    color: #9B9988;
    font-weight: 300;
    
}

.h4-pass{
    color: #2D1674;
}

.pass{
    display: flex;
    flex-direction: row;
}

.pass img{
    height: 26px;
    margin-top: 15px;
    margin-right: 8px;
}

.pass h4{
    margin-bottom: -5px;
    
}

/* user edit-profile */

.edit-profile{
    margin-top: 17.6%;
}

.profile-pic{
    margin: auto;
    margin-top: 186px;
    height: 188px;
    width: 188px;
    background-color: #2e167417;
    border-radius: 50%;
    margin-left: 46.5%;
    margin-bottom: 30px;
    display: block;
}

.profile-pic img{
    padding-top: 40px;
    padding-left: 62px;
}

.upload{
    padding-top: 4px;
    width: 170px;

}

.upload p{
    padding-left: 17px;
    color: #9B9988;
    font-size: 13px;
}

.upload p a{
    color: #2D1674;
    text-decoration: underline;
}

.container-column{
    display: flex;
    flex-direction: row;
    padding-left: 179.6px;
    margin-bottom: 15px;
}

.name{
    width: 50vh;
    margin-right: 20px;
}

.name p{
    text-align: left;
    color: #9B9988;
    padding-bottom: 5px;
}

.name input{
    height: 4vh;
    border-radius: 5px;
}

.info{
    width: 106.8vh;
    margin-right: 20px;
}

.info p{
    text-align: left;
    color: #9B9988;
    padding-bottom: 5px;
}

.info input{
    height: 4vh;
    border-radius: 5px;
}

.submit-request {
    display: flex;
    flex-direction: row;
    margin-top: 30px;
}

.cancel-button {
    font-weight: 600;
    font-size: 15px;
    border: 1px solid #2D1674;
    color: #2D1674;
    margin-left: 59.8vh;
    padding: 12px 29.5px;
    display: flex;
    border-radius: 8px;
    cursor: pointer;
}

.submit-button {
    font-weight: 600;
    font-size: 15px;
    background-color: #2D1674;
    color: #f4f4f4;
    border: none;
    margin-left: 3.7vh;
    padding: 12px 39.5px;
    display: flex;
    border-radius: 8px;
    cursor: pointer;
}

</style>

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
    <?php
    require_once('../partials/user_topnav.html');
    ?>

    <!-- Edit Profile Section -->
    <section id="profile" class="profile">
        <div class="sidenav">
            <h2>Settings</h2>
            <div class="h4">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAABxklEQVR4nO2av0oDQRCHN/ZaaK2dgoVttLS30EewE3yFFFdEshM0hajszuwhiM+jPoEkAUGwFURQGNnEgyMS8u8Kd3c+uPJCvt/OzQzcKSUIgiAIgiAIwn+GqLVFpI9zbB/dX2YrKhWYuUZWn5HV3w6Bf68XZ/S+SkHeIVyXxEuX/swRDlSa8hB3CDyVfKQh8EzyEYaACBtk4W22AAYhfETTGBFhZ74Q4CXIEcnMtTxvL1cRAhl9qAJ85g0hPDrXWV00BL8sqdDkXfHnFw/hy5j2pgpR3lUTQlNFMeqsfrq7aq2V73EOtgn169jSR3BZli2paOa8nT6E+ORx+hDilcfJIYQmb+ZYbIot72G0Md7eNNf976poTx4nV0ICJw9/KmF0Y4z/5DGFbo8iz3LyKGXP8syjNDyWbo+BjDqPQ2hUOuqstkGstwWE8JzcnC9wBurJynvI6vNk5Xm46naTlPcgtnaTlfcQwkWy8jz8YKGXpLyHCPaSlfc41J1k5XnY/fszyvtp0Qhqw6ug/LuDPcFAXcUEYvt0bIlb3RtMBwP1KE573NcbDuG9JN73PcHvBdFKj+JfSDiEk6SkBUEQBEEQBEFFxw8UKYEUJYbDMgAAAABJRU5ErkJggg==">
                <a href="edit_profile.php"><h4 class="h4-edit">Edit Profile</h4></a></div>
            <div class="pass">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAABP0lEQVR4nO1UMU7DQBA8CTroyO49AGjsXSsSNFTwgZSpoEM0FEhmNzV8AAoIL0j4BBEd+UuQ+ANobCxZIJCFTYHISqu1z9bM3szehbCM/xHKuQrZvZLNukgBFudagCd0ui7kz0r20hWBFli+AHYQ9j1lf82iDYTPomyMdtsqkkUbABPYIY12gBfU4pnssi1BWsP8kgDb057tFNt8j2EYriTkfey0DtjvjbaRjQlgkLI9KdkVahZNsmhrQv6obDdK/iDsRwAT9jslmyCFbdyIAFOQkm9W3Sn5VNlP0mjHWNsPF6sgLr/ZpOoc/2GtEUFC+db3BD7/MUEpkc+F/Br1s0Q2Ez4/LCWyMYDL2ffbxiYDECajfjQ5i8atTO50TKV20NBZ5wctwbyTL37jqsgqeWFil5edkk+B2VaJZfyReAN2PyewosRPuQAAAABJRU5ErkJggg==">
                <h4 class="h4-pass">Password</h4></div>
        </div>
        <div class="edit-profile">
            <div class="container-column">
                <div class="info">
                    <p>Current Password</p>
                    <input type="text" id="firstname" required name="first_name">
                </div>
            </div>
            <div class="container-column">
                <div class="info">
                    <p>New Password</p>
                    <input type="text" id="firstname" required name="first_name">
                </div>
            </div>
            <div class="container-column">
                <div class="info">
                    <p>Confirm Password</p>
                    <input type="text" id="firstname" required name="first_name">
                </div>
            </div>
            <div class="submit-request">
                <button class="cancel-button" type="submit-button" name="submit-button">CANCEL</button>
                <button class="submit-button" type="submit-button" name="submit-button">SAVE</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once('../partials/footer.html'); ?>
</body>
</html>