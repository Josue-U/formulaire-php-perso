<?php
@$email = $_POST['email'];
@$nom = $_POST['nom'];
@$prenom = $_POST['prenom'];
@$age = $_POST['age'];
@$valider = $_POST['valider'];
$erreur = '';
if (isset($valider)) {
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreur = '<li>Email invalide !</li>';
    }
    if (empty($nom)) {
        $erreur .= '<li>Nom laissé vide !</li>';
    }
    if (empty($prenom)) {
        $erreur .= '<li>Prénom laissé vide !</li>';
    }
    if (!is_numeric($age) || $age < 18) {
        $erreur .= '<li>Age invalide ! (Tu dois au moins avoir 18 ans mfi/mfeille)</li>';
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Inscription</title>

</head>

<body>

    <header>Inscription</header>
    <section>
        <form name="form" method="post" action="index.php">
            <div class="label">Email</div>
            <div class="input">
                <input type="text" name="email" value="<?php echo $email ?>" />
            </div>
            <div class="label">Nom</div>
            <div class="input">
                <input type="text" name="nom" value="<?php echo $nom ?>" />
            </div>
            <div class="label">Prénom</div>
            <div class="input">
                <input type="text" name="prenom" value="<?php echo $prenom ?>" />
            </div>
            <div class="label">Age</div>
            <div class="input">
                <input type="number" name="age" value="<?php echo $age ?>" />
            </div>
            <div class="input">
                <input type="submit" name="valider" value="M'inscrire" />
            </div>
        </form>
        <?php if (!empty($erreur)) { ?>
            <div id="erreur"><?php echo $erreur ?></div>
        <?php } ?>
    </section>

</body>

</html>