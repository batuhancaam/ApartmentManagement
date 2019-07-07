<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.11.2018
 * Time: 17:44
 */

namespace App\Controllers;
use App\Models\DashboardModel;
use System\Core\Controller;
use System\Helpers\Session;



class DashboardController extends  Controller
{
    function OpenDashboard(){

            $table = "users";
            $exTable="expensetable";
            if(isset($_POST["LoginSbmt"])){
                $USNM=$_POST["USNM"];
                $USPASS=$_POST["USPASS"];
                $UserArray = array(
                    'USNM' => $USNM,
                    'USPASS'=>$USPASS,


                );
                $db = new DashboardModel();
                $isLogin = $db ->selectAnd($table,$UserArray);
                $count = count($isLogin);
                if($count>0){
                    $sessionHelper = new Session();
                    $sessionHelper -> start();
                    $sessionHelper -> create("username",$USNM);
                    $sessionHelper -> create("userpass",$USPASS);
                    setcookie("user", $USNM, time() + (86400 * 30));
                    setcookie("pass", $USPASS, time() + (86400 * 30));
                    foreach ($isLogin as $id){
                        setcookie("usid",$id["USID"],time() + (86400 * 30));
                    }

                 }
                 else {
                     $this ->loadView("Wrong");
                 }

            }
            else {
                header("location:index.php");
            }

            if(isset($_SESSION["username"])){
                        $ExTable = $db ->selectOr($exTable);
                        $this ->loadView("DashboardHeader",$isLogin);
                        $this -> loadView("DashboardExTable",$ExTable);
            }







    }
    function GetDues(){
        if(htmlspecialchars($_COOKIE["user"])) {
            $table = "duestable";
            $db = new DashboardModel();
            $duesTable = $db->selectOr($table);
            $this->loadView("DashBoardDuesTable", $duesTable);
        }
        else {
            header("location:index.php");
        }
    }
    function GetEx(){
        if(htmlspecialchars($_COOKIE["user"])) {
            $exTable = "expensetable";
            $db = new DashboardModel();
            $ExTable = $db->selectOr($exTable);
            $this->loadView("DashboardHeader");
            $this->loadView("DashboardExTable", $ExTable);
        }
        else {
            header("location:index.php");
        }
    }

  public function PayDues(){

        $USNM = $_POST["Usnm"];
        $DuesAMMO = $_POST["DuesAmo"];
        $DuesDt = $_POST["DuesDt"];
        $DuesACK = $_POST["DuesAck"];
        $DuesId = $_POST["DuesId"];
        $USID= $_POST["USID"];

        $DuesArray = array(
            'Usnm' => $USNM,
            'DuesAck' => $DuesACK,
            'DuesAmo' => $DuesAMMO,
            'DuesDt' =>$DuesDt,
            'DuesId' =>$DuesId,
            'USID' =>$USID


        );
        $db = new DashboardModel();
        $test = $db->insert("payduestable",$DuesArray);

        echo $test;



    }
    public function GetPayDues(){
        if(htmlspecialchars($_COOKIE["user"])) {
            $payduestable = "payduestable";
            $db = new DashboardModel();
            $payDeusTable = $db->selectOr($payduestable);
            $this->loadView("Gelirler", $payDeusTable);
        }
        else{
            header("location:index.php");
        }
    }

}