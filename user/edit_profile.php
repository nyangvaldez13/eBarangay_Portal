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

.h4-edit{
    margin-bottom: -5px;
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

.pass a{
    text-decoration: none;
}

.pass h4{
    margin-bottom: -5px;
    color: #9B9988;
    font-weight: 300;
}

/* user edit-profile */

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
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB0klEQVR4nO2av0oDQRCH5+wV1OxERa38m+xEK7W0t9BHsBMEi2QmKqSw0C6xExR8JvUJRAVBsBVEUFA2UdRgTGJSuLvzwZU5+H47NzPHBUBRFEVRFEVRlP9MLlWYIiPrFgtrEwNbfRARiTV8YFFeCOXVXRblNpvmZYiAxCIffYh/u4w82RSvQJTyGH4ISVP5gENIWpYPMYTM8M64NXzfVgCuMRp5DKYxEubpTyGg3Po6IpPpwWJvN0IglFXwjISMHFuU88xofqDjEIysg2/y9FnCHYVgkZ/nU8VJ8FGeuhCCNbIPYYw6vpgZ2R38+oPs0PYsId/9In8KsNcD4cx5bjmEAOWl5RAClpemIXglTz80vNYXHD6rb4zZ/sKYuy+Ee/LStBKCP3n6oRLqN8YITl5i6Pai8qQnL1r2pM+8aMMj7fbizagDQil1c9SR4RNf1tsqZOQyxjlfZS69vRCtvIOQy9HKQ+2L7VWs8pBL82K08g4yUolWHmrv+NexygNhfilaeQcZPoxWHqrlzzftiVenRcmrDa/T8q9Jc9ktSxASZHizobhrjEYq79L+n3ajf28QysOnNN+4nuD2gmCl63EfJCzKRlTSiqIoiqIoigLB8QYML1PBfVm3tAAAAABJRU5ErkJggg==">
                <h4 class="h4-edit">Edit Profile</h4></div>
            <div class="pass">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA7klEQVR4nO2VQQrCMBBFs/IUehGpZ3MhOL8HEDIT8ADdq3dx3XoNJaVpY7tKSqpiPmTRfMi8DH8apbKysr5BVbVfiabSMB6G8Uy5RFNjGLA1ewC7kbrwBIRBPUBH9WTGNnW3mVG4TvgdaKmGb7qnhBjXU1MAz/xrgMqbjnF6Y70gAMOAMC4iWNtlNF1demO9IADR1NgD3P75dNi49MZ6swEMo57jhQEwyLbPHtDegnETTcc5XngIGdQFqbaHvAUtwgsCSKVfAKBlf8UyPEZFysJtLSl3HUA/FapN7dLPsTcVapTa1MUnU5GVlaU+qReJx9VXHvtV6wAAAABJRU5ErkJggg==">
                <a href="edit_password.php"><h4>Password</h4></a></div>
        </div>
        <div class="edit-profile">
            <div class="profile-pic">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB9klEQVR4nO2aWU/DMAyAPRjjljjEYNDldEgJYiDGzUP//79CFkOqpl1t13Yt/iQ/TZv8LXHipAVgGIZhGIZhmGrw3h9rrW+ttfebHJQj5VpIVkp5Za39MsZ8NyEoV8o5lywi7lprP+uWyCH9SblnFtZaX9adfIHoZxb23l+nf0QIoQGgA5tHh3JL50q5FxaO4/gcNhTKjYWrGuHxeLxD20OuhaNhI9yZriVjjAOAbWijsFJKzloxqSGAFgpvL2pQoijahzYJDwaDg0X7ohDiFEqER9hzDZezSksp1VQtt3eVnt6HQwg9qAjutDz30svhw0NczWkJES8m1zZjpdSjMUYkSdJtYw1vOefu5rSnr6PR6LA1wkmSdI0xD4u6NUT8kFKeNF44hNBzzj2tel8VRdFZrcIhhJ61FrXWb9R0WGuf6Zi4rO4IKeUe1WqW+6pJY9OvRdj/3lm/zUnuhQ4V836fPqPazCKbDufcTaXCcRyfL7vGpbqbNQVDCEdKqfe8silpU4nwcDi8zjIFhRCDv+/SwkN/RFHZVLgyhTtUr3kSo7qe7LFlPMl4WbswIl4gYigh2bXHuoQ/6hapVNg0KFh4FXiETcuntP5vj0uxwQ/Ec9+nyQa+8kAzE4rgvT+m9q3ul1aWBeVY+KUWhmEYhmEYhoGV+QEyObi3O0jDCwAAAABJRU5ErkJggg==">
                <div class="upload">
                    <p><a href="#">Click to upload</a> or drag and drop</p>
                </div>
            </div>
            <div class="container-column">
                <div class="name">
                    <p>First Name</p>
                    <input type="text" id="firstname" required name="first_name">
                </div>
                <div class="name">
                    <p>Last Name</p>
                    <input type="text" required name="last_name">
                </div>
            </div>
            <div class="container-column">
                <div class="info">
                    <p>Address</p>
                    <input type="text" id="firstname" required name="first_name">
                </div>
            </div>
            <div class="container-column">
                <div class="info">
                    <p>Email Address</p>
                    <input type="text" id="firstname" required name="first_name">
                </div>
            </div>
            <div class="container-column">
                <div class="info">
                    <p>Contact Number</p>
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