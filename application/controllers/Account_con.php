<?php

class Account_con extends CI_Controller{

    public function __construct(){
        parent:: __construct();

        $this->load->database();
        $this->load->model('Account_Model');
        $this->load->helper('url');
        $this->load->view('Nav_View');


    }

    public function index(){
       
        $this->load->view('Home_View');
    }
    

   
    public function insertData(){
        $this->load->helper("form");
        $this->load->library('form_validation');

        $this->form_validation->set_rules("bname","Bank Name","required|max_length[50]|alpha"); // the name column varchar(50)
        $this->form_validation->set_rules("branch","Branch Name","required|max_length[50]|alpha");// the branch column varchar(50)
        $this->form_validation->set_rules("accnum","Account Number","required|numeric|max_length[20]|integer"); // the account number column bigint(20)

        if($this->form_validation->run() === true){
            $data = array(
                
                'name' => $this->input->post('bname',true), //XSS prevention code
                'branch' => $this->input->post('branch',true),
                'account' => $this->input->post('accnum',true)
            );

            $this->Account_Model->insertRec($data);
            redirect('Account_con/insertData');
        }else{
            $this->load->view('Account_View');
        }
       
    }



    public function displayData(){
        
        $data['bank_details'] = $this->Account_Model->displayRec();
        $this->load->view('Display_View',$data);
    }


    // public function deleteData(){
        
    //     // $this->Account_Model->deleteRec($id);
    //     // $this->load->helper('url');
    //     // redirect('/Account_con/displayData');

    //     $id=$this->input->get('id');
    //     $this->Account_Model->deleteRec($id);
    //     redirect('Account_con/displayData');
    // }

    public function deleteData() {
        $id=$this->input->get('id');
        // Mark the record as deleted by setting the 'deleted' flag to 1
        $this->Account_Model->softDeleteRec($id);
        redirect('Account_con/displayData');
    }

    public function deletedData() {
        // Fetch deleted data from the model
        $data['deleted_details'] = $this->Account_Model->fetchDeletedData();
        
        // Load the "deleted" view to display the data
        $this->load->view('Deleted_View', $data);
    }

    public function permDeleteData() {
        $id = $this->input->get('id');
        $this->Account_Model->permDeleteRec($id);
        redirect('Account_con/deletedData'); // Redirect to the Deleted Data view
    }
    
    







}
?>






















































