<div id="header">
  <a href="#" class="logo"><img src="images/logo.png" width="180" height="60" alt="" /></a>
  <ul id="top-navigation">
    <?php if($menu == 'voucher'){ ?>
    <li class="active"><span><span>Voucher</span></span></li>
    <?php }else{ ?>
    <li><span><span><a href="voucher/add">Voucher</a></span></span></li>
    <?php } if($menu == 'chart_acc'){ ?>
    <li class="active"><span><span>Chart of A/C</span></span></li>
    <?php }else{ ?>
    <li><span><span><a href="chart_acc/add">Chart of A/C</a></span></span></li>
    <?php } if($menu == 'employee'){ ?>
    <li class="active"><span><span>Employee</span></span></li>
    <?php }else{ ?>
    <li><span><span><a href="employee/add">Employee</a></span></span></li>
    <?php } if($menu == 'report'){ ?>
    <li class="active"><span><span>Report</span></span></li>
    <?php }else{ ?>
    <li><span><span><a href="report">Report</a></span></span></li>
    <?php } if($menu == 'change_pass'){ ?>
    <li class="active"><span><span>Change Password</span></span></li>
    <?php }else{ ?>
    <li><span><span><a href="homepage/change_pass">Change Password</a></span></span></li>
    <?php } ?>
    <li><span><span><a href="homepage/logout">Logout</a></span></span></li>
  </ul>
</div>