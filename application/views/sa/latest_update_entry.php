<div id="center-column">
  <div class="table">
    <img src="<?php echo base_url(); ?>images/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="<?php echo base_url(); ?>images/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <?php echo form_open('sa/latest_update/add'); ?>
    <table class="listing form" cellpadding="0" cellspacing="0">
      <tr>
        <th class="full" colspan="2" style="text-align: center;">Latest Update Entry</th>
      </tr>
      <tr>
        <td class="first" width="120"><strong>Title</strong></td>
        <td class="last"><input type="text" class="text" name="title" /></td>
      </tr>
      <tr class="bg">
        <td class="first" valign="top"><strong>Description</strong></td>
        <td class="last"><textarea name="description" style="width: 263px; height: 100px;"></textarea></td>
      </tr>
      <?php $width = 'style="width: 270px;"'; ?>
      <tr>
        <td class="first"><strong>Status</strong></td>
        <td class="last">
        <?php
          $options = array('active' => 'active', 'inactive' => 'inactive');
          echo form_dropdown('status',$options, '', $width);
        ?>
        </td>
      </tr>
      <tr>
        <td class="full" colspan="2">&nbsp;</td>
      </tr>
      <tr class="bg">
        <td class="full" colspan="2" style="text-align: center;">
          <?php echo form_submit('submit', 'Create Update'); ?>
        </td>
      </tr>
    </table>
    <?php echo form_close(); ?>
    <p>&nbsp;</p>
  </div>
</div>