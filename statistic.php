

<section id="main">
	<div class="container">
        <div class="row">
			<div class="col-md-9">
				<!-- Website Overview -->
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title white-text">Statistics</h3>
					</div>
					<div class="panel-body">
						<!--div class="row">
							<div class="col-md-12">
								<input class="form-control" type="text" placeholder="Filter Pages...">
							</div>
						</div-->
						<br>
						
						<!-- Insert FORM disini  -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#cust">Pie Chart</a></li>
                                        <li><a data-toggle="tab" href="#order">Line Chart</a></li>
                                        <li><a data-toggle="tab" href="#pricestruct">Bar Chart</a></li>
                                        <li><a data-toggle="tab" href="#insurance">Spider Web Chart</a></li>
                                    </ul>
                                </div>
                            </div>

                            <form class="form-horizontal">
                                <div class="tab-content">

                                    <div id="cust" class="tab-pane fade in active">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="well">


                                                    <div class="table-responsive" id="pie" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                                                    <?php
                                                       include('config/db.php');

                                                       $sql= "SELECT nmCar,Amount FROM pie_chart";
                                                       $result = mysqli_query($con,$sql);
                                                       $r= array();
                                                       while($row=mysqli_fetch_array($result))
                                                       {
                                                           array_push($r,array(
                                                               'name'=> $row['nmCar'],
                                                               'y' => $row['Amount']
                                                           ));
                                                       }
                                                       $data = json_encode($r, JSON_NUMERIC_CHECK);
                                                    ?>
                                                    <a class="btn btn-success btnNext" >Next</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="order" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="well">

                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a data-toggle="tab" href="#civic">Civic</a></li>
                                                        <li><a data-toggle="tab" href="#accord">Accord</a></li>
                                                        <li><a data-toggle="tab" href="#city">City</a></li>

                                                    </ul>

                                                    <div class="tab-content">

                                                        <div id="civic" class="tab-pane fade active">
                                                          <div  class="table-responsive" id="line1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                                                        </div>
                                                        <div id="accord" class="tab-pane fade">
                                                            <div  class="table-responsive" id="line2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                                                        </div>
                                                        <div id="city" class="tab-pane fade">
                                                            <div  class="table-responsive" id="line3" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                                                        </div>

                                                    </div>

                                                    <?php
                                                    include('config/db.php');

                                                    //---Civic--//
                                                    $sql= "SELECT car_production,car_sales FROM line_chart WHERE car_name='Civic'";
                                                    $result = mysqli_query($con,$sql);
                                                    $r= array();
                                                    $r2= array();
                                                    while($row=mysqli_fetch_array($result))
                                                    {
                                                        array_push($r,array(
                                                            'y' => $row['car_sales']
                                                        ));
                                                        array_push($r2,array(
                                                            'y' => $row['car_production']
                                                        ));
                                                    }
                                                    $datalineCivic = json_encode($r, JSON_NUMERIC_CHECK);
                                                    $datalineCivic2 = json_encode($r2, JSON_NUMERIC_CHECK);


                                                    //---Accord--//
                                                    $sql2= "SELECT car_production,car_sales FROM line_chart WHERE car_name='Accord'";
                                                    $result2 = mysqli_query($con,$sql2);
                                                    $r3= array();
                                                    $r4= array();
                                                    while($row2=mysqli_fetch_array($result2))
                                                    {
                                                        array_push($r3,array(
                                                            'y' => $row2['car_sales']
                                                        ));
                                                        array_push($r4,array(
                                                            'y' => $row2['car_production']
                                                        ));
                                                    }
                                                    $datalineAccord = json_encode($r3, JSON_NUMERIC_CHECK);
                                                    $datalineAccord2 = json_encode($r4, JSON_NUMERIC_CHECK);

                                                    //---City--//
                                                    $sql3= "SELECT car_production,car_sales FROM line_chart WHERE car_name='City'";
                                                    $result3 = mysqli_query($con,$sql3);
                                                    $r5= array();
                                                    $r6= array();
                                                    while($row3=mysqli_fetch_array($result3))
                                                    {
                                                        array_push($r5,array(
                                                            'y' => $row3['car_sales']
                                                        ));
                                                        array_push($r6,array(
                                                            'y' => $row3['car_production']
                                                        ));
                                                    }
                                                    $datalineCity = json_encode($r5, JSON_NUMERIC_CHECK);
                                                    $datalineCity2 = json_encode($r6, JSON_NUMERIC_CHECK);

                                                    ?>


                                                    <a class="btn btn-success btnNext" >Next</a>
                                                    <a class="btn btn-warning btnPrevious" >Previous</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="pricestruct" class="tab-pane fade in">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="well">
                                                    <legend>Bar Chart :</legend>

                                                    <div class="table-responsive" id="bar" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>

                                                    <?php
                                                    include('config/db.php');

                                                    $sql= "SELECT car_sales FROM bar_chart WHERE car_name='City'";
                                                    $result = mysqli_query($con,$sql);
                                                    $r= array();
                                                    while($row=mysqli_fetch_array($result))
                                                    {
                                                        array_push($r,array(
                                                            'y' => $row['car_sales']
                                                        ));
                                                    }
                                                    $databar = json_encode($r, JSON_NUMERIC_CHECK);

                                                    $sql2= "SELECT car_sales FROM bar_chart WHERE car_name='Accord'";
                                                    $result2 = mysqli_query($con,$sql2);
                                                    $r2= array();
                                                    while($row2=mysqli_fetch_array($result2))
                                                    {
                                                        array_push($r2,array(
                                                            'y' => $row2['car_sales']
                                                        ));
                                                    }
                                                    $databar2 = json_encode($r2, JSON_NUMERIC_CHECK);

                                                    $sql3= "SELECT car_sales FROM bar_chart WHERE car_name='Civic'";
                                                    $result3 = mysqli_query($con,$sql3);
                                                    $r3= array();
                                                    while($row3=mysqli_fetch_array($result3))
                                                    {
                                                        array_push($r3,array(
                                                            'y' => $row3['car_sales']
                                                        ));
                                                    }
                                                    $databar3 = json_encode($r2, JSON_NUMERIC_CHECK);
                                                    ?>

                                                    <a class="btn btn-success btnNext" >Next</a>
                                                    <a class="btn btn-warning btnPrevious" >Previous</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="insurance" class="tab-pane fade in">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="well">

                                                    <div class="table-responsive" id="web" style="min-width: 400px; max-width: 600px; height: 400px; margin: 0 auto"></div>

                                                    <?php
                                                    include('config/db.php');

                                                    $sql= "SELECT operation_cost FROM web_chart WHERE operation_year='2014'";
                                                    $result = mysqli_query($con,$sql);
                                                    $r= array();
                                                    while($row=mysqli_fetch_array($result))
                                                    {
                                                        array_push($r,array(
                                                            'y' => $row['operation_cost']
                                                        ));
                                                    }
                                                    $dataweb = json_encode($r, JSON_NUMERIC_CHECK);

                                                    $sql2= "SELECT operation_cost FROM web_chart WHERE operation_year='2015'";
                                                    $result2 = mysqli_query($con,$sql2);
                                                    $r2= array();
                                                    while($row2=mysqli_fetch_array($result2))
                                                    {
                                                        array_push($r2,array(
                                                            'y' => $row2['operation_cost']
                                                        ));
                                                    }
                                                    $dataweb2 = json_encode($r2, JSON_NUMERIC_CHECK);

                                                    $sql3= "SELECT operation_cost FROM web_chart WHERE operation_year='2016'";
                                                    $result3 = mysqli_query($con,$sql3);
                                                    $r3= array();
                                                    while($row3=mysqli_fetch_array($result3))
                                                    {
                                                        array_push($r3,array(
                                                            'y' => $row3['operation_cost']
                                                        ));
                                                    }
                                                    $dataweb3 = json_encode($r3, JSON_NUMERIC_CHECK);
                                                    ?>


                                                    <a class="btn btn-warning btnPrevious" >Previous</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </form>
                            <button class="btn btn-default" id="back">Back</button>
                        </div>



				</div>
				
			</div>
		</div>
	</div>
</section>

