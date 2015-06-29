<?php
require_once '../connect.php';

/* afficher tous les artciles de la db */
$sqlarticles= "SELECT * FROM `tgj_article`"; 
   $reqarticles = mysqli_query($connect, $sqlarticles) or die(mysqli_error($mysqli));








