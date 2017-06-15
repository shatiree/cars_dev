
<section id="main">
	<div class="container">
        <div class="row">
			<div class="col-md-9">
				<!-- Website Overview -->
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title white-text">New User Account</h3>
					</div>
					<div class="panel-body">
						<!--div class="row">
							<div class="col-md-12">
								<input class="form-control" type="text" placeholder="Filter Pages...">
							</div>
						</div-->
						<br>
						
						<!-- Insert FORM disini  -->
                        <form class="form-horizontal" action="index.php?page=new_user_acc" method="post">
                            <div class="tab-content">
                                <div id="cust" class="tab-pane fade in active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="well">
                                                <div class="form-group">
                                                    <label class ="col-lg-3 control-label">Name : </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="st_name">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class ="col-lg-3 control-label">User Name : </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="st_username">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class ="col-lg-3 control-label">IC No : </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="name" placeholder="Enter IC" name="st_ic">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class ="col-lg-3 control-label">Email : </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="name" placeholder="Enter Email" name="st_email">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class ="col-lg-3 control-label">Password : </label>
                                                    <div class="col-lg-6">
                                                        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="st_pass">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class ="col-lg-3 control-label">Password Confirmation : </label>
                                                    <div class="col-lg-6">
                                                        <input type="password" class="form-control" id="confirm_password" placeholder="Enter Password" name="st_pass_2">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class ="col-lg-3 control-label">Phone No. : </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="" placeholder="Enter Phone No." name="st_phone">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label" for="radios">Role</label>
                                                    <div class="col-lg-6">
                                                        <div class="radio">
                                                            <label for="radios-0">
                                                                <input type="radio" name="st_role" id="radios-0" value="1" checked="checked">
                                                                Admin
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radios-1">
                                                                <input type="radio" name="st_role" id="radios-1" value="2">
                                                                Agent
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radios-2">
                                                                <input type="radio" name="st_role" id="radios-2" value="2">
                                                                Sale Manager
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radios-3">
                                                                <input type="radio" name="st_role" id="radios-3" value="3">
                                                                Sale Advisor
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="text-center">
                                                    <button name="create" type="submit" class="btn btn-primary">Create Account</button>
                                                    <button type="button" class="btn btn-secondary" id="back">Close</button>
                                                    <button type="reset" class="btn btn-danger ">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


				</div>
				
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
    var password = document.getElementById('password')
        , confirm_password = document.getElementById('confirm_password');

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;

</script>

<?php


if(isset($_POST['create']))
{
    include('config/db.php');

    $name = $_POST["st_name"];
    $username = $_POST["st_username"];
    $ic = $_POST["st_ic"];
    $email = $_POST["st_email"];
    $password = $_POST["st_pass"];
    $phone = $_POST["st_phone"];
    $role = $_POST["st_role"];

    $sql = "INSERT INTO `tb_staff` (`st_id`, `st_name`, `st_ic`, `st_username`, `st_email`, `st_pass`, `st_phone`, `st_role`) 
                                   VALUES (NULL, '$name', '$username', '$email', '$password', '$phone', '$role')";

    $query = mysqli_query($con, $sql);


    if($query) {
        echo "<script type= 'text/javascript'>alert('New User created successfully');
         location.href= 'index.php?page=home'</script>";


    }


}
?>