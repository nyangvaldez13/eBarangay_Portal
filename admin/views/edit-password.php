<?php require('../includes/header.php') ?>

    <div class="container">
        <div class="row">
            <div class="col-3">
             <nav>
                <ul class = "nav flex-column">
                    <li class= "fs-6 nav-item fw-bold"><a href = "settings.php" class = "nav-link active">
                         <i class="bi bi-pencil-fill me-2"></i> Edit Profile
                        </a></li>
                    <li class= "fs-6 nav-item fw-bold"><a href = "edit-password.php" class = "nav-link">
                    <i class="bx bx-lock me-2"></i>
                        Edit Password</a></li>
                </ul>
             </nav>
            </div>
            <div class="col-8 d-flex justify-content-center align-items-center flex-column mt-2">
             <form class="row g-3 mt-1 ms-4">
                <div class=" col-12 row">

                <div class="col-12">
                        <label for="inputName5" class="form-label mt-2">Current Password</label>
                        <input type="password" class= "form-control" id="inputName2">
                </div>
                 <div class="col-12">
                        <label for="inputName5" class="form-label mt-2"> New Password</label>
                        <input type="password" class= "form-control" id="inputName2">
                </div>
                 <div class="col-12">
                        <label for="inputName5" class="form-label mt-2">Confirm New Password</label>
                        <input type="password" class= "form-control" id="inputName2">
                </div>

                </div>
                 <div class="text-center mt-5">
                  <button style = "width: 120px; margin-right: 10px;" type="cancel" class="btn btn-outline-primary btn-lg">Cancel</button>
                  <button style = "width: 120px;" type="save" class="btn btn-primary btn-lg">Save</button>               
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


<?php require('../includes/footer.php') ?>