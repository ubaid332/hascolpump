<?php
class Customers_m extends CI_Model{

	public function getAll()
	{
		return $this->db->get('customers')->result();
	}


	public function getOne($ID)
	{
		$this->db->where('ID',$ID);
		return $this->db->get('customers')->row();
	}


	public function add()
	{
		$data['NAme']=$this->input->post('Name');
		$data['ContactNo']=$this->input->post('ContactNo');
		$data['Address']=$this->input->post('Address');
		
		$this->db->insert('customers',$data);
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
		$this->db->update('customers',$data);

		if ($this->db->affected_rows()>=1) 
		{
			return "Record Update Successfully";
		}

	}


	public function delete($ID)
	{
		$this->db->where('ID',$ID);
		$this->db->delete('customers');

		if($this->db->affected_rows()>=1)
		{
			return "Record Deleted Successfully";
		}
	}

}
?>