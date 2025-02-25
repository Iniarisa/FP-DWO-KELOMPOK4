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
                    <h1 class="h3 mb-2 text-orange-dark">Data Total Pendapatan</h1>
                    <p class="mb-4">Source: Database Adventureworks</p>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-orange-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-orange-dark text-uppercase mb-1">
                                                Total Pendapatan</div>
                                            <div class="h5 mb-0 font-weight-bold text-orange-dark">
                                                <?php  
                                                 $host       = "localhost";
                                                 $user       = "root";
                                                 $password   = "";
                                                 $database   = "dwo";
                                                 $mysqli     = mysqli_connect($host, $user, $password, $database);

                                                 $sql = "SELECT SUM(total_price) as total_pendapatan from fact_sales";
                                                 $query = mysqli_query($mysqli,$sql);
                                                 while($row2=mysqli_fetch_array($query)){
                                                    echo "$".number_format($row2['total_pendapatan'],0,".",",");
                                                 }
                                                ?>  
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                             <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-orange-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-orange-dark text-uppercase mb-1">
                                                Jumlah Transaksi</div>
                                            <div class="h5 mb-0 font-weight-bold text-orange-dark">
                                            <?php
                                            $sql = "SELECT COUNT(customerID) as jumlah_transaksi from fact_sales";
                                            $query = mysqli_query($mysqli,$sql);
                                                 while($row2=mysqli_fetch_array($query)){
                                                    echo number_format($row2['jumlah_transaksi'],0,".",".");
                                                 }
                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                           <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-orange-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-orange-dark text-uppercase mb-1">Total Pendapatan Tahun 2001
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-orange-dark">
                                                    <?php
                                                    $sql = "SELECT d.Tahun Year, sum(fs.total_price) as tot_amount FROM fact_sales fs JOIN time d ON (d.dateID = fs.dateID)where Tahun='2001'";
                                                     $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo "$".number_format($row2['tot_amount'],0,".",",");
                                                        }
                                                    ?>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-orange-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-orange-dark text-uppercase mb-1">Total Pendapatan Tahun 2002
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-orange-dark">
                                                    <?php
                                                    $sql = "SELECT d.Tahun Year, sum(fs.total_price) as tot_amount FROM fact_sales fs JOIN time d ON (d.dateID = fs.dateID)where Tahun='2002'";
                                                     $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo "$".number_format($row2['tot_amount'],0,".",",");
                                                        }
                                                    ?>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-orange-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-orange-dark text-uppercase mb-1">Total Pendapatan Tahun 2003
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-orange-dark">
                                                    <?php
                                                    $sql = "SELECT d.Tahun Year, sum(fs.total_price) as tot_amount FROM fact_sales fs JOIN time d ON (d.dateID = fs.dateID)where Tahun='2003'";
                                                     $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo "$".number_format($row2['tot_amount'],0,".",",");
                                                        }
                                                    ?>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-orange-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-orange-dark text-uppercase mb-1">Total Pendapatan Tahun 2004
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-orange-dark">
                                                    <?php
                                                    $sql = "SELECT d.Tahun Year, sum(fs.total_price) as tot_amount FROM fact_sales fs JOIN time d ON (d.dateID = fs.dateID)where Tahun='2004'";
                                                        $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo "$".number_format($row2['tot_amount'],0,".",",");
                                                        }
                                                    ?>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-orange-dark">Pendapatan Setiap Bulan</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-orange-dark">Pendapatan Per Tahun (Dalam Dollar)</h6>
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

                                            $tahun = mysqli_query($mysqli,"SELECT DISTINCT(Tahun) from time");
                                            while($row = mysqli_fetch_array($tahun)){
                                                $jenis_tahun[] = $row['Tahun'];

                                                $query = mysqli_query($mysqli,"SELECT SUM(fp.total_price) as amount, d.Tahun FROM fact_sales fp JOIN time d ON fp.dateID=d.dateID WHERE Tahun='".$row['Tahun']."' GROUP BY Tahun");
                                                $row = $query->fetch_array();
                                                $amount[] = $row['amount'];
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

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Area Chart Javascript -->
    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

        function number_format(number, decimals, dec_point, thousands_sep) {
          // *     example: number_format(1234.56, 2, ',', ' ');
          // *     return: '1 234,56'
          number = (number + '').replace(',', '').replace(' ', '');
          var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            s = '',
            toFixedFix = function(n, prec) {
              var k = Math.pow(10, prec);
              return '' + Math.round(n * k) / k;
            };
          // Fix for IE parseFloat(0.55).toFixed(0) = 0;
          s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
          if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
          }
          if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
          }
          return s.join(dec);
        }

        <?php
            $host= "localhost";
            $user= "root";
            $password= "";
            $database= "dwo";
            $conn= mysqli_connect($host, $user, $password, $database);
            $bulan = "SELECT CONCAT(MONTHNAME(d.Bulan), ' ', YEAR(d.Tahun)) bulan FROM fact_sales f JOIN time d ON f.dateID=d.dateID GROUP BY d.bulan ORDER BY d.dateID";
            $total = "SELECT SUM(f.total_price) Total FROM fact_sales f JOIN time d ON f.dateID=d.dateID GROUP BY d.bulan ORDER BY d.dateID";
            $i=1;
            $query_bulan=mysqli_query($conn, $bulan);
            $jumlah_bulan = mysqli_num_rows($query_bulan);
            $chart_bulan="";
            while($row=mysqli_fetch_array($query_bulan)){
            if ($i<$jumlah_bulan) {
                $chart_bulan.='"';
                $chart_bulan.=$row['bulan'];
                $chart_bulan.='",';
                $i++;
            }else{
                $chart_bulan.='"';
                $chart_bulan.=$row['bulan'];
                $chart_bulan.='"';
            }
            }
            $a=1;
            $query_total = mysqli_query($conn, $total);
            $jumlah_total = mysqli_num_rows($query_total);
            $chart_total="";
            while ($row1=mysqli_fetch_array($query_total)) {
                if ($a<$jumlah_total) {
                    $chart_total.=$row1['Total'];
                    $chart_total.=',';
                    $a++;
                }else{
                    $chart_total.=$row1['Total'];
                }
            }
        ?>

