<style>
 .image-event{
    border-radius: 12px 12px 0px 0px;
    /* background: lightgray url('/assets/projects/'.$event['image'].'') center/cover no-repeat; */
  
    width: 100%;
height: 250px;
flex-shrink: 0;
position: relative; 
 }

 .image-event img{
    border-radius: 12px 12px 0px 0px;
    display: flex;
 
           width: 100%;
       height: 250px;
      
       position: relative; 
         }
 .upper-date{
width: 74px;
height: 74px;
flex-shrink: 0;
border-radius: 12px 0px 0px 0px;
background: #2D1674;
color:white;
 }

 .text-upper-event{
    color: #FFF;
text-align: center;
font-family: Inter;
font-size: 20px;
font-style: normal;
font-weight: 700;
line-height: normal;
letter-spacing: -0.2px;
padding-top: 10px;
 }


 
 
 .background-event {
            width: 100vw; /* Full width of the viewport */
            height: 100vh; /* Full height of the viewport */
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(0deg, rgba(45, 22, 116, 0.4) 0%, rgba(45, 22, 116, 0.4) 100%),
                        url('../assets/home/home-bg.png') center/cover no-repeat;
            flex-shrink: 0;
            overflow: hidden; /* Hide content overflow */
        }

        .event-title {
            color: #FFF;
            font-size: 3rem; /* Adjust the font size as needed */
            font-weight: 400;
            text-align: center;
            letter-spacing: -0.55px;
        }
        .header1 {
        font-size: larger; 
        font-weight: bold;
    }

    .header1 br {
        display: none; 
    }

    @media (max-width: 768px) {
        .header1 br {
            display: block; 
        }
        .header-text{
            font-size: 40px;
        }
    }

        .container {
        display: flex;
        justify-content: space-around; 
        list-style: none;
        padding: 0;
    }

    .list-site {
    display: flex;
    list-style: none; 
    margin: 15px 0 50px 0;
    padding: 10px;
}

.list-site li {
    text-decoration: none;
    color: black;
    font-weight: bold;
    margin: 0 10px;
    padding: 10px;
    transition: color 1s ease;
    transition: border 1s ease;
    border: 1px solid #FFF;
    border-radius: 12px;
    cursor: pointer;
}

/* Hover effect */
.list-site li:hover {
    border-radius: 12px;
border: 1px solid #2D1674;

color: #2D1674;
}

    .box-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    align-items: center;

}

.box {
    width: calc(33.33% - 80px);
    height: auto;
    margin-bottom: 20px;
    box-sizing: border-box;
    border: 1px solid #9B9988;
    border-radius: 12px;
    background: #FFF;

    align-items: center;
    justify-content: center;
}

.box:hover{
     background: linear-gradient(0deg, rgba(45, 22, 116, 0.4) 0%, rgba(45, 22, 116, 0.4) 100%);
     cursor: pointer;
}



/* Media query for smaller screens */
@media (max-width: 768px) {
    .box {
        width: calc(50% - 20px);
    }
    .box-container{
        max-width: 100%;
    }
}

.title-type-event{
    color: rgba(38, 38, 38, 0.90);
font-feature-settings: 'clig' off, 'liga' off;

font-size: 15px;
font-style: normal;
font-weight: bold;
line-height: 15px; /* 100% */
margin: 10px 10px 10px 10px;

}

.heading-event{
    color: #2D1674;

font-size: 20px;
font-style: normal;
font-weight: 700;
line-height: normal;
letter-spacing: -0.2px;
margin: 10px 10px 10px 10px;
}

.date-location-event{
    color: rgba(38, 38, 38, 0.70);

font-feature-settings: 'clig' off, 'liga' off;

font-size: 15px;
font-style: normal;
font-weight: 600;
line-height: 15px; /* 100% */
margin: 10px 10px 10px 10px;
}

.description-event{
    color: #262626;
font-feature-settings: 'clig' off, 'liga' off;

font-size: 15px;
font-style: normal;
font-weight: 500;
line-height: 20px; /* 133.333% */
margin: 10px 10px 10px 10px;
}
</style>

<section>
    <div class="background-event">
        <div class="event-title">
            <div class="header-text"><span class="header1"> Events &</span><br>Announcements</div>
        </div>
    </div>
</section>

    <section>
        <div class="container">
            <ul class="list-site">
                <li onclick="featured()">Featured</li>
                <li onclick="thisWeek()">This Week</li>
                <li onclick="ongoing()">Ongoing</li>
            </ul>
        </div>
        <div class="box-container">

        <?php
        if (isset($_GET['query'])) {
            $query = $_GET['query'];
        }
                        











        if ($query == 1) {
            $output = $featured;
        } elseif ($query == 2) {
            $output = $thisWeek;
        } else {
            $output = $ongoing;
        }

        foreach($output as $event){
            if($event['activity'] == 1){
                $title = "Event";
                $icon = "bi bi-calendar4-event";
                
            } else {
                $title = "Announcement";
                $icon = "bi bi-megaphone";
            }
          
            $timestamp = strtotime($event['date']);
            $formattedDate = date('D, d M Y', $timestamp);
            $formattedDateMonth = date('M', $timestamp);
            $formattedDateDay = date('d', $timestamp);
            $imageName = $event['image'];
            $limitText = substr($event['description'], 0, 80);
            $image = "../assets/projects/$imageName";
        ?>

        <?php
        echo '<div class="box" onclick="eventInfo('.$event['activity_id'].')">';
        echo '  <div class="image-event"  style=" background: lightgray url('.$image.') center/cover no-repeat;    ">
        <div class="upper-date">
            <div class="text-upper-event">
            '.$formattedDateMonth.' <br> '. $formattedDateDay .'
            </div>
                </div>
        </div>';
        echo '<div class="title-type-event">
        '. $title .' <i class="'.$icon.'"></i>
        </div>';
        echo '
        <div class="heading-event">
        '. $event['title'] .'
        </div>';

        echo '<div class="date-location-event">'. $formattedDate .'<br> '. $event['place'] .'</div>
        ';

        echo '<div class="description-event">'. $limitText .'...</div>
        ';
        echo '</div>';
    }
    ?>
</div>

</div>


   </section>

   <script>
    function eventInfo(id){
        window.location.href=`specific-event?event-id=${id}&header=1`;
    }

    const featured = () => {
        window.location.href=`/final_views/events?query=1&header=1`;
    }
    const ongoing = () => {
        window.location.href=`/final_views/events?query=3&header=1`;
    }
    const thisWeek = () => {
        window.location.href=`/final_views/events?query=2&header=1`;
    }
   </script>