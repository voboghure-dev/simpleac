<?php

class Chart_acc extends CI_Controller {

  function __construct() {
    parent::__construct();
  }

  function index() {
    $data['title'] = 'My Simple Accounts -> Chart of A/C -> List.';
    $data['menu'] = 'chart_acc';
    $data['content'] = 'admin/chart_acc_list';
    $data['chart_acc'] = $this->MChart_acc->get_all();
    $this->load->vars($data);
    $this->load->view('admin/dashboard');
  }

  function add() {
    if ($this->input->post('name')) {
      if ($this->input->post('type') == 'auto') {
        $parent_type = $this->MChart_acc->get_by_id($this->input->post('parent_id'));
        $type = $parent_type['type'];
      } else {
        $type = $this->input->post('type');
      }
      $this->MChart_acc->create($type);
      $this->session->set_flashdata('message', 'Chart of Account created');
      redirect('chart_acc', 'refresh');
    } else {
      $data['title'] = 'My Simple Accounts -> Chart of A/C -> Entry.';
      $data['menu'] = 'chart_acc';
      $data['content'] = 'admin/chart_acc_entry';
      $data['chart_acc'] = $this->MChart_acc->get_all();
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  function edit($id=0) {
    if ($this->input->post('name')) {
      $this->MChart_acc->update();
      $this->session->set_flashdata('message', 'User updated');
      redirect('chart_acc', 'refresh');
    } else {
      $data['title'] = 'My Simple Accounts -> Chart of A/C -> Edit.';
      $data['menu'] = 'chart_acc';
      $data['content'] = 'admin/chart_acc_edit';
      $data['chart_acc'] = $this->MChart_acc->get_by_id($id);
      $this->load->vars($data);
      $this->load->view('admin/dashboard');
    }
  }

  function delete() {
    $this->MChart_acc->delete($this->input->post('id'));
    echo "<h1>Chart of A/C deleted.</h1>";
  }

  function check() {
    $chart = $this->MChart_acc->get_all();
    print_r($chart);
    $tree = Chart_acc::getCategoryMenu($chart);
    echo $tree;
    //$tree = mapTree($chart);
    //display_tree($tree);
  }

  function getCategoryMenu($category, $parent=0) {
    static $i = 1;
    if (array_key_exists($parent, $category)) {
      $menu = '<ul>';
      $i++;
      foreach ($category[$parent] as $r) {
        $child = Chart_acc::getCategoryMenu($category, $r->id);

        $menu .= '<li id="' . $parent . '">';
        $menu .= '<a href="#">' . $r->name . '</a>';
        if ($child) {
          $i--;
          $menu .= $child;
        }
        $menu .= '</li>';
      }
      $menu .= '</ul>';
      return $menu;
    } else {
      return false;
    }
  }

}
