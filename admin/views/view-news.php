<?php require('../includes/header.php') ?>

<section class="section pt-2">
    <div class="row align-items-center">
    <div class="col-xl">
       <div class="card-title fs-3">View News</div>
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="news.php"> News List</a></li>
                  <li class="breadcrumb-item active">View News </li>
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

            <h5 class="card-title mt-3">View News Information</h5>
            <?php include_once('../backend/view-news.php'); ?>

          <form class = "row g-3">
            <div class="col-12">
                        <label for="inputName5" class="form-label mt-2">Title</label>
                        <input type="text" value="<?= $activity['title'] ?>" class= "form-control" id="inputName2" disabled placeholder ="News Title">
                </div>
                 <div class="col-12">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-12">
                   <div class="quill-editor-default" id="description-editor" name="description" style = "height: 200px;" placeholder ="News Description">
                   <!-- <input type="text" name="description" class= "form-control" style = "height: 200px;" disabled placeholder ="News Description"> -->
              </div>
                  </div>
                </div>
                  <div class="col-4">
                       <label for="inputName5" class="form-label">News Type</label>
                      <select id="inputState" disabled placeholder = "" class="form-select">
                         <option selected=""></option>
                         <option>...</option>
                      </select>
                    </div>
                    <div class="col-4">
                        <label for="inputDate" class="form-label">Date</label>
                        <input disabled type="date" class="form-control" >
                    </div>
                    <div class="col-4">
                        <label for="inputName5" class="form-label">Location</label>
                        <input disabled type="text" class="form-control" id="inputName2" placeholder = "">
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
                        <input disabled type="file" id="file-upload" class="file-upload-input">
                        <label for="file-upload" class="file-upload-label">
                            <span class="upload-icon">
                                <i class="bi bi-image"></i>
                            </span>
                            <span class="upload-text">Image</span>
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
      <div class="mt-2" style = "text-align: left;">
      <a href="news.php"><button style = "width: 120px; margin-left: 10px;" type="cancel" class="btn btn-outline-primary btn-lg">Back</button></a>
      </div>
    </section>


<?php require('../includes/footer.php') ?>