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

//define varibles for category, and answer from the POST values sent from vote.js
$category = htmlspecialchars($_POST["c"], ENT_QUOTES);
$answer = htmlspecialchars($_POST["s"], ENT_QUOTES);

//prepare the query responsible for updateding the votes table
$storeAnswer = $connect->prepare("INSERT INTO " . $votes . " SET category = :category, answer = :answer");
//bind the value of $category to the placeholder :category
$storeAnswer->bindValue(":category", $category, PDO::PARAM_STR);
//bind the value of $answer to the placeholder :answer
$storeAnswer->bindValue(":answer", $answer, PDO::PARAM_STR);
//execute the query
$storeAnswer->execute();

echo json_encode("success");
?>