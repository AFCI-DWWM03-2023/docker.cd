<?php ob_start() ?>
<link rel="stylesheet" href="./style.css">
<img class="php" src="php-logo.svg.png" alt="">
<div>


<form method="POST">
<button name="button1" class="Bouton1"></button>
<button name="button2" class="Bouton2"></button>
<button name="button3" class="Bouton3"></button>
</form>



<?php

    // Francais
if(isset($_POST["button1"])) {
    echo "Bienvenue sur mon site
    je suis développeur Web
    Actuellement en formation en développeur Web et Web Mobile, je suis à la recherche d'un stage afin de mettre en pratique mes acquis théoriques.";

} elseif(isset($_POST['button2'])) {
    // Espagnol
    echo "Bienvenido a mi sitio web
    Soy desarrollador Web 
    Actualmente me estoy formando para ser desarrollador Web y Web Móvil, y estoy buscando unas prácticas para poner en práctica mis conocimientos teóricos.";

} elseif(isset($_POST['button3'])) {
    // Anglais
    echo "Welcome to my website
    I'm a Web developer 
    Currently training as a Web and Mobile Web developer, I'm looking for an internship to put my theoretical knowledge into practice.";
}

?>

</div>

<?php
$content = ob_get_clean();
$titre = "Traduction automatique";
require "template.php";
?>
