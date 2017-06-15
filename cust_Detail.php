
<section id="main">
	<div class="container">
        <div class="row">
			<div class="col-md-9">
				<!-- Website Overview -->
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title white-text">Customer</h3>
					</div>
					<div class="panel-body">
						<!--div class="row">
							<div class="col-md-12">
								<input class="form-control" type="text" placeholder="Filter Pages...">
							</div>
						</div-->
						<br>
						
						<!-- Insert FORM disini  -->
                        <legend>Add Customer</legend>
                        <form class="form-horizontal" action="cust_Detail2.php" method="post">
                            <div class="tab-content">

                                <div id="cust" class="tab-pane fade in active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="well">
                                        <div class="form-group">
                                            <label class ="col-lg-3 control-label">Name : </label>
                                            <div class="col-lg-6">
                                                <input type="name" class="form-control" id="name" placeholder="Enter Name" name="cust_name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class ="col-lg-3 control-label">Identification Card (IC) : </label>
                                            <div class="col-lg-6">
                                            <input type="text" class="form-control" id="name" placeholder="Enter Identication Card (IC)" name="cust_ic">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class ="col-lg-3 control-label">Email : </label>
                                            <div class="col-lg-6">
                                            <input type="text" class="form-control" id="name" placeholder="Enter Email" name="cust_email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class ="col-lg-3 control-label">Address : </label>
                                            <div class="col-lg-6">
                                            <input type="text" class="form-control" id="name" placeholder="Enter Address" name="cust_address">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class ="col-lg-3 control-label">Phone  </label>
                                        </div>
                                            <div class="form-group">
                                                <label class ="col-lg-3 control-label"><small>Home : </small></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="name" placeholder="" name="cust_phone_home">
                                                </div>
                                            </div>
                                                <div class="form-group">
                                                    <label class ="col-lg-3 control-label"><small>Office : </small></label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="name" placeholder="" name="cust_phone_office">
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <label class ="col-lg-3 control-label"><small>Mobile : </small></label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="name" placeholder="" name="cust_phone_mobile">
                                                    </div>

                                                </div>



                                                <div class="text-center">
                                                    <button name="submit" type="submit" class="btn btn-primary">Save</button>
                                                    <button type="button" class="btn btn-secondary" id="back">Close</button>
                                                    <button type="reset" class="btn btn-danger ">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>







						</legend>
				</div>
				
			</div>
		</div>
	</div>
</section>

