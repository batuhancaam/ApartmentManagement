<?php
namespace System\Core;
abstract Class Model{

    protected $connection;

    function __construct() {

        try{
            $this->connection = new \PDO('mysql:host=localhost;dbname=apartmentmanagementdb', "root", "");
            $this->connection->query("SET NAMES utf8");
            $this->connection->query("SET CHARACTER SET utf8");
            $this->connection->query("SET COLLATION_CONNECTION = 'utf8_general_ci");
            return true;
        }catch(PDOException $error){
            $errorMesage = 'Hata : Veritabanı bağlantısı kurulamadı !<br>Hata Mesajı =>'.$error->getMessage();
            return $errorMesage;
        }
    }

}