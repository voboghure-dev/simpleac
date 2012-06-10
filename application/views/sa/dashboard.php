<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <meta name="keywords" content="POS, point of sale, bangladeshi, bangladesh, ERP, accounting, online" />
  <meta name="description" content="Bangladeshi First Ever Online Point of Sale System which best suit for your organization." />
  <link href="<?php echo base_url(); ?>css/admin.css" type="text/css" rel="stylesheet" />
  <link href="<?php echo base_url();?>css/datePicker.css" rel="stylesheet" type="text/css" />
  
  <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.4.2.min.js"></script>
  <script language="javascript" src="<?php echo base_url(); ?>js/date_picker/jquery.datePicker.js"></script>
  <script language="javascript" src="<?php echo base_url(); ?>js/date_picker/date.js"></script>
  <script type="text/javascript" charset="utf-8">
    $(function(){
      $('.date-pick').datePicker({startDate:'1990/01/01'});
    });
  </script>
</head>
<body>
<div id="main">
	<?php $this->load->view('sa/header'); ?>
	<div id="middle">
		<?php $this->load->view('sa/left'); ?>
		<?php $this->load->view($content); ?>
		<?php $this->load->view('sa/right'); ?>
	</div>
  <?php $this->load->view('sa/footer'); ?>
</div>
</body>
</html>
