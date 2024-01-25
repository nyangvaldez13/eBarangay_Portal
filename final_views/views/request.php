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

  .request-submit{
    padding: 20px;
    background-color: #2d1674;
    color: white;
    font-weight: bold;
    width: 400px;
    border-radius: 10px;
  }

</style>


<?php 

if (isset($_GET['type'])) {
    $reqStatus = $_GET['type'];

    if($reqStatus == 1){
        $display = 'block';
    } else {
        $display = 'none';
    }

} else {
    $display = 'none';
}
?>

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
  <center><div class="request-submit mb-4" style="display:<?= $display ?>;">Request Successfully Submitted!</div></center>
      <div class="row mb-4">
      <?php foreach ($tables as $table => $tableLabel) {
      $withoutUnderscores = str_replace('_', ' ', $table);
      $withUnderscores = str_replace('_', '', $table);
      $uppercaseString = strtoupper($withoutUnderscores);
      ?>
      
      

  <div class="col-12 col-md-6 mt-2 text-center">
      <a href="<?= $table ?>?type=1">
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

     
</section>



<script>


</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Function to show the toast
        function showToast(message) {
            // Set the error message
            document.getElementById('error_message').innerText = message;
            
            // Create a new Bootstrap Toast instance
            var myToast = new bootstrap.Toast(document.getElementById('myToast'));

            // Show the toast
            myToast.show();
        }

        // Function to check if submit is equal to 1
        function checkSubmit() {
            // Check if the 'submit' parameter is set and equal to 1
            var submitValue = <?php echo isset($_GET['submit']) ? (int)$_GET['submit'] : 0; ?>;
            
            // Show the toast if submit is equal to 1
            if (submitValue === 1) {
                showToast("Submit value is 1.");
                
            } else {
                showToast("Submit value is not 1.");
                
            }
           
        }

        // Trigger the checkSubmit function on page load
        window.onload = function() {
            // Call your PHP logic here if needed
            // Example: if (isset($_GET['submit'])) { /* Your logic here */ }

           

            // Check the value of 'submit' on page load
            checkSubmit();
        };
    </script>

