<?php require('../includes/header.php') ?>

<section class="section pt-2">
    <div class="row align-items-center">
    <div class="col-xl">
       <div class="card-title fs-3">View Project</div>
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="projects.php"> Project List</a></li>
                  <li class="breadcrumb-item active">View Project </li>
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
          <form class = "row g-3">
            <div class="col-12">
                        <label for="inputName5" class="form-label mt-2"> Project Title</label>
                        <input type="text" class= "form-control" id="inputName2" placeholder ="Type news title here. . .">
                </div>
            <p>Photo</p>
                    <div class="file-upload-container ms-4 mt-2 col">
                        <input type="file" id="file-upload" class="file-upload-input">
                        <label for="file-upload" class="file-upload-label">
                            <span class="upload-icon">
                                <i class="bi bi-image"></i>
                            </span>
                            <span class="upload-text">Click add image</span>
                        </label>
                    </div>
            </form>
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
        <button style = "width: 120px;" type="save" class="btn btn-primary btn-lg">Save</button>               
      </div>
    </section>

<?php require('../includes/footer.php') ?>