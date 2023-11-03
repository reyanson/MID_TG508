<?php

class Account_Model extends CI_Model{

    
    function insertRec($data){
        $this->db->insert('bank_details',$data); //use this for sql injection prevention
    }
   

    function displayRec() {
        $this->db->where('deleted', 0); // Only select records where 'deleted' is 0 (not deleted)
        $query = $this->db->get('bank_details');
        return $query->result();
    }
    

    // function deleteRec($id){
    //     $this->db->where('Bank_id', $id);
    //     $this->db->delete('bank_details');
        

    // }

    function softDeleteRec($id) {
        $data = array('deleted' => 1); // Set 'deleted' to 1
        $this->db->where('id', $id);
        $this->db->update('bank_details', $data);
    }

    public function fetchDeletedData() {
        $this->db->where('deleted', 1);
        $query = $this->db->get('bank_details');
        return $query->result();
    }

    function permDeleteRec($id) {
        $this->db->where('id', $id);
        $this->db->delete('bank_details');
    }
    
    



}







?>