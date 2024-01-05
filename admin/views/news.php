<?php require('../includes/header.php') ?>
<?php
require '../backend/news.php';


 ?>

<section class="section pt-5">
    <div class="row align-items-center">
    <div class="col-xl">
         <div class="fs-2 fw-bold card-title">News List</div>
    </div>
  
    <div class="col-auto">
        <div class="">
        <a href="add-news.php" class="btn btn-primary"><i class="bi bi-plus"></i>Add News</a>
        </div>
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
                    <th>Title</th>
                    <th>Location</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php foreach($activities as $act): ?>
                    <td><?= $act['title'] ?></td>
                    <td><?= $act['place'] ?></td>
                    <td><?= $act['activity'] ?></td>
                    <td><?= $act['date'] ?></td>
                    <td><?= $act['heading'] ?></td>
                    <td>
                        <a href="view-news.php?id=<?= $act['id'] ?>" class="btn"><i class="bi bi-eye"></i></a>
                        <a href="edit-news.php?id=<?= $act['id'] ?>" class="btn"><i class="bi bi-pencil"></i></a>
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="deleteModal<?= $act['id']; ?>"><i class="bi bi-trash3"></i></button>
                    </td>
                  </tr>

                  <div class="modal fade" id="deleteModal<?= $act['id']; ?>" tabindex="-1">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <span class="card-title fs-6"> Are you sure you want to delete this news?</span>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">No</button>
                                    <button type="button" class="btn btn-primary" onclick="deleteNews(<?= $act['id']; ?>)">Yes</button>
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

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
     function deleteNews(newsID) {
        fetch(`../backend/delete-news.php?id=${newsId}`, {
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