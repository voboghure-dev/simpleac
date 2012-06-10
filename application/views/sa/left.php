<div id="left-column">
  <?php if($menu == 'company'){ ?>
  <h3>Company Options</h3>
  <ul class="nav">
    <li><a href="<?php echo base_url(); ?>sa/company/add">Company Entry</a></li>
    <li class="last"><a href="<?php echo base_url(); ?>sa/company">Companies List</a></li>
  </ul>
  <?php }elseif($menu == 'user'){ ?>
  <h3>Users Option</h3>
  <ul class="nav">
    <li><a href="<?php echo base_url(); ?>sa/user/add">User Entry</a></li>
    <li class="last"><a href="<?php echo base_url(); ?>sa/user">Users List</a></li>
  </ul>
  <?php }elseif($menu == 'latest_update'){ ?>
  <h3>Latest Update Option</h3>
  <ul class="nav">
    <li><a href="<?php echo base_url(); ?>sa/latest_update/add">Latest Update Entry</a></li>
    <li class="last"><a href="<?php echo base_url(); ?>sa/latest_update">Latest Update List</a></li>
  </ul>
  <?php } ?>
</div>