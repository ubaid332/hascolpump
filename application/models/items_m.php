<?php
class Items_m extends CI_Model{

	public function getAll()
	{
		return $this->db->get('items')->result();
	}


	public function getOne($ID)
	{
		$this->db->where('ID',$ID);
		return $this->db->get('items')->row();
	}


	public function add()
	{
		$data['Name']=$this->input->post('Name');
		$data['PurchaseRate']=$this->input->post('PurchaseRate');
		$data['SaleRate']=$this->input->post('SaleRate');
		$this->db->insert('items',$data);
		if($this->db->affected_rows())
		{
			return "Record Added Successfully";
		}
	}


	public function update()
	{
		$ID=$this->input->post('ID');
		$data['Name']=$this->input->post('Name');
		$data['PurchaseRate']=$this->input->post('PurchaseRate');
		$data['SaleRate']=$this->input->post('SaleRate');
		$this->db->where('ID',$ID);
		$this->db->update('items',$data);

		if ($this->db->affected_rows()>=1) 
		{
			return "Record Update Successfully";
		}

	}


	public function delete($ID)
	{
		$this->db->where('ID',$ID);
		$this->db->delete('items');

		if($this->db->affected_rows()>=1)
		{
			return "Record Deleted Successfully";
		}
	}

}
?>