<?php session_start();?>
<!doctype html>
<html class="no-js" lang="fr">
<!-- Author : Antoine Lemichel
Web site : https://antoine-lemichel.fr
-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Antoine Lemichel | Administration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="author" href="humans.txt" />

    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="../sass/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>

<body>
    <?php
    if($_SESSION['name'] == TRUE){
      require('bdd.php');
    $all_message_req = $bdd->query('SELECT * FROM message');
  ?>
    <div class="container col-12 mt-5">
        <a href="dashboard.php" class="btn btn-dark mb-1">Retour</a>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
        while($all_message_data = $all_message_req->fetch()){
            ?>
                <tr>
                    <td>
                        <?= $all_message_data['name'];?>
                    </td>
                    <td>
                        <?= $all_message_data['email'];?>
                    </td>
                    <td>
                        <?= $all_message_data['body'];?>
                    </td>
                    <td><a href="delete_message.php?id=<?= $all_message_data['id'];?>" class="btn btn-danger" rel="noopener noreferrer">Supprimer</a>
                    <td>
                </tr>
            <?php
    }
    ?>
    </tbody>
        </table>
    </div>
    <?php
    } else {
      echo "Vous n'avez pas accès à cette page.";
    }
    ?>

    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <!-- <script>
    window.ga = function () {
      ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview')
  </script> -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122484757-1"></script> -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-122484757-1');
    </script>


</body>

</html>