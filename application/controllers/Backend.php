<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	
	public function dashboard()
	{
		$this->load->view('backend_view/dashboard');
	}

	// for users
	public function show_users()
	{
		$data['users']=$this->users_m->getAll();
		$this->load->view('backend_view/users',$data);
	}

	public function add_users()
	{
		if($this->input->post('btnsave'))
		{
			$this->users_m->add();
			redirect('Backend/show_users');	
		}
		

	}
	public function edit_userss($ID)
	{
		$data['user']=$this->users_m->getOne($ID);
		$this->load->view('backend_view/edit_users',$data);
	}

	public function update_users()
	{
		if($this->input->post('btnupdate')=="update")
		{
			$this->users_m->update();
			redirect('Backend/show_users');	
		}
	}

	public function delete_users($ID)
	{
	$this->users_m->delete($ID);
		redirect('Backend/show_users');	
	}

	// end of users	

	// for items
	public function show_items()
	{
		$data['items']=$this->items_m->getAll();
		$this->load->view('backend_view/items',$data);
	}

	public function add_items()
	{
		if($this->input->post('btnsave'))
		{
			$this->items_m->add();
			redirect('Backend/show_items');	
		}
		

	}
	public function edit_items($ID)
	{
		$data['item']=$this->items_m->getOne($ID);
		$this->load->view('backend_view/edit_items',$data);
	}

	public function update_items()
	{
		if($this->input->post('btnupdate')=="update")
		{
			$this->items_m->update();
			redirect('Backend/show_items');	
		}
	}

	public function delete_items($ID)
	{
	$this->items_m->delete($ID);
		redirect('Backend/show_items');	
	}

	// end of items	

	// for display
	public function show_display()
	{
		$data['sides']=$this->display_m->getAll();
		$this->load->view('backend_view/display',$data);
	}

	public function add_display()
	{
		if($this->input->post('btnsave'))
		{
			$this->display_m->add();
			redirect('Backend/show_display');	
		}
		

	}
	public function edit_display($ID)
	{
		$data['side']=$this->display_m->getOne($ID);
		$this->load->view('backend_view/edit_display',$data);
	}

	public function update_display()
	{
		if($this->input->post('btnupdate')=="update")
		{
			$this->display_m->update();
			redirect('Backend/show_display');	
		}
	}

	public function delete_display($ID)
	{
		$this->display_m->delete($ID);
		redirect('Backend/show_display');	
	}

	// end of dispaly


	// for employee
	public function show_employess()
	{
		$data['employess']=$this->employess_m->getAll();
		$this->load->view('backend_view/employess',$data);
	}

	public function add_employess()
	{
		if($this->input->post('btnsave'))
		{
			$this->employess_m->add();
			redirect('Backend/show_employess');	
		}
		

	}
	public function edit_employess($ID)
	{
		$data['employee']=$this->employess_m->getOne($ID);
		$this->load->view('backend_view/edit_employess',$data);
	}

	public function update_employess()
	{
		if($this->input->post('btnupdate')=="update")
		{
			$this->employess_m->update();
			redirect('Backend/show_employess');	
		}
	}

	public function delete_employess($ID)
	{
		$this->employess_m->delete($ID);
		redirect('Backend/show_employess');	
	}

	// end of employee

	// for compainies
	public function show_companies()
	{
		$data['companies']=$this->companies_m->getAll();
		$this->load->view('backend_view/companies',$data);
	}

	public function add_companies()
	{
		if($this->input->post('btnsave'))
		{
			$this->companies_m->add();
			redirect('Backend/show_companies');	
		}
		

	}
	public function edit_companies($ID)
	{
		$data['company']=$this->companies_m->getOne($ID);
		$this->load->view('backend_view/edit_companies',$data);
	}

	public function update_companies()
	{
		if($this->input->post('btnupdate')=="update")
		{
			$this->companies_m->update();
			redirect('Backend/show_companies');	
		}
	}

	public function delete_companies($ID)
	{
		$this->companies_m->delete($ID);
		redirect('Backend/show_companies');	
	}

	// end of companies

	// for customer
	public function show_customers()
	{
		$data['customers']=$this->customers_m->getAll();
		$this->load->view('backend_view/customers',$data);
	}

	public function add_customers()
	{
		if($this->input->post('btnsave'))
		{
			$this->customers_m->add();
			redirect('Backend/show_customers');	
		}
		

	}
	public function edit_customers($ID)
	{
		$data['customer']=$this->customers_m->getOne($ID);
		$this->load->view('backend_view/edit_customers',$data);
	}

	public function update_customers()
	{
		if($this->input->post('btnupdate')=="update")
		{
			$this->customers_m->update();
			redirect('Backend/show_customers');	
		}
	}

	public function delete_customers($ID)
	{
		$this->customers_m->delete($ID);
		redirect('Backend/show_customers');	
	}

	// end of customer

	// for expensestypes
	public function show_expenses_types()
	{
		$data['expenses_types']=$this->expenses_types_m->getAll();
		$this->load->view('backend_view/expenses_type',$data);
	}

	public function add_expenses_types()
	{
		if($this->input->post('btnsave'))
		{
			$this->expenses_types_m->add();
			redirect('Backend/show_expenses_types');	
		}
		

	}
	public function edit_expenses_types($ID)
	{
		$data['expense_type']=$this->expenses_types_m->getOne($ID);
		$this->load->view('backend_view/edit_expenses_types',$data);
	}

	public function update_expenses_types()
	{
		if($this->input->post('btnupdate')=="update")
		{
			$this->expenses_types_m->update();
			redirect('Backend/show_expenses_types');	
		}
	}

	public function delete_expenses_types($ID)
	{
		$this->expenses_types_m->delete($ID);
		redirect('Backend/show_expenses_types');	
	}

	// end of expenses_types

	public function employeeDropdown()
	{

		$employess=$this->employess_m->getAll();
		$options['']="Please Select";

		foreach($employess as $each)
		{
			$options[$each->ID]="$each->Name";
		}

		return $options;
	}

	public function expensetypeDropdown()
	{
		$expensetypes=$this->expenses_types_m->getAll();
		$options['']="Please Select";

		foreach($expensetypes as $each)
		{
			$options[$each->ID]="$each->Expensetype";
		}

		return $options;
	}

	// for Expenses
	public function show_expenses()
	{
		
		$data['expensetypes']=$this->expensetypeDropdown();
		$data['employees'] = $this->employeeDropdown();
		$data['expenses']=$this->expenses_m->getAll();
		$this->load->view('backend_view/expenses',$data);
	}

	public function add_expenses()
	{
		if($this->input->post('btnsave'))
		{
			$this->expenses_m->add();
			redirect('Backend/show_expenses');	
		}
		

	}
	public function edit_expenses($ID)
	{
		$data['expensetypes']=$this->expensetypeDropdown();
		$data['employees'] = $this->employeeDropdown();
		$data['expense']=$this->expenses_m->getOne($ID);
		$this->load->view('backend_view/edit_expenses',$data);
	}

	public function update_expenses()
	{
		if($this->input->post('btnupdate')=="update")
		{
			$this->expenses_m->update();
			redirect('Backend/show_expenses');	
		}
	}

	public function delete_expenses($ID)
	{
	$this->expenses_m->delete($ID);
		redirect('Backend/show_expenses');	
	}

	// end of expenses	
}
