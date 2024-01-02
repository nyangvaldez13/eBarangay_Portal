<?php require('../includes/header.php') ?>

<section class="section pt-2">
    <div class="row align-items-center">
    <div class="col-xl">
       <div class="card-title fs-3">Add Admin</div>
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="admin.php">Admin List</a></li>
                  <li class="breadcrumb-item active">Add Admin</li>
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

           <form class="row g-3 mt-2 " name="add-admin" method="POST" action="../backend/add-admin.php">
                <div class=" col-9 row">
                    <div class="col-4">
                        <label for="inputName5" class="form-label">First Name</label>
                        <input type="text" name="firstname" class="form-control" id="inputName1">
                    </div>
                    <div class="col-4">
                        <label for="inputName5" class="form-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control" id="inputName2">
                    </div>
                    <div class="col-4">
                        <label for="inputName5" class="form-label">Password</label>
                        <input type="password" name="user_password" class="form-control" id="inputName2">
                    </div>

                <!-- Force next columns to break to new line at md breakpoint and up -->
                <!-- <div class="w-100 d-none d-md-block"></div> -->

                <div class="col-12">
                        <label for="inputName5" class="form-label">Address</label>
                        <input type="text" name="address" class= "form-control" id="inputName2">
                </div>


                <div class="col-6">
                    <label for="inputName5" class="form-label">Email</label>
                     <input type="email" name="email" class="form-control" id="inputName3">
                    </div>
                <div class="col-6">
                    <label for="inputName5" class="form-label">Contact Number</label>
                     <input type="number" name="phone" class="form-control" id="inputName4">
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
                  <button style = "width: 120px; margin-right: 10px;" type="cancel" class="btn btn-secondary">Cancel</button>
                  <button style = "width: 120px;" type="save" class="btn btn-primary">Save</button>               
                </div>
              </form>





            </div>
          </div>

        </div>
      </div>
    </section>


<?php require('../includes/footer.php') ?>