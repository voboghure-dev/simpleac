<?php
class MVouchers extends CI_Model{
  function __construct() {
    parent::__construct();
  }

  function get_by_id($id){
    $data = array();
    $this->db->where('id', $id);
    $q = $this->db->get('vouchers');
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
    $this->db->where('company_id', $this->session->userdata('company_id'));
    $q = $this->db->get('vouchers');
    if($q->num_rows() > 0){
      foreach($q->result_array() as $row){
        $chart_acc = MChart_acc::get_by_id($row['chart_acc_id']);
        $row['name_acc'] = $chart_acc['name'];
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function get_voucher($type, $sdate, $edate){
    $data = array();
    $this->db->where('company_id', $this->session->userdata('company_id'));
    $this->db->where('type', $type);
    $edate = 'edate BETWEEN "' . $sdate . '" AND "' . $edate .'"';
    $this->db->where($edate, NULL, FALSE);
    //$this->db->where('edate=>', $sdate);
    //$this->db->where('edate=<', $edate);
    $q = $this->db->get('vouchers');
    if($q->num_rows() > 0){
      foreach($q->result_array() as $row){
        $chart_acc = MChart_acc::get_by_id($row['chart_acc_id']);
        $row['name_acc'] = $chart_acc['name'];
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function create(){
    $chart_acc = MChart_acc::get_by_id($this->input->post('chart_acc_id'));

    $data = array('company_id' => $this->session->userdata('company_id'),
                  'user_id' => $this->session->userdata('user_id'),
                  'voucher_no' => $this->input->post('voucher_no'),
                  'chart_acc_id' => $this->input->post('chart_acc_id'),
                  'memo' => $this->input->post('memo'),
                  'amount' => $this->input->post('amount'),
                  'type' => $chart_acc['type'],
                  'edate' => date('Y-m-d H:i:s', time())
                  );
    $this->db->insert('vouchers', $data);
  }

  function update(){
    $data = array('company_id' => $this->session->userdata('company_id'),
                  'user_id' => $this->session->userdata('user_id'),
                  'voucher_no' => $this->input->post('voucher_no'),
                  'chart_acc_id' => $this->input->post('chart_acc_id'),
                  'amount' => $this->input->post('amount'),
                  'type' => $this->input->post('type'),
                  'edate' => date('Y-m-d H:i:s', time())
                  );
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('vouchers', $data);
  }

  function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('vouchers');
  }
}
