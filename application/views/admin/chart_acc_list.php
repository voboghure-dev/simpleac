<div id="center-column">
  <?php
    if ($this->session->flashdata('message')){
      echo '<div class="top-bar"><h1>'.$this->session->flashdata('message').'</h1></div>';
    }
  ?>
  <div class="top-bar"></div>

  <div class="table">
    <img src="<?=base_url(); ?>images/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="<?=base_url(); ?>images/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <table class="listing" cellpadding="0" cellspacing="0">
      <tr>
        <th class="first" width="177">Name of A/C</th>
        <th>Type of A/C</th>
        <th>Date of Entry</th>
        <th class="last" colspan="2">Action</th>
      </tr>
      <?php
        $i = 0;
        foreach($chart_acc as $key=>$value){
      ?>
      <tr <?php if($i==1){echo 'class="bg"';} ?>>
        <td class="first style1"><?=$value['name']; ?></td>
        <td><?=$value['type']; ?></td>
        <td><?=$value['edate']; ?></td>
        <td><a href="<?=base_url(); ?>chart_acc/edit/<?=$value['id']; ?>"><img src="<?=base_url(); ?>images/edit-icon.gif" width="16" height="16" alt="edit" /></a></td>
        <td class="last"><input type="hidden" value="<?=$value['id']; ?>" /><img src="<?=base_url(); ?>images/hr.gif" width="16" height="16" class="delete" alt="delete" style="cursor: pointer;" /></td>
      </tr>
      <?php
          if($i==0){$i=1;}else{$i=0;}
        }
      ?>
    </table>
    <div class="select">
      
    </div>
  </div>
</div>
<script type="text/javascript">
  $(function(){
    $('.delete').click(function(){
      $(this).parent().parent().fadeTo(400, 0, function () {
        $(this).remove();
      });
      $.ajax({
         type: "POST",
         url: "<?=base_url(); ?>chart_acc/delete",
         data: "id="+$(this).prev().val(),
         success: function(html){
             $(".top-bar").html(html);
             }
      });

      return false
    });
  });
</script>