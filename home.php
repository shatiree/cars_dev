
<div class="col-md-9">
    <!-- Website Overview -->
    <div class="panel panel-default">
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title grey-text">Pick Menu</h3>
        </div>
        <div class="panel-body">
            <div class="row">
            <div class="col-md-3">
                <div class="well dash-box">
                    <a href="index.php?page=cust_Detail"><h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span></h2></a>
                    <h4>New Customer</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="well dash-box">
                    <a href="index.php?page=cust_List"><h2><i class="fa fa-list-ol"></i></h2></a>
                    <h4>List Customer</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="well dash-box">
                    <a href="" data-toggle="modal" data-target="#myModal"><h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></h2></a>
                    <h4>New Booking</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="well dash-box">
                    <a href="index.php?page=statistic"><h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></h2></a>
                    <h4>Statistics</h4>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-3">
                    <div class="well dash-box">
                        <a href="index.php?page=new_user_acc"><h2><i class="fa fa-user-circle"></i></h2></a>
                        <h4>New User</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="well dash-box">
                        <a href=""><h2><i class="fa fa-cogs"></i></h2></a>
                        <h4>Configuration</h4>
                    </div>

            </div>
        </div>
    </div>
    </div>
    <!-- Latest Users -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Latest Users</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover table-responsive ">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Joined</th>
                </tr>
                <tr>
                    <td>Jill Smith</td>
                    <td>jillsmith@gmail.com</td>
                    <td>Dec 12, 2016</td>
                </tr>
                <tr>
                    <td>Eve Jackson</td>
                    <td>ejackson@yahoo.com</td>
                    <td>Dec 13, 2016</td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>jdoe@gmail.com</td>
                    <td>Dec 13, 2016</td>
                </tr>
                <tr>
                    <td>Stephanie Landon</td>
                    <td>landon@yahoo.com</td>
                    <td>Dec 14, 2016</td>
                </tr>
                <tr>
                    <td>Mike Johnson</td>
                    <td>mjohnson@gmail.com</td>
                    <td>Dec 15, 2016</td>
                </tr>
            </table>
        </div>
    </div>
</div>




<form method="get" action="index.php" name="id" id="name">
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" id="test">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Customer List</h4>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                <div id="custom-search-input" class="row" style="padding-bottom: 20px;">
                    <div class="input-group">
                        <input id="search" type="text" minlength="12" class="form-control" placeholder="Please Enter IC No. To Search" name="search"/>
                        <span class="input-group-btn">
                            <button class="btn btn-danger" type="button" onclick="show(document.getElementById('search').value)">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                    <p style="margin-top: 10px; text-decoration: underline">Enter 12 IC Number Without Hyphens. Eg: 123456789101</p>
                </div>
                </div>

                <div id="custList" class="row">

                </div>
            </div>
            <div class="modal-footer">
                <a><button id="go" type="button" onclick="location.href='index.php?page=chooseCar&id='+check.value" class="btn btn-success">Go</button></a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#name').on('keyup keypress', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            e.preventDefault();
            alert("Please Use The Search Button.");
            return false;
        }
    });

</script>
