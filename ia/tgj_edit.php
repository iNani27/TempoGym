<?php
require_once '../connect.php';
/* afficher les articles */
$sql = "SELECT * FROM `tgj_article` WHERE id=4";
$req = mysqli_query($connect, $sql);
$sql2 = "SELECT * FROM `tgj_article` WHERE id=5";
$req2 = mysqli_query($connect, $sql2);








