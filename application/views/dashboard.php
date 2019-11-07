<h1>Welcome
    <?php if (isset($_SESSION['login']['idUser']) && $_SESSION['login']['idUser'] != '') {
        echo $_SESSION['login']['username'];
    } else {
        echo 'No Login';
    } ?>
</h1>