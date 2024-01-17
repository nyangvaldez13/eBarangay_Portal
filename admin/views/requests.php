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
    <?php 
    $notifications = [];
    foreach ($tables as $table => $tableLabel) {
        $sql = "SELECT *, users.* 
                FROM $table 
                LEFT JOIN users ON $table.request_id = users.id 
                ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $name = $row['firstname'] . ' ' . $row['lastname'];
                $status = $row['status'];

                if($status == 1 ){
                  $toDisplay = 'Approved';
                  $toDisplayClass = 'text-success border border-success rounded bg-light text-center ';
                } else if($status == 2){
                  $toDisplay = 'Processing';
                  $toDisplayClass = 'text-warning border border-warning rounded bg-light col-4 text-center';
                } else {
                  $toDisplay = 'Declined';
                  $toDisplayClass = 'text-danger border border-danger rounded bg-light col-4 text-center';
                }
               
                $date = date('d M Y', strtotime($row['request_date']));
                
                $notification[] = [
                  
                ]
   
            ?>
              <tr data-table="<?= $table ?>" data-id="<?= $row['id'] ?>" >
                <td><?= $name ?></td>
                <td><?= $tableLabel ?></td>
                
                <td style="width: 200px;">
                    <div class="<?= $toDisplayClass; ?>" style="width:150px;"><?= $toDisplay?></div>
                </td>

                <td><?= $date ?></td>
                <td>
                  
                  <button type="button" class="btn btn-view" onclick="showRequest('<?= $table ?>', '<?= $row['ID'] ?>', '<?= $tableLabel ?>')"><i class="bi bi-eye"></i></button>
                  <button type="button" class="btn btn-delete" onclick="showDeleteModal('<?= $table ?>', '<?= $row['ID'] ?>', '<?= $tableLabel ?>')"><i class="bi bi-trash3"></i></button>
                </td>
              </tr>
    <?php
            }
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

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                  <button type="button" onclick="deleteClose()" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body" id="deleteModalBody">

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" onclick="deleteClose()" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary" onclick="deleteRequest()">Delete</button>
              </div>
          </div>
      </div>
    </div>

             

              <div class="modal fade" id="requestModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="card-title" id="card-title"></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="grid d-flex">

                        <form class = "row g-3">
            <div class="col-6">
                        <label for="inputName5" class="form-label mt-2">First Name</label>
                        <input type="text" class= "form-control" id="first_name">
                </div>
                <div class="col-6">
                        <label for="inputName5" class="form-label mt-2">Last Name</label>
                        <input type="text" class= "form-control" id="last_name">
                </div>
                <div class="col-2">
                        <label for="inputName5" class="form-label mt-2">Age</label>
                        <input type="text" class= "form-control" id="age">
                </div>
                <div class="col-3">
                       <label for="inputName5" class="form-label mt-2">Sex</label>
                      <select id="sex" placeholder = "Select a type" class="form-select">
                         <option selected="">Select a type</option>
                         <option>...</option>
                      </select>
                    </div>
                <div class="col-7">
                        <label for="inputName5" class="form-label mt-2">Phone Number</label>
                        <input type="number" min = "0" class= "form-control" id="phone_number">
                </div>
                <div class="col-12">
                        <label for="inputName5" class="form-label mt-2">Email</label>
                        <input type="text" class= "form-control" id="email">
                </div>
                <div class="col-8">
                        <label for="inputName5" class="form-label mt-2">Address</label>
                        <input type="text" class= "form-control" id="address">
                </div>
                <div class="col-4">
                       <label for="inputName5" class="form-label mt-2">Purpose</label>
                      <select id="purpose" placeholder = "Select a type" class="form-select">
                         <option selected="">Select a type</option>
                         <option>...</option>
                      </select>
                    </div>



            </form>

                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="declineRequest()">Decline</button>
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal" onclick="holdRequest()">Hold</button>
                      <button type="button" id="approveRequest" class="btn btn-info" onclick="approvedRequest()">Approve</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Large Modal-->

    <script>
      function deleteClose(){
        $('#deleteModal').modal('hide')
      }

      function showDeleteModal(table, id, request){
  
        var modalBody = document.getElementById('deleteModalBody');
        modalBody.innerHTML = `Are you sure do you want to delete this ${request} Request`;
        
        $('#deleteModal').modal('show');

        $('#deleteModal').data('table', table);
        $('#deleteModal').data('id', id);
      }
      
      function deleteRequest(){
        var table = $('#deleteModal').data('table');
        var id = $('#deleteModal').data('id');

        fetch(`../backend/delete-request.php?table=${table}&id=${id}`, {
        }).then(response => {
          if (response.ok) {
               

                $('#deleteModal').modal('hide')
                location.reload();
            } else {
              
            }
          }
        ).catch(error => {
            console.error('Error:', error);
            alert('Failed to delete request');
        });
      }
      
      function showRequest(table, id, request){
        var title = document.getElementById('card-title');
        title.innerHTML = `${request}`;

        $('#requestModal').data('table', table);
        $('#requestModal').data('id', id);



        fetch(`../backend/view-request.php?table=${table}&id=${id}`,{
        }).then(response => {
         
            if (!response.ok) {
              throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();

          
        }).then(data => {

          var firstname = document.getElementById('first_name');
          var lastname = document.getElementById('last_name');
          var age = document.getElementById('age');
          var sex = document.getElementById('sex');
          var phone_number = document.getElementById('phone_number');
          var email = document.getElementById('email');
          var address = document.getElementById('address');
          var purpose = document.getElementById('purpose');

          firstname.value = data.data.firstname;
          $('#requestModal').modal('show');
        })

       

      }

      function approvedRequest(){
        var table = $('#requestModal').data('table');
        var id = $('#requestModal').data('id');
        var type = '1';

        fetch(`../backend/accept-decline.php?table=${table}&id=${id}&type=${type}`, {
        }).then(response => {
          if (response.ok) {
               

                $('#requestModal').modal('hide')
                location.reload();
            } else {
              
            }
          }
        ).catch(error => {
            console.error('Error:', error);
            alert('Failed to approve request');
        });
      }

      function declineRequest(){
        var table = $('#requestModal').data('table');
        var id = $('#requestModal').data('id');
        var type = '3';

        fetch(`../backend/accept-decline.php?table=${table}&id=${id}&type=${type}`, {
        }).then(response => {
          if (response.ok) {
               

                $('#requestModal').modal('hide')
                location.reload();
            } else {
              
            }
          }
        ).catch(error => {
            console.error('Error:', error);
            alert('Failed to approve request');
        });
      }

      function holdRequest(){
        var table = $('#requestModal').data('table');
        var id = $('#requestModal').data('id');
        var type = '2';

        fetch(`../backend/accept-decline.php?table=${table}&id=${id}&type=${type}`, {
        }).then(response => {
          if (response.ok) {
               

                $('#requestModal').modal('hide')
                location.reload();
            } else {
              
            }
          }
        ).catch(error => {
            console.error('Error:', error);
            alert('Failed to approve request');
        });
      }


    </script>


<?php require('../includes/footer.php') ?>