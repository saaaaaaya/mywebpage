<?php
    date_default_timezone_set('Asia/Tokyo');
    $now_hour =  (int)date("H");

    function greeting($hour) {
        $result = "";

        if (6 <= $hour && $hour < 12) {
            $result = "Good morning!";
        }
        elseif (12 <= $hour && $hour < 18) {
            $result = "Hello!";
        }
        else {
            $result = "Good evening!";
        }

        return $result;
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Introduction : Saaya Akashi</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link rel="stylesheet" href="mywebpage.css" type="text/css" />
  </head>
  <body>
    <div class="jumbotron jumbotron-extend">
      <div class="container text-center">
      <h1><?php print greeting($now_hour); ?></h1>
      <h1>—— Welcome to my page ! ——</h1>
      <h2>I'm Saaya!</h2>
      </div>
    </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <img src="saayapanda.jpg" alt="Profile picture">
            <div class="caption">
              <h2>Saaya Akashi</h2>
              <p><a href="https://www.facebook.com/sa.ya.snsd.pink" class="btn btn-info" role="button">Facebook</a></p>
            </div>
          </div>
        </div>
        <div class=text>
          <div class="col-md-4">
            <h2>Basic Info</h2>
              <ul>
                <li><span>Nickname</span><br>: Sa-ya</li>
                <li><span>Birthday</span><br>: 1994.4.28</li>
                <li><span>Hometown</span><br>: Born in Saitama <br>/ Live in Tokyo</li>
                <li><span>University</span><br>: Waseda uni. <br>/ School of Law</li>
              </ul>
          </div>
          <div class="col-md-4">
            <h2>My Favorites</h2>
              <ul>
                <li>Going to aquariums</li>
                <li>Reading books</li>
                <li>Watching movies</li>
                <li>Going to cafe</li>
                <li>Picnic</li>
                <li>World Heritages</li>
              </ul>
          </div>
        </div>
      </div>
    </div>
    <!--
    <div class="jumbotron jumbotron-list">
      <div class="container">
        <div class="col-md-4">
          <img src="aquarium.jpg" alt="Profile picture">
        </div>
        <div class="col-md-4">
          <img src="book.jpg" alt="Profile picture">
        </div>
        <div class="col-md-4">
          <img src="cafe.jpg" alt="Profile picture">
        </div>
        <div class="col-md-4">
          <img src="cinema.jpg" alt="Profile picture">
        </div>
        </div>
        <div class="col-md-4">
          <img src="picnic.jpg" alt="Profile picture">
        </div>
        </div>
        <div class="col-md-4">
          <img src="world.jpg" alt="Profile picture">
        </div>
      </div>
    </div>
    -->
    
   
</body>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>