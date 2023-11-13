<?php ob_start()?>
<link rel="stylesheet" href="../style.css">



<?php
$content = ob_get_clean();
$titre = "Je suis dans la page Exercice 2";
require "../template.php";
?>
