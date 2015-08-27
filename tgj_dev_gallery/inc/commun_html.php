<!DOCTYPE html>
<!--
TI juin +  updates TGJ 20150827
Creation 20150624-26 INani@CF2m 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Telepro-photos.fr <?= $htmltitle; ?></title>
        <link rel="stylesheet" href="css/style.css" />
        <script src="js/monjs.js"></script>
    </head>
    <body>
        <div id="main">
        <h1><?= $htmlh1; ?>Telepro-photos.fr</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li class="rubr">Catégories
                <ul>
                    <?php
                    while($ligne = mysqli_fetch_assoc($req_nav)){
                    echo "<li><a href='rubriques.php?rub=".$ligne['id']."'>".$ligne['lintitule']."</a></li>";
                    }
                    ?>
                </ul>
                </li>
                
                <li><a href="client.php">Espace Client</a></li>
            </ul>
        </nav>
