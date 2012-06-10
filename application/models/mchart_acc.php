<?php

class MChart_acc extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_by_id($id) {
    $data = array();
    $this->db->where('id', $id);
    $q = $this->db->get('chart_acc');
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
    $this->db->order_by('parent_id','asc')->group_by('parent_id,id');
    $q = $this->db->get('chart_acc');
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function create($type) {
    $data = array('company_id' => $this->session->userdata('company_id'),
        'user_id' => $this->session->userdata('user_id'),
        'parent_id' => $this->input->post('parent_id'),
        'name' => $this->input->post('name'),
        'memo' => $this->input->post('memo'),
        'type' => $type,
        'edate' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('chart_acc', $data);
  }

  function update() {
    $data = array('company_id' => $this->session->userdata('company_id'),
        'user_id' => $this->session->userdata('user_id'),
        'parent_id' => $this->input->post('parent_id'),
        'name' => $this->input->post('name'),
        'memo' => $this->input->post('memo'),
        'type' => $this->input->post('type'),
        'edate' => date('Y-m-d H:i:s', time())
    );
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('chart_acc', $data);
  }

  function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('chart_acc');
  }

}
