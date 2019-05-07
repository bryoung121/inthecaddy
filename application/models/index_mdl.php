<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class Index_mdl extends CI_Model {

public function __construct() 
	{
		parent::__construct();
    }
public function top3blogs()
	{
		$blogdata = $this->db->query('SELECT blogid, blog_title, blog_text, dtcreated FROM blogs ORDER BY `dtcreated` DESC ', FALSE); 
		
			foreach ($blogdata->result_array()  as $v )
		   {
				$blogs[] = $v;
		   }
		   return $blogs;
	}
}
?>