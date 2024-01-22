<style>

.background-event {
           max-width: 100%; /* Full width of the viewport */
            height: 100vh; /* Full height of the viewport */
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(0deg, rgba(45, 22, 116, 0.4) 0%, rgba(45, 22, 116, 0.4) 100%),
                        url('../assets/home/home-bg.png') center/cover no-repeat;
        
            overflow: hidden; /* Hide content overflow */
        }

        .event-title {
            color: #FFF;
            font-size: 3rem; /* Adjust the font size as needed */
            font-weight: 400;
            text-align: center;
            letter-spacing: -0.55px;
        }
        .header1 {
        font-size: larger; 
        font-weight: bold;
    }

    .header1 br {
        display: none; 
    }

    @media (max-width: 768px) {
        .header1 br {
            display: block; 
        }
        .header-text{
            font-size: 40px;
        }
    }



  .text-center a {
    color: #2d1674;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s;
  }

  .text-center a:hover {
    color: #FC0; /* Change to your preferred hover color */
  }

  .border {
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .col-10 {
    max-width: auto; /* Adjust the maximum width as needed */
  }

  .bi-file-earmark-fill {
    font-size: 24px;
  }

</style>

<section>
    <div class="background-event">
        <div class="event-title">
            <div class="header-text"><span class="header1"> Request</span><br>Documents</div>
        </div>
    </div>
</section>
<hr class="mb-5">

<section>
  <div class="container"><p><a href="/final_views/main" class="btn btn-secondary">Back</a></p>
      <div class="row mb-4">
      <?php foreach ($tables as $table => $tableLabel) {
      $withoutUnderscores = str_replace('_', ' ', $table);
      $withUnderscores = str_replace('_', '', $table);
      $uppercaseString = strtoupper($withoutUnderscores);
      ?>
      
      

  <div class="col-12 col-md-6 mt-2 text-center">
      <a href="<?= $table ?>">
          <div class="border p-3 d-flex justify-content-center align-items-center">
              <div class="col-10 d-flex flex-column align-items-center">
                  <i class="bi bi-file-earmark-fill"></i>
                  <p class="fs-5"><?= $uppercaseString ?></p>
              </div>
          </div>
      </a>
  </div>



  <?php } ?>
      </div>
  </div>
</section>

