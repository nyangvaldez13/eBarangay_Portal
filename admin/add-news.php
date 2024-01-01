<?php require('./includes/header.php') ?>

<section class="section pt-2">
    <div class="row align-items-center">
    <div class="col-xl">
       <div class="card-title fs-3">Add News</div>
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard_admin.php"> News List</a></li>
                  <li class="breadcrumb-item active">Add News </li>
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

            <h5 class="card-title mt-3">General Information</h5>

           <form class="row g-3 mt-2">
                <div class=" col-9 row">
                    <div class="col-6">
                        <label for="inputName5" class="form-label">Title</label>
                        <input type="text" class="form-control" id="inputName1">
                    </div>
                    <div class="col-6">
                        <label for="inputName5" class="form-label">Description</label>
                        <input type="text" class="form-control" id="inputName2">
                    </div>

                <!-- Force next columns to break to new line at md breakpoint and up -->
                <!-- <div class="w-100 d-none d-md-block"></div> -->

                <div class="col-6">
                    <label for="inputName5" class="form-label">News Type</label>
                      <select id="inputState" class="form-select">
                         <option selected="">         </option>
                         <option>...</option>
                      </select>
                    </div>
                <div class="col-6">
                    <label for="inputName5" class="form-label">Date </label>
                      <select id="inputState" class="form-select">
                         <option selected="">         </option>
                         <option>...</option>
                      </select>
                    </div>
                <div class="col-6">
                        <label for="inputName5" class="form-label">Location</label>
                        <input type="text" class="form-control" id="inputLocation">
                    </div>
                </div>
            
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


<?php require('./includes/footer.php') ?>