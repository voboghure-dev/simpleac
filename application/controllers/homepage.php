<?php

class Homepage extends CI_Controller {

  function __construct() {
    parent::__construct();
  }

  function index() {
    $data['title'] = 'Welcome to Simple Accounting System';
    $data['menu'] = 'home';
    $data['content'] = 'homepage';
    $this->load->vars($data);
    $this->load->view('template');
  }

  function login() {
    if ($this->input->post('email')) {
      $this->form_validation->set_rules('email', 'Username', 'trim|required|valid_email|xss_clean');
      $this->form_validation->set_rules('password', 'Password', 'required');

      if ($this->form_validation->run() == TRUE) {
        $email = $this->input->post('email');
        $pw = substr(do_hash($this->input->post('password')), 0, 16);
        $this->MUsers->verify($email, $pw);

        if ($this->session->userdata('user_type') == 'sa') {
          redirect('sa/company', 'refresh');
        } elseif ($this->session->userdata('user_type') == 'user') {
          redirect('voucher', 'refresh');
        } else {
          redirect('homepage', 'refresh');
        }
      } else {
        $data['title'] = 'Welcome to Simple Accounting System';
        $data['menu'] = 'home';
        $data['content'] = 'homepage';
        $this->load->vars($data);
        $this->load->view('template');
      }
    } else {
      $data['title'] = 'Welcome to Simple Accounting System';
      $data['menu'] = 'home';
      $data['content'] = 'homepage';
      $this->load->vars($data);
      $this->load->view('template');
    }
  }

  function logout() {
    $data = array();
    $data['user_id'] = $this->session->userdata('user_id');
    $data['company_id'] = $this->session->userdata('company_id');
    $this->session->unset_userdata($data);

    $this->session->set_flashdata('error', "Successfully loged out!");
    redirect('homepage/index', 'refresh');
  }

  function change_pass() {
    $data['title'] = 'Welcome to Simple Accounting System';
    $data['menu'] = 'change_pass';
    $data['content'] = 'admin/change_pass';
    $this->load->vars($data);
    $this->load->view('admin/dashboard');
  }

  function latest_update() {
    $data['title'] = 'About Us';
    $data['menu'] = 'latest_update';
    $data['content'] = 'latest_update';
    $this->load->vars($data);
    $this->load->view('template');
  }

  function contact() {
    $data['title'] = 'Contact Us';
    $data['menu'] = 'contact';
    $data['content'] = 'contact';
    $this->load->vars($data);
    $this->load->view('template');
  }

  function _unique_email($email) {
    if ($this->MUsers->getUserByEmail($email) == TRUE) {
      $this->form_validation->set_message('_unique_email', 'Duplicate email address, if you already registered please login.');
      return FALSE;
    } else {
      return TRUE;
    }
  }

  function register() {
    if ($this->input->post('email')) {

      $this->form_validation->set_rules('fname', 'User Name', 'required');
      $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|xss_clean|callback__unique_email');
      $this->form_validation->set_rules('company', 'Company Name', 'xss_clean');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('repassword', 'Re Password', 'required');

      $this->form_validation->set_error_delimiters('<div class="form_error">', '</div>');
      if ($this->form_validation->run() == TRUE) {
        $activation = $this->MUsers->registerUser();
        /* Start Sending Mail to the user email address
          $this->email->from('info@posbd.com', 'POSBD');
          $this->email->to($this->input->post('email'));
          $this->email->subject('Activation Link');
          $msg = 'Dear ' . $this->input->post('fname') . "\r\n";
          $msg .= 'Here is your account activation link for www.posbd.com' . "\r\n";
          $msg .= 'Please click the following link to active your account.' . "\r\n";
          $msg .= 'www.posbd.com/homepage/activeuser/'.$activation['id'].'/'.$activation['code']."\r\n";
          $msg .= 'with regards'."\r\n".'POSBD TEAM';
          $this->email->message($msg);
          $this->email->send();
         *///End sending mail
        $this->session->set_flashdata('message', 'Registration complete, please check your email for activation link.');
        redirect('homepage/register', 'refresh');
      } else {
        $data['title'] = 'Welcome to Simple Accounting System';
        $data['menu'] = 'register';
        $data['content'] = 'register';
        $this->load->vars($data);
        $this->load->view('template');
      }
    } else {
      $data['title'] = 'Welcome to Simple Accounting System';
      $data['menu'] = 'register';
      $data['content'] = 'register';
      $this->load->vars($data);
      $this->load->view('template');
    }
  }

  function activeuser($id, $code) {
    $data = $this->MUsers->getUser($id);
    if ($data) {
      if ($data['code'] != '') {
        $this->MUsers->activeUser($id);
        $this->session->set_flashdata('message', 'Your account successfully activated. Please Sign In');
        redirect('homepage/register', 'refresh');
      } else {
        $this->session->set_flashdata('message', 'Your account already activated. Please Sign In');
        redirect('homepage/register', 'refresh');
      }
    } else {
      $this->session->set_flashdata('message', 'No such user found. Please register for free.');
      redirect('homepage/register', 'refresh');
    }
  }

  function complete() {
    $data['title'] = 'Welcome to Simple Accounting System';
    $data['menu'] = 'complete';
    $data['content'] = 'complete';
    $this->load->vars($data);
    $this->load->view('template');
  }

}