<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class Home_mdl extends CI_Model {

public function __construct() 
	{
		parent::__construct();
    }
public function top3blogs()
	{
		$blogdata = $this->db->query('SELECT blog_title, blog_text FROM blogs ORDER BY `dtcreated` DESC LIMIT 3 ', FALSE); 
		
			foreach ($blogdata->result_array()  as $v )
		   {
				$blogs[] = $v;
		   }
		   return $blogs;
	}
}
?>