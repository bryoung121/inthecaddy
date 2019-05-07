<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class Main_mdl extends CI_Model {

public function __construct() 
	{
		parent::__construct();
    }
public function addblog($txttitle, $blogtext)
	{
		$data = array(
		   'blog_title' => $txttitle ,
		   'blog_text' => $blogtext			
		);
var_dump($data);
		$this->db->set('dtcreated', 'NOW()', FALSE);
		$this->db->insert('blogs', $data); 	
	/*
		$sql = $this->db->query("INSERT INTO blogs(blog_title, blog_text) VALUES ('$txttitle','$blogtext')");
		//echo "INSERT INTO blogs(blog_title, blog_text) VALUES ('$txttitle','$blogtext')";
		$this->db->query($sql);
		//return 1;
	*/
	}
}
?>
