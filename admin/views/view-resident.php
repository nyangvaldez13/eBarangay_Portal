<?php require('../includes/header.php') ?>

<section class="section pt-2">
    <div class="row align-items-center">
    <div class="col-xl">
       <div class="card-title fs-3">View Resident Details</div>
       
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="residents.php">Residents List</a></li>
                  <li class="breadcrumb-item active">View Resident Details</li>
                </ol>
              </nav>
    </div>
    </div>

</section>

<section class="section mt-2">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

            <h5 class="card-title mt-3">Resident Details</h5>
            <?php include_once('../backend/view-resident.php'); ?>
            
           <form class="row g-3 mt-2">
                <div class=" col-9 row">
                    <div class="col-6">
                        <label for="inputName5" class="form-label">First Name</label>
                        <input type="text" value="<?= $resident['firstname']; ?>" class="form-control" id="inputName1" disabled>
                    </div>
                    <div class="col-6">
                        <label for="inputName5" class="form-label">Last Name</label>
                        <input type="text"  value="<?= $resident['lastname']; ?>" disabled placeholder = "Blair" class="form-control" id="inputName2">
                    </div>

                <!-- Force next columns to break to new line at md breakpoint and up -->
                <!-- <div class="w-100 d-none d-md-block"></div> -->

                 <div class="col-12">
                        <label for="inputName5" class="form-label">Address</label>
                        <input type="text" value="<?= $resident['address']; ?>" disabled  placeholder = "1833 Bel Meadow Drive, Fontana, California 92335, USA" class="form-control" id="inputName2">
                </div>


                <div class="col-6">
                    <label for="inputName5" class="form-label">Email</label>
                     <input type="text" value="<?= $resident['email']; ?>" disabled  placeholder = "lindablair@mail.com" class="form-control" id="inputName3">
                    </div>
                <div class="col-6">
                    <label for="inputName5" class="form-label">Contact Number</label>
                     <input type="text" value="<?= $resident['phone']; ?>" disabled  placeholder = "050 414 8778" class="form-control" id="inputName4">
                    </div>
               
                </div>
                <div class="col-2">
                <span class="card-title ms-4">Photo</span>
                <br>
                <div class="file-upload-container ms-4 mt-2">
                    <label for="file-upload" class="file-upload-label">
                    <img src="data:image;base64,<?= base64_encode($resident['photo']) ?>" alt="User Image" class="uploaded-image">
            </div>
            </div>

            <style>
                .file-upload-container {
                position: relative;
                display: inline-block;
                }

                .file-upload-input {
                display: none;
                }

                .file-upload-label {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                width: 60px; /* Adjust as needed */
                height: 60px; /* Adjust as needed */
                border-radius: 50%;
                border: 2.5px solid #6969674d;
                background: rgba(45, 22, 116, 0.15);
                color: white;
                
                position: relative;
                }

                .upload-icon {
                font-size: 24px;
                }

                .upload-text {
                font-size: 12px;
                margin-top: 5px; /* Adjust as needed */
                }

                .file-upload-container {
                position: relative;
                display: inline-block;
                }

                .file-upload-input {
                display: none;
                }

                .file-upload-label {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                width: 180px; /* Adjust as needed */
                height: 180px; /* Adjust as needed */
                border-radius: 50%;
                background: rgba(45, 22, 116, 0.15);
                color: white;
                overflow: hidden;
                position: relative;
                }

                .upload-icon {
                font-size: 50px;
                color: grey;
                }

                .upload-text {
                font-size: 15px;
                color: grey;
                margin-top: 2px; /* Adjust as needed */
} 
            </style>
            <a href="residents.php" style="width: 120px;" class="btn btn-outline-secondary ms-3">Back</a>
            </div>
          </div>

        </div>
      </div>
    </section>


<?php require('../includes/footer.php') ?>