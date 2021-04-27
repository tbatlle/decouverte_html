<?php 
    $title = 'Environnement de développement';
    require 'include/header.php'; 
?>

<div class="container">
    <h2 class="titre">Exercice</h2>
    <p>Développement d'un site de 4 pages :
        <ul>
            <li>
                Une page d'accueil, que vous nommerez : <strong>index.html</strong> 
                <a href="#index">Exemple</a>
            </li>
            <li>
                Une page présentant votre CV, que vous nommerez : <strong>cv.html</strong>
                <a href="#cv">Exemple</a>
            </li>
            <li>
                Une page présentant vos loisirs, que vous nommerez : <strong>loisirs.html</strong>
                <a href="#loisirs">Exemple</a>
            </li>
            <li>
                Pour ceux qui veulent aller plus loin, ajouter une page <strong>contact.html</strong> avec un formulaire.
                <a href="#contact">Exemple</a>
            </li>
        </ul>
    </p>
    <h2 class='titre'>Capture d'écran d'un exemple de site :</h2>
    <div class='border border-success' id='index'>
        <h4>Page index</h4>
        <img src="images/exercice/index.png" alt="Exemple index.png">
    </div>
    <div class='border border-success' id='cv'>
        <h4>Page CV</h4>
        <img src="images/exercice/cv.png" alt="Exemple cv.png">
    </div>
    <div class='border border-success' id='loisirs'>
        <h4>Page loisirs</h4>
        <img src="images/exercice/loisirs.png" alt="Exemple loisirs.png">
    </div>
    <div class='border border-success' id=contact>
        <h4>Page contact</h4>
        <img src="images/exercice/contact.png" alt="Exemple contact.png">
    </div>
</div>

<?php require 'include/footer.php'; ?>