<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.11.2018
 * Time: 21:03
 */

namespace App\Models;
use System\Core\Model;


class AdminPanelModel extends Model
{
    public function InsertEx($table, $array) {

        $columns = implode(", ", array_keys($array));
        $values  = implode("',' ", array_values($array));

        $sql = "INSERT INTO ".$table."(".$columns.") VALUES ('".$values."')";
        $insert = $this->connection->query($sql);
        if ($insert) {
            return $this->connection->lastInsertId($table);
        } else {
            return false;
        }
    }
    public function SelectEx($table, $array = null) {
        if($array == null){
            $sql = "SELECT * FROM ".$table;
        }else{
            $columns = array_keys($array);
            $values = array_values($array);
            $sqlString = "";
            for($i=0;$i<count($columns);$i++){
                if($i==count($columns)-1){
                    $sqlString .= $columns[$i]." = '".$values[$i]."' ";
                }else{
                    $sqlString .= $columns[$i]." = '".$values[$i]."' or ";
                }
            }
            $sql = "SELECT * FROM ".$table." WHERE ".$sqlString;
        }
        $select = $this->connection->query($sql);
        if ($select) {
            $row = $select->fetchAll();
            return $row;
        } else {
            return false;
        }
    }
    public function DeleteEx($table, $id) {

        $sql = 'DELETE FROM ' . $table . ' WHERE ExID=' . $id;

        $delete = $this->connection->exec($sql);

        if ($delete) {
            return true;
        } else {
            return false;
        }
    }
    public function UpdateEx($table, $id, $array) {

        $columns = array_keys($array);
        $values = array_values($array);
        $sqlString = "";
        for($i=0;$i<count($columns);$i++){
            if($i==count($columns)-1){
                $sqlString .= $columns[$i]." = '".$values[$i]."' ";
            }else{
                $sqlString .= $columns[$i]." = '".$values[$i]."', ";
            }
        }
        $sql = "UPDATE ".$table." SET ".$sqlString." WHERE ExID=" . $id;

        $update = $this->connection->query($sql);

        if ($update) {
            return true;
        } else {
            return false;
        }
    }
    public function selectAnd($table, $array = null) {

        if($array == null){
            $sql = "SELECT * FROM ".$table;
        }else{
            $columns = array_keys($array);
            $values = array_values($array);
            $sqlString = "";
            for($i=0;$i<count($columns);$i++){
                if($i==count($columns)-1){
                    $sqlString .= $columns[$i]." = '".$values[$i]."' ";
                }else{
                    $sqlString .= $columns[$i]." = '".$values[$i]."' and ";
                }
            }
            $sql = "SELECT * FROM ".$table." WHERE ".$sqlString;
        }
        $select = $this->connection->query($sql);
        if ($select) {
            $row = $select->fetchAll();
            return $row;
        } else {
            return false;
        }
    }
}