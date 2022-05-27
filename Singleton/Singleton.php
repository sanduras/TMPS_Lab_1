<?php

declare (strict_types=1);

namespace CreationalPatterns\Singleton;


use Exception;
use mysqli;

class Singleton {
    private static $instance = NULL;
        /* Constructor should be always protected (private) to prevent direct construction with calls new operator.*/
        private function __construct()
        {
           
        }
        /* Singleton should not be clonable */
        protected function __clone()
        {
            
        }
        /* Singleton should not be restorable from strings */
        public function __wakeup()
        {
            throw new \Exception("Cannon unserialize a singleton. ");
        }

        public static function getInstance() {
           
            if(self::$instance == NULL) {
                self::$instance = new static();
            
            }
            else {

                // echo "Object already exist <br>";
            }
            return self::$instance;
        }
        // public static function getDatabaseConnection() {
            public  function getDatabaseConnection() {
            try {
                $db =  self::getInstance();
                $db->conn = new mysqli('localhost', 'root', '', 'students');
                return $db->conn;
            }catch (Exception $e) {
                echo "error =>". $e->getMessage();
            }
        }
    
}

?>