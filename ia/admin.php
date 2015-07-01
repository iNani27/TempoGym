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
        <article>
            <h2>Modifier le document pdf : Calendrier des dimanches</h2>
            <div>
                <p>Fichier de maximum 5 MO au format: .pdf </p>
                <form action="admin.php" method="POST" enctype='multipart/form-data'>
                    <input type="text" name="letitre" placeholder="Titre" required /><br/>
                    <!-- A mettre avent le file ! = 5 mio -->
                    <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                    <input type="file" name="lefichier" required /><br/>
                    <input type="submit" value="Envoyer le fichier"/>
                </form>
                <?php
                require_once 'tgj_upload.php';
                while ($ledoc = mysqli_fetch_assoc($recup_dim)) {
                    echo "<a href='" . $ledoc['lurl'] . "' target='_blank'>" . $ledoc['letitre'] . "</a> (";
                    // BONUS affichage de l'extension récupérée de l'url
                    echo strrchr($ledoc['lurl'], '.');
                    echo ")<br />";
                    echo "<iframe  width='100%' height='900px' src='".$ledoc['lurl']."'><p class='dim'><a href='".$ledoc['lurl']."' title='Calendrier des dimanches'><img class='dim' src='".$ledoc['lurl']."' alt='Calendrier des dimanches'/></a></p></iframe><br />";
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