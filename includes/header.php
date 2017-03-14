<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
/* -----------------------------------------------------------------------
  CHARACTER ENCODING
  ----------------------------------------------------------------------- */
header('Content-type: text/html; charset=utf-8');

/* -----------------------------------------------------------------------
  CONNECTION STRINGS
  ----------------------------------------------------------------------- */
try {
    /* Local
      $connect = new PDO('mysql:host=localhost;dbname=csadmin;charset=utf8', 'root', 'root', array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));*/
     

    // /* Development*/
      // $connect = new PDO('mysql:host=rmidevvedb1.rogers-hosting.com;dbname=dev_rcs_texture;charset=utf8;', 'dev_rcs_texture', 'Kay4-sda6tNid6-v',array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
     

     // Production
      $connect = new PDO('mysql:host=rmisql02.ets.net;dbname=rcs_texture;charset=utf8;', 'rcs_texture', 'Wix2-dqs1cDur1-e',array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
     
} catch (PDOException $ex) {
    echo "An error occured!";
}

/* -----------------------------------------------------------------------
  DATABASE TABLES
  ----------------------------------------------------------------------- */
$votes = "hollywood_awards_votes";

/* -----------------------------------------------------------------------
  GET CURRENT FILE NAME
  (not always required, but handy to have)
  ----------------------------------------------------------------------- */
$currFile = $_SERVER['SCRIPT_NAME'];
$isHome = false;
$isDirecting = false;
$isActor = false;
$isActress = false;
$isMusic = false;
$isThankyou = false;
$banner = "home";
if(in_array($currFile, array("/marketing/2017/websites/texture/hollywood-awards/index.php", "/marketing/2017/websites/texture/hollywood-awards/"))){
    $isHome = true;
}
if(in_array($currFile, array("/marketing/2017/websites/texture/hollywood-awards/directing.php"))){
    $isDirecting = true;
    $banner = "directing";
}
if(in_array($currFile, array("/marketing/2017/websites/texture/hollywood-awards/actor.php"))){
    $isActor = true;
    $banner = "actor";
}
if(in_array($currFile, array("/marketing/2017/websites/texture/hollywood-awards/actress.php"))){
    $isActress = true;
    $banner = "actress";
}
if(in_array($currFile, array("/marketing/2017/websites/texture/hollywood-awards/music.php"))){
    $isMusic = true;
    $banner = "music";
}
if(in_array($currFile, array("/marketing/2017/websites/texture/hollywood-awards/thankyou.php"))){
    $isThankyou = true;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Hollywood Awards Poll</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/jumbotron-narrow.css" rel="stylesheet">
        <link href="css/typography.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <style>
            @import url('https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:400,400i,700,700i');
        </style>       
        
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-78367602-5', 'auto');
          ga('send', 'pageview');

        </script>
        <link rel="icon" type="image/png" href="https://www.texture.ca/wp-content/themes/nextissue/favicon.png" />
    </head>

    <body>

        <!-- Fixed navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <h2 class="vh">Main Site Navigation</h2>   
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="https://www.texture.ca/" target="_blank"><img src="images/texture-logo.png" alt="texture&trade;"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li<?php if($isHome){ ?> class="active"<?php } ?>><a href="index.php">Best Picture</a></li>
                        <li<?php if($isDirecting){ ?> class="active"<?php } ?>><a href="directing.php">Best Directing</a></li>
                        <li<?php if($isActor){ ?> class="active"<?php } ?>><a href="actor.php">Best Actor</a></li>
                        <li<?php if($isActress){ ?> class="active"<?php } ?>><a href="actress.php">Best Actress</a></li>
                        <li<?php if($isMusic){ ?> class="active"<?php } ?>><a href="music.php">Best Music</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container">
            
            <?php /*
            <div class="jumbotron">
                <div class="hero">
                    <h1 class="vh">HOLLYWOOD'S <br/>BIGGEST NIGHT IS HERE!</h1>
                    <div class="caption">
                        <p>Cast your vote in our live poll and see what fans are predicting in the top five categories.</p>
                    </div>
                    <img class="img-responsive hidden-xs" src="images/hero.jpg" alt="Hollywood's Biggest Night is Here!"/>
                    <img class="img-responsive hidden-sm hidden-md hidden-lg" src="images/hero-s.jpg" alt="Hollywood's Biggest Night is Here!"/>
                </div>
            </div>
             * 
             */?>

<?php if(!$isThankyou){  ?>

            <header class="jumbotron jumbotron--<?php echo $banner; ?>">
                <h1 class="jumbotron__heading vh">HOLLYWOOD'S BIGGEST NIGHT IS HERE!</h1>
                <p class="jumbotron__caption">
                    <?php if($isHome){ ?>
                    We've tallied the results for <strong>BEST PICTURE!</strong><br/> To continue voting for other categories, scroll down!
                    <?php } ?>
                    <?php if($isDirecting){ ?>
                    Cast your vote in our live poll for <strong>BEST DIRECTING</strong> and see what other fans predict!
                    <?php } ?>
                    <?php if($isActor){ ?>
                    Cast your vote in our live poll for <strong>BEST ACTOR</strong> and see what other fans predict!
                    <?php } ?>
                    <?php if($isActress){ ?>
                    Cast your vote in our live poll for <strong>BEST ACTRESS</strong> and see what other fans predict!
                    <?php } ?>
                    <?php if($isMusic){ ?>
                    Cast your vote in our live poll for <strong>BEST MUSIC</strong> and see what other fans predict!
                    <?php } ?>
                </p>
            </header>

<?php } ?>