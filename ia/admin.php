<?php
session_start();
/* Si la session n'existe pas (encore) ou ne correspond plus au cookie */
if (!isset($_SESSION['id_session']) || $_SESSION['id_session'] != session_id()) {
    header("Location: deconnect.php");
}
require_once 'tgj_edit.php';
include_once 'inc/head.php';

?>
<section id="main">
    
    <h1>Bienvenue "<?= $_SESSION['lelogin']; ?>" vous êtes connecté en tant qu'administrateur </h1>
    
    <section id="news">
        <article>
            <?php
            while ($ligne = mysqli_fetch_assoc($req)) {
                echo "<h2>" . $ligne['letitre'] . "</h2>";
                echo "<p>" . $ligne['letexte'] . "</p>";
            }
            ?>
            <a href='modif.php?id="<?=$ligne['id'] ?>"'><input type="button" value="Modifier" /></a>
        </article>
        <article class="right">
            <?php
            while ($ligne = mysqli_fetch_assoc($req2)) {
                echo "<h2>" . $ligne['letitre'] . "</h2>";
                echo "<p>" . $ligne['letexte'] . "</p>";
            }
            ?>  
            <input type="button" value="Modifier" />
        </article>   
    </section>
    <?php
    /* include_once '../inc/agenda.php';
      include_once '../inc/nav_qklk.php'; */
    include_once '../inc/footer.php';
    ?>
</section> 
</body>
</html>