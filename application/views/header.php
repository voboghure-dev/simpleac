<div id="header">
  <a href="#" class="logo"><img src="<?php echo base_url(); ?>images/logo.png" width="250" height="60" alt="" /></a>
  <ul id="top-navigation">
    <?php
    if($menu == 'home'){
      echo '<li class="active"><span><span>Home</span></span></li>';
    }else{
      echo '<li><span><span><a href="' . base_url() . 'homepage/index">Home</a></span></span></li>';
    }
    if($menu == 'about'){
      echo '<li class="active"><span><span>About Us</span></span></li>';
    }else{
      echo '<li><span><span><a href="' . base_url() . 'homepage/about">About Us</a></span></span></li>';
    }
    if($menu == 'contact'){
      echo '<li class="active"><span><span>Contact Us</span></span></li>';
    }else{
      echo '<li><span><span><a href="' . base_url() . 'homepage/contact">Contact Us</a></span></span></li>';
    }
    if($menu == 'register'){
      echo '<li class="active"><span><span>Register</span></span></li>';
    }
    if($menu == 'complete'){
      echo '<li class="active"><span><span>Complete</span></span></li>';
    }
    ?>
  </ul>
</div>