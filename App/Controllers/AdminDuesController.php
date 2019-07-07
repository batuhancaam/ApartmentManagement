<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.11.2018
 * Time: 16:58
 */

namespace App\Controllers;


use System\Core\Controller;
use App\Models\AdminDuesModel;
use System\Helpers\Session;

class AdminDuesController extends Controller
{
    function DuesPage(){
        if(htmlspecialchars($_COOKIE["useradmin"])){
            $table ="duestable";
            $db = new AdminDuesModel();
            $duesTable = $db ->SelectDues($table);
            $this->loadView("AdminDues",$duesTable);
        }
        else {
            header("location:index.php");
        }


    }
    public function InsertDues(){
        $table = "duestable";

        $DuesAmmo = $_POST["DuesAmmo"];
        $DuesDT = $_POST["DuesDt"];
        $DuesAck = $_POST["DuesAck"];

        $DuesArray = array(
            'DuesAmmo' => $DuesAmmo,
            'DuesDT' => $DuesDT,
            'DuesAck' => $DuesAck,

        );
        $db = new AdminDuesModel();
        $db->InsertDues($table,$DuesArray);
        echo "Success";



    }
    public function DeleteDues(){
        $table = "duestable";

        $id = $_POST["DuesId"];
        $db = new AdminDuesModel();
        $db->DeleteDues($table,$id);
        echo "Success";



    }
    public function UpdateDues(){
        $table = "duestable";
        $DuesId = $_POST["DuesId"];
        $DuesAmmo = $_POST["DuesAmmo"];
        $DuesDT = $_POST["DuesDt"];
        $DuesAck = $_POST["DuesAck"];

        $DuesArray = array(
            'DuesAmmo' => $DuesAmmo,
            'DuesDT' => $DuesDT,
            'DuesAck' => $DuesAck,

        );
        $db = new AdminDuesModel();
        $db->UpdateDues($table,$DuesId,$DuesArray);
        echo "Success";



    }

    public function GetPayDues(){
        if(htmlspecialchars($_COOKIE["useradmin"])) {
            $payduestable = "payduestable";
            $db = new AdminDuesModel();
            $payDeusTable = $db->SelectDues($payduestable);
            $this->loadView("GelirlerAdmin", $payDeusTable);
        }
        else{
            header("location:index.php");
        }
    }

}