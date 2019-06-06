<?php

    include '../config/db_config.php';

    class db_conection {

        private $dbhost;
        private $dbuser;
        private $dbpass;
        private $db;

        private function load_env() {

                $this->dbhost = DB_HOST;
                $this->dbuser = DB_USER;
                $this->dbpass = DB_PASS;
                $this->db = DB_DATABASE;
        }

        /**
         * Login
         *
         * @return bool|mysqli_result
         */
        function login($email, $pass) {


            $conn = $this->get_conn();

            $sql = 'SELECT email, firstname FROM users where email=\'' . $email . '\' and password=\'' . $pass . '\';';

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    return $row;
                }

            } else {
                return false;
            }

        }

        /**
         * Set Session in Db
         *
         * return void
         */

        function set_session($session, $email) {

            $conn = $this->get_conn();

            $sql = 'UPDATE users SET `session_id` = \'' . $session . '\' WHERE email = \'' . $email . '\'';

            $conn->query($sql);

        }

        /**
         * Logout
         *
         * return void
         */
        function logout($email) {

            $conn = $this->get_conn();

            $sql = 'UPDATE users SET `session_id` = \'\' WHERE email = \'' . $email . '\'';

            $conn->query($sql);

        }

        /**
         *  Set program by email
         *
         * return void
         */
        public function set_program_by_email($program_id, $program_extra, $email) {

            $conn = $this->get_conn();

            $sql = 'UPDATE users SET program_id = \'' . $program_id . '\', program_extra = \'' . $program_extra . '\' WHERE email = \'' . $email . '\'';

            $conn->query($sql);

        }

        /**
         * Get email by session id
         *
         * return string
         */
        public function get_email_by_session_id($session_id) {

            $conn = $this->get_conn();

            $sql = $sql = 'SELECT email FROM users where session_id=\'' . $session_id . '\';';

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    return $row['email'];
                }
            }

            return '';

        }

        /**
         * Get conn
         *
         * return \msqli
         */
        private function get_conn() {

            $this->load_env();
            $conn = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->db);

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            return $conn;
        }

        function CloseCon($conn)
        {
            $conn->close();
        }

        /**
         * Get city id
         *
         * @param string $session_id
         * @return int
         */
        function get_city_id($session_id) {


            $conn = $this->get_conn();

            $sql = $sql = 'SELECT city_id FROM users where session_id=\'' . $session_id . '\';';

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    return $row;
                }

            } else {
                return false;
            }

        }
    }

?>
