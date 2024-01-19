<!-- Home Section -->
<section id="brgy-form" class="brgy-form">
    <div class="brgy-form-background" style="background-image: url('../assets/home/signup-bg.png');">
    </div>
    <div class="container">
        <div class="back-button">
            <a href="request.php" class="btn btn-secondary">Back</a>
        </div>
        <h1 class="mt-4">Barangay Certificate Request Form</h1>
        <form method="POST">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" required name="first_name">
                </div>
                <div class="col-md-6">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" required name="last_name">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="age" class="form-label">Age</label>
                    <input type="text" class="form-control" id="age" required name="age">
                </div>
              
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="phone_no" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="phone_no" required name="phone_no">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" required name="email">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" required name="address">
                </div>
                <div class="col-md-6">
                    <label for="purpose" class="form-label">Purpose</label>
                    <input type="text" class="form-control" id="purpose" required name="purpose">
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="submit-button">SUBMIT REQUEST</button>
        </form>
    </div>
</section>

