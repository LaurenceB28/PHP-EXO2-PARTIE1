<?php
$lastname = 'Nom'; // declaration et initialisation de la variable $variableLastname et initialisation avec la valeur 'Nom'
$firstname = 'Prénom'; // declaration et initialisation de la variable $variableFirstname et initialisation avec la valeur 'Prénom'
$age = 25; // declaration et initialisation de la variable $variableAge et initialisation avec la valeur 'Age'
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exophp2</title>
</head>

<body>
    <p>
        <?php echo $lastname; ?>
    </p>
    <p>
        <?php echo $firstname; ?>
    </p>
    <p>
        <?php echo $age; ?>
    </p>
</body>

</html>