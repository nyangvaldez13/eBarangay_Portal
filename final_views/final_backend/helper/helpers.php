<?php 
function timeAgo($timestamp) {
    $currentTime = time();
    $createdAt = strtotime($timestamp);
    $timeDiff = $currentTime - $createdAt;
  
    if ($timeDiff < 60) {
        return 'just now';
    } elseif ($timeDiff < 3600) {
        $minutes = floor($timeDiff / 60);
        return $minutes . ' mins ago';
    } elseif ($timeDiff < 86400) {
        $hours = floor($timeDiff / 3600);
        return $hours == 1 ? '1 hour ago' : $hours . ' hours ago';
    } else {
        $days = floor($timeDiff / 86400);
        return $days == 1 ? '1 day ago' : $days . ' days ago';
    }
  }
?>