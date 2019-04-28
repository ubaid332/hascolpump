<?php
class Users_m extends CI_Model{

	public function getAll()
	{
		$this->db->select('users.*, employees.Name');
		$this->db->from('users');
		$this->db->join('employees','employees.ID=users.EmployeeID');
		return $this->db->get()->result();
	}


	public function getOne($ID)
	{
		$this->db->where('ID',$ID);
		return $this->db->get('users')->row();
	}


	public function add()
	{
		$data['EmployeeID']=$this->input->post('EmployeeID');
		$data['Email']=$this->input->post('Email');
		$data['Password']=$this->input->post('Password');
		$data['Role']=$this->input->post('Role');
		$this->db->insert('users',$data);
		if($this->db->affected_rows())
		{
			return "Record Added Successfully";
		}
	}


	public function update()
	{
		$ID=$this->input->post('ID');
		$data['EmployeeID']=$this->input->post('EmployeeID');
		$data['Email']=$this->input->post('Email');
		$data['Password']=$this->input->post('Password');
		$data['Role']=$this->input->post('Role');
	
		$this->db->where('ID',$ID);
		$this->db->update('users',$data);

		if ($this->db->affected_rows()>=1) 
		{
			return "Record Update Successfully";
		}

	}


	public function delete($ID)
	{
		$this->db->where('ID',$ID);
		$this->db->delete('users');

		if($this->db->affected_rows()>=1)
		{
			return "Record Deleted Successfully";
		}
	}

}
?>