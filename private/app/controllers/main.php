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
        echo("<br><br><br>hello hai");
        $this->view("template/footer");
        
    }

    function IndianFestivals () {
        //print_r("Language");
        $this->view("template/header");
        $this->view("template/Indianfestivals");
        $this->view("template/footer");
        
    }
    function TeslaCars() {
        //print_r("Language");
        $this->view("template/header");
        $this->view("template/Teslacars");
        $this->view("template/footer");
        
    }

}

?>