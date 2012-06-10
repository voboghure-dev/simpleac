<?php

class MLatest_update extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_by_id($id) {
    $data = array();
    $this->db->where('id', $id);
    $q = $this->db->get('latest_update');
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function getAll() {
    $data = array();
    $q = $this->db->get('latest_update');
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function create() {

    $data = array('user_id' => $this->session->userdata('user_id'),
        'title' => $this->input->post('title'),
        'details' => $this->input->post('details'),
        'status' => $this->input->post('status'),
        'update' => date('Y-m-d'),
        'edate' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('latest_update', $data);
  }

  function update() {
    $data = array('user_id' => $this->session->userdata('user_id'),
        'title' => $this->input->post('title'),
        'details' => $this->input->post('details'),
        'status' => $this->input->post('status'),
        'update' => date('Y-m-d'),
        'edate' => date('Y-m-d H:i:s', time())
    );
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('latest_update', $data);
  }

  function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('latest_update');
  }

}
