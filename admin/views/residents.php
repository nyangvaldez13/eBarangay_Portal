<?php require('../includes/header.php') ?>

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

                <?php include('../backend/residents.php')?>

                  <tr>
                  <?php 
                  
                  if($result->num_rows > 0){
                    $residents = $result->fetch_all(MYSQLI_ASSOC);
                    foreach($residents as $resident){
                      $timestamp = strtotime($resident['created_at']);
                      $formatted_date = date('j M Y', $timestamp);
                   
                  ?>
                    <td><?= $resident['firstname']; $resident['lastname']; ?></td>
                    <td><?= $resident['phone']; ?></td>
                    <td><?= $resident['email']; ?></td>
                    <td><?=  $formatted_date; ?></td>
                    
                    <td>
                        <!-- <button type="button" class="btn" id="viewBtn"><i class="bi bi-eye"></i></button> -->

                      <a href="view-resident.php?residentId=<?= $resident['id']; ?>" class="btn"><i class="bi bi-eye"></i></a>
                      <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $resident['id']; ?>">
                          <i class="bi bi-trash3"></i>
                      </button>  
                    </td>
                  </tr>
                   <!-- Modal for each resident -->
                    <div class="modal fade" id="deleteModal<?= $resident['id']; ?>" tabindex="-1">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <span class="card-title fs-6"> Are you sure you want to delete this resident?</span>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">No</button>
                                    <button type="button" class="btn btn-primary" onclick="deleteResident(<?= $resident['id']; ?>)">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
    

    <script>
       function deleteResident(residentId) {
        fetch(`../backend/delete-resident.php?residentId=${residentId}`, {
            method: 'DELETE',
        })
        .then(response => {
            if (response.ok) {
                alert('Resident deleted successfully');
              
                location.reload();
            } else {
                alert('Failed to delete resident');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Failed to delete resident');
        });
    }
      
    </script>


<?php require('../includes/footer.php') ?>