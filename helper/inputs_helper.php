<?php

    class input_helper {

        /**
         * Check a valid email
         */
        public static function check_email($email) {
            //todo email Regex

            $email = filter_var(strip_tags($email), FILTER_SANITIZE_EMAIL);
            return $email;

        }

        /**
         * Check a valid pass
         */
        public static function check_pass($pass) {
            //todo Pass Regex

            return (string) strip_tags($pass);

        }
}