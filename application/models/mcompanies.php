<?php
class MCompanies extends CI_Model{
  function __construct() {
    parent::__construct();
  }

  function get_by_id($id){
    $data = array();
    $this->db->where('id', $id);
    $q = $this->db->get('company');
    if($q->num_rows() > 0){
      foreach($q->result_array() as $row){
        $data = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function get_all(){
    $data = array();
    $q = $this->db->get('company');
    if($q->num_rows() > 0){
      foreach($q->result_array() as $row){
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function create(){
    $data = array('name' => $this->input->post('name'),
                  'ref_person' => $this->input->post('ref_person'),
                  'email' => $this->input->post('email'),
                  'status' => $this->input->post('status'),
                  'edate' => date('Y-m-d H:i:s', time())
                  );
    $this->db->insert('company', $data);
  }

  function update(){
    $data = array('name' => $this->session->userdata('name'),
                  'ref_person' => $this->session->userdata('ref_person'),
                  'email' => $this->input->post('email'),
                  'status' => $this->input->post('status'),
                  'edate' => date('Y-m-d H:i:s', time())
                  );
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('company', $data);
  }

  function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('company');
  }
}
