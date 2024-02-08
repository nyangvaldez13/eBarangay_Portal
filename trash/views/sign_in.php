<style>
    .bg-image-vertical {
position: relative;
overflow: hidden;
background-repeat: no-repeat;
background-position: right center;
background-size: auto 100%;
}

@media (min-width: 1025px) {
.h-custom-2 {
height: 70%;
}
}
</style>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
        
        
        
       
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
         

          <form style="width: 23rem;"  method="POST" name="login" action="../final_backend/login/login">
          <a href="/" class="btn btn-secondary">Back</a>
          <div class="d-flex align-items-center mb-3 mt-4 pb-3">
            <img src="../assets/branding/logo-lightmode.png" height="50px" width="70px" alt="logo" class="img-fluid me-3" />
            <h3 class="fw-normal mb-0">Log in</h3>
          </div>

            <div class="form-outline mb-4">
              <input type="email" id="email" name="email" class="form-control form-control-lg" required/>
              <label class="form-label" for="email">Email address</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="password" name="password" class="form-control form-control-lg" required/>
              <label class="form-label" for="password">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-warning btn-lg btn-block text-white fw-bold" type="submit" name="login">Login</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
            <p>Don't have an account? <a href="register" class="link-info">Register here</a></p>

          </form>

        </div>

      </div>
    <?php 
    $pictureAdress = [
      'https://github.com/loop2113/IMAGE/blob/main/COVERPAGE.png?raw=true',
      'https://github.com/loop2113/IMAGE/blob/main/cover1.png?raw=true',
      'https://github.com/loop2113/IMAGE/blob/main/CP6.png?raw=true',
      'https://github.com/loop2113/IMAGE/blob/main/CP5.png?raw=true',
      'https://github.com/loop2113/IMAGE/blob/main/CP4.png?raw=true',

    ];

    $random_number = rand(0,4);


    ?>

      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="<?= $pictureAdress[$random_number]; ?>"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>