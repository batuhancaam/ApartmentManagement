<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.11.2018
 * Time: 13:42
 */

namespace App\Models;
use System\Core\Model;


class SingUpModel extends Model
{
    public function insert($table, $array) {

        $columns = implode(",", array_keys($array));
        $values  = implode("','", array_values($array));
        $sql = "INSERT INTO ".$table."(".$columns.") VALUES ('".$values."')";

        $insert = $this->connection->query($sql);
        if ($insert) {
            return $this->connection->lastInsertId($table);
        } else {
            return false;
        }
    }

}