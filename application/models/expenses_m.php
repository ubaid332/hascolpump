<?php
class Expenses_m extends CI_Model{

	public function getAll()
	{
		$this->db->select('expenses.*, employees.Name, expense_types.Expensetype');
		$this->db->from('expenses');
		$this->db->join('expense_types','expense_types.ID=expenses.ExpensetypeID');
		$this->db->join('employees','employees.ID=expenses.EmployeeID');
		return $this->db->get()->result();
	}


	public function getOne($ID)
	{
		$this->db->where('ID',$ID);
		return $this->db->get('expenses')->row();
	}


	public function add()
	{
		$data['Date']=$this->input->post('Date');
		$data['ExpensetypeID']=$this->input->post('ExpensetypeID');
		$data['Amount']=$this->input->post('Amount');
		$data['EmployeeID']=$this->input->post('EmployeeID');
		$this->db->insert('expenses',$data);
		if($this->db->affected_rows())
		{
			return "Record Added Successfully";
		}
	}


	public function update()
	{
		$ID=$this->input->post('ID');
		$data['Date']=$this->input->post('Date');
		$data['ExpensetypeID']=$this->input->post('ExpensetypeID');
		$data['Amount']=$this->input->post('Amount');
		$data['EmployeeID']=$this->input->post('EmployeeID');
	
		$this->db->where('ID',$ID);
		$this->db->update('expenses',$data);

		if ($this->db->affected_rows()>=1) 
		{
			return "Record Update Successfully";
		}

	}


	public function delete($ID)
	{
		$this->db->where('ID',$ID);
		$this->db->delete('expenses');

		if($this->db->affected_rows()>=1)
		{
			return "Record Deleted Successfully";
		}
	}

}
?>