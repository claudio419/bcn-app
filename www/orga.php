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
    <?php include '../views/orga_team.php'?>

</div>

<?php
    include '../views/footer.php';
?>

</body>
</html>
