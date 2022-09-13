<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/uploadImage/Logo/favicon.png">
     <?php
     
             include('./constant/connect.php');
             // $sql_head_title = "select * from manage_website"; 
             // $result_head_title = $conn->query($sql_head_title);
             // $row_head_title = mysqli_fetch_array($result_head_title);
             ?>
    <title>Crunch Fitness GMS</title>

    <link href="./assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
  <link href="./assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="./assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./assets/css/helper.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
 <link rel="stylesheet" href="./assets/css/lib/html5-editor/bootstrap-wysihtml5.css" />
 <link href="./assets/css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="./assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
     <link href="./assets/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    