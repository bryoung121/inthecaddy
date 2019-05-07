<?php

class Home extends CI_Controller {

public function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
public function index()
	{				
	
		//get the last three blog posts and send to the home page
		$this->load->model('home_mdl');
		$data['blogs'] = $this->home_mdl->top3blogs();
		//var_dump($data['blogs']);
		$this->load->view('home',$data);
	}	

}
?>