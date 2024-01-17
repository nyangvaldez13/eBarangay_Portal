<style>
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

<div class="text-center fw-bold mt-5">
    <h1>Request</h1>
    <h3>Documents</h3>
</div>
<hr class="mb-5">

<div class="container">
    <div class="row mb-4">
    <?php foreach ($tables as $table => $tableLabel) {
    $withoutUnderscores = str_replace('_', ' ', $table);
    $withUnderscores = str_replace('_', '', $table);
    $uppercaseString = strtoupper($withoutUnderscores);
    ?>
    
    

<div class="col-12 col-md-6 mt-2 text-center">
    <a href="<?= $table ?>.php">
        <div class="border p-3 d-flex justify-content-center align-items-center">
            <div class="col-10 d-flex flex-column align-items-center">
                <i class="bi bi-file-earmark-fill"></i>
                <p class="fs-2"><?= $uppercaseString ?></p>
            </div>
        </div>
    </a>
</div>



<?php } ?>
    </div>
</div>
