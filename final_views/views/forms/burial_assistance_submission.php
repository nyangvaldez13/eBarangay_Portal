


<section id="brgy-form" class="brgy-form">
    <div class="container ">
        <div class="back-button">
        <a href="request" class="btn btn-secondary">Back</a>
        </div>
        <h1 class="mt-4">Burial Assistance Request Form</h1>
        <form method="POST">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" required name="first_name">
                </div>
                <div class="col-md-2">
                    <label for="lastname" class="form-label">Age</label>
                    <input type="text" class="form-control" required name="last_name">
                </div>
                <div class="col-md-4">
                    <label for="lastname" class="form-label">Birth Date</label>
                    <input type="text" class="form-control" required name="last_name">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">
                    <label for="gender" class="form-label">Gender</label>
                    <select name="" id="" class="form-select">
                        <option value="">Male</option>
                        <option value="">Female</option>
                    </select>
                </div>
                <div class="col-md-10">
                    <label for="lastname" class="form-label">Adress</label>
                    <input type="text" class="form-control" required name="last_name">
                </div>
              
            </div>
            <div class="row mb-3">
                <div class="col-md-10">
                    <label for="phone_no" class="form-label">Cause of Death</label>
                    <input type="text" class="form-control" id="phone_no" required name="phone_no">
                </div>
                <div class="col-md-2">
                    <label for="email" class="form-label">Date of Death</label>
                    <input type="date" class="form-control" id="email" required name="email">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="address" class="form-label">Name of Beneficiary</label>
                    <input type="text" class="form-control" id="address" required name="address">
                </div>
                <div class="col-md-3">
                    <label for="purpose" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="purpose" required name="purpose">
                </div>
                <div class="col-md-3">
                    <label for="purpose" class="form-label">Email</label>
                    <input type="text" class="form-control" id="purpose" required name="purpose">
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="submit-button">SUBMIT REQUEST</button>
        </form>
    </div>
</section>

