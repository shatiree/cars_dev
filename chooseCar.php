
        <div class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                    <h3 class="panel-title grey-text">Choose Car</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form class="form-horizontal" method="POST" action="index.php?page=chooseCar">
                        <div class="col-md-12">
                            <input type="hidden" name="custid" value="<?php echo $_GET['id']; ?>">
                            <?php
                               $id = $_GET['id'];
                               $sqlname = "SELECT * FROM tb_cust_info WHERE cust_id = $id";

                               $queryname = mysqli_query($con, $sqlname);

                               $resultname = mysqli_fetch_array($queryname);

                               $name = $resultname['cust_name'];
                               $ic = $resultname['cust_ic'];

                               echo '
                                 <div class="row">
                                   <div class="col-md-6">
                                   <div class="well"  style="padding-bottom: 10px">
                                      <p><b>Name :</b> '.$name.'</p>
                                   </div>
                                   </div>
                                   <div class="col-md-6">
                                   <div class="well" style="padding-bottom: 10px"> 
                                      <p><b>Identification Number :</b> '.$ic.'</p>
                                   </div>
                                   </div>  
                                 </div>
                               
                               
                               
                               ';

                            ?>
                                <div class="well">
                                  <div class="form-group">
                                    <label class="col-lg-4 control-label">Choose Type :</label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="type" name='type' onchange="showcv(this.value)">
                                            <option value="Car">Choose Car Type</option>
                                            <?php
                                              include ('config/db.php');

                                              $sql = "SELECT * FROM tb_model";
                                              $query = mysqli_query($con, $sql);

                                              while($row = mysqli_fetch_array($query)){

                                                  echo'
                                                    <option value="'.$row['mdl_id'].'">'.$row['mdl_desc'].'</option>
                                                  ';

                                              }

                                            ?>
                                        </select>
                                    </div>
                                   </div>


                                  <div id="cv">

                                  </div>

                                 </div>
                        </div>


                                    <div class="form-group" style="margin-top: 20px" align="center">
                                          <input class="btn btn-danger" type="reset" name="reset" value="Reset">
                                          <input class="btn btn-primary" type="submit" name="book" value="Book">
                                    </div>
                        </form>
                        <div class="col-lg-12">
                                <button class="btn btn-default" id="back">Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php
   if(isset($_POST['book'])){
       $id = $_POST['custid'];
       $model_id = $_POST['type'];
       $variant_id = $_POST['variant'];
       $color_id = $_POST['color'];
       $sql1 = "SELECT prc_id FROM tb_price WHERE vrnt_id = '$variant_id'";

       $result = mysqli_query($con, $sql1);

       $row = mysqli_fetch_array($result);
       $prc_id = $row['prc_id'];

       $sql = "INSERT INTO `tb_book_form` (`bf_id`, `bf_cust_id`, `bf_model_id`, 
                                           `bf_variant_id`, `bf_colour_id`, `bf_prc_id`) 
               VALUES (NULL, '$id', '$model_id', '$variant_id', 
                        '$color_id', '$prc_id')";

       $query = mysqli_query($con, $sql);
       $book_id = mysqli_insert_id($con);

       if($query){
           echo '<script> location.href=\'index.php?page=bookingForm&id=\'+'.$book_id.'</script>';
       }


   }


?>