var ctx = document.getElementById("myAreaChart");
var myBarChart = new Chart(ctx, {
  type: 'bar',  // Ubah tipe chart menjadi 'bar'
  data: {
    labels: [<?php echo $chart_bulan; ?>],  // Label bulan
    datasets: [{
      label: "Earnings",  // Label dataset
      backgroundColor: [
        "rgba(255, 223, 0, 0.75)",  // Kuning
        "rgba(255, 165, 0, 0.75)",  // Oranye
        "rgba(255, 69, 0, 0.75)",   // Merah
        "rgba(255, 99, 71, 0.75)",  // Merah Terang
        "rgba(255, 140, 0, 0.75)",  // Oranye Kekuningan
        "rgba(255, 69, 0, 0.75)",   // Merah
        "rgba(255, 140, 0, 0.75)",  // Oranye Kekuningan
        "rgba(255, 223, 0, 0.75)",  // Kuning
        "rgba(255, 99, 71, 0.75)",  // Merah Terang
        "rgba(255, 165, 0, 0.75)"   // Oranye
      ],  
      borderColor: [
        "rgba(255, 223, 0, 1)", 
        "rgba(255, 165, 0, 1)", 
        "rgba(255, 69, 0, 1)",  
        "rgba(255, 99, 71, 1)",  
        "rgba(255, 140, 0, 1)",  
        "rgba(255, 69, 0, 1)",  
        "rgba(255, 140, 0, 1)",  
        "rgba(255, 223, 0, 1)",  
        "rgba(255, 99, 71, 1)",  
        "rgba(255, 165, 0, 1)"  
      ],  // Warna border untuk bar
      borderWidth: 1,
      data: [<?php echo $chart_total;?>],  // Data total earnings
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: true,  // Tampilkan garis grid pada sumbu X
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7  // Batasi jumlah ticks pada sumbu X
        }
      }],
      yAxes: [{
        ticks: {
          beginAtZero: true,  // Mulai dari 0 pada sumbu Y
          maxTicksLimit: 5,  // Batasi jumlah ticks pada sumbu Y
          padding: 10,
          callback: function(value, index, values) {
            return '$' + number_format(value);  // Format angka dengan simbol dolar
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false  // Sembunyikan legend
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': $' + number_format(tooltipItem.yLabel);  // Format nilai tooltip
        }
      }
    }
  }
});

    </script>
    
    <!-- Doughnat Javascript -->
    <script>
        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data:<?php echo json_encode($amount); ?>,
                    backgroundColor: [
                    '#4169E1',
                    '#E3170D',
                    '#191970',
                    '#0000CD',
                    '#0000FF'
                    ],
                    label: 'Presentase Pendapatan Per Tahun'
                }],
                labels: <?php echo json_encode($jenis_tahun); ?>},
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