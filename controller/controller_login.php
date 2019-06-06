<?php

//var_dump($_SERVER);
//https://www.taniarascia.com/the-simplest-php-router/

    include 'db_conection.php';

    /**
     * Handle login
     */

    class controller_login {

        /***
         * Init login
         *
         * return bool
         */
        public function init_login($email, $pass) {

            $con = new db_conection();

            if(!empty($email) && !empty($pass)) {
                $logUser = $con->login($email, $pass);
            }

            if (!$logUser) {
                return false;
            }

            $session_id = (isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID'])) ? strip_tags($_COOKIE['PHPSESSID']) : '';


            session_start();

            if($session_id !== session_id()){
                return false;
            }

            setcookie('email', $logUser['email']);
            setcookie('firstname', $logUser['firstname']);

            $con->set_session($session_id, $logUser['email']);

            return true;

        }
    }