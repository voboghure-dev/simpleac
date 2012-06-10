<?php
class Report extends CI_Controller{
  function __construct() {
    parent::__construct();
  }

  function index(){
    $data['title'] = 'My Simple Accounts -> Report -> Home.';
    $data['menu'] = 'report';
    $data['content'] = 'admin/report_home';
    $this->load->vars($data);
    $this->load->view('admin/dashboard');
  }

  function income_report(){
    if($this->input->post('sdate')){
      $data['title'] = 'My Simple Accounts -> Report -> Debit/Income.';
      $data['menu'] = 'report';
      $data['vouchers'] = $this->MVouchers->get_voucher('debit', $this->input->post('sdate'), $this->input->post('edate'));
      $data['content'] = 'admin/report_income_view';
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }else{
      $data['title'] = 'My Simple Accounts -> Report -> Debit/Income.';
      $data['menu'] = 'report';
      $data['content'] = 'admin/report_income';
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  function expense_report(){
    if($this->input->post('sdate')){
      $data['title'] = 'My Simple Accounts -> Report -> Credit/Expense.';
      $data['menu'] = 'report';
      $data['vouchers'] = $this->MVouchers->get_voucher('credit', $this->input->post('sdate'), $this->input->post('edate'));
      $data['content'] = 'admin/report_income_view';
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }else{
      $data['title'] = 'My Simple Accounts -> Report -> Credit/Expense.';
      $data['menu'] = 'report';
      $data['content'] = 'admin/report_expense';
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  function profit_loss(){
    $data['title'] = 'My Simple Accounts -> Report -> Profit and Loss.';
    $data['menu'] = 'report';
    $data['content'] = 'admin/report_expense';
    $this->load->vars($data);
    $this->load->view('admin/dashboard');
  }
}