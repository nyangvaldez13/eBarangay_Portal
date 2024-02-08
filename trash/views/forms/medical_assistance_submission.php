


<section id="brgy-form" class="brgy-form">
    <div class="container ">
        <div class="back-button">
        <a href="request" class="btn btn-secondary">Back</a>
        </div>
        <h1 class="mt-4">Medical Assistance Form Form</h1>
        <form method="POST" action="../final_backend/forms/financial_assistance_submission.php" >

            <div class="row mb-3">
                <div class="col-md-5">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="businessName" required name="firstname">
                </div>
                <div class="col-md-5">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" required name="lastname">
                </div>
                <div class="col-md-2">
                    <label for="age" class="form-label">Age</label>
                    <input type="text" class="form-control" required name="age">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">
                    <label for="businessAddress" class="form-label">Sex</label>
                    <select class="form-select" name="sex" id="sex">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="col-md-5">
                    <label for="phone_no" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="phone_no" required name="phone_no">
                </div>

                <div class="col-md-5">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required name="email">
                </div>

            </div>
            <div class="row mb-3">
                <div class="col-md-8">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" required name="address">
                </div>
                <div class="col-md-4">
                    <label for="disease" class="form-label">Disease</label>
                    <input type="text" class="form-control" required name="disease">
                </div>
              
            </div>
            <br>
            
            <button class="btn btn-primary" type="submit" name="submit-button">SUBMIT REQUEST</button>
        </form>
    </div>
</section>

