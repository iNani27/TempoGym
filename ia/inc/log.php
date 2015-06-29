<?php
session_start();
require_once 'connect.php';
// Si on a envoyer le form
/*
  var_dump($_POST);
 */
if (isset($_POST['lelogin']) && isset($_POST['lemdp'])) {
    $lelogin = htmlspecialchars(strip_tags(trim($_POST['lelogin'])), ENT_QUOTES);
    $lemdp = md5(htmlspecialchars(strip_tags(trim($_POST['lemdp'])), ENT_QUOTES));

    // vérification dans la table utilisateurs si le login ET le mdp correspondent à un utilisateur
    $recup_util = mysqli_query($connect, "SELECT * FROM $table WHERE lelogin='$lelogin' AND lemdp='$lemdp'; ") or die("Erreur: " . mysqli_error($connect));

    // si on a récupéré un utilisateur (donc connexion réussie) - mysqli_num_rows($req) envoie le nombre de lignes de résultats obtenu par la requête, si il n'a pas de résultat il envoie 0 (0==false), sinon un entier numérique (int == true). Ici, comme lelogin est unique, on ne peut avoir que 0 ou 1 comme résultat
    if (mysqli_num_rows($recup_util)) {
        $recup_tab = mysqli_fetch_assoc($recup_util);

        // création des variables de sessions, on y stocke
        // 1- session_id du cookie local
        // 2- les résultats de notre req
        // variable de sécurité contenant le session_id
        /*  */
        $_SESSION['id_session'] = session_id();
        // variables venant de la table utilisateurs
        $_SESSION['lid'] = $recup_tab['id'];
        $_SESSION['lelogin'] = $recup_tab['lelogin'];
        // redirection vers galerie ou admin
        header("Location: $destination");
    } else {
        $erreur_connect = "Login ou mot de passe incorrecte";
    }
}
