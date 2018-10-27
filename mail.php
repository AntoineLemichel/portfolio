<?php

if(isset($_POST['name']) and !empty($_POST['name'])){
  if(isset($_POST['email']) and !empty($_POST['email'])){
    if(isset($_POST['message']) and !empty($_POST['message'])){
      if(preg_match('#^[a-z0-9]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $_POST['email'])){
        $to      = 'antoine.lemichel@newgates.fr';
        $subject = 'Contact for WebSite';
        $message = $_POST['message'] . "<br><br><br>";
        $message .= 'Email : '. $_POST['email'] . "<br>";
        $message .= 'Nom : ' . $_POST['name'] . "<br>"; 
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $headers[] = 'From: admin@antoine-lemichel.fr';

        mail($to, $subject, $message, implode("\r\n", $headers));
        header('Location: index.html#contact');
      } else {
        echo "L'adresse mail est invalide.";
      }
    } else {
      echo "Il est tout de même plus sage de mettre un message, non ?";
    }
  } else {
    echo "Le champs email est obligatoire.";
  }
} else {
  echo "Vous devez renseigner le champs nom.";
}


?>