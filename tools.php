<?php

  function dbConnect(){
    try{
      $db = new PDO('mysql:host=localhost;dbname=partiel;charset=utf8mb4', 'root', 'root', 
      array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }

    catch (Exception $exception) {
      die( 'Erreur : ' . $exception->getMessage() );
    }
    
    $db->query("SET lc_time_names = 'fr_FR'");

    return $db;
  }


  function hexVerify($submittedStyle){
    if(preg_match('/#([a-f0-9]{3}){1,2}\b/i', $submittedStyle) == 1){
      return true;
    }
    else{
      return false;
    }
  }

?>