<?php
 require ('config/db.php');

  if(isset($_GET['type'])) {
      $id = $_GET['type'];

      echo '
 <div class="form-group" id="variant">
    <label class="col-lg-4 control-label">Choose Variant :</label>
    <div class="col-lg-6">
            <select class="form-control" id="variant" name="variant">';

      $sql2 = "SELECT * FROM tb_variant where mdl_id = '$id'";
      $query2 = mysqli_query($con, $sql2);

      while ($row2 = mysqli_fetch_array($query2)) {

          echo '
                         <option value="'.$row2['vrnt_id'].'">'.$row2['vrnt_desc'].'</option>
                                                ';

      }

      echo '      </select>
    </div>
    </div>

    <div class="form-group" id="color">
        <label class="col-lg-4 control-label">Choose Color :</label>
        <div class="col-lg-6">
                <select class="form-control" id="color" name="color">';

       $sql3 = "SELECT * FROM tb_colour where mdl_id = '$id'";
       $query3 = mysqli_query($con, $sql3);

      while ($row3 = mysqli_fetch_array($query3)) {

          echo '
                         <option value="'.$row3['clr_id'].'">'.$row3['clr_desc'].'</option>
                                                ';

      }


      echo '          </select>
        </div>
    </div>';
  }


  ?>

