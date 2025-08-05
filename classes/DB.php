<?php

    class DB{
        public static $hostname;
        public static $username;
        public static $password;
        public static $database;

        public static $connect;

        public static function config($hostname, $username, $password, $database){
            self::$hostname = $hostname;
            self::$username = $username;
            self::$password = $password;
            self::$database = $database;
        }

        public static function connect(){
            return self::$connect = mysqli_connect(self::$hostname, self::$username, self::$password, self::$database);
        }

    }
    
?>