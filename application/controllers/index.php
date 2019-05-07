<?php

class index extends CI_Controller {

public function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
public function index()
	{				
		//get the last three blog posts and send to the home page
		$this->load->model('index_mdl');
		$data['blogs'] = $this->index_mdl->top3blogs();
		//var_dump($data['blogs']);
		$this->load->view('index',$data);
	}	

}
?>
