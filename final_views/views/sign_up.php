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
height: 100%;
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

          <form style="width: 23rem;"  method="POST" name="register" action="test_backend/login&register/register.php">

          <div class="d-flex align-items-center mb-3 pb-3">
      <img src="../assets/branding/logo-lightmode.png" height="50px" width="70px" alt="logo" class="img-fluid me-3" />
      <h3 class="fw-normal mb-0">Register</h3>
    </div>

            <div class="form-outline mb-4">
              <input type="text" id="firstname" name="firstname" class="form-control form-control-lg" required/>
              <label class="form-label" for="firstname">Firstname</label>
            </div>
            <div class="form-outline mb-4">
              <input type="text" id="lastname" name="lastname" class="form-control form-control-lg" required/>
              <label class="form-label" for="lastname">Last Name</label>
            </div>
            <div class="form-outline mb-4">
              <input type="text" id="phone" name="phone" class="form-control form-control-lg" required/>
              <label class="form-label" for="phone">Phone Number</label>
            </div>
            <div class="form-outline mb-4">
              <input type="email" id="email" name="email" class="form-control form-control-lg" required/>
              <label class="form-label" for="email">Email address</label>
            </div>
            <div class="form-outline mb-4">
              <input type="text" id="address" name="address" class="form-control form-control-lg" required/>
              <label class="form-label" for="address">Address</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="password" name="password" class="form-control form-control-lg" required/>
              <label class="form-label" for="password">Password</label>
            </div>
            <div class="form-outline mb-4">
              <input type="password" id="confirmPassword" name="confirmPassword" class="form-control form-control-lg" required/>
              <label class="form-label" for="confirmPassword">Confirm Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-warning btn-lg btn-block text-white fw-bold" type="submit" name="register">Register</button>
            </div>

            <p>Already have an account? <a href="index.php" class="link-info">Login here</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://marketplace.canva.com/EADZ4M2277o/1/0/1143w/canva-honeydew-house-moving-announcement-9NIUDOrbEt0.jpg"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>