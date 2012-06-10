<div id="center-column">
  <div class="table">
    <img src="<?=base_url(); ?>images/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="<?=base_url(); ?>images/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <?php echo form_open('report/income_report'); ?>
    <table class="listing form" cellpadding="0" cellspacing="0">
      <tr>
        <th class="full" colspan="2" style="text-align: center;">Select Date for View Debit/Income Report</th>
      </tr>
      <tr>
        <td class="first" width="120"><strong>Start Date</strong></td>
        <td class="last"><input type="text" name="sdate" class="date-pick" /></td>
      </tr>
      <tr class="bg">
        <td class="first" width="120"><strong>End Date</strong></td>
        <td class="last"><input type="text" name="edate" class="date-pick" /></td>
      </tr>
      <tr>
        <td class="full" colspan="2">&nbsp;</td>
      </tr>
      <tr class="bg">
        <td class="full" colspan="2" style="text-align: center;">
          <?php echo form_submit('submit', 'View Report'); ?>
        </td>
      </tr>
    </table>
    <?php echo form_close(); ?>
    <p>&nbsp;</p>
  </div>
</div>