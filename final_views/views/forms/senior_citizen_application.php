


<section id="brgy-form" class="brgy-form">
    <div class="container ">
        <div class="back-button">
        <a href="request?header=1" class="btn btn-secondary">Back</a>
        </div>
        <h1 class="mt-4">Senior Citizen Application Form</h1>
        <form method="POST" action="../final_backend/forms/senior_citizen_application.php" enctype="multipart/form-data">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="businessName" required name="firstname">
                </div>
                <div class="col-md-6">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" required name="lastname">
                </div>
                
            </div>
            <div class="row mb-3">
            <div class="col-md-2">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" required name="age">
                </div>

                <div class="col-md-5">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date" class="form-control" id="phone_no" required name="birthday">
                </div>

                <div class="col-md-5">
                    <label for="file_upload" class="form-label">Barangay Certificate</label>
                    <input type="file" class="form-control" id="file_upload" required name="file_upload">
                </div>

            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" required name="address">
                </div>
              
              
            </div>
            <br>
            
            <button class="btn btn-primary" type="submit" name="submit-button">SUBMIT REQUEST</button>
        </form>
    </div>
</section>

