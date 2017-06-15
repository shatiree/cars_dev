
<section id="main">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<!-- Website Overview -->
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title white-text">VEHICLE DELIVERY ORDER</h3>
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
									<ul class="nav nav-tabs nav-tabs-responsive nav-justified">
										<li class="active"><a data-toggle="tab" href="#vehicle">Vehicle Particular</a></li>
										<li><a data-toggle="tab" href="#equipment">Standard Equipment</a></li>
										<li><a data-toggle="tab" href="#familiarizationA">Vehicle Familiarization (A)</a></li>
										<li><a data-toggle="tab" href="#familiarizationB">Vehicle Familiarization (B) & (C)</a></li>
										<li><a data-toggle="tab" href="#physical">Physical Inspection</a></li>
									</ul>
								</div>
							</div>
							
							<form class="form-horizontal" method="post" action="DO_Ps.php">
								<div class="tab-content">
                                    <input type="hidden" name="custid" value="<?php echo $_GET['id'];?>">
									<input type="hidden" name="bf_id" value="<?php echo $_GET['bf_id'];?>">
									<div id="vehicle" class="tab-pane fade in active">
										<div class="row">
											<div class="col-md-12">
												<div class="well">
													<legend>VEHICLE PARTICULARS</legend>
													<div class="form-group">
														<label class="col-lg-3 control-label">Registration No :</label>
														<div class="col-lg-6">
															<input type="text" name="registration" class="form-control" value="123456789">
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Chasis No :</label>
														<div class="col-lg-6">
															<input type="text" id="chasisno" name="chasis" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Engine No :</label>
														<div class="col-lg-6">
															<input type="text" id="engineno" name="engineno" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="col-lg-3 control-label">Sale Ret No :</label>
														<div class="col-lg-6">
															<input type="text" name="sale" class="form-control" value="234567">
														</div>
													</div>
													<a class="btn btn-success btnNext" >Next</a>
												</div>
											</div>
										</div>
									</div>
									
									<!----STANDARD EQUIPMENT----->
									
									<div id="equipment" class="tab-pane fade">
										<div class="row">
											<div class="col-md-12">
												<div class="well">
													<legend>STANDARD EQUIPMENT</legend>
													<div class="form-group">
														<label class="col-md-4 control-label" for="checkboxes"></label>
														<div class="col-md-4">
															<div class="checkbox">
																<label for="checkboxes-0">
																	<input type="checkbox" name="jackhandle" id="checkboxes-0" value="1">
																	Jack and Handle
																</label>
															</div>
															<div class="checkbox">
																<label for="checkboxes-1">
																	<input type="checkbox" name="tools" id="checkboxes-1" value="1">
																	Tools
																</label>
															</div>
															<div class="checkbox">
																<label for="checkboxes-2">
																	<input type="checkbox" name="manuals" id="checkboxes-2" value="1">
																	Owners Manual
																</label>
															</div>
															<div class="checkbox">
																<label for="checkboxes-3">
																	<input type="checkbox" name="sparetyre" id="checkboxes-3" value="1">
																	Spare Tyre With Wheel Rim
																</label>
															</div>
															<div class="checkbox">
																<label for="checkboxes-4">
																	<input type="checkbox" name="cigarette" id="checkboxes-4" value="1">
																	Cigarette Lighter
																</label>
															</div>
															<div class="checkbox">
																<label for="checkboxes-5">
																	<input type="checkbox" name="floormats" id="checkboxes-5" value="1">
																	Floor Mats
																</label>
															</div>
														</div>
													</div>
													
													<a class="btn btn-success btnNext" >Next</a>
													<a class="btn btn-warning btnPrevious" >Previous</a>
												</div>
											</div>
										</div>
									</div>
									
									<!-------OPERATIONAL ITEMS---->
									
									<div id="familiarizationA" class="tab-pane fade in">
										<div class="row">
											<div class="col-md-12">
												<div class="well">
													<legend>(A) OPERATIONAL ITEMS </legend>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="lightswitches">Light Switches (For Interior and Exterior)</label>
														<div class="col-md-2">
															<select id="lightswitches" name="lightswitches" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="selectbasic">Turn Signal Switch</label>
														<div class="col-md-2">
															<select id="selectbasic" name="turnsignal" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="indicatorlight">Dashboard Indicator Light</label>
														<div class="col-md-2">
															<select id="indicatorlight" name="indicatorlight" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="wiperwasher">Wiper and Washer Fluid</label>
														<div class="col-md-2">
															<select id="wiperwasher" name="wiperwasher" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="operation">Operation of Accessories (Radio Casette and Air Cond)</label>
														<div class="col-md-2">
															<select id="operation" name="operation" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="powerwindow">Power Window</label>
														<div class="col-md-2">
															<select id="powerwindow" name="powerwindow" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="controldoor">Control Door Lock</label>
														<div class="col-md-2">
															<select id="controldoor" name="controldoor" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="seatadjustment">Seat Adjustment</label>
														<div class="col-md-2">
															<select id="seatadjustment" name="seatadjustment" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="tiltingsteering">Tilting Steering Wheel Height Adjustment</label>
														<div class="col-md-2">
															<select id="tiltingsteering" name="tiltingsteering" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="childprooflock">Child Proof Lock</label>
														<div class="col-md-2">
															<select id="childprooflock" name="childprooflock" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="morningstartig">Morning Starting Procedure</label>
														<div class="col-md-2">
															<select id="morningstartig" name="morningstartig" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="bonnet">Bonnet And Trunk Release</label>
														<div class="col-md-2">
															<select id="bonnet" name="bonnet" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="automotive">Automotive Transmission Operational Advice</label>
														<div class="col-md-2">
															<select id="automotive" name="automotive" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="selectbasic">Vehicle's Jacking Technique (Tyre Change)</label>
														<div class="col-md-2">
															<select id="selectbasic" name="vehiclejacking" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													<br>
													<a class="btn btn-success btnNext" >Next</a>
													<a class="btn btn-warning btnPrevious" >Previous</a>
												</div>
											</div>
										</div>
									</div>
									
									<!-----MAINTENANCE CHECKING---->
									
									<div id="familiarizationB" class="tab-pane fade in">
										<div class="row">
											<div class="col-md-12">
												<div class="well">
													<legend>(B) MAINTENANCE CHECKING</legend>
													<!-- Multiple Checkboxes -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="checkboxes"></label>
														<div class="col-md-4">
															<div class="checkbox">
																<label for="engine">
																	<input type="checkbox" name="engine" id="engine" value="1">
																	Engine Oil
																</label>
															</div>
															<div class="checkbox">
																<label for="t">
																	<input type="checkbox" name="transmission" id="t" value="1">
																	Transmission Oil
																</label>
															</div>
															<div class="checkbox">
																<label for="coolant">
																	<input type="checkbox" name="coolant" id="coolant" value="1">
																	Coolant
																</label>
															</div>
															<div class="checkbox">
																<label for="brakeandclutch">
																	<input type="checkbox" name="brakeandclutch" id="brakeandclutch" value="1">
																	Brake And Clutch Fluid
																</label>
															</div>
															<div class="checkbox">
																<label for="powersteering">
																	<input type="checkbox" name="powersteering" id="powersteering" value="1">
																	Power Steering Fluid
																</label>
															</div>
															<div class="checkbox">
																<label for="presssure">
																	<input type="checkbox" name="presssure" id="presssure" value="1">
																	Type Pressure
																</label>
															</div>
														</div>
													</div>
													
													<!---<form class="form-horizontal">-->
													<fieldset>
														
														<!-----ACCESSORIES--->
														
														<legend>(C) ACCESSORIES</legend>

														
														
														
														<table id="dataTable" class="table table-bordered table-responsive">
															
															<tr>
																<td><input type="checkbox" name="chk[]" /></td>
																<td><input type="text" name="txt[]" class="form-control" placeholder="Accessories Name"/></td>
															</tr>
														</table>
														<input class="btn btn-success" type="button" value="Add Row" onclick="addRow('dataTable')" />
														<input class="btn btn-danger" type="button" value="Delete Row" onclick="deleteRow('dataTable')" />
														
														
													</fieldset>
													
													
													<br><br>
													<a class="btn btn-success btnNext" >Next</a>
													<a class="btn btn-warning btnPrevious" >Previous</a>
												</div>
											</div>
										</div>
									</div>
									
									<!-------INTERNAL---->
									
									<div id="physical" class="tab-pane fade in">
										<div class="row">
											<div class="col-md-12">
												<div class="well">
													<legend>(A) INTERNAL</legend>														 
													
													<div class="form-group">
														<label class="col-md-4 control-label" for="seat">Seat</label>
														<div class="col-md-2">
															<select id="seat" name="seat" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="dashboard">Dashboard</label>
														<div class="col-md-2">
															<select id="dashboard" name="dashboard" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="doorpading">Door's Pading</label>
														<div class="col-md-2">
															<select id="doorpading" name="doorpading" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="sunvisor">Sun Visor</label>
														<div class="col-md-2">
															<select id="sunvisor" name="sunvisor" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="carpet">Carpet</label>
														<div class="col-md-2">
															<select id="carpet" name="carpet" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="glasses/mirror">Glasses/Mirror</label>
														<div class="col-md-2">
															<select id="glasses/mirror" name="glassesmirror" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="rooflining">Roof Lining</label>
														<div class="col-md-2">
															<select id="rooflining" name="rooflining" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="pillargarnish">Pillar Garnish</label>
														<div class="col-md-2">
															<select id="pillargarnish" name="pillargarnish" class="form-control">
																<option value="">-</option>
																<option value="1">/</option>
																<option value="0">x</option>
															</select>
														</div>
													</div>
													
													<!--<form class="form-horizontal">---->
													<fieldset>
														
														<!-- EXTERNAL -->
														
														<legend>(B) EXTERNAL</legend>
														
														<div class="container-fluid">
															<div class="row">
																
																<div class="col-md-6">
																	<img src="http://oimg.photobucket.com/albums/v237/paulos/carplan9br.jpg" alt="" style="width:300px;height:300px;">
																</div>
																
																<div class="col-md-6">
																	<img src="http://oimg.photobucket.com/albums/v237/paulos/carplan9br.jpg" alt="" style="width:300px;height:300px;">
																</div>
																
															</div>
														</div>
														
													</fieldset>
													
													
													
													<a class="btn btn-warning btnPrevious" >Previous</a>
												</div>
											</div>
										</div>
									</div>
									
									<center>  <h4><b>CUSTOMER AND SALESMAN</b></h4> </center>
									<div class="form-group">
										<label class="col-md-4 control-label" for="checkboxes"></label>
										<div class="checkbox">
											<label for="checkboxes-0">
												<input type="checkbox" name="aggrement" id="checkboxes-0" value="1" required>
												<p> I hereby acknowledge that fully understand the explanation of the above listed item and have receive the vehicle in good order and conditions . I have explained three standard new vehicle warranty terms and condition (including other appropriciate product warraties) and the suggested maintenence schedule to the customer . </p>
											</label>
										</div>
										
									</div>					   
									
									<center>	
										<div ng-controller="AppCtrl">
											<div class="container-fluid">
												<div class="row">
													
													<div class="col-md-4">
														<div class="containerforsign" ng-style="{'max-width': boundingBox.width + 'px', 'max-height': boundingBox.height + 'px'}">
															Customer
															<signature-pad accept="party1.accept" clear="party1.clear" height="180" width="200" dataurl="party1.dataurl"></signature-pad>
															

															
															<br>
														</div>
                                                        <div align="center">
                                                            <?php
                                                              $custid = $_GET['id'];
                                                              $sql2 = "SELECT * FROM tb_cust_info WHERE cust_id = '$custid'";
                                                              $query = mysqli_query($con, $sql2);
                                                              $row2 = mysqli_fetch_array($query);
                                                              $cust_name = $row2['cust_name'];
                                                              $cust_ic = $row2['cust_ic'];

                                                              echo'
                                                                <p><b>Name : </b>'.$cust_name.'</p>
                                                                <p><b>IC :</b>'.$cust_ic.'</p>';
                                                            ?>

                                                        </div>
                                                        <div class="buttons" align="center" style="padding-top: 10px">
                                                            <button class="btn btn-warning" type="button" ng-click="party1.clear()">
                                                                <i class="glyphicon glyphicon-erase"></i>&nbsp;Clear Signature</button>
                                                        </div>
														<br>
														<!--<div class="container1" ng-show="signature">
															<img ng-src="{{ party1.signature.dataUrl }}">
														</div>--->
													</div>
													
													<div class="col-md-4">
														<div class="containerforsign" ng-style="{'max-width': boundingBox.width + 'px', 'max-height': boundingBox.height + 'px'}">
															Manager
															<signature-pad accept="party2.accept" clear="party2.clear" height="180" width="200" dataurl="party2.dataurl"></signature-pad>
															<br>
														</div>
                                                        <div align="center">
                                                            <?php
                                                            $bf_id = $_GET['bf_id'];
                                                            $sql3 = "SELECT * FROM tb_book_form WHERE bf_id = '$bf_id'";
                                                            $query2 = mysqli_query($con, $sql3);
                                                            $row3 = mysqli_fetch_array($query2);
                                                            $sm_name = $row3['bf_SM_name'];
                                                            $sm_ic = $row3['bf_SM_ic'];

                                                            echo'
                                                                <p><b>Name : </b>'.$sm_name.'</p>
                                                                <p><b>IC :</b>'.$sm_ic.'</p>';
                                                            ?>
                                                        </div>
                                                        <div class="buttons"  align="center" style="padding-top: 10px">
                                                            <button class="btn btn-warning" type="button" ng-click="party2.clear()">
                                                                <i class="glyphicon glyphicon-erase"></i>&nbsp;Clear Signature</button>
                                                        </div>
														<br>
														
														<!---<div class="container1" ng-show="signature">
															<img ng-src="{{ party2.signature.dataUrl }}">
														</div>--->
														
													</div>
													
													<div class="col-md-4">
														<div class="containerforsign" ng-style="{'max-width': boundingBox.width + 'px', 'max-height': boundingBox.height + 'px'}">
															Salesman
															<signature-pad accept="party3.accept" clear="party3.clear" height="180" width="200" dataurl="party3.dataurl"></signature-pad>
															

															<br>
														</div>
                                                        <div align="center">
                                                            <?php
                                                            $bf_id = $_GET['bf_id'];
                                                            $sql4 = "SELECT * FROM tb_book_form WHERE bf_id = '$bf_id'";
                                                            $query3 = mysqli_query($con, $sql3);
                                                            $row4 = mysqli_fetch_array($query3);
                                                            $sa_name = $row4['bf_SA_name'];
                                                            $sa_ic = $row4['bf_SA_ic'];

                                                            echo'
                                                                <p><b>Name : </b>'.$sa_name.'</p>
                                                                <p><b>IC :</b>'.$sa_ic.'</p>';
                                                            ?>
                                                        </div>
                                                        <div class="buttons" align="center" style="padding-top: 10px">
                                                            <button class="btn btn-warning" type="button" ng-click="party3.clear()">
                                                                <i class="glyphicon glyphicon-erase"></i>&nbsp;Clear Signature</button>
                                                        </div>
														<br>
														
														<!---	<div class="container1" ng-show="signature">
															<img ng-src="{{ party3.signature.dataUrl }}">
														</div> -->
														
													</div>
													
													
													
												</div>
											</div>	
											
											<input type="hidden" name="sign1" value="{{ party1.signature.dataUrl }}">
											<input type="hidden" name="sign2" value="{{ party2.signature.dataUrl }}">
											<input type="hidden" name="sign3" value="{{ party3.signature.dataUrl }}">
											
											
											<div class="form-group">
												
												<input type="submit" name="submit" class="btn btn-primary sign" ng-click="sign()">
												<input type="reset" name="reset" class="btn btn-danger">
												
											</div>
										</div>			
										<br>
										
										
										
									</center>
									
									
									
								</div>
							</form>	
							
							<button class="btn btn-default" id="back">Back</button>
						</div>			
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">

	angular.module('app', ['signature']);
	
	angular.module('app').controller('AppCtrl', function($scope) {
		$scope.party1 = {};
		$scope.party2 = {};
		$scope.party3 = {};
		
		$scope.sign = function() {
			$scope.party1.signature = $scope.party1.accept();
			$scope.party2.signature = $scope.party2.accept();
			$scope.party3.signature = $scope.party3.accept();
		}
	});
</script>

<?php
    $id = $_GET['bf_id'];

    $sql = "SELECT * FROM tb_book_form WHERE bf_id = '$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $eng = $row['bf_engine_num'];
    $chasis = $row['bf_chasis_no'];

    echo '
      <script type="text/javascript">
        document.getElementById("engineno").value = "'.$eng.'";
        document.getElementById("chasisno").value = "'.$chasis.'";
       
     </script>
    ';

?>
