<?php
class Expenses_types_m extends CI_Model{

	public function getAll()
	{
		return $this->db->get('expense_types')->result();
	}


	public function getOne($ID)
	{
		$this->db->where('ID',$ID);
		return $this->db->get('expense_types')->row();
	}


	public function add()
	{
		$data['Expensetype']=$this->input->post('Expensetype');
		$this->db->insert('expense_types',$data);
		if($this->db->affected_rows())
		{
			return "Record Added Successfully";
		}
	}


	public function update()
	{
		$ID=$this->input->post('ID');
		$data['Expensetype']=$this->input->post('Expensetype');
	
		$this->db->where('ID',$ID);
		$this->db->update('expense_types',$data);

		if ($this->db->affected_rows()>=1) 
		{
			return "Record Update Successfully";
		}

	}


	public function delete($ID)
	{
		$this->db->where('ID',$ID);
		$this->db->delete('expense_types');

		if($this->db->affected_rows()>=1)
		{
			return "Record Deleted Successfully";
		}
	}

}
?>