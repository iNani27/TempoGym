<?php
require_once '../connect.php';
/* Modifier l'article sélectionné */
if($lid_to_modif>5){
$sql3 = "SELECT * FROM `tgj_articles` WHERE id=$lid_to_modif";
$req3 = mysqli_query($connect, $sql3);
}
