<div id="center-column">
  <?php
    if ($this->session->flashdata('message')){
      echo '<div class="top-bar"><h1>'.$this->session->flashdata('message').'</h1></div>';
    }
  ?>

  <div class="table">
    <img src="<?=base_url(); ?>images/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="<?=base_url(); ?>images/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <?php echo form_open('voucher/add'); ?>
    <table class="listing form" cellpadding="0" cellspacing="0">
      <tr>
        <th class="full" colspan="2">New Voucher Posting</th>
      </tr>
      <tr>
        <td class="first" width="120"><strong>Voucher No</strong></td>
        <td class="last"><input type="text" class="text" name="voucher_no" autocomplete="off" /></td>
      </tr>
      <tr class="bg">
        <td class="first" width="120"><strong>Chart of A/C</strong></td>
        <td class="last">
          <select name="chart_acc_id" style="width: 269px;">
            <?php foreach($chart_acc as $key=>$value){ ?>
            <option value="<?=$value['id'];?>"><?=$value['name'];?></option>
            <?php } ?>
          </select>
        </td>
      </tr>
      <tr>
        <td class="first" width="120"><strong>Ref. Employee</strong></td>
        <td class="last">
          <select name="employee_id" style="width: 269px;">
            <?php foreach($employees as $key=>$value){ ?>
            <option value="<?=$value['id'];?>"><?=$value['name'];?></option>
            <?php } ?>
          </select>
        </td>
      </tr>
      <tr class="bg">
        <td class="first" width="120" valign="top"><strong>Memo</strong></td>
        <td class="last"><textarea class="text" name="memo" style="width: 263px;"></textarea></td>
      </tr>
      <tr>
        <td class="first" width="120"><strong>Amount</strong></td>
        <td class="last"><input type="text" class="text" name="amount" /></td>
      </tr>
      <tr class="bg">
        <td class="full" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td class="full" colspan="2" style="text-align: center;">
          <?php echo form_submit('submit', 'Post Voucher'); ?>
        </td>
      </tr>
    </table>
    <?php echo form_close(); ?>
    <p>&nbsp;</p>
  </div>
</div>