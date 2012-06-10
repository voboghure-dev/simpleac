<?php
class Latest_update extends CI_Controller{
  function __construct() {
    parent::__construct();
  }

  function index(){
    $data['title'] = 'My Simple Accounts -> Latest Update -> List.';
    $data['menu'] = 'latest_update';
    $data['content'] = 'sa/latest_update_list';
    $data['updates'] = $this->MLatest_update->getAll();
    $this->load->vars($data);
		$this->load->view('sa/dashboard');
  }

  function add(){
    if($this->input->post('title')){
      $this->MLatest_update->create();
      $this->session->set_flashdata('message', 'Latest Update created');
      redirect('sa/latest_update', 'refresh');
    }else{
      $data['title'] = 'My Simple Accounts -> Update -> Entry.';
      $data['menu'] = 'latest_update';
      $data['content'] = 'sa/latest_update_entry';
      $data['companies'] = $this->MCompanies->getAll();
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
      $data['title'] = 'My Simple Accounts -> User -> Edit.';
      $data['menu'] = 'user';
      $data['content'] = 'sa/latest_update_edit';
      $data['user'] = $this->MUsers->getUser($id);
      $this->load->vars($data);
      $this->load->view('sa/dashboard');
    }
  }

  function delete(){
    $this->MUsers->delete($this->input->post('id'));
    echo "<h1>User deleted.</h1>";
  }
}
