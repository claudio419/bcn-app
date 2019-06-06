<?php

    include '../controller/controller_content.php';

    $ctrl_content = new controller_content();

    if(!$ctrl_content->handle_activity()) {
        header('Location: index.php');
        exit();
    }

    $ctrl_content->save_program_option();


?>

<!DOCTYPE html>
<html>
<head>
    <?php include '../views/head.php'?>
</head>
<body>

<?php
    include '../views/menu.php';
    include '../views/program_extra_info.php';
    include '../views/footer.php';
?>

</body>
</html>