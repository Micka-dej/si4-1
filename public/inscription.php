<?php

require_once '../app/config/system.php';

require_once INCLUDES . '/default/header.php';

require_once DIR_MODELS . '/default/home.php';

?>

<?php
if (!empty($_SESSION['advert'])) {
    echo '<p class="msg '.$_SESSION['advert']['type'].'" style="margin:auto;">'.$_SESSION['advert']['message'].'</p>';
    $_SESSION['advert'] = [];
}
?>


<div class="container">

   <div class="inscriptionPage">
        <div class="connexion">
                <h2 class='connexionTitle'>Inscription</h2>

                <form class='form-connexion' action="" method="">
                    <input type="text" name="name" placeholder="Nom">
                    <input type="text" name="firstname" placeholder="Prénom">
                    <input type="email" name="email" placeholder="Adresse email HETIC.net">
                    <input type="password" name="password" placeholder="Mot de place">
                    <input type="password" name="password" placeholder="Confirmer mot de place">
                    <button class="button" type="submit">Connexion</button>
                    </form>

          </div>
      </div>
</div>
<?php
    require_once INCLUDES . '/default/footer.php';
?>
