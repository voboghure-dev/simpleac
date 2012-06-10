<div id="center-column">
  <div class="table">
    <img src="<?=base_url(); ?>images/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="<?=base_url(); ?>images/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <?php echo form_open('employee/add'); ?>
    <table class="listing form" cellpadding="0" cellspacing="0">
      <tr>
        <th class="full" colspan="2" style="text-align: center;">New Employee Entry</th>
      </tr>
      <tr>
        <td class="first" width="120"><b>Name</b></td>
        <td class="last"><input type="text" name="name" class="text" /></td>
      </tr>
      <tr class="bg">
        <td class="first" width="120" valign="top"><b>Address</b></td>
        <td class="last"><textarea name="address" style="width: 263px;"></textarea></td>
      </tr>
      <tr>
        <td class="first" width="120" valign="top"><b>Cell No</b></td>
        <td class="last"><input type="text" name="cell_no" class="text" /></td>
      </tr>
      <tr class="bg">
        <td class="first" width="120" valign="top"><b>Date of Join</b></td>
        <td class="last"><input type="text"name="doj" class="text" /> [ yyyy-mm-dd ]</td>
      </tr>
      <tr>
        <td class="first" width="120" valign="top"><b>Date of Birth</b></td>
        <td class="last"><input type="text" name="dob" class="text" /> [ yyyy-mm-dd ]</td>
      </tr>
      <tr class="bg">
        <td class="full" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td class="full" colspan="2" style="text-align: center;">
          <?php echo form_submit('submit', 'Create Employee'); ?>
        </td>
      </tr>
    </table>
    <?php echo form_close(); ?>
    <p>&nbsp;</p>
  </div>
</div>