<div id="center-column">
  <div class="table">
    <img src="<?php echo base_url(); ?>images/bg-th-left.gif" width="8" height="7" alt="" class="left" />
    <img src="<?php echo base_url(); ?>images/bg-th-right.gif" width="7" height="7" alt="" class="right" />
    <table class="listing" cellpadding="0" cellspacing="0">
      <tr>
        <th class="full">&nbsp;</th>
      </tr>
      <tr>
        <td style="text-align: left;">
          <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
              <td width="45%" style="text-align: left; font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; padding-left: 10px;">
                <h3>Registered Office</h3>
                <p>
                  28/A, Nayapaltan <br />
                  Dhaka - 1000<br />
                  Bangladesh<br />
                </p>
                
                <p>
                  Contact Person : Tapan Kumer Das<br />
                  Cell : +88-01973-238664<br />
                  Email : tapan@innovativebd.net<br />
                  Web : <a href="http://www.innovativebd.net/" target="_blank">http://www.innovativebd.net</a>
                </p>
                <br />
                <b>For more query...</b><br /><br />
                <?php echo form_open('homepage/email'); ?>
                Your Name :<br />
                <input type="text" name="name" style="width: 210px;" /><br />
                Email address :<br />
                <input type="text" name="email" style="width: 210px;" /><br />
                Subject to query :<br />
                <input type="text" name="subject" style="width: 210px;" /><br />
                Details query :<br />
                <textarea name="msg" style="width: 210px;"></textarea><br />
                <?php
                  echo form_submit('submit', 'Send mail');
                  echo form_close();
                ?>
              </td>

              <td width="55%">
                <div id="map_canvas" style="width: 300px; height: 519px; margin-left: 10px;"></div>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </div>
</div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
  function initialize() {
    var myLatLng = new google.maps.LatLng(23.731667,90.407639);
    var myOptions = {
      zoom: 17,
      center: myLatLng,
      mapTypeId: google.maps.MapTypeId.SATELLITE
    }

    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    var contentString = '<div style="width: 150px; height: 65px;">'+
        '<p><b>InnovativeBD</b><br />' +
        '8/3 Shegun bagicha <br /> Dhaka - 1000<br />' +
        'Bangladesh</p>' +
        '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'InnovativeBD'
    });
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
    });
  }

</script>