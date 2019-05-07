<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class Index_mdl extends CI_Model {

public function __construct()
	{
		parent::__construct();
    }

public function login($username, $password)
	{
		$sql = $this->db->query("SELECT accountid FROM inthecaddy.account WHERE username = '$username' and password = '$password'");
		foreach ($sql->result_array()  as $v )
		   {
				return $v["accountid"];
		   }
	}
}
?>
