<?php

include 'db_conection.php';


    /**
     * Handle content of web
     */
    class controller_content {


        /**
         * Handle activity
         *
         * return bool
         */
        public function handle_activity() {

            $con = new db_conection();

            $session_id = (isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID'])) ? strip_tags($_COOKIE['PHPSESSID']) : '';

            if(!empty($session_id)) {

                $email = $con->get_email_by_session_id(strip_tags($session_id));

                if ($email === $_COOKIE['email']) {
                    return true;
                }
            }

            return false;

        }

        /**
         * Logout
         *
         * return true
         */
        public function logout(){

            $con = new db_conection();

            $email = (isset($_COOKIE['email']) && !empty($_COOKIE['email'])) ? strip_tags($_COOKIE['email']) : '';

            if(!empty($email)) {
                $con->logout($email);
            }

            return true;

        }

        /**
         * Get City id by session_id
         *
         * return int
         */
        public function get_city_id_by_session_id() {

            $con = new db_conection();

            $session_id = (isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID'])) ? strip_tags($_COOKIE['PHPSESSID']) : '';

            if(!empty($session_id)) {

                $city_id = $con->get_city_id(strip_tags($session_id));

                return ($city_id) ? (int) $city_id['city_id'] : 1;
            }

            return 1;

        }

        /**
         * Save program option
         */
        public function save_program_option(){


//            if(isset($_POST) && sizeof($_POST) >0){
//
//                $program_id = '';
//                $program_extra = '';
//                $email = '';
//
//                $con = new db_conection();
//
//                if(isset($_SESSION['email']) && !empty($_SESSION['email'])) {
//                   $email = strip_tags($_SESSION['email']);
//                }
//
//                if(isset($_POST['hop_on_hop_off']) && !empty($_POST['hop_on_hop_off'])) {
//                    $program_extra = strip_tags($_POST['hop_on_hop_off']);
//                }
//
//                if(isset($_POST['program_choosed']) && !empty($_POST['program_choosed'])) {
//                    $program_id = strip_tags($_POST['program_choosed']);
//                }
//
//                $con->set_program_by_email($program_id, $program_extra, $email);
//
//                $_SESSION['program_extra'] = $program_extra;
//                $_SESSION['program_extra'] = $program_id;
//
//            }

        }

    }

?>