<?php

class index extends CI_Controller {

public function __construct()
	{
		parent::__construct();
	}

public function index()
	{
		$this->load->view('admin/index');
	}
public function login()
	{
		//call the model to get the user account information in a session object
		$this->load->model('admin/index_mdl');
		$acctid = $this->index_mdl->login($this->input->post('txtusername'),$this->input->post('txtpassword'));
		$this->session->set_userdata('ACCTID', $acctid);

		var_dump($acctid);

		if ($acctid > 0)
			{
				redirect('admin/main');
			}
			else
			{
				echo("Problem logging in. Please try again.");
			}

	}
}
?>
