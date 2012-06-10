<div id="left-column">
  <?php if($menu == 'voucher'){ ?>
  <h3>Voucher Option</h3>
  <ul class="nav">
    <li><a href="<?=base_url();?>voucher/add">Voucher Posting</a></li>
    <li class="last"><a href="<?=base_url();?>voucher">Vouchers List</a></li>
  </ul>
  <?php }elseif($menu == 'chart_acc'){ ?>
  <h3>Chart of A/C Option</h3>
  <ul class="nav">
    <li><a href="<?=base_url();?>chart_acc/add">Chart of A/C Entry</a></li>
    <li class="last"><a href="<?=base_url();?>chart_acc">Chart of A/C List</a></li>
  </ul>
  <?php }elseif($menu == 'employee'){ ?>
  <h3>Employee Option</h3>
  <ul class="nav">
    <li><a href="<?=base_url();?>employee/add">Employee Entry</a></li>
    <li class="last"><a href="<?=base_url();?>employee">Employee List</a></li>
  </ul>
  <?php }elseif($menu == 'report'){ ?>
  <h3>Reports Option</h3>
  <ul class="nav">
    <li><a href="<?=base_url();?>report/income_report">Debit/Income</a></li>
    <li><a href="<?=base_url();?>report/expense_report">Credit/Expense</a></li>
    <li class="last"><a href="<?=base_url();?>report/profit_loss">Profit and Loss</a></li>
  </ul>
  <?php }elseif($menu == 'change_pass'){ ?>
  <h3>Change Password Option</h3>
  <ul class="nav">
    <li class="last">&nbsp;</li>
  </ul>
  <?php } ?>
</div>