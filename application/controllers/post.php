<?php

class Post extends CI_Controller {

public function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
public function index()
	{				
		//get the last three blog posts and send to the home page
		$this->load->model('post_mdl');
		$data['blogs'] = $this->post_mdl->blogsdetails($this->input->get('blogid', TRUE));
		//$data['comments'] = $this->post_mdl->blogcomments($this->input->get('blogid', TRUE));
		//var_dump($data['comments']);
		$this->load->view('post',$data);
	}	

	public function addcomment()
	{
		$this->load->model('post_mdl');
		$this->post_mdl->addcomment($this->input->post('hidblogid'),strip_tags ($this->input->post('txtEmail')),strip_tags ($this->input->post('txtDisplayName')),strip_tags ($this->input->post('txtComment')));
	}
}
?>
