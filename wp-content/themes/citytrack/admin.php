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
        echo('<tr>');
        //echo('<td>'.$item->ID.'</td>');
        echo('<td>'.$item->name.'</td>');
        echo('<td>'.$item->mail.'</td>');
        echo('<td>'.$item->phone.'</td>');
        if($item->reg_date<date("2017-01-23 00:00:00")){
          echo('<td><i class="fa fa-check" aria-hidden="true"></i></td>');
        }else{
          echo('<td><i class="fa fa-check" aria-hidden="true"></i></td>');
        }
        echo('<td><label><input type="checkbox" checked></label></td>');
        echo('<td><div>
              <input type="text" class="form-control" id="usr">
            </div></td>');
        echo('</tr>');
      } ?>
      </tbody>
    </table>
  </div>
</div>


</body>
</html>