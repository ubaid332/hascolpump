<?php
class Employess_m extends CI_Model{

	public function getAll()
	{
		return $this->db->get('employees')->result();
	}


	public function getOne($ID)
	{
		$this->db->where('ID',$ID);
		return $this->db->get('employees')->row();
	}


	public function add()
	{
		$data['Name']=$this->input->post('Name');
		$data['Contactno']=$this->input->post('Contactno');
		$data['Joiningdate']=$this->input->post('Joiningdate');
		$data['Leavingdate']=$this->input->post('Leavingdate');
		$data['Reason']=$this->input->post('Reason');
		$data['Etype']=$this->input->post('Etype');
		$data['Status']=$this->input->post('Status');
		$this->db->insert('employees',$data);
		if($this->db->affected_rows())
		{
			return "Record Added Successfully";
		}
	}


	public function update()
	{
		$ID=$this->input->post('ID');
		$data['Name']=$this->input->post('Name');
		$data['Contactno']=$this->input->post('Contactno');
		$data['Joiningdate']=$this->input->post('Joiningdate');
		$data['Leavingdate']=$this->input->post('Leavingdate');
		$data['Reason']=$this->input->post('Reason');
		$data['Etype']=$this->input->post('Etype');
		
		
		$this->db->where('ID',$ID);
		$this->db->update('employees',$data);

		if ($this->db->affected_rows()>=1) 
		{
			return "Record Update Successfully";
		}

	}


	public function delete($ID)
	{
		$this->db->where('ID',$ID);
		$this->db->delete('employees');

		if($this->db->affected_rows()>=1)
		{
			return "Record Deleted Successfully";
		}
	}

}
?>