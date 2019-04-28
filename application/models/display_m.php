<?php
class Display_m extends CI_Model{

	public function getAll()
	{
		return $this->db->get('displays')->result();
	}


	public function getOne($ID)
	{
		$this->db->where('ID',$ID);
		return $this->db->get('displays')->row();
	}


	public function add()
	{
		$data['side']=$this->input->post('side');
		$data['InitialReading']=$this->input->post('InitialReading');
		
		$this->db->insert('displays',$data);
		if($this->db->affected_rows())
		{
			return "Record Added Successfully";
		}
	}


	public function update()
	{
		$ID=$this->input->post('ID');
		$data['side']=$this->input->post('side');
		$data['InitialReading']=$this->input->post('InitialReading');
		$this->db->where('ID',$ID);
		$this->db->update('displays',$data);

		if ($this->db->affected_rows()>=1) 
		{
			return "Record Update Successfully";
		}

	}


	public function delete($ID)
	{
		$this->db->where('ID',$ID);
		$this->db->delete('displays');

		if($this->db->affected_rows()>=1)
		{
			return "Record Deleted Successfully";
		}
	}

}
?>