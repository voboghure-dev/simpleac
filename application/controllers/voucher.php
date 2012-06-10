<?php

class Voucher extends CI_Controller {

  function __construct() {
    parent::__construct();
  }

  function index() {
    $data['title'] = 'My Simple Accounts -> Voucher -> List.';
    $data['menu'] = 'voucher';
    $data['content'] = 'admin/voucher_list';
    $data['voucher'] = $this->MVouchers->get_all();
    $this->load->vars($data);
    $this->load->view('admin/dashboard');
  }

  function add() {
    if ($this->input->post('voucher_no')) {
      $this->MVouchers->create();
      $this->session->set_flashdata('message', 'Voucher Posted');
      redirect('voucher', 'refresh');
    } else {
      $data['title'] = 'My Simple Accounts -> Voucher -> Posting.';
      $data['menu'] = 'voucher';
      $data['content'] = 'admin/voucher_entry';
      $data['chart_acc'] = $this->MChart_acc->get_all();
      $data['employees'] = $this->MEmployees->get_all();
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  function edit($id=0) {
    if ($this->input->post('email')) {
      $this->MUsers->update();
      $this->session->set_flashdata('message', 'User updated');
      redirect('user', 'refresh');
    } else {
      $data['title'] = 'My Simple Accounts -> Voucher -> Edit.';
      $data['menu'] = 'voucher';
      $data['content'] = 'admin/voucher_edit';
      $data['user'] = $this->MUsers->get_by_id($id);
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  function delete() {
    $this->MVouchers->delete($this->input->post('id'));
    echo "<h1>Voucher deleted.</h1>";
  }

}
