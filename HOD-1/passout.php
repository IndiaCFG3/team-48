<?php
include("../HR/connection.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - HR </title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>HOD</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="table.html"><i class="fas fa-table"></i><span>Table</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
            <div class="container-fluid">
                <h3 class="text-dark mb-4">HOD</h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Passouts Info</p>
                    </div>
                    <div class="card-body">
                        <div class="row">                          
                        </div>
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                        <?php
                        $query = "SELECT * FROM passout";
        $query_run = mysqli_query($con, $query);
        ?>
                            <table class="table my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Region</th>
										<th>LDCM name</th>
										<th>Batch code</th>
										<th>Status</th>
										<th>Start date</th>
										<th>End date</th>
										<th>course name</th>
										<th>Full name</th>
										<th>DOB</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
        if(mysqli_num_rows($query_run) > 0)        
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
               ?>
          <tr>
            <td><?php  echo $row['region']; ?></td>
            <td><?php  echo $row['ldcm name']; ?></td>
            <td><?php  echo $row['batch code']; ?></td>
            <td><?php  echo $row['status']; ?></td>
            <td><?php  echo $row['start date']; ?></td>
            <td><?php  echo $row['end date']; ?></td>
            
            <td><?php  echo $row['course name']; ?></td>
            
            <td><?php  echo $row['student id']; ?></td>
            
            <td><?php  echo $row['DOB']; ?></td>
            


            



          </tr>
          <?php
            } 
        }
        else {
            echo "No Record Found";
        }
        ?>
                                </tbody>
                            </table>
                        </div>
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

</html>
