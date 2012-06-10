<?php
class User extends CI_Controller{
  function __construct() {
    parent::__construct();
  }

  function index(){
    $data['title'] = 'My Simple Accounts -> User -> List.';
    $data['menu'] = 'user';
    $data['content'] = 'sa/user_list';
    $data['users'] = $this->MUsers->get_all_for_admin();
    $this->load->vars($data);
		$this->load->view('sa/dashboard');
  }

  function add(){
    if($this->input->post('email')){
      $this->MUsers->create();
      $this->session->set_flashdata('message', 'User created');
      redirect('sa/user', 'refresh');
    }else{
      $data['title'] = 'My Simple Accounts -> User -> Entry.';
      $data['menu'] = 'user';
      $data['content'] = 'sa/user_entry';
      $data['companies'] = $this->MCompanies->get_all();
      $this->load->vars($data);
      $this->load->view('sa/dashboard');
    }
  }

  function edit($id=0){
    if($this->input->post('email')){
      $this->MUsers->update();
      $this->session->set_flashdata('message', 'User updated');
      redirect('sa/user', 'refresh');
    }else{
      $data['title'] = 'My Simple Accounts -> User -> Edit.';
      $data['menu'] = 'user';
      $data['content'] = 'sa/user_edit';
      $data['user'] = $this->MUsers->get_by_id($id);
      $this->load->vars($data);
      $this->load->view('sa/dashboard');
    }
  }

  function delete(){
    $this->MUsers->delete($this->input->post('id'));
    echo "<h1>User deleted.</h1>";
  }
}
