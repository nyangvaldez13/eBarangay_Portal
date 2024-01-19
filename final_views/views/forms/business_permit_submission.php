


<section id="brgy-form" class="brgy-form">
    <div class="container ">
        <div class="back-button">
        <a href="request.php" class="btn btn-secondary">Back</a>
        </div>
        <h1 class="mt-4">Business Permit Request Form</h1>
        <form method="POST">
            <div class="row mb-3">
                <div class="col-md-10">
                    <label for="businessName" class="form-label">Business Name</label>
                    <input type="text" class="form-control" id="businessName" required name="businessName">
                </div>
                <div class="col-md-2">
                    <label for="businessType" class="form-label">Business Type</label>
                    <input type="text" class="form-control" required name="businessType">
</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="businessAddress" class="form-label">Business Address</label>
                    <input type="text" class="form-control" required name="businessAddress">
                </div>
              
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="ownerName" class="form-label">Owner's Name</label>
                    <input type="text" class="form-control" required name="ownerName">
                </div>
              
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="ownerAddress" class="form-label">Owner's Address</label>
                    <input type="text" class="form-control" required name="ownerAddress">
                </div>
              
            </div>
            <div class="row mb-6">
                <div class="col-md-6">
                    <label for="phone_no" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="phone_no" required name="phone_no">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required name="email">
                </div>
            </div><br>
            
            <button class="btn btn-primary" type="submit" name="submit-button">SUBMIT REQUEST</button>
        </form>
    </div>
</section>

