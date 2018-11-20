<?php
if(isset($_POST['name']) and !empty($_POST['name'])){
  if(isset($_POST['password']) and !empty($_POST['password'])){
    require('bdd.php');
    $loader_user = $bdd->prepare("SELECT * FROM user WHERE name = :name");
    $loader_user->execute(array(
      'name' => $_POST['name'],
    ));
    $loader_data = $loader_user->fetch();
    if($loader_data['rang'] == 1 AND $loader_data['name'] == $_POST['name'] AND password_verify($_POST['password'], $loader_data['password'])){
      session_start();
      $_SESSION['name'] = $_POST['name'];
      header('Location: dashboard.php');
    } else {
      echo "Vous n'avez pas le rang nécessaire pour accéder à cette page.";
    }
  } else {
    echo "Vous n'avez pas accès à cette page.";
  }
} else {
  echo "Vous n'avez pas accès à cette page.";
}
$loader_user->closeCursor();
?>