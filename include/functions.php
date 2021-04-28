<?php

function dump($variable) {
    echo'<pre>';
    var_dump($variable);
    echo'</pre>';
}

function nav_item(string $lien, string $titre):string {
    $classe = 'nav-item';
    if ($_SERVER['SCRIPT_NAME'] === $lien){
        $classe .= ' active';
    }
    return <<<HTML
        <li class="nav-item">
            <a class="nav-link $classe" href="$lien">$titre</a>
        </li>
HTML;
}

function nav_menu(string $linkClass = ''):string {

    return
        nav_item('index.php','Accueil', $linkClass).
        nav_item('environnementdev.php','Environnement de développement', $linkClass).
        nav_item('exercice.php','Exercice', $linkClass).
        nav_item('download.php','Liens / Téléchargement', $linkClass).
        nav_item('commentaire.php','Commentaires', $linkClass);
}

