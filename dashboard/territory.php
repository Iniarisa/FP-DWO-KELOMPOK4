<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Adventureworks</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom Colors -->
    <style>
        .bg-orange-light { background-color: #ffcc80 !important; }
        .text-orange-dark { color: #ff6600 !important; }
        .border-left-orange-dark { border-left: 0.25rem solid #ff6600 !important; }
    </style>

</head>

<body id="page-top" class="bg-orange-light">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php";?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include "topbar.php";?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-orange-dark">Data Wilayah Customer</h1>
                    <p class="mb-4">Source: Database Adventureworks</p>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-orange-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-orange-dark text-uppercase mb-1">
                                                Jumlah Wilayah</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                                <?php  
                                                 $host       = "localhost";
                                                 $user       = "root";
                                                 $password   = "";
                                                 $database   = "dwo";
                                                 $mysqli     = mysqli_connect($host, $user, $password, $database);

                                                 $sql = "SELECT COUNT(addressID) as jumlah_wilayah from address";
                                                     $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo number_format($row2['jumlah_wilayah'],0,".",".");
                                                        }
                                                ?>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-12 col-lg-12">
                            <div class="card border-left-orange-dark shadow h-100 py-2">
                            <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-orange-dark">Kategori Wilayah Customer terbanyak</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body-store">
                                    <div class="chart-area-store">
                                        <div id="canvas-holder" style="width:100%">
                                            <canvas id="chart-area"></canvas>
                                        </div>
                                        <!-- <canvas id="myAreaChart"></canvas> -->
                                        <?php
                                            $host       = "localhost";
                                            $user       = "root";
                                            $password   = "";
                                            $database   = "dwo";
                                            $mysqli     = mysqli_connect($host, $user, $password, $database);
                                            $wilayah = mysqli_query($mysqli,"SELECT DISTINCT(country), COUNT(fs.customerID) as total FROM fact_sales fs JOIN address tr ON fs.addressID = tr.addressID GROUP BY tr.country ORDER BY total DESC");
                                            while($row = mysqli_fetch_array($wilayah)){
                                                $jenis_wilayah[] = $row['country'];

                                                $query = mysqli_query($mysqli,"SELECT COUNT(fs.customerID) as total FROM fact_sales fs JOIN address tr ON fs.addressID = tr.addressID WHERE tr.country='".$row['country']."'");
                                                $row = $query->fetch_array();
                                                $total[] = $row['total'];
                                            };        
                                        ?>
                                        <figure class="highcharts-figure">
                                            <div id="container"></div>
                                            <p class="highcharts-description"></p>
                                        </figure>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Kelompok 4 DWO 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script>
        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data:<?php echo json_encode($total); ?>,
                    backgroundColor: [
                    '#FF0000', // Tomato
                    '#FF4500', // OrangeRed
                    '#FFD700', // Gold
                    '#98FB98', // PaleGreen
                    '#8A2BE2', // BlueViolet
                    '#FF1493', // DeepPink
                    '#20B2AA', // LightSeaGreen
                    '#D2691E', // Chocolate
                    '#7FFF00', // Chartreuse
                    '#32CD32', // LimeGreen
                    '#FF8C00', // DarkOrange
                    '#ADFF2F', // GreenYellow
                    '#FF00FF', // Fuchsia
                    '#1E90FF', // DodgerBlue
                    '#00FA9A', // MediumSpringGreen
                    '#00BFFF'  // DeepSkyBlue
                    ],
                    label: 'Presentase wilayah customer terbanyak'
                }],
                labels: <?php echo json_encode($jenis_wilayah); ?>},
            options: {
                responsive: true
            }
        };

        window.onload = function() {
            var ctx = document.getElementById('chart-area').getContext('2d');
            window.myPie = new Chart(ctx, config);
        };

        document.getElementById('randomizeData').addEventListener('click', function() {
            config.data.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return randomScalingFactor();
                });
            });

            window.myPie.update();
        });

        var colorNames = Object.keys(window.chartColors);
        document.getElementById('addDataset').addEventListener('click', function() {
            var newDataset = {
                backgroundColor: [],
                data: [],
                label: 'New dataset ' + config.data.datasets.length,
            };

            for (var index = 0; index < config.data.labels.length; ++index) {
                newDataset.data.push(randomScalingFactor());

                var colorName = colorNames[index % colorNames.length];
                var newColor = window.chartColors[colorName];
                newDataset.backgroundColor.push(newColor);
            }

            config.data.datasets.push(newDataset);
            window.myPie.update();
        });

        document.getElementById('removeDataset').addEventListener('click', function() {
            config.data.datasets.splice(0, 1);
            window.myPie.update();
        });
    </script>

</body>

</html>