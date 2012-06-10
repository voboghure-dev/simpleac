<?php
class Company extends CI_Controller{
  function __construct() {
    parent::__construct();
  }

  function index(){
    $data['title'] = 'My Simple Accounts -> Company -> List.';
    $data['menu'] = 'company';
    $data['content'] = 'sa/company_list';
    $data['companies'] = $this->MCompanies->get_all();
    $this->load->vars($data);
		$this->load->view('sa/dashboard');
  }

  function add(){
    if($this->input->post('name')){
      $this->MCompanies->create();
      $this->session->set_flashdata('message', 'Company created');
      redirect('sa/company', 'refresh');
    }else{
      $data['title'] = 'My Simple Accounts -> Company -> Entry.';
      $data['menu'] = 'company';
      $data['content'] = 'sa/company_entry';
      $this->load->vars($data);
      $this->load->view('sa/dashboard');
    }
  }

  function edit($id=0){
    if($this->input->post('email')){
      $this->MUsers->updateUser();
      $this->session->set_flashdata('message', 'User updated');
      redirect('user', 'refresh');
    }else{
      $data['title'] = 'My Simple Accounts -> Company -> Edit.';
      $data['menu'] = 'company';
      $data['content'] = 'sa/company_edit';
      $data['user'] = $this->MUsers->getUser($id);
      $this->load->vars($data);
      $this->load->view('sa/dashboard');
    }
  }

  function delete(){
    $this->MCompanies->delete($this->input->post('id'));
    echo "<h1>Company deleted.</h1>";
  }
}
