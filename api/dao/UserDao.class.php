<?php

class UserDao extends BaseDao{

  public function get_user_by_email($email){
    $this->query("SELECT * FROM users WHERE email = :email", ["email" => $email ] )

  }



}

 ?>
