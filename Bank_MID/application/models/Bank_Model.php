<?php
class Bank_Model extends CI_Model
{

  function getall(){

    $this->db->select('*');
    $this->db->from('bankdetail');
    
    $query = $this->db->get();
    return $query->result();
    
  }
	function saverecords($bank_variables)
	{
		$data = array(
      'bname'=> $bank_variables->getBankName(), 'branch'=> $bank_variables->getBranch(), 'acnumber'=> $bank_variables->getAccNo()

    );

  return $this->db->insert('bankdetail',$data);
	}
	
  function getedit($id){
    $this->db->select('*');
    $this->db->from('bankdetail');
    
    $this->db->where('id',$id);

    $query = $this->db->get();
    return $query->result();
  }

  function deleterecords($id)
  {
	  $this->db->where('id',$id);
    return $this->db->delete('bankdetail');
  }
  
  
}