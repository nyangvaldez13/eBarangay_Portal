<style>
.announcement {
height: 100vh;
display: flex;
align-items: center;
justify-content: center;
    }


    .event-announcement {
    color: #2d1674;
    position: relative;
    transition: color 0.3s, border 0.3s;
}


.event-announcement:hover {
    color: #F2921D;
    text-decoration: none;
}


.event-image{
  max-height: 500px;
  max-width: 100%;
  width: 100%;
}
</style>


<?php foreach($eventResult as $event){ 

  if ($event['activity'] == 1) {
    $title = "Event";
  } else {
    $title = "Announcement";
  }

function convertTime($time){
  try {
      $dateTime = new DateTime($time);
      $formattedDate = $dateTime->format('D, j M Y');
      return $formattedDate;
  } catch (Exception $e) {
      // Handle the exception (invalid date/time string)
      return "Invalid date/time";
  }
}
  ?><br><br><br><br>
<section class="announcement" id="announcement">
  <div class="container">
    <!-- Your content goes here -->
    
    <a href="../final_views/main.php" class="btn btn-secondary">Back</a>
    <h3 class="mt-5"><?php // Your content here ?></h3>
    <h1><?= $title ?> (<?= convertTime($event['date']); ?>)</h1>
    <h4><?= $event['title']?></h4>

    <div class="row text-start ">
      <div class="col-lg-8 col-md-12 mb-4">
        <img src="../assets/projects/<?= $event['image'] ?>" alt="<?= $event['image'] ?>" class="img-fluid event-image">
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="col-12  d-none d-md-block" style="font-size: 15px;">
          <!-- ^ Added d-none (display-none) and d-md-block (display-block for medium screens and above) -->
          <h3>Other</h3>
          <?php foreach ($tableResult as $table) {
            if ($table['activity'] == 1) {
              $title = "Event";
            } else {
              $title = "Announcement";
            }
          ?>  
     
             <a href="#" onclick="newpage()" class="event-announcement" style="text-decoration:none;">
            <div class="col-12">
              <h5><?= $title ?> </h5>
              <p><?= $table['heading'] ?></p>
              <p><?= convertTime($table['date']); ?></p>
            </div></a>
          <?php } ?>
        </div>
      </div>
    </div>

    <div>
      <h3><?= $table['heading'] ?></h3>
      <p class="fs-4"><?= $table['description'] ?></p>
      <br><br>
     
    </div>

  </div>    <?php } ?>
</section>



<script>
            function newpage(){
              window.location.href="specific-event.php?event-id=<?= $table['activity_id']; ?>";
            }
          </script>