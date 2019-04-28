<?php
class Companies_m extends CI_Model{

	public function getAll()
	{
		return $this->db->get('companies')->result();
	}


	public function getOne($ID)
	{
		$this->db->where('ID',$ID);
		return $this->db->get('companies')->row();
	}


	public function add()
	{
		$data['NAme']=$this->input->post('Name');
		$data['ContactNo']=$this->input->post('ContactNo');
		$data['Address']=$this->input->post('Address');
		
		$this->db->insert('companies',$data);
		if($this->db->affected_rows())
		{
			return "Record Added Successfully";
		}
	}


	public function update()
	{
		$ID=$this->input->post('ID');
		$data['NAme']=$this->input->post('Name');
		$data['ContactNo']=$this->input->post('ContactNo');
		$data['Address']=$this->input->post('Address');
		
		$this->db->where('ID',$ID);
		$this->db->update('companies',$data);

		if ($this->db->affected_rows()>=1) 
		{
			return "Record Update Successfully";
		}

	}


	public function delete($ID)
	{
		$this->db->where('ID',$ID);
		$this->db->delete('companies');

		if($this->db->affected_rows()>=1)
		{
			return "Record Deleted Successfully";
		}
	}

}
?>