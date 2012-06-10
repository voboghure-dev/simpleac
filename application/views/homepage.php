<div id="center-column">
  <?php
    if($this->session->flashdata('error')){
      echo "<div class='select-bar'><h3>";
      echo $this->session->flashdata('error');
      echo "</h3></div>";
    }
  ?>
  <div class="table">
    <img src="<?php echo base_url(); ?>images/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="<?php echo base_url(); ?>images/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <table class="listing" cellpadding="0" cellspacing="0">
      <tr>
        <th class="full">&nbsp;</th>
      </tr>
      <tr>
        <td style="text-align: justify; font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif;">
          At <b>InnovativeBD</b> we realize your company is unique and that your accounting
          system requires an equally individual quality to meet your needs. <b>InnovativeBD</b> was
          incorporated in 2008 to serve that specific need. We focus our attention in the pursuit
          of developing the custom accounting solutions for clients' individual needs, and we do it well.
          <br /><br />
          <b>Developed Applications:</b>
          <ul>
            <li>Point of Sale (POS)</li>
            <li>Sales Distribution</li>
            <li>Simple Accounts</li>
            <li>Financial Accounts</li>
            <li>Commercial Management System</li>
          </ul>
          <div style="width: 100%; height: 309px;">&nbsp;</div>
        </td>
      </tr>
    </table>
  </div>
</div>