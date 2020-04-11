<?php

class AuthorInfoModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function check_User($username,$password){

        $clear_username = $username ;
        $clear_password = $password ;
        $sql="SELECT `hash_password`, `first_name`, `last_name` from authors where email = ?" ;
        $statement = $this->db->prepare($sql) ;
        $count = $statement->execute(Array($clear_username));
        $row = $statement->fetch();
        $hash_password = $row[0];
        $is_check = false ;
        if(isset($hash_password)){
            $is_check = password_verify($clear_password,$hash_password);
            if($is_check){
                $_SESSION["first_name"] = $row[1];
                $_SESSION["last_name"] = $row[2];
                $_SESSION["username"] = $clear_username;

                $update_sql = "UPDATE `authors` set `last_login_date` = CURRENT _TIMESTAMP() where email = ?";
                $update_statement = $this->db->prepare($update_sql);
                $update_statement->execute(Array($clear_username));

            }
        }
    }
}

?>