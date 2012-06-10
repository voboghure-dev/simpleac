<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <meta name="keywords" content="POS, point of sale, bangladeshi, bangladesh, ERP, accounting, online" />
  <meta name="description" content="Bangladeshi First Ever Online Point of Sale System which best suit for your organization." />
  <link href="<?php echo base_url(); ?>css/admin.css" type="text/css" rel="stylesheet" />
  <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.4.2.min.js"></script>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-20265298-1']);
    _gaq.push(['_setDomainName', '.erponlinebd.com']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</head>
<body onload="initialize()">
<div id="main">
	<?php $this->load->view('header'); ?>
	<div id="middle">
		<?php $this->load->view('left'); ?>
		<?php $this->load->view($content); ?>
		<?php $this->load->view('right'); ?>
	</div>
  <?php $this->load->view('footer'); ?>
</div>
</body>
</html>
