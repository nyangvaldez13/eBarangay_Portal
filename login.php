<!DOCTYPE html>
<style>
.Signup{
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.Signup-column{
    display: flex;
    flex-direction: row;
}

.Fill-column{
    display: flex;
    flex-direction: column;
    text-align: left; 
    margin: 0;
    position: absolute; 
    
    top: 13.5%;
    left: 8%;
    flex: 1;
}

.Form-header {
    display: flex;
    align-items: center;
    justify-content: center;
    
    font-weight: 600;
    padding-bottom: 10px;
}

.login-link2 {
    font-size: 20px;
    color:#9B9988;
}

.login-link {
    font-size: 20px;
    
    color: #FFCC00;
    padding-right: 80px;
    cursor: pointer;
}

.button-primary {
    background-color: #FFCC00;
    color: #2D1674;
    font-weight: 560;
    padding: 8.5px 20px;
    margin-top: 5px;
    margin-bottom: 30px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
}

.line-container {
    display: flex;
    justify-content: center; 
    padding-top: 6px;
}

.Line-divider {
    border-top: 2px solid #FFCC00;
    justify-content: center;
    padding: 16px;
    width: 91%;
}
.form {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.Form-group {
    margin-bottom: 20px;
    justify-content: center;
}

.Logo-column{
    display: flex;
    flex-direction: column;
    text-align: right; 
    margin: 0;
    position: absolute; 
    overflow: hidden;
    top: 20%;
    right: 0;
    max-height: 80vh;
}

.Logo-column h1 {
    font-size: 36px;
    padding-right: 120px;
    color:#69D19E;
}

.Logo-column h2 {
    font-size: 36px;
    padding-right: 120px;
    color: #fff;
    font-weight: bold;
    
}

.Logo-bg {
    max-width: 100%; /* Ensure the logo image doesn't exceed its container */
}

.Logo-bg img {
    max-width: 100%;
    width: 600px;
    height: auto; /* Maintain the aspect ratio */
}

</style>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Webpage Title -->
        <title>eBarangay Sign-up Page</title>
    
        <!-- Branding -->
        <link rel="icon" href="assets/branding/logo-lightmode.png">
    
        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!-- Top Navbar -->
        <nav class="top-navbar">
            <div class="row">
                <div class="logo">
                    <img src="assets/branding/logo-darkmode.png" alt="">
                </div>
                <div class="links">
                    <ul>
                        <li><a href="index.php" id="home-link">Home</a></li>
                        <li><a href="#events" id="events-link">Events</a></li>
                        <li><a href="#request" id="request-link">Request</a></li>
                        <li><a href="#about" id="about-link">About</a></li>
                        <li><a href="#contact" id="contact-link">Contact</a></li>
                    </ul>
                </div>
                <div class="login-button">
                    <a href="">LOG IN</a>
                </div>
            </div>
        </nav>

        <!-- Signup Section -->
        <section id="Signup" class="signup">
            <div class="signup-background">
                <img src="assets/home/signup-bg.png" alt="">
            </div>
            <div class="Signup-column">
                <div class="Fill-column">
                    <div class="Form-container">
                        <div class="Form-header">
                            <p id="logInLink" class="login-link">LOG IN</p>
                            <a href="sign-up.php" id="signUpLink" class="login-link2">SIGN UP</a>
                        </div>
                        <div class="line-container">
                           <div class="Line-divider"></div>
                        </div>
                        <form method="POST" action="backend/user_account.php">
                            <div class="form">
                                <div class="Form-group">                
                                    <input type="email" id="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="Form-group">                
                                    <input type="password" id="password" name="password" placeholder="Password" required>
                                </div>
                                <p> <a class="pass" href="#">Forgot your password?</a></p>
                                <button type="submit" name="login">LOG IN</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
                <div class="Logo-column">
                    <h1>Welcome to</h1>
                    <h2>eBarangay Portal</h2>
                    <div class="Logo-bg">
                        <img src="assets/branding/logo-darkmode.png">
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php require_once('partials/footer.html'); ?>

        <script>

        </script>

    </body>
</html>