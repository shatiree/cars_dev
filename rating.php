
<section id="main">
	<div class="container">
        <div class="row">
			<div class="col-md-9">
				<!-- Website Overview -->
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title white-text">SALES SATISFACTION SURVEY</h3>
					</div>
					<div class="panel-body">
						<!--div class="row">
							<div class="col-md-12">
							<input class="form-control" type="text" placeholder="Filter Pages...">
							</div>
						</div-->
						<br>
						
						<!-- Insert FORM disini  -->
						
						<h3><b>PLEASE CHOOSE YOUR RATING</b></h3>
						<small>Get a RM40.00 / e-service voucher by participating in HONDA Safe Satisfaction Survey.</small>
						<br><br>
						
						<form method="post" action="index.php?page=rating">
						<div class="col-md-12 table-responsive">
							<h4><b>Dealership Acess</b></h4>
							<div class="form-group">
								<p>1)Entrance and parking were easy to find.<p>
									<input id="input-1" name="input-1" value="0" class="rating-loading" width='auto'>
								</div>	
								<br>
								<h4><b>Dealership Facilities</b></h4>
								<div class="form-group">
									<p>2)Showroom and facilities were clean and comfortable.<p>
										<input id="input-2" name="input-2" value="0" class="rating-loading" width='auto'>
									</div>
									<br>
									<h4><b>Salesperson</b></h4>
									<div class="form-group">
										<p>3)Salesperson was knowledge about vehicle.<p>
											<input id="input-3" name="input-3" value="0" class="rating-loading" width='auto'>
										</div>
										<div class="form-group">
											<p>4)Salesperson was polite and friendly.<p>
												<input id="input-4" name="input-4" value="0" class="rating-loading" width='auto'>
											</div>
											<div class="form-group">
												<p>5)Salesperson was able to fulfil his/her promise to you on purchase.<p>
													<input id="input-5" name="input-5" value="0" class="rating-loading" width='auto'>
												</div>
												</br>
												<br>
												<h4><b>Purchase Paper Work</b></h4>
												<div class="form-group">
													<p>6)All purchase documentation was clearly explained to you(including insurance documentation).<p>
														<input id="input-6" name="input-6" value="0" class="rating-loading" width='auto'>
													</div>
													<div class="form-group">
														<p>7)Purchase documents were processsed smoothly and efficiently.<p>
															<input id="input-7" name="input-7" value="0" class="rating-loading" width='auto'>
														</div>
														</br>
														<br>
														<h4><b>Delivery</b></h4>
														<div class="form-group">
															<p>8)Your vehicle was delivery at the promise time.<p>
																<input id="input-8" name="input-8" value="0" class="rating-loading" width='auto'>
															</div>
															<div class="form-group">
																<p>9)Your vehicle was clean and in good condition.<p>
																	<input id="input-9" name="input-9" value="0" class="rating-loading" width='auto'>
																</div>
																<div class="form-group">
																	<p>10)Your received through explanation about the vehicle(e.g.owner's manual,safety features warranty,service maintenance,etc).<p>
																		<input id="input-10" name="input-10" value="0" class="rating-loading" width='auto'>
																	</div>
																	</br><br>
																	</div>
																	<p><b>Please take note that you will be receiving the SAME SURVERY from HONDA MALAYSIA either though phone call or email.
																	Kindly support us by appraising the highest mark.</b></p>
																	
																	<br><br>
																	<center>
																		<div ng-controller="AppCtrl">
																			<div class="container-fluid">
																				<div class="row">
																					
																					<div class="col-md-5">
																						<div class="containerforsign" ng-style="{'max-width': boundingBox.width + 'px', 'max-height': boundingBox.height + 'px'}">
																							Signature
																							<signature-pad accept="party1.accept" clear="party1.clear" height="180" width="200" dataurl="party1.dataurl"></signature-pad>
																							

																							
																							<br>
																						</div>
                                                                                        <div class="buttons" align="center" style="padding-top: 5px">
                                                                                            <button type="button" ng-click="party1.clear()">Clear</button>
                                                                                        </div>
																					</div>
																					
																					<div class="col-md-7">
                                                                                        <div class="row">
                                                                                        <div class="form-group">
                                                                                        <label class="col-md-4">Customer Name: </label>
                                                                                            <div class="col-md-3">
                                                                                                <?php
                                                                                                  $id = $_GET['id'];
                                                                                                  $sql = "SELECT * FROM tb_cust_info WHERE cust_id = '$id'";
                                                                                                  $query = mysqli_query($con, $sql);

                                                                                                  $row = mysqli_fetch_array($query);

                                                                                                  $name = $row['cust_name'];

                                                                                                echo'
																						          <input type="text" name="custname" value="'.$name.'">';
                                                                                                                ?>
                                                                                            </div>
                                                                                        </div>
                                                                                        </div>


                                                                                        <div class="row" style="margin-top: 10px">
                                                                                        <div class="form-group">
                                                                                            <label class="col-md-4">Plate No : </label>
                                                                                            <div class="col-md-3">
                                                                                                <input type="text"  name="plateno" value="AC5689">
                                                                                            </div>
                                                                                        </div>
                                                                                        </div>
																					</div>

																					
																					
																					
																				</div>
																			</div>
																			<div class="form-group">
																						
																						<input type="submit" name="submit" class="btn btn-primary" ng-click="sign()">
																						
																						<input type="reset" name="reset" class="btn btn-danger">
																					</div>
																		</div>															
																	</center>
																	
																	
																	
																	<script type="text/javascript">
																		jQuery(document).ready(function () {
																			$("#input-21f").rating({
																				starCaptions: function (val) {
																					if (val < 5) {
																						return val;
																						} else {
																						return 'high';
																					}
																				},
																				starCaptionClasses: function (val) {
																					if (val < 5) {
																						return 'label label-danger';
																						} else {
																						return 'label label-success';
																					}
																				},
																				hoverOnClear: false
																			});
																			var $inp = $('#rating-input');
																			
																			$inp.rating({
																				min: 0,
																				max: 10,
																				step: 1,
																				size: 'lg',
																				showClear: false
																			});
																			
																			$('#btn-rating-input').on('click', function () {
																				$inp.rating('refresh', {
																					showClear: true,
																					disabled: !$inp.attr('disabled')
																				});
																			});
																			
																			
																			$('.btn-danger').on('click', function () {
																				$("#kartik").rating('destroy');
																			});
																			
																			$('.btn-success').on('click', function () {
																				$("#kartik").rating('create');
																			});
																			
																			$inp.on('rating.change', function () {
																				alert($('#rating-input').val());
																			});
																			
																			
																			$('.rb-rating').rating({
																				'showCaption': true,
																				'stars': '10',
																				'min': '0',
																				'max': '10',
																				'step': '1',
																				'size': 'xs',
																				'starCaptions': {0: 'status:nix', 1: 'status:wackelt', 2: 'status:geht', 3: 'status:laeuft'}
																			});
																			$('#input-1').rating({
																				step: 1,
																				starCaptions: {1: '1', 2: '2', 3: '3', 4: '4', 5: '5',6: '6', 7: '7', 8: '8', 9: '9', 10: '10'},
																				starCaptionClasses: {1: 'text-danger', 2: 'text-danger', 3: 'text-danger', 4: 'text-warning', 5: 'text-warning',6: 'text-info', 7: 'text-info', 8: 'text-primary', 9: 'text-primary', 10: 'text-success'},
																				min: 0, max: 10, step: 1, stars: 10
																			});
																			$('#input-2').rating({
																				step: 1,
																				starCaptions: {1: '1', 2: '2', 3: '3', 4: '4', 5: '5',6: '6', 7: '7', 8: '8', 9: '9', 10: '10'},
																				starCaptionClasses: {1: 'text-danger', 2: 'text-danger', 3: 'text-danger', 4: 'text-warning', 5: 'text-warning',6: 'text-info', 7: 'text-info', 8: 'text-primary', 9: 'text-primary', 10: 'text-success'},
																				min: 0, max: 10, step: 1, stars: 10
																			});
																			$('#input-3').rating({
																				step: 1,
																				starCaptions: {1: '1', 2: '2', 3: '3', 4: '4', 5: '5',6: '6', 7: '7', 8: '8', 9: '9', 10: '10'},
																				starCaptionClasses: {1: 'text-danger', 2: 'text-danger', 3: 'text-danger', 4: 'text-warning', 5: 'text-warning',6: 'text-info', 7: 'text-info', 8: 'text-primary', 9: 'text-primary', 10: 'text-success'},
																				min: 0, max: 10, step: 1, stars: 10
																			});
																			$('#input-4').rating({
																				step: 1,
																				starCaptions: {1: '1', 2: '2', 3: '3', 4: '4', 5: '5',6: '6', 7: '7', 8: '8', 9: '9', 10: '10'},
																				starCaptionClasses: {1: 'text-danger', 2: 'text-danger', 3: 'text-danger', 4: 'text-warning', 5: 'text-warning',6: 'text-info', 7: 'text-info', 8: 'text-primary', 9: 'text-primary', 10: 'text-success'},
																				min: 0, max: 10, step: 1, stars: 10
																			});
																			$('#input-5').rating({
																				step: 1,
																				starCaptions: {1: '1', 2: '2', 3: '3', 4: '4', 5: '5',6: '6', 7: '7', 8: '8', 9: '9', 10: '10'},
																				starCaptionClasses: {1: 'text-danger', 2: 'text-danger', 3: 'text-danger', 4: 'text-warning', 5: 'text-warning',6: 'text-info', 7: 'text-info', 8: 'text-primary', 9: 'text-primary', 10: 'text-success'},
																				min: 0, max: 10, step: 1, stars: 10
																			});
																			$('#input-6').rating({
																				step: 1,
																				starCaptions: {1: '1', 2: '2', 3: '3', 4: '4', 5: '5',6: '6', 7: '7', 8: '8', 9: '9', 10: '10'},
																				starCaptionClasses: {1: 'text-danger', 2: 'text-danger', 3: 'text-danger', 4: 'text-warning', 5: 'text-warning',6: 'text-info', 7: 'text-info', 8: 'text-primary', 9: 'text-primary', 10: 'text-success'},
																				min: 0, max: 10, step: 1, stars: 10
																			});	
																			$('#input-7').rating({
																				step: 1,
																				starCaptions: {1: '1', 2: '2', 3: '3', 4: '4', 5: '5',6: '6', 7: '7', 8: '8', 9: '9', 10: '10'},
																				starCaptionClasses: {1: 'text-danger', 2: 'text-danger', 3: 'text-danger', 4: 'text-warning', 5: 'text-warning',6: 'text-info', 7: 'text-info', 8: 'text-primary', 9: 'text-primary', 10: 'text-success'},
																				min: 0, max: 10, step: 1, stars: 10
																			});
																			$('#input-8').rating({
																				step: 1,
																				starCaptions: {1: '1', 2: '2', 3: '3', 4: '4', 5: '5',6: '6', 7: '7', 8: '8', 9: '9', 10: '10'},
																				starCaptionClasses: {1: 'text-danger', 2: 'text-danger', 3: 'text-danger', 4: 'text-warning', 5: 'text-warning',6: 'text-info', 7: 'text-info', 8: 'text-primary', 9: 'text-primary', 10: 'text-success'},
																				min: 0, max: 10, step: 1, stars: 10
																			});
																			$('#input-9').rating({
																				step: 1,
																				starCaptions: {1: '1', 2: '2', 3: '3', 4: '4', 5: '5',6: '6', 7: '7', 8: '8', 9: '9', 10: '10'},
																				starCaptionClasses: {1: 'text-danger', 2: 'text-danger', 3: 'text-danger', 4: 'text-warning', 5: 'text-warning',6: 'text-info', 7: 'text-info', 8: 'text-primary', 9: 'text-primary', 10: 'text-success'},
																				min: 0, max: 10, step: 1, stars: 10
																			});
																			$('#input-10').rating({
																				step: 1,
																				starCaptions: {1: '1', 2: '2', 3: '3', 4: '4', 5: '5',6: '6', 7: '7', 8: '8', 9: '9', 10: '10'},
																				starCaptionClasses: {1: 'text-danger', 2: 'text-danger', 3: 'text-danger', 4: 'text-warning', 5: 'text-warning',6: 'text-info', 7: 'text-info', 8: 'text-primary', 9: 'text-primary', 10: 'text-success'},
																				min: 0, max: 10, step: 1, stars: 10
																			});
																			
																		});
																		
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
                            <button type="button" class="btn btn-default" id="back">Back</button>
																</div>
																</div>
																
															</div>
															</div>
														</div>
														</section>
														
