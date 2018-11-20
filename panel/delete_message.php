<?php
require('bdd.php');
$req_data = $bdd->query('DELETE FROM message WHERE id=' . $_GET['id']);
header('Location: all_message.php');