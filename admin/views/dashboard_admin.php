<?php require('../includes/header.php') ?>
<?php
require '../backend/dashboard_admin.php';


 ?>

<div class="grid gap-0">
    <div class="fs-1 fw-bold">Welcome, <span class="text-warning"><?= $firstname; ?></span></div>
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
          <?php require('../backend/dashboard.php') ?>
          <p><?= $residentCount; ?></p>
        </div>
      </div>
    </div>

    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-person-fill text-success"></i> Total Admins</h5>
          <p><?= $adminCount; ?></p>
        </div>
      </div>
    </div>

    <div class="col-lg-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-file-earmark text-info"></i> Pending Request</h5>
          <p><?= $totalCount; ?></p>
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
        <a href="add-barangay-official.php" class="btn btn-primary"><i class="bi bi-plus"></i>Add Barangay Official</a>
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
                    <?php foreach($brgyPerson as $person): ?>
                   <td><?= $person['firstname'] ?> <?= $person['lastname'] ?></td>
                   <td><?= $person['committee'] ?></td>
                   <td><?= $person['position'] ?></td>
                    <td>
                        <a href="view-barangay-official.php?id=<?= $person['id'] ?>" class="btn"><i class="bi bi-eye"></i></a>
                        <a href="edit-barangay-official.php?id=<?= $person['id'] ?>" class="btn"><i class="bi bi-pencil"></i></a>
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $person['id']; ?>"><i class="bi bi-trash3"></i></button>
                    </td>
                  </tr>
                  <!-- Modal for each brgy official -->
                   <div class="modal fade" id="deleteModal<?= $person['id']; ?>" tabindex="-1">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <span class="card-title fs-6"> Are you sure you want to delete this barangay official?</span>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">No</button>
                                    <button type="button" class="btn btn-primary" onclick="deleteOfficial(<?= $person['id']; ?>)">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>



    <!-- <div class="modal fade" id="deleteModal" tabindex="-1">
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
              </div>End Small Modal -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
     function deleteOfficial($personId) {
        fetch(`../backend/delete-barangay-official.php?id=${$personId}`, {
            method: 'DELETE',
        })
        .then(response => {
            if (response.ok) {
                alert('Barangay official deleted successfully');
              
                location.reload();
            } else {
                alert('Failed to delete barangay official'); 
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Failed to delete arangay official');
        });
    }
</script>

    <?php require('../includes/footer.php') ?>