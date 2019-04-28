<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class elogin extends CI_Controller {


	public function index()
	{
			$this->load->view('backend_view/login_form');
	}


// for checking vali log in
	// public function validate()
	// {
	// 	$email=$this->input->post('email');
	// 	$password=$this->input->post('password');
	// 	$data=$this->admin_m->getby($email,$password);
	// 	if (count($data)!="")
	// 	{
	// 		$sess_data['name']=$data['name'];
	// 		$sess_data['ID']=$data['ID'];
	// 		$sess_data['email']=$data['email'];
	// 		$sess_data['image']=$data['image'];
	// 		$sess_data['LoggedIn']= true;
	// 		$this->session->set_userdata($sess_data);
	// 		redirect('admin/dashboard');
	// 	}
	// 	else
	// 	{
	// 		echo "incorrect email and password";
	// 	}

	// }

	


	//from side sign up to add new elogin from side
	// 		public function add_sideAdmin()
	// {
	// 	if($this->input->post('btnsave'))
	// 	{
	// 		$this->load->library('form_validation');
	// 		$this->form_validation->set_rules('name','User Name','required|min_length[5]|alpha_numeric_spaces');
	// 		$this->form_validation->set_rules('role','Role ','required|min_length[5]|alpha');
			
	// 		$this->form_validation->set_rules('email','Email ','required|valid_email|is_unique[admin.email]',array('required'=>'please Enter the %s','is_unique'=>'This Email is not valid'));
	// 		$this->form_validation->set_rules('contact','Contact Number','required',array('required'=>'please Enter the %s'));

		
	// 		$this->form_validation->set_rules('password','Password','required|min_length[3]|alpha_numeric_spaces',array('required'=>'please Enter the %s'));
	// 		if($this->form_validation->run()==FALSE)
	// 			{
	// 				echo "there are some thing wrong";
	// 			}
	// 		else
	// 			{
	// 				$this->admin_m->add();
	// 				redirect('elogin/index');

	// 			}

	// 	}
	// }
}
?>
