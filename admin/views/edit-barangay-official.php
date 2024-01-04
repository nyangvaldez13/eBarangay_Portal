<?php require('../includes/header.php') ?>

<section class="section pt-2">
    <div class="row align-items-center">
    <div class="col-xl">
       <div class="card-title fs-3">Edit Barangay Official</div>
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard_admin.php">Barangay Official List</a></li>
                  <li class="breadcrumb-item active">Edit Barangay Official</li>
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

            <h5 class="card-title mt-3">Barangay Official Details</h5>
            <div id="toast" class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex">
                    <div class="toast-body">
                      Updating Information.
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>

            <form class="row g-3 mt-2" name="update-barangay-official" action="../backend/edit-barangay-official.php" method="POST" enctype="multipart/form-data">
            <?php
            if(isset($_GET['id'])){
              $id = $_GET['id'];
              $sql = "SELECT * FROM brgy_officials WHERE id = $id";
             
              $result = $conn->query($sql);
              
              if ($result->num_rows > 0) {

                $info = $result->fetch_assoc();
            }
            
               
             ?> 
           <form class="row g-3 mt-2">
                <div class=" col-9 row">
                    <div class="col-6">
                        <label for="inputName5" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstname" value="<?= $info['firstname']?>" id="inputName1">
                    </div>
                    <div class="col-6">
                        <label for="inputName5" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lastname" value="<?= $info['lastname']?>" id="inputName2">
                    </div>

                <!-- Force next columns to break to new line at md breakpoint and up -->
                <!-- <div class="w-100 d-none d-md-block"></div> -->

                <div class="col-6">
                    <label for="inputName5" class="form-label">Committee</label>
                      <select id="inputState" class="form-select" name="committee">
                         <option value="<?= $info['committee']?>"><?= $info['committee']?> </option>
                         <option>...</option>
                      </select>
                    </div>
                <div class="col-6">
                    <label for="inputName5" class="form-label">Position</label>
                      <select id="inputState" class="form-select" name="position" value="<?= $info['']?> " name="" value="<?= $info['']?> " name="" value="<?= $info['']?> " name="" value="<?= $info['']?> " name="" value="<?= $info['']?> ">
                         <option value="<?= $info['position']?>"><?= $info['committee']?></option>
                         <option>Chairman</option>
                         <option>Deputy</option>
                         <option>Barangay Security Officer</option>
                      </select>
                    </div>
               
                </div>
            <div class="col-2">
                <span class="card-title ms-4">Photo</span>
                <br>
           <div class="file-upload-container ms-4 mt-2">
                <input type="file" id="file-upload" class="file-upload-input">
                    <label for="file-upload" class="file-upload-label">
                <span class="upload-icon">
                    <i class="bi bi-image"></i>
                </span>
                <span class="upload-text">
                        Click to upload
                </span>
            </div>
            </div>
            <?php } ?>
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
                background: rgba(45, 22, 116, 0.15);
                color: white;
                cursor: pointer;
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
                cursor: pointer;
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


                <div class="text-left">
                  <a href="dashboard_admin.php" style = "width: 120px;" class="btn btn-outline-secondary">Cancel</a>
                  <button style = "width: 120px;" type="save" name="update-barangay-official" class="btn btn-primary">Save</button>               
                </div>
              </form>





            </div>
          </div>

        </div>
      </div>
    </section>
    <script>
            document.getElementById('btn').addEventListener('click', function() {
              var toast = new bootstrap.Toast(document.getElementById('toast'), { autohide: false });
              toast.show();
              
              setTimeout(function(){
                toast.hide();
              }, 2000); // Hide the toast after 2 seconds
            });
          </script>


<?php require('../includes/footer.php') ?>