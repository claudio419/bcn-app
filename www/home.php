<?php

    include '../controller/controller_content.php';

    $ctrl_content = new controller_content();
    if(!$ctrl_content->handle_activity()) {
        header('Location: logout.php');
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
    include '../views/home_content.php';
    include '../views/footer.php';
?>

</body>
</html>
