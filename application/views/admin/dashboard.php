<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title><?php echo $title; ?></title>
  <base href="<?php echo base_url(); ?>" />
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <meta name="keywords" content="POS, point of sale, bangladeshi, bangladesh, ERP, accounting, online" />
  <meta name="description" content="Bangladeshi First Ever Online Point of Sale System which best suit for your organization." />
  <link href="css/admin.css" type="text/css" rel="stylesheet" />
  <link href="css/datePicker.css" rel="stylesheet" type="text/css" />
  
  <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
  <script language="javascript" src="js/date_picker/jquery.datePicker.js"></script>
  <script language="javascript" src="js/date_picker/date.js"></script>
  <script type="text/javascript" charset="utf-8">
    $(function(){
      $('.date-pick').datePicker({startDate:'1990/01/01'});
    });
  </script>
</head>
<body>
<div id="main">
	<?php $this->load->view('admin/header'); ?>
	<div id="middle">
		<?php $this->load->view('admin/left'); ?>
		<?php $this->load->view($content); ?>
		<?php $this->load->view('admin/right'); ?>
	</div>
  <?php $this->load->view('admin/footer'); ?>
</div>
</body>
</html>
