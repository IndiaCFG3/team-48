<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dept - Audit</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
	
	
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">

		  // Load the Visualization API and the corechart package.
		  google.charts.load('current', {packages: ['corechart', 'bar']});
		  google.charts.setOnLoadCallback(drawChart);
		  
		  function drawChart() {

			// Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Centre Name');
			data.addColumn('number', 'Overall Score');
			
			for(var i = 0; i < my_2d.length; i++)
			data.addRow([my_2d[i][0], parseInt(my_2d[i][1])]);
		   var options = {
			  title: 'Centre Scores',
			  hAxis: {title: 'Centre Name',  titleTextStyle: {color: '#333'}},
			  vAxis: {minValue: 0}
			};

			var chart = new google.charts.Bar(document.getElementById('chart_div'));
			chart.draw(data, options);
		   }

	</script>
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Brand</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="table.html"><i class="fas fa-table"></i><span>Table</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Team - Audit</h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Employee Info</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        </div>
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Centre Name</th>
                                        <th>Number of batches per Centre</th>
                                        <th>Score(Out of 100)</th>
                                        <th>Rating(Out of 10)</th>
                                        <th>Performance</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>a</td>
                                        <td>a</td>
                                        <td>a</td>
                                        <td>a</td>
                                        <td>a<br></td>

                                    </tr>
                                </tbody>
                            </table>
							<?php
								require "database1.php";
								if($stmt = $connection->query("SELECT CentreName, Score FROM audit")){
								$php_data_array = Array();  
								while ($row = $stmt->fetch_row()) {   
								   $php_data_array[] = $row; 
								   }
								}else{
								echo $connection->error;
								}
								echo "<script>
										var my_2d = ".json_encode($php_data_array)."
								</script>";
							?>
                            

                        </div>
						<div id="chart_div" style="width: 900px; height: 500px;"></div>
                        <input type="button" onclick="printDiv('dataTable')" onclick="printDiv('piechart')" value="print / save / download" />
                    </div>

                </div>
            </div>
        </div>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>


</body>
<script type="text/javascript">
function printDiv(divName) {
   var printContents = document.getElementById(divName).innerHTML;
   var originalContents = document.body.innerHTML;

   document.body.innerHTML = printContents;

   window.print();

   document.body.innerHTML = originalContents;
}
</script>

</html>