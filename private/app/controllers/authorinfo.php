<?php

class User extends Controller {

    function __construct() {
        parent::__construct();
    }
    function Index () {
        $this->view("template/header");

        $is_checked = isset($_SESSION["username"]);
        if($is_checked) {
            $this->view("test/checked");
        }else {
            $this->view("test/unchecked");
        }
        $this->view("template/footer");
    }
        fucntion Login(){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $post_csrf = htmlentities($_POST["csrf"]);
                $cookie_csrf = $_COOKIE["csrf"];
                $sess_cookie = $_SESSION["csrf"];
                if($sess_cookie == $post_csrf && $sess_cookie == $cookie_csrf) {

                    $this->model("AuthorsInfoModel");
                    $clear_username = htmlentities($_POST["username"]);
                    $clear_password = htmlentities($_POST["password"]);
                    $checked = $this->AuthorsInfoModel->checkedUser($clear_username,$clear_password);
                 if($checked){

                    header("location: /user/");
                 }
                 else{

                    echo("unchecked");
                }
                }
                 else{
                      echo("bad csrf");

                 }
                }
                     else if($_SERVER)["REQUEST_METHOD"] == "GET") {

                        $csrf = random_int(10000,100000000);
                        $_SESSION["csrf"] = $csrf;
                        setcookie("csrf",$csrf);
                        echo("sess cookie::" . $_SESSION["csrf"]);
                        $this->view("test/login",array("csrf" => $csrf));
                     }else {
                         http_response_code(405);

                     }
                    }
                     
                 function Logout(){
                     session_unset();
                     session_destroy();
                     $_SESSION = Array();
                     header("location:/user/");

                 }
                    }
    
?>