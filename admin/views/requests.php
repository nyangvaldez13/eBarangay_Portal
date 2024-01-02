<?php require('../includes/header.php') ?>

<section class="section pt-5">
    <div class="row align-items-center">
    <div class="col-xl">
        <div class="fs-2 fw-bold card-title">Requests List</div>
    </div>
    </div>

</section>


<section class="section mt-5">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Request</th>
                    <th>Status</th>
                    <th>Request Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Unity Pugh</td>
                    <td>9958</td>
                    <td>Curicó</td>
                    <td>
                       <?php 
                       
                       $status = "Processing";

                        if ($status === "Approved"){
                            $isProcess = true;
                        } else {
                            $isProcess = false;
                        }
                        

                        $toDisplay = $isProcess ? 'Processing' : 'Approved';
                        $toDisplayClass =  $isProcess ? 'text-warning border border-warning rounded bg-light col-4 text-center' : 'text-success border border-success rounded bg-light col-4 text-center';
                       
                       ?>
                       <div class="<?= $toDisplayClass; ?>"><?= $toDisplay?></div>
                    <td>
                         <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#largeModal"><i class="bi bi-eye"></i>
                        </button>
                       
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></button>
                    </td>
                  </tr>

                  <tr>
                    <td>Unity Pugh</td>
                    <td>9958</td>
                    <td>Curicó</td>
                    <td>
                       <?php 
                        $status = "Processing";
                        $isProcess = false;
                        if ($status === "Approved"){
                            $isProcess = true;
                        } 
                        
                        $toDisplay = $isProcess ? 'Processing' : 'Approved';
                        $toDisplayClass =  $isProcess ? 'text-warning border border-warning rounded bg-light col-4 text-center' : 'text-success border border-success rounded bg-light col-4 text-center';
                       
                       ?>
                       <div class="<?= $toDisplayClass; ?>"><?= $toDisplay?></div>
                    <td>
                        <button type="button" class="btn"><i class="bi bi-eye"></i></button>
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></button>
                    </td>
                  </tr>
                 
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

<div class="modal fade" id="deleteModal" tabindex="-1">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                     
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="card-title fs-6"> Are you sure you want to delete?</span>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">No</button>
                      <button type="button" class="btn btn-primary">Yes</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Small Modal-->

              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
                Large Modal
              </button>

              <div class="modal fade" id="largeModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="card-title"> Barangay Certificate Request Form</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="grid d-flex">

                        <form class = "row g-3">
            <div class="col-6">
                        <label for="inputName5" class="form-label mt-2">First Name</label>
                        <input type="text" class= "form-control" id="inputName2">
                </div>
                <div class="col-6">
                        <label for="inputName5" class="form-label mt-2">Last Name</label>
                        <input type="text" class= "form-control" id="inputName2">
                </div>
                <div class="col-2">
                        <label for="inputName5" class="form-label mt-2">Age</label>
                        <input type="text" class= "form-control" id="inputName2">
                </div>
                <div class="col-3">
                       <label for="inputName5" class="form-label mt-2">Sex</label>
                      <select id="inputState" placeholder = "Select a type" class="form-select">
                         <option selected="">Select a type</option>
                         <option>...</option>
                      </select>
                    </div>
                <div class="col-7">
                        <label for="inputName5" class="form-label mt-2">Phone Number</label>
                        <input type="number" min = "0" class= "form-control" id="inputName2">
                </div>
                <div class="col-12">
                        <label for="inputName5" class="form-label mt-2">Email</label>
                        <input type="text" class= "form-control" id="inputName2">
                </div>
                <div class="col-8">
                        <label for="inputName5" class="form-label mt-2">Address</label>
                        <input type="text" class= "form-control" id="inputName2">
                </div>
                <div class="col-4">
                       <label for="inputName5" class="form-label mt-2">Purpose</label>
                      <select id="inputState" placeholder = "Select a type" class="form-select">
                         <option selected="">Select a type</option>
                         <option>...</option>
                      </select>
                    </div>



            </form>

                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Decline</button>
                      <button type="button" class="btn btn-primary">Approve</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Large Modal-->

    <script>

        
    </script>


<?php require('../includes/footer.php') ?>