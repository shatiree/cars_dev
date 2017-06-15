<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <!-- Website Overview -->
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title white-text">List Booking</h3>
                    </div>
                    <div class="panel-body">
                        <!--div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="text" placeholder="Filter Pages...">
                            </div>
                        </div-->
                        <br>

                        <!-- Insert FORM disini  -->
                        <div id="custList" class="row">
                            <div class="col-md-12">
                                <table class="table table-responsive">
                                    <div class="input-group"> <span class="input-group-addon">Filter</span>
                                        <input id="filter" type="text" class="form-control" placeholder="Type here..."></div>
                                    <tr>
                                        <th>Bil.</th>
                                        <th>Car Type</th>
                                        <th>Color</th>
                                        <th>Booking Status</th>
                                        <th>Loan Status</th>
                                        <th>Delivery Status</th>
                                        <th>Star Rating</th>
                                        <th>Activity</th>
                                    </tr>
                                    <tbody class="searchable">
                                    <?php
                                    $id = $_GET['id'];

                                    $sql = "SELECT * FROM tb_book_form WHERE bf_cust_id = '$id'";
                                    $result = mysqli_query($con, $sql);


                                    $i=1;
                                    while($row = mysqli_fetch_array($result)){
                                        $vrnt_id = $row['bf_variant_id'];
                                        $mdl_id = $row['bf_model_id'];
                                        $clr_id = $row['bf_colour_id'];

                                        $sql2 = "SELECT mdl_desc FROM tb_model WHERE mdl_id = '$mdl_id'";
                                        $sql3 = "SELECT vrnt_desc FROM tb_variant WHERE vrnt_id = '$vrnt_id'";
                                        $sql4 = "SELECT clr_desc FROM tb_colour WHERE clr_id = '$clr_id'";

                                        $result2 = mysqli_query($con, $sql2);
                                        $result3 = mysqli_query($con, $sql3);
                                        $result4 = mysqli_query($con, $sql4);

                                        $row2 = mysqli_fetch_array($result2);
                                        $row3 = mysqli_fetch_array($result3);
                                        $row4 = mysqli_fetch_array($result4);




                                        //-------Booking Status---------//
                                        if($row['bf_book_stat'] == 1){
                                            $status = "<span style=\"font-size:15px\" class=\"label label-success\">Success</span>";
                                        }
                                        if($row['bf_book_stat'] == 2){
                                            $status = "<span style=\"font-size:15px\" class=\"label label-warning\">Pending</span>";
                                        }
                                        if($row['bf_book_stat'] == 3) {
                                            $status = "<span style=\"font-size:15px\" class=\"label label-danger\">Failed</span>";
                                        }
                                        if($row['bf_book_stat'] == 4 || $row['bf_book_stat'] == 0) {
                                            $status = "<span style=\"font-size:15px\" class=\"label label-default\">N/A</span>";
                                        }

                                        //-------Loan Status---------//
                                        if($row['bf_loan_stat'] == 1){
                                            $status2 = "<span style=\"font-size:15px\" class=\"label label-success\">Success</span>";
                                        }
                                        if($row['bf_loan_stat'] == 2){
                                            $status2 = "<span style=\"font-size:15px\" class=\"label label-warning\">Pending</span>";
                                        }
                                        if($row['bf_loan_stat'] == 3) {
                                            $status2 = "<span style=\"font-size:15px\" class=\"label label-danger\">Failed</span>";
                                        }
                                        if($row['bf_loan_stat'] == 4 || $row['bf_loan_stat'] == 0) {
                                            $status2 = "<span style=\"font-size:15px\" class=\"label label-default\">N/A</span>";
                                        }

                                        //-------Delivery Status---------//
                                        if($row['bf_del_stat'] == 1){
                                            $status3 = "<span style=\"font-size:15px\" class=\"label label-success\">Success</span>";
                                        }
                                        if($row['bf_del_stat'] == 2){
                                            $status3 = "<span style=\"font-size:15px\" class=\"label label-warning\">Pending</span>";
                                        }
                                        if($row['bf_del_stat'] == 3) {
                                            $status3 = "<span style=\"font-size:15px\" class=\"label label-danger\">Failed</span>";
                                        }
                                        if($row['bf_del_stat'] == 4 || $row['bf_del_stat'] == 0) {
                                            $status3 = "<span style=\"font-size:15px\" class=\"label label-default\">N/A</span>";
                                        }



                                        echo '
                                     
                                     <tr>
                                       <td>'.$i.'</td>
                                       <td>'.$row3['vrnt_desc'].'</td>
                                       <td>'.$row4['clr_desc']. '</td>
                                       <td>'.$status.'</td>
                                       <td>'.$status2.'</td>
                                       <td>'.$status3.'</td>
                                       <td><span style="margin-left: 10px; color:#ffd204;"><i class="glyphicon glyphicon-star"></i></span><span class="badge badge-info">' .$row["bf_star_rate"].'</span></td>
                                       <td>
                                       <div class="dropdown">
                                           <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Activity
                                           <span class="caret"></span></button>
                                           <ul class="dropdown-menu">
                                           <li><a onclick="location.href=\'index.php?page=rating&id='.$id.'&bf_id='.$row['bf_id'].'\'">Star Rating</a></li>
                                           <li><a onclick="location.href=\'index.php?page=deliveryorder&id='.$id.'&bf_id='.$row['bf_id'].'\'">Delivery Order</a></li>
                                           <li><a onclick="location.href=\'index.php?page=buyerAgreement&id='.$id.'&bf_id='.$row['bf_id'].'\'">Buyer Agreement</a></li>
                                           </ul>
                                           </div>
                                       </td> 
                                      </tr>
                                 
                                                  ';
                                        $i++;
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <a href="index.php?page=cust_List"><button class="btn btn-default">Back</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


