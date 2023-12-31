<?php require('./includes/header.php') ?>

<section class="section pt-5">
    <div class="row align-items-center">
    <div class="col-xl">
        <div class="fs-2 fw-bold">Residents List</div>
    </div>
    <div class="col-auto">
        <div class="">
        <button type="button" class="btn btn-outline-primary"><i class="bi bi-upload"></i> Export</button>
        </div>
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
                    <th>Residents Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Unity Pugh</td>
                    <td>9958</td>
                    <td>Curicó</td>
                    <td>Curicó</td>
                    <td>
                        <button type="button" class="btn"><i class="bi bi-eye"></i></button>
                        <button type="button" class="btn"><i class="bi bi-trash3"></i></button>
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




<?php require('./includes/footer.php') ?>