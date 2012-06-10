<div id="center-column">
  <div class="table">
    <img src="<?=base_url(); ?>images/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="<?=base_url(); ?>images/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <table class="listing form" cellpadding="0" cellspacing="0">
      <tr>
        <th class="full" colspan="4" style="text-align: center;">Income Report</th>
      </tr>
      <tr>
        <th width="160">Date</th>
        <th width="80">Voucher No</th>
        <th>Chart of Account</th>
        <th width="50">Amount</th>
      </tr>
      <?php
        $amount = 0;
        foreach($vouchers as $key=>$value){
      ?>
      <tr class="bg">
        <td class="first"><b><?=$value['edate'];?></b></td>
        <td><?=$value['voucher_no'];?></td>
        <td><?=$value['name_acc'];?></td>
        <td class="last" style="text-align: right;"><?=number_format($value['amount'], 2);?></td>
      </tr>
      <?php
          $amount += $value['amount'];
        }
      ?>
      <tr>
        <td class="first" colspan="3" style="font-size: 14px; font-weight: bold;">Grand Total</td>
        <td class="last" style="text-align: right;"><?=number_format($amount, 2);?></td>
      </tr>
      <tr>
        <td class="full" colspan="4">&nbsp;</td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </div>
</div>