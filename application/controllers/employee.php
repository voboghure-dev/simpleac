<?php
class Employee extends CI_Controller{
  function __construct() {
    parent::__construct();
  }

  function index(){
    $data['title'] = 'My Simple Accounts -> Emplyee -> List.';
    $data['menu'] = 'employee';
    $data['content'] = 'admin/employee_list';
    $data['employees'] = $this->MEmployees->get_all();
    $this->load->vars($data);
		$this->load->view('admin/dashboard');
  }

  function add(){
    if($this->input->post('name')){
      $this->MEmployees->create();
      $this->session->set_flashdata('message', 'Employee Entry');
      redirect('employee', 'refresh');
    }else{
      $data['title'] = 'My Simple Accounts -> Employee -> Entry.';
      $data['menu'] = 'employee';
      $data['content'] = 'admin/employee_entry';
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  function edit($id=0){
    if($this->input->post('id')){
      $this->MEmployees->update();
      $this->session->set_flashdata('message', 'Employee updated');
      redirect('employee', 'refresh');
    }else{
      $data['title'] = 'My Simple Accounts -> Employee -> Edit.';
      $data['menu'] = 'employee';
      $data['content'] = 'admin/employee_edit';
      $data['employee'] = $this->MEmployees->get_by_id($id);
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  function delete(){
    $this->MVouchers->delete($this->input->post('id'));
    echo "<h1>Voucher deleted.</h1>";
  }
}
