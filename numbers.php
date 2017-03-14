<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
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
     

    /* Development*/
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

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Contest Numbers</title>
        <link rel="stylesheet" href="css/numbers.css" />
    </head>
    <body>
        
        <div class="numbersHeadWrap">
            <header class="numbersHead" role="banner">
                <h1 class="numbersHead__heading cc">Contest Numbers</h1>
            </header>
        </div>
        
        
        <section class="numbersSection">
            <h2 class="numbersSection__heading">Contest Entries</h2>
            <ul class="numbersSection__list">
                <?php
                $query = $connect->query("SELECT * FROM " . $votes . " ORDER BY category DESC, answer");
                $query->execute();
                while($r = $query->fetch(PDO::FETCH_ASSOC)){
                ?>
                <li class="numbersSection__item">                    
                    <span class="numbersSection__subHeading"><?php echo $r["category"]; ?></span>                    
                    <span class="numbersSection__value"><?php echo $r["answer"]; ?></span>
                </li>
                <?php
                }
                ?>
            </ul>
        </section>
        
        <footer class="contentInfo">
        </footer>
    </body>
</html>