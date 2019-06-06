<?php
    session_start();
    include '../controller/controller_login.php';
    include '../config/env_config.php';
    include '../helper/inputs_helper.php';

    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {


        $email = (string) strip_tags($_POST['email']);
        $pass = (string) strip_tags($_POST['password']);

        $email = input_helper::check_email($email);
        $pass = input_helper::check_pass($pass);

        $ctrl = new controller_login();

        if($ctrl->init_login($email, $pass)){

            header('Location: home.php');
            exit();

        }
    }

?>

<!DOCTYPE html>
<html>
<head>
 <?php
    include '../views/head_login.php';
 ?>
</head>
<body>
    <?php
        include '../views/env_banner.php';
        include '../views/index_content.php'
    ?>
  </div>
</body>
</html>
