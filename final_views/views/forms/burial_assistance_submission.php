


<section id="brgy-form" class="brgy-form">
    <div class="container ">
        <div class="back-button">
        <a href="request" class="btn btn-secondary">Back</a>
        </div>
        <h1 class="mt-4">Burial Assistance Request Form</h1>
        <form method="POST" action="../final_backend/forms/burial_assistance_submission.php" >
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="firstname" class="form-label">Deceased Full Name</label>
                    <input type="text" class="form-control" id="firstname" required name="deceased">
                </div>
                <div class="col-md-2">
                    <label for="lastname" class="form-label">Age</label>
                    <input type="number" min="0" class="form-control" required name="age">
                </div>
                <div class="col-md-4">
                    <label for="lastname" class="form-label">Birth Date</label>
                    <input type="date" class="form-control" required name="birthday">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">
                    <label for="gender" class="form-label">Gender</label>
                    <select name="sex" id="sex" class="form-select">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="col-md-10">
                    <label for="address" class="form-label">Adress</label>
                    <input type="text" class="form-control" required name="address">
                </div>
              
            </div>
            <div class="row mb-3">
                <div class="col-md-10">
                    <label for="cause_of_death" class="form-label">Cause of Death</label>
                    <input type="text" class="form-control" id="cause_of_death" required name="cause_of_death">
                </div>
                <div class="col-md-2">
                    <label for="date_of_death" class="form-label">Date of Death</label>
                    <input type="date" class="form-control" id="date_of_death" required name="date_of_death">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="beneficiary" class="form-label">Name of Beneficiary</label>
                    <input type="text" class="form-control" id="beneficiary" required name="beneficiary">
                </div>
                <div class="col-md-3">
                    <label for="phone_no" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="phone_no" required name="phone_no">
                </div>
                <div class="col-md-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required name="email">
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="submit-button">SUBMIT REQUEST</button>
        </form>
    </div>
</section>

