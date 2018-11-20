<?php

try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'andrew', 'antoine');
  }
catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }