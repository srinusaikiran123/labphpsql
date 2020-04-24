<?php

class Installer{

    private $config= [];

    public $db;

    function configuration(){
        require "private/core/config/database.php";
    }
    function install(){
        if(isset($this->config["database"])){
            try{
                 $dsn = $this->config["database"] ["driver"] . ":" .
                 "host=" . $this->config["database"] ["dbhost"] .
                 ";dbname=" . $this->config["database"] ["dbname"];
                 echo("before execute222" . $dsn) ;
                 $this->db = new PDO(
                     $dsn
                     , $this->config["database"] ["username"]
                     , $this->config["database"] ["password"]
                 );
                 echo("before execute111");
                 $sql = file_get_contents("setup/data/init.sql");
                 $this->db->exec($sql);

                 
                }catch(PDOException $ex){
                    echo($ex->getMessage());

                }
                 }
                
            }
        }
              
              $installer = new Installer();
              $installer->configure();
              $installer->install();
?>