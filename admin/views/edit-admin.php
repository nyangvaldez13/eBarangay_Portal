<?php require('../includes/header.php') ?>
<?php require '../backend/db.php';?>

<section class="section pt-2">
    <div class="row align-items-center">
    <div class="col-xl">
       <div class="card-title fs-3">Edit Admin Details</div>
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="admin.php">Admin List</a></li>
                  <li class="breadcrumb-item active">Edit Admin Details</li>
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

            <h5 class="card-title mt-3">Admin Details</h5>
            <div id="toast" class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex">
                    <div class="toast-body">
                      Updating Information.
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>

          
           <form class="row g-3 mt-2" name="update-admin" action="../backend/edit-admin.php" method="POST" enctype="multipart/form-data">
           <?php 
            if(isset($_GET['id'])){
              $adminId = $_GET['id'];
              $sql = "SELECT * FROM users WHERE id = $adminId";
             
              $result = $conn->query($sql);
              
              if ($result->num_rows > 0) {

                $info = $result->fetch_assoc();
            }
            
               
             ?> 
           <input type="hidden" name="id" value="<?= $info['id'] ?>">
                <div class=" col-9 row">
                    <div class="col-6">
                        <label for="inputName5" class="form-label">First Name</label>
                        <input type="text" name="firstname" value="<?= $info['firstname'] ?>" class="form-control" id="inputName1">
                    </div>
                    <div class="col-6">
                        <label for="inputName5" class="form-label">Last Name</label>
                        <input type="text" name="lastname" value="<?= $info['lastname'] ?>" class="form-control" id="inputName2">
                    </div>

                <!-- Force next columns to break to new line at md breakpoint and up -->
                <!-- <div class="w-100 d-none d-md-block"></div> -->

                <div class="col-12">
                        <label for="inputName5" class="form-label">Address</label>
                        <input type="text" name="address" value="<?= $info['address'] ?>" class="form-control" id="inputName2">
                </div>


                <div class="col-6">
                    <label for="inputName5" class="form-label">Email</label>
                     <input type="text" name="email" value="<?= $info['email'] ?>" class="form-control" id="inputName3">
                    </div>
                <div class="col-6">
                    <label for="inputName5" class="form-label">Contact Number</label>
                     <input type="text" name="phone" value="<?= $info['phone'] ?>" class="form-control" id="inputName4">
                    </div>
               
                </div>
            <div class="col-2">
                <span class="card-title ms-4">Photo</span>
                <br>
           <div class="file-upload-container ms-4 mt-2">
                <input type="file" id="file-upload" name="photo" class="file-upload-input">
                    <label for="file-upload" class="file-upload-label">
                <span class="upload-icon">
                    <i class="bi bi-image"></i>
                </span>
                <span class="upload-text">
                        Click to upload
                </span>
            </div>
            </div>
            <?php 
             }
            
             ?>
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
                overflow: hidden;
                position: relative;
                }

                .file-upload-label::before {
                content: "";
                background-image: url('data:image;base64,<?= base64_encode($info['photo']) ?>');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                opacity: 80%;
                }

                .upload-icon {
                font-size: 50px;
                color: #252523;
                z-index: 1;
                }

                .upload-text {
                font-size: 15px;
                color: #252523;
                z-index: 1;
                margin-top: 2px; /* Adjust as needed */
}
            </style>
                
                <div class="text-left">
                  <a href="admin.php" style="width: 120px;" class="btn btn-outline-secondary">Cancel</a>
                  <button style = "width: 120px;" id="btn" type="submit" name="update-admin" class="btn btn-primary">Save</button>               
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