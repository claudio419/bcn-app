<?php

    include '../controller/controller_content.php';

    $ctrl_content = new controller_content();

    if(!$ctrl_content->handle_activity()) {
        header('Location: index.php');
        exit();
    }

    $program_id         = $ctrl_content->get_program_id();
    $program_all        = $ctrl_content->get_program_all_by_id($program_id);

    $program_extra      = $ctrl_content->get_program_extra();
    $program__all_extra = $ctrl_content->get_all_program_extra();

?>

<!DOCTYPE html>
<html>
<head>
    <?php include '../views/head.php'?>
</head>
<body>

<?php
    include '../views/menu.php';
    include '../views/program_info.php';
    include '../views/footer.php';
?>

</body>
</html>