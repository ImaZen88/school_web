
    <?php
    $userIsLoggedIn = true;

    if ($userIsLoggedIn) {
        echo '<div>Obsah pro přihlášeného uživatele</div>';
    } else {
        echo '<div>Obsah pro nepřihlášeného uživatele</div>';
    }
    ?>