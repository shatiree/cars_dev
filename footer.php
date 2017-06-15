


</div>
</div>
</section>

<footer id="footer">
  <p class="text-center">Copyright Innovative Swift Sdn. Bhd. &copy; 2017</p>
</footer>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Placed at the end of the document so the pages load faster -->

<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<script type="text/javascript">

    $('.btnNext').click(function(){
        $('.nav-tabs > .active').next('li').find('a').trigger('click');
    });

    $('.btnPrevious').click(function(){
        $('.nav-tabs > .active').prev('li').find('a').trigger('click');
    });


    $('#back').click(function(){
        if (window.confirm('Are You Sure You Wanted To Go Back? The Info You Entered Will Not Be Saved.'))
        {
            window.location = 'index.php?page=home';
        }
    });

    function addRow(tableID) {

        var table = document.getElementById(tableID);

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        var colCount = table.rows[0].cells.length;

        for(var i=0; i<colCount; i++) {

            var newcell = row.insertCell(i);

            newcell.innerHTML = table.rows[0].cells[i].innerHTML;
            //alert(newcell.childNodes);
            switch(newcell.childNodes[0].type) {
                case "text":
                    newcell.childNodes[0].value = "";
                    break;
                case "checkbox":
                    newcell.childNodes[0].checked = false;
                    break;
                case "select-one":
                    newcell.childNodes[0].selectedIndex = 0;
                    break;
            }
        }
    }

    function deleteRow(tableID) {
        try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;

            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    if(rowCount <= 1) {
                        alert("Cannot delete all the rows.");
                        break;
                    }
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }

            }
        }catch(e) {
            alert(e);
        }
    }



    var changeInput = function (val){
        var input = document.getElementById("model_id");
        input.value = val;
    };



    $('.calc').keyup(function() {
        var result = 0;
        $('#total').attr('value', function() {
            $('.calc').each(function() {
                if ($(this).val() !== '') {
                    result += parseFloat($(this).val());
                }
            });
            return result;
        });
    });

</script>

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

<script type="text/javascript">
    function show(str) {
        if (str == "") {
            document.getElementById("custList").innerHTML = "";
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("custList").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","test.php?search="+str,true);
            xmlhttp.send();
        }
    }

    function showcv(str) {
        if (str == "") {
            document.getElementById("cv").innerHTML = "";
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("cv").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","getColorVariant.php?type="+str,true);
            xmlhttp.send();
        }
    }

</script>


<!------- Pie Chart -------->
<script type="text/javascript">
    $(document).ready(function () {
        Highcharts.chart('pie', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Total Car Sold by Type'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: <?php
                echo $data;
                ?>
            }]
        });
    });
</script>



<!-- Line Chart Civic -->

<script>
    $(document).ready(function () {

        Highcharts.chart('line1', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'Civic Total Production and Sales '
            },

            xAxis: {
                categories: ['2013', '2014', '2015', '2016', '2017',]
            },
            yAxis: {
                title: {
                    text: 'Buyer'
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Sales',
                data:  <?php
                echo $datalineCivic;
                ?>,
                color: '#cbff62'
            },
                {
                    name: 'Production',
                    data:  <?php
                    echo $datalineCivic2;
                    ?>,
                    color: '#ff545d'
                }]
        });
    });
</script>

<!-- Line Chart Accord-->

<script>
    $(document).ready(function () {

        Highcharts.chart('line2', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'Accord Total Production and Sales '
            },

            xAxis: {
                categories: ['2013', '2014', '2015', '2016', '2017',]
            },
            yAxis: {
                title: {
                    text: 'Buyer'
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Sales',
                data:  <?php
                echo $datalineAccord;
                ?>,
                color: '#cbff62'
            },
                {
                    name: 'Production',
                    data:  <?php
                    echo $datalineAccord2;
                    ?>,
                    color: '#ff545d'
                }]
        });
    });
</script>

<!-- Line Chart City-->

<script>
    $(document).ready(function () {

        Highcharts.chart('line3', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'City Total Production and Sales '
            },

            xAxis: {
                categories: ['2013', '2014', '2015', '2016', '2017',]
            },
            yAxis: {
                title: {
                    text: 'Buyer'
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Sales',
                data:  <?php
                echo $datalineCity;
                ?>,
                color: '#cbff62'
            },
                {
                    name: 'Production',
                    data:  <?php
                    echo $datalineCity2;
                    ?>,
                    color: '#ff545d'
                }]
        });
    });
</script>


<!-- Bar Chart-->
<script>
    $(document).ready(function () {

        Highcharts.chart('bar', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Total Car Sales  by Type Yearly'
            },
            xAxis: {
                categories: ['2013', '2014', '2015', '2016']
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total fruit consumption'
                }
            },
            tooltip: {
                pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
                shared: true
            },
            plotOptions: {
                column: {
                    stacking: 'percent'
                }
            },
            series: [{
                name: 'City',
                data: <?php
                echo $databar;
                ?>
            }, {
                name: 'Accord',
                data: <?php
                echo $databar2;
                ?>
            }, {
                name: 'Civic',
                data:  <?php
                echo $databar3;
                ?>
            }]
        });
    });
</script>


<!-- Web Chart -->
<script>
    $(document).ready(function () {
        Highcharts.chart('web', {

            chart: {
                polar: true,
                type: 'line'
            },

            title: {
                text: 'Cost of Operations',
                x: -200
            },

            pane: {
                size: '80%'
            },

            xAxis: {
                categories: ['Sales', 'Marketing', 'Development', 'Customer Support',
                    'Information Technology', 'Administration'],
                tickmarkPlacement: 'on',
                lineWidth: 0
            },

            yAxis: {
                gridLineInterpolation: 'polygon',
                lineWidth: 0,
                min: 0
            },

            tooltip: {
                shared: true,
                pointFormat: '<span style="color:{series.color}">{series.name}: <b>${point.y:,.0f}</b><br/>'
            },

            legend: {
                align: 'right',
                verticalAlign: 'top',
                y: 70,
                layout: 'vertical'
            },

            series: [{
                name: '2014',
                data:  <?php
                echo $dataweb;
                ?>,
                pointPlacement: 'on'
            }, {
                name: '2015',
                data:  <?php
                echo $dataweb2;
                ?>,
                pointPlacement: 'on'
            }, {
                name: '2016',
                data:  <?php
                echo $dataweb3;
                ?>,
                pointPlacement: 'on',
                color: '#ad66ff'

            }]

        });
    });
</script>

<!-- Table Filter -->

<script>
    $(document).ready(function () {

        (function ($) {

            $('#filter').keyup(function () {

                var rex = new RegExp($(this).val(), 'i');
                $('.searchable tr').hide();
                $('.searchable tr').filter(function () {
                    return rex.test($(this).text());
                }).show();

            })

        }(jQuery));

    });
</script>

</body>
</html>
