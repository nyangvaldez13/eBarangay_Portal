<?php require('../includes/header.php') ?>

<section class="section pt-2">
    <div class="row align-items-center">
    <div class="col-xl">
       <div class="card-title fs-3">Edit News</div>
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="news.php"> News List</a></li>
                  <li class="breadcrumb-item active">Edit News </li>
                </ol>
              </nav>
    </div>
    </div>
   <form class="row g-3 mt-2" name="update-news" action="../backend/edit-news.php" method="POST" enctype="multipart/form-data">
            <?php
            if(isset($_GET['id'])){
              $id = $_GET['id'];
              $sql = "SELECT * FROM activity WHERE activity_id = $id";
             
              $activity = $conn->query($sql);
              
              if ($activity->num_rows > 0) {

                $activity = $activity->fetch_assoc();
            }
          }
               
             ?>
             
</section>
<section class="section mt-2">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

            <h5 class="card-title mt-3">General Information</h5>
          <form class = "row g-3" name="update-news" action="../backend/edit-news.php" method="POST" enctype="multipart/form-data">
            <div class="col-12">
                        <label for="inputName5" class="form-label mt-2">Title</label>
                        <input type="text" value="<?= $activity['title'] ?>"name="title" class= "form-control" id="inputName2" placeholder ="Type news title here. . .">
                </div>
                <div class="col-12">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                <div class="col-12">
                  
                   <textarea type="text" style = "display: inline-block; height: auto;  text-wrap: break-word;" class= "form-control" id="inputName2" rows ="5"> <?= $activity['description'] ?> </textarea>        
                   <!-- <input type="text" name="description" class= "form-control" style = "height: 200px;" disabled placeholder ="News Description"> -->
              <!--</div>-->
                  </div>
                </div>
                  <div class="col-4">
                       <label for="inputName5" class="form-label">News Type</label>
                      <select id="inputState" name="type"  placeholder = "Select a type" class="form-select">
                         <option selected=""><?= $activity['activity'] ?></option>
                         <option>Event</option>
                         <option>Announcement</option>
                      </select>
                    </div>
                    <div class="col-4">
                        <label for="inputDate" class="form-label">Date</label>
                        <input type="date"name="date"value="<?= $activity['date'] ?>" class="form-control" >
                    </div>
                    <div class="col-4">
                        <label for="inputName5" class="form-label">Location</label>
                        <input type="text" value="<?= $activity['place'] ?>"name="location" class="form-control" id="inputName2" placeholder = "Type location here...">
                    </div>

            </form>
            </div>
          </div>
        
        </div>
      </div>
    </section>
<section class="section mt-2">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mt-3">Media</h5>
                    <p>Photo</p>
                    <div class="file-upload-container ms-4 mt-2 col">
                        <input type="file" value="<?= $activity['image'] ?>"name="media" id="file-upload" class="file-upload-input">
                        <label for="file-upload" class="file-upload-label">
                            <span class="upload-icon">
                                <i class="bi bi-image"></i>
                            </span>
                            <span class="upload-text">Click add image</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    .file-upload-container {
        width: 95%;
        height: 200px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: rgba(45, 22, 116, 0.15);
        color: white;
        cursor: pointer;
        position: relative;
        border-radius: 10px;
        padding: 20px;
    }

    .file-upload-input {
        display: none;
    }

    .upload-icon {
        font-size: 50px;
        color: grey;
    }

    .upload-text {
        font-size: 15px;
        color: grey;
        margin-top: 10px;
    }
</style>
   
    <section>
      <div class="mt-2" style = "text-align: right;">
        <button style = "width: 120px; margin-right: 10px;" type="cancel" class="btn btn-outline-primary btn-lg">Cancel</button>
        <button style = "width: 120px;" type="save" name="update-news"  class="btn btn-primary btn-lg">Save</button>               
      </div>
    </section>

    <script>
            document.getElementById('btn').addEventListener('click', function() {
              var toast = new bootstrap.Toast(document.getElementById('toast'), { autohide: false });
              toast.show();
              
              setTimeout(function(){
                toast.hide();
              }, 2000); // Hide the toast after 2 seconds
            });
          </script>

<?php require('../includes/footer.php') ?>