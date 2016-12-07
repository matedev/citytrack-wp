<?php
/*Template Name: admin*/

  get_header();

    $sql = "SELECT * FROM registrations ORDER BY name ASC";
    global $wpdb;
    $results = $wpdb->get_results($sql, OBJECT );

?>

<div id="registrations">
  <div class="container">     
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>E-mail</th>
          <th>Phone</th>
          <th>Registration time</th>
          <th>Early bird</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($results as &$item) {
        echo('<tr>');
        //echo('<td>'.$item->ID.'</td>');
        echo('<td>'.$item->name.'</td>');
        echo('<td>'.$item->mail.'</td>');
        echo('<td>'.$item->phone.'</td>');
        echo('<td>'.$item->reg_date.'</td>');
        if($item->reg_date<date("2017-01-23 00:00:00")){
          echo('<td><i class="fa fa-check" aria-hidden="true"></i></td>');
        }else{
          echo('<td><i class="fa fa-check" aria-hidden="true"></i></td>');
        }
        echo('</tr>');
      } ?>
      </tbody>
    </table>
  </div>
</div>


<div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h3 class="modal-title" id="myModalLabel">Törlés!</h3>

            </div>
            <div class="modal-body">
                 <h4> Biztos, hogy törlöd a kiválasztott foglalást?</h4>

            </div>
            <!--/modal-body-collapse -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="btnDelteYes" href="#">Igen</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Nem</button>
            </div>
            <!--/modal-footer-collapse -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

</body>
</html>
<script type="text/javascript">
  
  jQuery( ".btn-print" ).bind( "click", function() {
    window.open("../adatlap.php/?id=" + jQuery(this).closest('tr').data('id'));
  });

  jQuery( ".btn-delete" ).bind( "click", function(e) {
    e.preventDefault();
    var id = jQuery(this).closest('tr').data('id');
    jQuery('#delModal').data('delid', id).modal('show');
  });

  jQuery('#btnDelteYes').click(function () {
    var id = jQuery('#delModal').data('delid');
    window.open("../admin/?delid=" + id, "_self");
  });

</script>