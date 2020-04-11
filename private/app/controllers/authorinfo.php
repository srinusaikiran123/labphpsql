<?php

class User extends Controller {

    function __construct() {
        parent::__construct();
    }
    function Index () {
        $this->view("template/header");

        $is_checked = isset($_SESSION["username"]);
        if($is_authenticated) {
            $this->view("test/checked");
        }else {
            $this->view("test/unchecked");
        }
        $this->view("template/footer");
    }
        fucntion Login(){
            if($_SERVER["REQUEST_METHOD"]== "POST"){
                $post_csrf = htmlentities($_POST["csrf"]);
                $cookie_csrf = $_COOKIE["csrf"];
                $sess_cookie = $_SESSION["csrf"];
                if($sess_cookie == $post_csrf && $sess_cookie == $cookie_csrf) {

                    $this->model("AuthorsModel");
                    $clear_username = htmlentities($_POST["username"]);
                    $clear_password = htmlentities($_POST["password"]);
                    $check = $this->AuthorsModel->checkUser($clear_username,$clear_password);
                 if($authenticate){

                    header("location: /user/");
                 }else{

                    echo("unchecked");

                 }else {
                     echo("bad csrf");

                 }else{
                     echo("bad csrf");
                     else if($_SERVER)["REQUEST_METHOD"] == "GET"){

                        $csrf = random_init(10000,100000000);
                        $_SESSION["csrf"] = $csrf;
                        setcookie("csrf",$csrf);
                        echo("sess cookie::" . $_SESSION["csrf"]);
                        $this->view("test/loginml90[p]\[]")
                     }
                 }
                 }
                
                }


            }
        }
        }
        }
    }
}