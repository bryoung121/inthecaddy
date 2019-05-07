<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class Post_mdl extends CI_Model {

public function __construct() 
	{
		parent::__construct();
    }
public function blogsdetails($blogid)
	{
		$blogdata = $this->db->query('SELECT blog_title, blog_text, dtcreated FROM blogs WHERE blogid = ' . $blogid , FALSE); 
		/*
			foreach ($blogdata->result_array()  as $v )
		   {
				$data[] = $v;
		   }
		 */  
		   $blogcomment = $this->db->query('SELECT blog_comment, dtim_created, displayName FROM blog_comments WHERE blog_id = ' . $blogid . ' ORDER BY dtim_created DESC' , FALSE); 
		
			/*foreach ($blogcomment->result_array()  as $v )
		   {
				$data[] = $v;
		   }
		   */
		   return array('blogdetails' => $blogdata->result_array(), 'comments' => $blogcomment->result_array());
		  // return $data;
	}
	
	public function blogcomments($blogid)
	{
		$blogcomment = $this->db->query('SELECT blog_comment, dtim_created, displayName FROM blog_comments WHERE blog_id = ' . $blogid , FALSE); 
		
			foreach ($blogcomment->result_array()  as $v )
		   {
				$data[] = $v;
		   }
		   return $data;
	}
	
	public function addcomment($blog_id, $txtEmail, $txtDisplayName, $txtComment)
	{
		$data = array(
			'blog_id' => $blog_id ,
		   'email_address' => $txtEmail ,
		   'displayName' => $txtDisplayName,
		   'blog_comment' => $txtComment
		);
		//var_dump($data);
		$this->db->set('dtim_created', 'NOW()', FALSE);
		$this->db->insert('blog_comments', $data); 	
		

		
	/*
		$sql = $this->db->query("INSERT INTO blogs(blog_title, blog_text) VALUES ('$txttitle','$blogtext')");
		//echo "INSERT INTO blogs(blog_title, blog_text) VALUES ('$txttitle','$blogtext')";
		$this->db->query($sql);
		//return 1;
	*/
	}
}

?>