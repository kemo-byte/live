<?php

require 'admin/connect.php';



$stmt = $conn->prepare("SELECT link FROM links");

$stmt->execute();

$row = $stmt->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video</title>
</head>
<body>
  <h1 style="color:purple; text-align: center;">  </h1>

  <div embed-responsive embed-responsive-16by9>
    <style>
        #my-video{
            width:100%;
            height:100%;
            max-height:500px;
        }
    </style>

  <video
    id="my-video"
    class="video-js vjs-default-skin embed-responsive-item "
    controls
    preload="auto"
    width="640"
    height="264"
    data-setup="{}"
    
  >
    <source src="<?= isset($row['link'])?$row['link']:''?>" type="video/mp4" />
    <source src="" type="video/webm" />
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a
      web browser that
      <a href="https://videojs.com/html5-video-support/" target="_blank"
        >supports HTML5 video</a
      >
    </p>
  </video>
  <style>
      .video-js .vjs-tech {
          position:relative;
          
      }
    /*    .my-video-dimensions {*/
    /*    width: 100%;*/
    /*    height: 100%;*/
    /*}*/
  </style>
 
</div>


</body>
</html>