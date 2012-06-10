<div id="center-column">
  <div class="table">
    <img src="<?=base_url(); ?>images/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="<?=base_url(); ?>images/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <?php echo form_open('homepage/change_pass'); ?>
    <table class="listing form" cellpadding="0" cellspacing="0">
      <tr>
        <th class="full" colspan="2">Change Password</th>
      </tr>
      <tr>
        <td class="first" width="120"><strong>Current Password</strong></td>
        <td class="last"><input type="password" class="text" name="current_pass" autocomplete="off" /></td>
      </tr>
      <tr class="bg">
        <td class="first" width="120" valign="top"><strong>New Password</strong></td>
        <td class="last"><input type="password" class="text" name="new_pass" autocomplete="off" /></td>
      </tr>
      <tr>
        <td class="first" width="120"><strong>Confirm Password</strong></td>
        <td class="last"><input type="password" class="text" name="confirm_pass" autocomplete="off" /></td>
      </tr>
      <tr class="bg">
        <td class="full" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td class="full" colspan="2" style="text-align: center;">
          <?php echo form_submit('submit', 'Change Password'); ?>
        </td>
      </tr>
    </table>
    <?php echo form_close(); ?>
    <p>&nbsp;</p>
  </div>
</div>