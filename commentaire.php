<?php
$title = 'Commentaires';
$error = null;
$success = null;
$nom = null;
$prenom = null;
$message = null;

if (!empty($_POST['nom']) && (!empty($_POST['message'])) ) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $message = $_POST['message'];
    
    $file = __DIR__ . DIRECTORY_SEPARATOR . 'message' . DIRECTORY_SEPARATOR . date('Y-m-d');
    file_put_contents($file, $nom . ';' . $prenom . ';' . $message . PHP_EOL, FILE_APPEND);
    $success = "Votre message a bien été enregistré";
    
    //} else {
    //    $error = "Vous avez des champs vide";
    //}
} 

require 'include/header.php'; 
?>
<div class="container">
    <h1 class="titre">Laissez votre commentaire</h1>

    <?php if ($error) : ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <?php if ($success) : ?>
        <div class="alert alert-success"><?= $success ?></div>
    <?php endif; ?>
    <div class="form-group">
        <form action="commentaire.php" method="post" class="form-inline">
            <div class="form-group">
                <input type="text" name="nom" placeholder="Entrer votre nom" class="form-control" required value="<?= htmlentities($nom) ?>">
                <input type="text" name="prenom" placeholder="Entrer votre prénom" class="form-control" required value="<?= htmlentities($prenom) ?>">
                <input type="textarea" name="message" placeholder="Entrer votre message" class="form-control" rows="8" required value="<?= htmlentities($message) ?>">
            </div>
            <button type="submit" class="btn btn-primary">Poster votre commentaire</button>
        </form>
    </div>
</div>





<?php require 'include/footer.php'; ?>