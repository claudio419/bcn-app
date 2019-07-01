<?php

    include '../controller/controller_content.php';

    $ctrl_content = new controller_content();
    if(!$ctrl_content->handle_activity()) {
        header('Location: index.php');
        exit();
    }

    $partner_email = $ctrl_content->get_partner_email();
    $partner_names = $ctrl_content->get_partner_name($partner_email);

?>

<!DOCTYPE html>
<html>
<head>
    <?php include '../views/head.php'?>
</head>
<body>

<?php
    include '../views/menu.php';
    include '../views/hotel_content.php';
    include '../views/footer.php';
?>

</body>
</html>
