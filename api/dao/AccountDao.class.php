<?php
class AccountDao extends BaseDao{

  public function add_account($account){
    return $$this->insert("accounts", $account);

  }
  public function update_account($account){
    $$this->update("accounts", $account);

  }
  public function get_account_by_id($id){
    return $this->query_unique("SELECT * FROM accounts WHERE id =:id", ["id"=> $id]);

  }
  public function get_all_accounts(){
    return $$this->query("SELECT * FROM accounts", []);

  }


}


 ?>
