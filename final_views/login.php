<?php include 'include/header.php'; ?>

<style>
  .back {
  background: url("../images/bg/<?= $login ?>") no-repeat;
  background-size: cover;
}
</style>

<div class="main-wrapper ">

<section class="page-title back">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
          <ul class="list-inline mb-0">
            <li class="list-inline-item"><a href="index.html" class="text-sm letter-spacing text-white text-uppercase font-weight-bold">Home</a></li>
            <li class="list-inline-item"><span class="text-white">|</span></li>
            <li class="list-inline-item"><a href="#" class="text-color text-uppercase text-sm letter-spacing">LOGIN</a></li>
          </ul>
           <h1 class="text-lg text-white mt-2">lOGIN</h1>
      </div>
    </div>
  </div>
</section>


<section class="contact-form section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="section-title">
          <div class="divider mb-3"></div>
          <h2>Login Account</h2>
          <p class="mt-3"><?= $title_sub ?></p>
        </div>
      </div>
    </div>

    <div class="row justify-content-center pb-5">
      <div class="col-lg-9 text-center">
        <form id="contact-form">
          <div class="form-row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                <input name="user_name" type="email" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Password">
              </div>
            </div>

            <!-- <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="form-group-2">
                <textarea name="user_message" class="form-control" rows="8" placeholder="Your Message"></textarea>
              </div> -->
             

            </div>
            <center>
                    
                    <div class="text-center">
                      <button class="btn btn-main mt-3 " type="submit">Login</button>
                    </div>
                      </center>
          </div>
          <div class="error" id="error">Sorry Msg dose not sent</div>
          <div class="success" id="success">Message Sent</div>
        </form>
      </div>
    </div>
  </div>

  <!-- <div class="google-map position-relative mt-5">
    <div class="map" id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758"
      data-marker="images/marker.png"></div>
  </div> -->

  <!-- <div class="container mt--170">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <div class="card rounded-0 border-0 shadow-sm text-center py-5 px-4 contact-info">
          <i class="ti-mobile mb-3 text-lg text-color"></i>
          <span>Call us</span>
          <p class="lead text-black mb-0 mt-3">+23 45 67890</p>
          <p class="lead">9:00 am - 17:00 pm</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <div class="card rounded-0 border-0 shadow-sm text-center py-5 px-4 contact-info">
          <i class="ti-email mb-3 text-lg text-color"></i>
          <span>Email at</span>
          <p class="lead text-black mt-3 mb-0">support@themefisher.com</p>
          <p class="lead text-black ">support@gymfit.com</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <div class="card rounded-0 border-0 shadow-sm text-center py-5 px-4 contact-info">
          <i class="ti-home mb-3 text-lg text-color"></i>
          <span>Location</span>
          <p class="lead text-black mt-3">Fitness Center Bedford Heights,North London, USA</p>
        </div>
      </div>
    </div>
  </div> -->
</section>


</div>

<?php include 'include/footer.php'; ?>

