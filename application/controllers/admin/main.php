	<?php

class main extends CI_Controller {

public function __construct() 
	{
		parent::__construct();
	}
	
public function index()
	{				
		if($this->session->userdata('ACCTID'))
		{
			$this->load->view('admin/main');	
		}else{
			redirect('admin');
		}
	}	
public function addblog()
	{
		$this->load->model('admin/main_mdl');
		$this->main_mdl->addblog($this->input->post('txtBlogTitle'),$this->input->post('txtBlog'));
	}
}
?>
