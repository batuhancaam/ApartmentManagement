<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.11.2018
 * Time: 20:33
 */

namespace App\Controllers;

use System\Core\Controller;
use App\Models\AdminPanelModel;
use System\Helpers\Session;

class AdminPanelController extends Controller
{

    function AdminPanel()
    {
        $table = "users";
        $exTable = "expensetable";
        if(isset($_POST["LoginSbmt"])){
            $USNM=$_POST["USNM"];
            $USPASS=$_POST["USPASS"];
            $UserArray = array(
                'USNM' => $USNM,
                'USPASS'=>$USPASS,
                'AdminFlag'=>"X"

            );
            $db = new AdminPanelModel();
            $isLogin = $db ->selectAnd($table,$UserArray);
            $count = count($isLogin);
            if($count>0){
                $sessionHelper = new Session();
                $sessionHelper -> start();
                $sessionHelper -> create("username",$USNM);
                $sessionHelper -> create("userpass",$USPASS);
                setcookie("useradmin", $USNM, time() + (86400 * 30));
                setcookie("passadmin", $USPASS, time() + (86400 * 30));
                foreach ($isLogin as $id){
                    setcookie("adminid",$id["USID"],time() + (86400 * 30));
                }

            }
            else {
                $this ->loadView("AdminWrong");
            }

        }
        else {
            header("location:index.php");
        }


        if(isset($_SESSION["username"])){
            $exTable = $db->SelectEx($exTable);
            $this->loadView("AdminPanelHeader");
            $this->loadView("AdminPanelExContent");
            $this->loadView("AdminPanelExEditTable", $exTable);
        }




    }

    public function InsertEx()
    {

        $table = "expensetable";
        $ExTP = $_POST["ExTp"];
        $ExAMO = $_POST["ExAmmo"];
        $ExDT = $_POST["ExDt"];
        $ExTITLE = $_POST["ExTitle"];
        $ExACK = $_POST["ExAck"];
        $ExArray = array(
            'ExTP' => $ExTP,
            'ExAMO' => $ExAMO,
            'ExTITLE' => $ExTITLE,
            'ExACK' => $ExACK,
            'ExDT' => $ExDT,
        );
        $db = new AdminPanelModel();
        $db->InsertEx($table, $ExArray);
        echo "success";

    }

    public function DeleteEx()
    {

        $id = $_POST["ExID"];
        $table = "expensetable";
        $db = new AdminPanelModel();
        $db->DeleteEx($table, $id);
        echo "success";

    }

    public function UpdateEx()
    {
        $table = "expensetable";
        if (isset($_POST["ExId"])) {
            $ExTP = $_POST["ExTp"];
            $ExAMO = $_POST["ExAmmo"];
            $ExDT = $_POST["ExDt"];
            $ExTITLE = $_POST["ExTitle"];
            $ExACK = $_POST["ExAck"];
            $ExArray = array(

                'ExTP' => $ExTP,
                'ExAMO' => $ExAMO,
                'ExTITLE' => $ExTITLE,
                'ExACK' => $ExACK,
                'ExDT' => $ExDT,
            );
            $ExID = $_POST["ExId"];
            $db = new AdminPanelModel();
            $db->UpdateEx($table, $ExID, $ExArray);
            echo "success";

        }


    }
    public function GiderAdmin(){
        $db = new AdminPanelModel();
        if(htmlspecialchars($_COOKIE["useradmin"])){
            $exTable = "expensetable";
            $exTable = $db->SelectEx($exTable);
            $this->loadView("AdminPanelHeader");
            $this->loadView("AdminPanelExContent");
            $this->loadView("AdminPanelExEditTable", $exTable);
        }
        else {
            header("location:index.php");
        }

    }

}