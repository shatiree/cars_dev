<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <!-- Website Overview -->
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title white-text"></h3>
                    </div>
                    <div class="panel-body">
                        <!--div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="text" placeholder="Filter Pages...">
                            </div>
                        </div-->
                        <br>

                        <div class="alert alert-success">
                            <div align="center">
                                <strong>Success!</strong> Your Form Had Been Submitted. You Are Recommended To Save The PDF For Further References.

                                <div class="row" style="margin-top: 10px">
                                    <a target="_blank" class="btn btn-success" href="exportPDF_DO.php?bf_id=<?php echo $_GET['do_id'];?>">Export PDF</a>
                                    <button type="button" class="btn btn-danger" onclick="location.href='index.php?page=home'">Close</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>