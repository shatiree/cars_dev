
<section id="main">
	<div class="container">
        <div class="row">
			<div class="col-md-9">
				<!-- Website Overview -->
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title white-text">List Customer</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">


						<br>
						
						<!-- Insert FORM disini  -->

                        <legend>List Customer</legend>
                        <form class="form-horizontal">
                            <div class="tab-content">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">List Customer</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-striped table-hover">
                                            <div class="input-group"> <span class="input-group-addon">Filter</span>
                                                <input id="filter" type="text" class="form-control" placeholder="Type here..."></div>
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Name</th>
                                                <th>Identification Card (IC)</th>
                                                <th>Activity</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php

                                              $sql = "SELECT * FROM tb_cust_info";
                                              $result = mysqli_query($con, $sql);
                                              $i=1;
                                              while($row = mysqli_fetch_array($result)){



                                                  echo '
                                                <tbody class="searchable">
                                                     <tr>
                                                       <td>'.$i.'</td>
                                                       <td>'.$row['cust_name'].'</td>
                                                       <td>'.$row['cust_ic'].'</td>
                                                       <td>
                                                       <div class="dropdown">
                                                          <button class="btn btn-primary" type="button" onclick="location.href=\'index.php?page=bookingList&id='.$row['cust_id'].'\';">Booking List
                                                          </button>
                                                        </div>
                                                         
                                                       </td> 
                                                      </tr>
                                                 </tbody>
                                                  
                                                  
                                                  ';
                                                  $i++;
                                              }


                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <button class="btn btn-default" id="back">Back</button>
                        </div>
                        </div>
				</div>
				
			</div>
		</div>
	</div>
</section>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Customer List</h4>
            </div>
            <div class="modal-body">
                <div id="custom-search-input" class="row" style="padding-bottom: 20px; padding-left: 20px">
                    <div class="input-group col-md-4">
                        <input type="text" class="  search-query form-control" placeholder="Search" />
                        <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                        </span>
                    </div>
                </div>

                <div id="custList" class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <tr>
                                <th>Bil.</th>
                                <th>Name</th>
                                <th>Identity Card Number</th>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td onclick="document.location.href='index.php?page=chooseCar'">Syaiful Fikri</td>
                                <td>938893</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<!--<button type="button" class="btn btn-primary" onclick="location.href=\'index.php?page=bookingList&id='.$row['cust_id'].'\';">Booking List</button>-->
<!--<button type="button" class="btn btn-success" onclick="location.href=\'index.php?page=chooseCar&id='.$row['cust_id'].'\';">New Booking</button>-->