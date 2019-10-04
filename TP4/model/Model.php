<?php

require_once '../config/Conf.php';

class Model {
     
    public static $pdo;

        public static function init() {
    
        $hostname = Conf::getHostname();
        $database_name = Conf::getDatabase();
        $login = Conf::getLogin();
        $password = Conf::getPassword();
          
        try {
             self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name", $login, $password,
                     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
             self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            echo $ex->getMessage(); // affiche un message d'erreur
            die();

        }
       
    
        
        }

   



     
 }
 
 Model::init();


