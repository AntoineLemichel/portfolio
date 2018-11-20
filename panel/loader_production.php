<?php
// This web page manage add production for form.
if(isset($_POST['title']) and !empty($_POST['title'])){
    if(isset($_POST['image']) and !empty($_POST['image'])){
        if(isset($_POST['body']) and !empty($_POST['body'])){
            require('bdd.php');
            $add_production = $bdd->prepare('INSERT INTO production (title, body, image, link1, link2) VALUES (:title, :body, :image, :link1, :link2)');
            $add_production->execute(array(
                'title' => $_POST['title'],
                'body' => $_POST['body'],
                'image' => $_POST['image'],
                'link1' => $_POST['link_1'],
                'link2' => $_POST['link_2']
            ));
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
            echo "Le champs description dois être remplis.";
        }
    } else {
        echo "Le champs image dois être remplis.";
    }
} else {
    echo "Le champs titre dois être remplis.";
}