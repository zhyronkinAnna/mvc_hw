<?php
namespace Services;

use PDO;

class Db{
    private $connect;
    private static $instance = null;

    private function __construct() {
        require_once './config.php';
        $this->connect = new PDO('mysql:host=' . HOST_DB . ';dbname=' . NAME_DB, USER_DB, PASS_DB);
    }

    public static function getInstance(): self{
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function query(string $sql){
        $stmt = $this->connect->query($sql);
        return $stmt ? $stmt->fetchAll(PDO::FETCH_OBJ) : null;
    }

}