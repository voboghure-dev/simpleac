<?php

class MUsers extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function verify($email, $pw) {
    $this->db->where('email', $email);
    $this->db->where('password', $pw);
    $this->db->where('status', 'active');
    $this->db->limit(1);
    $q = $this->db->get('users');
    if ($q->num_rows() > 0) {
      $row = $q->row_array();
      $data['user_id'] = $row['id'];
      $data['company_id'] = $row['company_id'];
      $data['user_type'] = $row['type'];
      $this->session->set_userdata($data);
    } else {
      $this->session->set_flashdata('error', 'Sorry, your username or password is incorrect!');
    }
  }

  function get_by_id($id) {
    $data = array();
    $this->db->where('id', $id);
    $this->db->limit(1);
    $q = $this->db->get('users');
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function get_by_email($email) {
    $data = array();
    $this->db->select('id, email, status, password');
    $this->db->where('email', $email);
    $this->db->limit(1);
    $q = $this->db->get('users');
    if ($q->num_rows() > 0) {
      $data = $q->row_array();
    }

    $q->free_result();
    return $data;
  }

  function get_all() {
    $data = array();
    $this->db->where('company_id', $this->session->userdata('company_id'));
    $q = $this->db->get('users');
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function get_all_for_admin() {
    $data = array();
    $q = $this->db->get('users');
    if ($q->num_rows() > 0) {
      foreach ($q->result_array() as $row) {
        $data[] = $row;
      }
    }

    $q->free_result();
    return $data;
  }

  function create() {
    $data = array('company_id' => $this->input->post('company_id'),
        'user_id' => $this->session->userdata('user_id'),
        'email' => $this->input->post('email'),
        'password' => substr(do_hash($this->input->post('password')), 0, 16),
        'fname' => $this->input->post('fname'),
        'type' => $this->input->post('type'),
        'status' => $this->input->post('status'),
        'edate' => date('Y-m-d H:i:s', time())
    );
    $this->db->insert('users', $data);
  }

  function update() {
    if ($_POST['password']) {
      $data = array('user_id' => $this->session->userdata('user_id'),
          'email' => $_POST['email'],
          'password' => substr(do_hash($_POST['password']), 0, 16),
          'fname' => $_POST['fname'],
          'type' => $_POST['type'],
          'status' => $_POST['status'],
          'edate' => date('Y-m-d H:i:s', time())
      );
    } else {
      $data = array('user_id' => $this->session->userdata('user_id'),
          'email' => $_POST['email'],
          'fname' => $_POST['fname'],
          'type' => $_POST['type'],
          'status' => $_POST['status'],
          'edate' => date('Y-m-d H:i:s', time())
      );
    }

    $this->db->where('id', $_POST['id']);
    $this->db->update('users', $data);
  }

  function delete($id) {
    $this->db->where('id', $id);
    $this->db->delete('users');
  }

  function register() {
    $data = array('company' => $_POST['company'],
        'edate' => date('Y-m-d')
    );
    $this->db->insert('company', $data);
    $company_id = $this->db->insert_id();

    $data = array('email' => $_POST['email'],
        'company_id' => $company_id,
        'password' => substr(dohash($_POST['password']), 0, 16),
        'fname' => $_POST['fname'],
        'type' => 'admin',
        'status' => 'inactive',
        'code' => dohash($_POST['fname']),
        'edate' => date('Y-m-d')
    );
    $this->db->insert('users', $data);
    $user_id = $this->db->insert_id();
    $mail = array('id' => $user_id, 'code' => dohash($_POST['fname']));

    return $mail;
  }

  function active($id) {
    $data = array('status' => 'active',
        'code' => ''
    );
    $this->db->where('id', $id);
    $this->db->update('users', $data);
  }

}