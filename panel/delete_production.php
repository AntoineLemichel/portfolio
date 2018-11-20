<?php


require('bdd.php');
$delete_production_req = $bdd->query('DELETE FROM production WHERE id =' . $_GET['id']);
header('Location: all_production.php');