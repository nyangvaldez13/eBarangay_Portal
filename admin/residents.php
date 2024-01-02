<?php require('./includes/header.php') ?>

<section class="section pt-5">
    <div class="row align-items-center">
    <div class="col-xl">
        <div class="fs-2 fw-bold card-title">Residents List</div>
    </div>
    <div class="col-auto">
        <div class="">
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

                <?php include('backend/residents.php')?>

                  <tr>
                  <?php 
                  if($result->num_rows > 0){
                    $residents = $result->fetch_all(MYSQLI_ASSOC);
                    foreach($residents as $resident){
                      $timestamp = strtotime($resident['created_at']);
                      $formatted_date = date('j M Y', $timestamp);
                   
                  ?>
                    <td><?= $resident['resident_name']; ?></td>
                    <td><?= $resident['phone']; ?></td>
                    <td><?= $resident['email']; ?></td>
                    <td><?=  $formatted_date; ?></td>
                    
                    <td>
                        <button type="button" class="btn" id="viewBtn"><i class="bi bi-eye"></i></button>
                      <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash3"></i></button>
                    </td>
                  </tr>
                  <?php 
                   }
                  }
                  ?>
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
      document.getElementById('viewBtn').addEventListener('click', function(){
          window.location.href = "view-resident.php";
        });
        

        console.log("<?=$console_message;?>")
    </script>


<?php require('./includes/footer.php') ?>