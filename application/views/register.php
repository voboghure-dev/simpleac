<div id="center-column">
  <?php
    if($this->session->flashdata('message')){
      echo "<div class='select-bar'><h3>";
      echo $this->session->flashdata('message');
      echo "</h3></div>";
    }
  ?>
  <div class="table">
    <img src="<?=base_url(); ?>images/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="<?=base_url(); ?>images/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <?=form_open('homepage/register');?>
    <table class="listing form" cellpadding="0" cellspacing="0">
      <tr>
        <th class="full" colspan="2">Member's Registration</th>
      </tr>
      <tr>
        <td class="first"><strong>Email Address</strong></td>
        <td class="last"><?=form_error('email'); ?><input type="text" class="text" name="email" value="<?=set_value('email'); ?>" autocomplete="off" /></td>
      </tr>
      <tr class="bg">
        <td class="first"><strong>Full Name</strong></td>
        <td class="last"><?=form_error('fname'); ?><input type="text" class="text" name="fname" value="<?=set_value('fname'); ?>" autocomplete="off" /></td>
      </tr>
      <tr>
        <td class="first" width="172"><strong>Name of the company</strong></td>
        <td class="last"><input type="text" class="text" name="company" value="<?=set_value('company'); ?>" autocomplete="off" /></td>
      </tr>
      <tr class="bg">
        <td class="first"><strong>Password</strong></td>
        <td class="last"><?=form_error('password'); ?><input type="password" class="text" name="password" value="<?=set_value('password'); ?>" autocomplete="off" /></td>
      </tr>
      <tr>
        <td class="first" width="172"><strong>Re Enter Password</strong></td>
        <td class="last"><?=form_error('repassword'); ?><input type="password" class="text" name="repassword" value="<?=set_value('repassword'); ?>" autocomplete="off" /></td>
      </tr>
      <tr class="bg">
        <td class="full" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td class="full" colspan="2">
          <?=form_submit('submit', 'Register'); ?>
        </td>
      </tr>
      <?=form_close(); ?>
    </table>
      <p>&nbsp;</p>
  </div>
</div>