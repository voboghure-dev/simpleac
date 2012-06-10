<div id="header">
  <a href="#" class="logo"><img src="<?php echo base_url(); ?>images/logo.png" width="180" height="60" alt="" /></a>
  <ul id="top-navigation">
    <?php if($menu == 'company'){ ?>
    <li class="active"><span><span>Company</span></span></li>
    <?php }else{ ?>
    <li><span><span><a href="<?php echo base_url(); ?>sa/company">Company</a></span></span></li>
    <?php } if($menu == 'user'){ ?>
    <li class="active"><span><span>Users</span></span></li>
    <?php }else{ ?>
    <li><span><span><a href="<?php echo base_url(); ?>sa/user">Users</a></span></span></li>
    <?php } if($menu == 'latest_update'){ ?>
    <li class="active"><span><span>Latest Update</span></span></li>
    <?php }else{ ?>
    <li><span><span><a href="<?php echo base_url(); ?>sa/latest_update">Latest Update</a></span></span></li>
    <?php } ?>
    <li><span><span><a href="<?php echo base_url(); ?>homepage/logout">Logout</a></span></span></li>
  </ul>
</div>