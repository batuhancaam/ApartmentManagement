<?php

namespace App\Controllers;


use App\Models\SingUpModel;
use System\Core\Controller;

Class SingUpController extends Controller
{
    function SingUp(){

        if(isset($_POST["SingUpSbmt"])){
            $table = "users";
            $USNM=$_POST["UsName"];
            $USPASS=$_POST["UsPass"];
            $UserArray = array(
                'USNM' => $USNM,
                'USPASS'=>$USPASS,
                'AdminFlag'=>'U'
            );
            $db = new SingUpModel();
            $db ->insert($table,$UserArray);
            $this->loadView("index");

        }
        else{
            $this->loadView("SingUp");
        }

    }
}