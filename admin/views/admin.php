<?php require('./includes/header.php') ?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ebp";

$db = new mysqli($servername, $username, $password, $dbname);

if (isset($_SESSION['access_level'])) {
  $access_level = $_SESSION['access_level'];
  $query = "SELECT * FROM users WHERE access_level = 2";
  $result = mysqli_query($db, $query);

  if ($result) {
      $user_data = mysqli_fetch_assoc($result);
      
      $admin_name = $user_data['name'];
      $email = $user_data['email'];
      $phone = $user_data['phone'];
      
  } else {
      echo "Error: " . mysqli_error($db);
  }
}

 ?>

<section class="section pt-5">
    <div class="row align-items-center">
    <div class="col-xl">
         <div class="fs-2 fw-bold card-title">Admin List</div>
    </div>
    <div class="col-auto">
        <div class="">
        <button type="button" class="btn btn-primary" id = "addBtn"><i class="bi bi-plus"></i> Add Admin</button>
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
                    <th>Admin Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $admin_name; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $phone; ?></td>
                    <td>
                        <button type="button" class="btn" id = "viewBtn"><i class="bi bi-eye"></i></button>
                        <button type="button" class="btn" id = "editBtn"><i class="bi bi-pencil"></i></button>
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal" email="<?php echo $row['email']; ?>"><i class="bi bi-trash3"></i></button>
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
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal" id="cancelDeleteBtn">No</button>
                    <button type="button" class="btn btn-primary" id="confirmDeleteBtn">Yes</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Small Modal-->

    <script>
        
        document.getElementById('addBtn').addEventListener('click', function(){
          window.location.href = "add-admin.php";
        });

        document.getElementById('viewBtn').addEventListener('click', function(){
          window.location.href = "view-admin.php";
        });

        document.getElementById('editBtn').addEventListener('click', function(){
          window.location.href = "edit-admin.php";
        });
        
    </script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        $(".deleteBtn").click(function () {
            var email = $(this).data("email");

            $("#confirmDeleteBtn").data("email", email);
        });

        $("#confirmDeleteBtn").click(function () {
            var email = $(this).data("email");

            $.ajax({
                type: "POST",
                url: "../backend/delete_acc.php",
                data: { email: email },
                success: function (response) {
                    console.log(response);

                  if (response === "success") {

                    alert("Admin deleted successfully!");

                  } else {
                          console.error("Unexpected response from server:", response);

                    alert("An unexpected error occurred. Please try again.");
                  }
                },
                error: function (error) {
                    console.error(error);
                    alert("Error: Unable to communicate with the server. Please try again later.");
                },
            });
        });
    });
</script>


<?php require('./includes/footer.php') ?>