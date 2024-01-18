<?php require('../includes/header.php') ?>

<section class="section pt-2">
    <div class="row align-items-center">
    <div class="col-xl">
       <div class="card-title fs-3">Add News</div>
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="news.php"> News List</a></li>
                  <li class="breadcrumb-item active">Add News </li>
                </ol>
              </nav>
    </div>
    </div>

</section>
<section class="section mt-2">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

            <h5 class="card-title mt-3">General Information</h5>
            <div id="toast" class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex">
                    <div class="toast-body">
                      Creating Information.
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>

          <form class = "row g-3" name="add-news" method="POST" enctype="multipart/form-data" action="../backend/add-news.php">
            <div class="col-12">
                        <label for="inputName5" class="form-label mt-2">Title</label>
                        <input type="text" name="title" class= "form-control" required id="inputName2" placeholder ="Type news title here. . .">
                </div>
                <div class="col-12">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                <div class="col-12">
                   <textarea type="text" name = "description" style = "display: inline-block; height: auto;  text-wrap: break-word;" class= "form-control" id="inputName2" rows ="5"></textarea>  
                  </div>
                </div>
                  <div class="col-12">
                       <label for="inputName5" class="form-label">News Type</label>
                      <select required id="inputState" name="type" placeholder = "Select a type" class="form-select">
                         <option value="" selected disabled>Select a type</option>
                         <option value="Event">Event</option>
                         <option value="Announcement">Announcement</option>
                      </select>
                    </div>
                    <div class="col-12">
                        <label for="inputDate" class="form-label">Date</label>
                        <input type="date" required name="date" class="form-control" >
                    </div>
                    <div class="col-12">
                        <label for="inputName5" class="form-label">Location</label>
                        <input type="text" required name="location" class="form-control" id="inputName2" placeholder = "Type location here...">
                    </div>

            
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
                        <input type="file" name="photo" id="file-upload" class="file-upload-input">
                        <label for="file-upload" class="file-upload-label">
                            <span class="upload-icon">
                                <i class="bi bi-image"></i>
                            </span>
                            <span class="upload-text">Click add image</span>
                        </label>
                    </div>
                     <!-- <p class = "mt-3">Video</p>
                    <div class="file-upload-container ms-4 mt-2 col">
                        <input type="file" id="file-upload" class="file-upload-input">
                        <label for="file-upload" class="file-upload-label">
                            <span class="upload-icon">
                                <i class="bi bi-image"></i>
                            </span>
                            <span class="upload-text">Click add video</span>
                        </label>
                    </div> -->
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
        <a href="news.php"> <button style = "width: 120px; margin-right: 10px;" type="cancel" class="btn btn-outline-primary btn-lg">Cancel</button></a>
        <button id="btn" style = "width: 120px;" type="save" class="btn btn-primary btn-lg">Save</button>               
      </div>
    </section>
    </form>

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