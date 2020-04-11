<?php

class Main extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    /*
     * http://localhost/
     */
    function Index () {

        $this->view("template/header");
        $this->view("main/index");
        $this->view("template/footer");
        
    }

    function Other () {

        $this->view("template/header");
        $this->view("main/other");
        echo("<br><br><br>hello there");
        $this->view("template/footer");
        
    }

    function Festivals () {
        //print_r("Language");
        $this->view("template/header");
        $this->view("template/festivals");
        $this->view("template/footer");
        
    }
    function Religions () {
        //print_r("Language");
        $this->view("template/header");
        $this->view("template/religions");
        $this->view("template/footer");
        
    }

}

?>