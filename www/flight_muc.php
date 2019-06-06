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
    include '../views/flight_muc_details.php';
    include '../views/footer.php';

?>

</body>
</html>