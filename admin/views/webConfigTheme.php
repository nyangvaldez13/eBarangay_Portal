<?php require('../includes/header.php') ?>

<section class="section pt-2">
    <div class="row align-items-center">
    <div class="col-xl">
       <div class="card-title fs-3">Web Configuration</div>
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="admin.php">Configuration</a></li>
                  <li class="breadcrumb-item">Theme Color</li>
                </ol>
              </nav>
    </div>
    </div>
</section>
<hr>
<section class="section pt-2">
<div class="card-title fs-3">Theme Color <i class="bi bi-palette-fill"></i></div>
<div class="card-title fs-3"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">Add Theme Color <i class="bi bi-palette-fill"></i></button></div>
<div class="container text-center">
  <div class="row g-2">
    <?php include_once '../backend/theme.php'; ?>
    <?php 
    foreach($themes as $theme){
    ?>
    <div class="col-4">
      <div class="p-3">
        <div class="px-4 row justify-content-center rounded">
            <div class="p-3" style="background-color:<?= $theme['color1'] ?>; color:white; height:100px;"><?= $theme['color1'] ?></div>
            <div class="p-3" style="background-color:<?= $theme['color2'] ?>; color:white; height:80px;"><?= $theme['color2'] ?></div>
            <div class="p-3" style="background-color:<?= $theme['color3'] ?>; color:gray;"><?= $theme['color3'] ?></div>
            <div class="p-3" style="background-color:<?= $theme['color4'] ?>; color:gray;"><?= $theme['color4'] ?></div>
        </div>
        <div class="mt-4">
        <button class="btn btn-danger" onclick="deleteTheme(<?= $theme['id'] ?>)">Delete</button>
        <button class="btn btn-primary" onclick="applyTheme(<?= $theme['id'] ?>)">Apply</button>
        </div>
        
      </div> 
    </div>
    <?php } ?>
    <div class="col-4">
      <div class="p-3">
      <div class="px-4 row justify-content-center rounded">
            <div class="p-3" style="background-color:#aba6a6; color:black; height:100px;">Add Color</div>
            <div class="p-3" style="background-color:#aba6a6; color:black; height:80px;">Add Color</div>
            <div class="p-3" style="background-color:#aba6a6; color:black;">Add Color</div>
            <div class="p-3" style="background-color:#aba6a6; color:black;">Add Color</div>
        </div>
        <div class="mt-4">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">Add Theme Color <i class="bi bi-palette-fill"></i></button>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

</section>

<style>
  #image-container {
  width: 50px;
  height: 50px;
}

#image1 {
  width: 100%;
  height: 100%;
}

</style>




<div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add Color</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start">
                      
                    <form action="POST" id="color-post">
                    <div class="row">
                      <div class="col-6 mb-4">
                   <label for="color-picker">Select a Header:</label>
                  <input id="color-picker" type="color" name="color1">
                   </div>
                    <div class="col-6 mb-4">
                    <label for="color-picker">Select a Body: </label>
                  <input id="color-picker" type="color" name="color2">
                    </div>
                    <div class="col-6 mb-4">
                    <label for="color-picker">Select a Section:</label>
                  <input id="color-picker" type="color" name="color3">
                    </div>
                    <div class="col-6 mb-4">
                    <label for="color-picker">Select a Footer:</label>
                  <input id="color-picker" type="color" name="color4">
                    </div>
                      </div>
                   
                 
             
                
                  
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" data-bs-dismiss="modal"  class="btn btn-primary">Save</button>
                    </div> </form>
                  </div>
                </div>
              </div>
              <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
              <script>
                

                
                  // Function to handle delete
                  function deleteTheme(themeId) {
                    
                    $.ajax({
                      type:'POST',
                      url: '../backend/theme',
                      data: { action: 'delete', themeId: themeId },
                      success: function(response) {
                        console.log(response);
                        setTimeout(function() { location.reload(); }, 1000);
                      },
                      error: function(error) {
                        console.log(error);
                      }
                    });
                    console.log('Deleting theme with ID: ' + themeId);
                  }

                  // Function to handle apply
                  function applyTheme(themeId) {
                    $.ajax({
                      type:'POST',
                      url: '../backend/theme',
                      data: { action: 'apply', themeId: themeId },
                      success: function(response) {
                        console.log(response);
                        setTimeout(function() { location.reload(); }, 1000);
                      },
                      error: function(error) {
                        console.log(error);
                      }
                    });



                  }


                $(document).ready(function(){
                  console.log('jQuery is ready.');
            


                  $('#color-post').submit(function(e) {
                    e.preventDefault();

                    var colors = {
                      color1: $('input[name="color1"]').val(),
                      color2: $('input[name="color2"]').val(),
                      color3: $('input[name="color3"]').val(),
                      color4: $('input[name="color4"]').val(),
                    };

                    $.ajax({
                      type: 'POST',
                      url: '../backend/theme',
                      data: JSON.stringify(colors),
                      contentType: 'application/json',
                      success: function(response){
                        console.log(response);
                        setTimeout(function() { location.reload(); }, 1000);
                      },
                      error: function(error){
                        console.log(error);
                      }
                    })


                  })
                });


              </script>

<?php require('../includes/footer.php') ?>