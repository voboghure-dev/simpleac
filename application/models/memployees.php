<?php

class MEmployees extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_by_id($id) {
    $data = array();
    $this->db->where('id', $id);
    $q = $this->db->get('employee');
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function get_all() {
    $data = array();
    $this->db->where('company_id', $this->session->userdata('company_id'));
    $q = $this->db->get('employee');
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function create() {
    $data = array('name' => $this->input->post('name'),
        'company_id' => $this->session->userdata('company_id'),
        'user_id' => $this->session->userdata('user_id'),
        'address' => $this->input->post('address'),
        'cell_no' => $this->input->post('cell_no'),
        'doj' => $this->input->post('doj'),
        'dob' => $this->input->post('dob'),
        'edate' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('employee', $data);
  }

  function update() {
    $data = array('name' => $this->input->post('name'),
        'company_id' => $this->session->userdata('company_id'),
        'user_id' => $this->session->userdata('user_id'),
        'address' => $this->input->post('address'),
        'cell_no' => $this->input->post('cell_no'),
        'doj' => $this->input->post('doj'),
        'dob' => $this->input->post('dob'),
        'edate' => date('Y-m-d H:i:s', time())
    );
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('employee', $data);
  }

  function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('employee');
  }

}
