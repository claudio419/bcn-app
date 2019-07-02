<?php

    include '../controller/controller_content.php';

    $ctrl_content = new controller_content();
    if(!$ctrl_content->handle_activity()) {
        header('Location: index.php');
        exit();
    }

?>

<!DOCTYPE html>
<html>
<head>
    <?php include '../views/head.php'?>
</head>
<body>

<?php
    include '../views/menu.php';
?>

<div class="container padding_top_15">
    <h1>Orga Team</h1>
    <p>
        Hier findest Du Infos zu deinem Orga Team. <br />
        Wenn es einen Notfall geben sollte, findest Du hier zu einem späteren Zeitpunkt auch die Notfall-Nummern des Orga-Teams.
    </p>
    <div class="separator_gray"></div>
    <?php include '../views/orga_team.php'?>

</div>

<?php
    include '../views/footer.php';
?>

</body>
</html>
