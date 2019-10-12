<?php


  function project($project_name)
  {
    $projects = array(
      "Break The Mold Coaching" => array(
        "name" => "Break The Mold Coaching",
        "img" => 'media/project-screenshots/breakthemold.png',
        "url" => 'http://breakthemoldcoaching.com',

      ),
      "The Smile Site"=>array(
        "name" => "The Smile Site",
        "img" => 'media/project-screenshots/smilesite.png',
        "url" => 'http://thesmilesite-env.muqg8e5h8x.us-east-2.elasticbeanstalk.com/index.php',
      ),
  );

  echo '<h2>'.$projects[$project_name]["name"].'</h2>';
  echo '<a href='.$projects[$project_name]["url"].' target="_blank" class="site"><img src='.$projects[$project_name]["img"].' alt="Project Screenshot"></a>';
  }
?>
