<?php
session_start();
/* Si la session n'existe pas (encore) ou ne correspond plus au cookie */
if (!isset($_SESSION['id_session_admin']) || $_SESSION['id_session_admin'] != session_id()) {
    header("Location: deconnect.php");
}
require_once 'tgj_edit.php';
include_once 'inc/head.php';
?>
<section id="main">

    <h1>Bienvenue "<?= $_SESSION['lelogin_admin']; ?>" vous êtes connecté en tant qu'administrateur </h1>

    <section id="news">
        <article>
            <?php
            while ($ligne = mysqli_fetch_assoc($reqarticles)) {
                echo "<h2>" . $ligne['letitre'] . "</h2>";
                echo "<p>" . $ligne['letexte'] . "</p>";
                echo "<a href='modif.php?id=" . $ligne['id'] . "'><input type='button' value='Modifier' /></a>";
            }
            ?>

        </article>
          
    </section>
    <?php
 
    include_once '../inc/footer.php';
    ?>
</section> 
</body>
</html>