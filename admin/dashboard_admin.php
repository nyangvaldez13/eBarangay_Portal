<?php require('./includes/header.php') ?>

<div class="grid gap-0">
    <div class="fs-1">Welcome, <span class="text-warning">Admin!</span></div>
    <div class="fs-4 text-success">Manage with confidence and ease.</div>
</div>


  
</p>

     
    </div><!-- End Page Title -->

    <section class="section mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-people-fill text-warning"></i> Total Residents</h5>
          <p>129</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-person-fill text-success"></i> Total Admins</h5>
          <p>14</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-file-earmark text-info"></i> Files</h5>
          <p>127</p>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
            <div class="row align-items-center">
    <div class="col-xl">
        <div class="fs-2 card-title fw-bold">Barangay Officials</div>
    </div>
    <div class="col-auto">
        <div class="">
        <button type="button" class="btn btn-primary"><i class="bi bi-plus"></i> Add Barangay Official</button>
        </div>
    </div>
    </div>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      Name
                    </th>
                    <th>Committee</th>
                    <th>Position</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Unity Pugh</td>
                    <td>9958</td>
                    <td>Curicó</td>
                    <td>
                        <button type="button" class="btn"><i class="bi bi-eye"></i></button>
                        <button type="button" class="btn"><i class="bi bi-pencil"></i></button>
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

    <script>

        
    </script>

    <?php require('./includes/footer.php') ?>