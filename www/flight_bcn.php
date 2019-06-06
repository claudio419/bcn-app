<?php

    include '../controller/controller_content.php';

    $ctrl_content = new controller_content();

    if(!$ctrl_content->handle_activity()) {
        header('Location: index.php');
        exit();
    }

    $city_id =$ctrl_content->get_city_id_by_session_id();

?>

<!DOCTYPE html>
<html>
<head>
<?php include '../views/head.php'?>
</head>
<body>


<?php
    include '../views/menu.php';
    include '../views/flight_bcn_details.php';
    include '../views/footer.php';

?>

</body>
</html>