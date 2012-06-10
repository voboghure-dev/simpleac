<div id="center-column">
  <?php
    if ($this->session->flashdata('message')){
      echo '<div class="top-bar"><h1>'.$this->session->flashdata('message').'</h1></div>';
    }
  ?>
  
  <div class="table">
    <img src="<?php echo base_url(); ?>images/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="<?php echo base_url(); ?>images/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <?php echo form_open('sa/user/add'); ?>
    <table class="listing form" cellpadding="0" cellspacing="0">
      <tr>
        <th class="full" colspan="2">New User Entry</th>
      </tr>
      <tr>
        <td class="first" width="120"><strong>Full Name</strong></td>
        <td class="last"><input type="text" class="text" name="fname" autocomplete="off" /></td>
      </tr>
      <tr class="bg">
        <td class="first"><strong>Email Address</strong></td>
        <td class="last"><input type="text" class="text" name="email" autocomplete="off" /></td>
      </tr>
      <tr>
        <td class="first" width="120"><strong>Password</strong></td>
        <td class="last"><input type="password" class="text" name="password" autocomplete="off" /></td>
      </tr>
      <tr class="bg">
        <td class="first"><strong>Re-enter Password</strong></td>
        <td class="last"><input type="password" class="text" name="repassword" autocomplete="off" /></td>
      </tr>
      <?php $width = 'style="width: 270px;"'; ?>
      <tr>
        <td class="first"><strong>Ref. Company</strong></td>
        <td class="last">
          <select name="company_id" <?=$width;?>>
            <?php foreach($companies as $key=>$value){ ?>
            <option value="<?php echo $value['id'];?>"><?php echo $value['name'];?></option>
            <?php } ?>
          </select>
        </td>
      </tr>
      <tr class="bg">
        <td class="first" width="120"><strong>User Type</strong></td>
        <td class="last">
        <?php
          $options = array('user' => 'user', 'sa' => 'super admin');
          echo form_dropdown('type', $options, '', $width) ."</p>";
        ?>
        </td>
      </tr>
      <tr>
        <td class="first"><strong>Status</strong></td>
        <td class="last">
        <?php
          $options = array('active' => 'active', 'inactive' => 'inactive');
          echo form_dropdown('status',$options, '', $width) ."</p>";
        ?>
        </td>
      </tr>
      <tr class="bg">
        <td class="full" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td class="full" colspan="2" style="text-align: center;">
          <?php echo form_submit('submit', 'Create User'); ?>
        </td>
      </tr>
    </table>
    <?php echo form_close(); ?>
    <p>&nbsp;</p>
  </div>
</div>