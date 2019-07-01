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
         * Get Program id
         *
         * return int
         */
        public function get_program_id() {

            $con = new db_conection();

            $session_id = (isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID'])) ? strip_tags($_COOKIE['PHPSESSID']) : '';

            if(!empty($session_id)) {

                $program_id = $con->get_program_id(strip_tags($session_id));

                return ($program_id) ? (int) $program_id['program_id'] : 0;
            }

        }

        /**
         * Get Program id
         *
         * return int
         */
        public function get_program_all_by_id($id) {

            $con = new db_conection();

                $program_all_id = $con->get_program_all_id(strip_tags($id));

                return $program_all_id;

        }

        /**
         * Get Program extra
         *
         * return bool
         */
        public function get_program_extra() {

            $con = new db_conection();

            $session_id = (isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID'])) ? strip_tags($_COOKIE['PHPSESSID']) : '';

            if(!empty($session_id)) {

                $program_extra = $con->get_program_extra(strip_tags($session_id));

                return ($program_extra) ? $program_extra['program_extra'] : false;

            }

        }

        /**
         * Get all Program extra
         *
         * return bool
         */
        public function get_all_program_extra() {

            $con = new db_conection();

            $program_all_extra = $con->get_all_program_extra();

            return $program_all_extra;

        }

        /**
         * Get Program id
         *
         * return int
         */
        public function get_partner_email() {

            $con = new db_conection();

            $session_id = (isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID'])) ? strip_tags($_COOKIE['PHPSESSID']) : '';

            if(!empty($session_id)) {

                $partner_mail = $con->get_partner_email(strip_tags($session_id));


                return ($partner_mail) ? $partner_mail : [];
            }

        }

        /**
         * Get Program id
         *
         * @param string $mail Email
         *
         * return array
         */
        public function get_partner_name($mail) {

            $con = new db_conection();


            if (!$mail) {
                return '';
            }

            $mail = strtolower($mail);

            $partner_name = $con->get_partner_name(strip_tags($mail));

            return $partner_name;
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