<?php
class bank_detail_control extends CI_Controller
{
	function __construct () 
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('Bank_variables');
		$this->load->model('Bank_Model');
	}

	public function index()
    {
       $Bank_Model = new Bank_Model;
      
    
       $this->db->where('deleted IS NULL OR deleted = 0', null, false);
       $query = $this->db->get('bankdetail');
       $data['item'] = $query->result();

       $this->load->view('display_records', $data);
    }

    function create()
    {
        $this->load->view("bankdetails");
    }

	 function savedata() {

		$this->load->library('form_validation');
        $this->form_validation->set_rules('bname', 'Bank Name', 'required');
        $this->form_validation->set_rules('branch', 'Branch', 'required');
        $this->form_validation->set_rules('acnumber', 'Account Number', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            // Form validation failed, show error messages or redirect back to the form
        
           redirect('bank_detail_control/create');
        } else {
            // Validation passed, proceed with saving the data
            $bank_variables = new Bank_variables();
            $bank_Model = new Bank_Model();
    
			$bank_variables->setBankName(htmlspecialchars($this->input->post('bname'))); // Apply XSS filtering with htmlspecialchars()
            $bank_variables->setBranch(htmlspecialchars($this->input->post('branch'))); // Apply XSS filtering with htmlspecialchars()
            $bank_variables->setAccNo(htmlspecialchars($this->input->post('acnumber'))); // Apply XSS filtering with htmlspecialchars()
    
            $bank_Model->saverecords( $bank_variables);
    
           
        }
  
        redirect('bank_detail_control/create');
		
	}
	function edit($id)
    {
        $bank_Model= new Bank_service();
        $data['item'] = $bank_Model->getedit($id);
        $this->load->view("Update_info", $data);
    }
	
   
   function delete($id, $setFlag = true)
   {
	$this->db->set('deleted', 1); 
	$this->db->where('id', $id);
	$this->db->update('bankdetail');



    redirect('bank_detail_control/index');
   }
   
   
}	
?>