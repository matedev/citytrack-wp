<?php
/*Template Name: admin*/

  get_header();
    $sql = "SELECT * FROM registrations ORDER BY name ASC";
    global $wpdb;
    $results = $wpdb->get_results($sql, OBJECT );
?>

<div id="registrations">
  <div class="table-responsive">     
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>E-mail</th>
          <th>Phone</th>
          <th>Early bird</th>
          <th>Discussion group</th>
          <th>Other</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($results as &$item) {
        echo('<tr data-userid="'.$item->id.'">');
        //echo('<td>'.$item->ID.'</td>');
        echo('<td>'.$item->name.'</td>');
        echo('<td>'.$item->mail.'</td>');
        echo('<td>'.$item->phone.'</td>');
        if($item->reg_date<date("2017-01-23 00:00:00")){
          echo('<td><i class="fa fa-check" aria-hidden="true"></i></td>');
        }else{
          echo('<td><i class="fa fa-check" aria-hidden="true"></i></td>');
        }
        echo '<td><label><input type="checkbox" id="reg-user-group" ';
          if($item->discussion_group>0){
            echo 'checked';
          }
        echo '></label></td>';
        /*if($item->discussion_group>0){
          echo('<td><label><input type="checkbox" id="reg-user-group" checked></label></td>');
        }else{
          echo('<td><label><input type="checkbox" id="reg-user-group"></label></td>');
        }*/
        echo '<td><div><input id="reg-user-other" type="text" class="form-control" value="' . $item->other . '"></div></td>';
        echo('</tr>');
      } ?>
      </tbody>
    </table>
  </div>

  <div class="container">
    <div class="row text-center">
      <button id="table-send" type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-save"><?php echo __("Save", "citytrack"); ?></button>
      <button id="table-dismiss" type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-dissmiss"><?php echo __("Dissmiss", "citytrack"); ?></button>
    </div>
  </div>  
</div>

<!-- Modal -->
<div id="modal-dissmiss" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Warning</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure dissmissing the changes?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary float-left" onClick="window.location.reload()">Yes</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="modal-save" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Warning</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure saving the changes?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary float-left" id="btn-reg-update" onClick="window.location.reload()" data-dismiss="modal">Yes</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
      </div>
    </div>

  </div>
</div>

<div id="modal-wait" class="modal"></div>

</body>
</html>