<?php
    namespace App\Controllers;
    use System\Core\Controller;
    use System\Helpers\Session;


    Class HomeController extends Controller
    {
        function index(){

                $this->loadView("index");


        }
        function LogOut(){
            if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"])||isset($_COOKIE["useradmin"])&&isset($_COOKIE["passadmin"])){
                $sessionHelper = new Session();
                $sessionHelper -> start();
                $sessionHelper ->delete("username");
                $sessionHelper -> delete("userpass");
                $isLogOut=$sessionHelper -> isExists("username");
                if($isLogOut){
                    echo "Çıkış yapılamadı";
                }
                else{
                    setcookie("user", '', time() - (3600));
                    setcookie("pass", '', time() - (3600));
                    setcookie("useradmin", '', time() - (3600));
                    setcookie("passadmin", '', time() - (3600));

                    header("location:index.php");

                }


            }


        }
        function AdminLogin(){
            $this->loadView("AdminLogin");
        }

    }
