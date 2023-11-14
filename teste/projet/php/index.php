<?php ob_start() ?>
<link rel="stylesheet" href="./style.css">
<h2>Je suis dans page d'accueil</h2>

<?php
$content = ob_get_clean();
$titre = "Ma page d'accueil";
require "template.php";
?>