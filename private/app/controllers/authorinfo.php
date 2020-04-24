<?php

class AuthorInfo extends Controller {

    function __construct() {
        parent::__construct();
    }
    function Index () {
        $this->view("template/header");

        $is_tested = isset($_SESSION["username"]);
        if($is_tested) {
            $this->view("main/tested");
        }else {
            $this->view("main/not tested");
        }
        $this->view("template/footer");
    }
        function Login(){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $post_csrf = htmlentities($_POST["csrf"]);
                $cookie_csrf = $_COOKIE["csrf"];
                $sess_cookie = $_SESSION["csrf"];
                if($sess_cookie == $post_csrf && $sess_cookie == $cookie_csrf) {

                    $this->model("AuthorInfoModel");
                    $clear_username = htmlentities($_POST["username"]);
                    $clear_password = htmlentities($_POST["password"]);
                    $tested = $this->AuthorInfoModel->testedUser($clear_username,$clear_password);
                 if($tested){

                    header("location: /authorinfo/");
                 }
                 else{

                    echo("not tested");
                }
                }
                 else{
                      echo("bad csrf");

                 }
                }
                     else if($_SERVER["REQUEST_METHOD"] == "GET") {

                        $csrf = random_int(10000,100000000);
                        $_SESSION["csrf"] = $csrf;
                        setcookie("csrf",$csrf);
                        $this->view("main/login",array("csrf" => $csrf));
                     }
                     else{
                         http_response_code(405);

                     }
                    }
                     
                 function Logout(){
                     session_unset();
                     session_destroy();
                     $_SESSION = Array();
                     $this->view("main/logout");

                 }
                    }
    
?>