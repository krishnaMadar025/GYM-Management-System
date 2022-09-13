<!-- footer -->
           <style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #3a4651;
  color: white;
  text-align: center;
}
</style>
             <?php
             include('../constant/connect.php');
            $sql_footer = "select * from manage_website"; 
             $result_footer = $con->query($sql_footer);
             $row_footer = mysqli_fetch_array($result_footer);
             ?>
             <?php //echo $row_footer['footer'];?>
         <footer style="color: yellow; font-size:160%; text-align: center " class="footer"><b> BODY UNDER CONSTRUCTION MIND ON A MISSION  </b>
            
            </footer> 
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->  
    </div>
    <!-- End Wrapper -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Income', 'Members', 'New Joining'],
          ['2021', 1000, 400, 200],
          ['2020', 1170, 460, 250],
          ['2019', 660, 1120, 300],
          ['2018', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Organization Performance',
            subtitle: 'Income, Members, and New Joining: 2021-2022',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <!-- All Jquery -->
    <script src="../assets/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="../assets/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/lib/bootstrap/js/bootstrap.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="../assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>


 <script src="../assets/js/lib/sweetalert/sweetalert.min.js"></script>
    <!-- scripit init-->
    <script src="../assets/js/lib/sweetalert/sweetalert.init.js"></script>
   <!--  <script src="js/lib/datamap/d3.min.js"></script>
    <script src="js/lib/datamap/topojson.js"></script>
    <script src="js/lib/datamap/datamaps.world.min.js"></script>
    <script src="js/lib/datamap/datamap-init.js"></script> -->

    <script src="../assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="../assets/js/lib/weather/weather-init.js"></script>
    <script src="../assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="../assets/js/lib/owl-carousel/owl.carousel-init.js"></script>


   <!--  <script src="js/lib/chartist/chartist.min.js"></script>
    <script src="js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/lib/chartist/chartist-init.js"></script> -->
    <!--Custom JavaScript -->
    <script src="../assets/js/custom.min.js"></script>

   <!-- <script src="js/lib/sweetalert/sweetalert.min.js"></script>
     scripit init
    <script src="js/lib/sweetalert/sweetalert.init.js"></script> -->
     <script src="../assets/js/lib/datatables/datatables.min.js"></script>
    <script src="../assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="../assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="../assets/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="../assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="../assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="../assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="../assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="../assets/js/lib/datatables/datatables-init.js"></script>

     <script src="../assets/js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="../assets/js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="../assets/js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="../assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="../assets/js/lib/calendar-2/pignose.init.js"></script>

 <script src="../assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/js/lib/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="../assets/js/lib/html../assets/5-editor/bootstrap-wysihtml5.js"></script>
    <script src="../assets/js/lib/html5-editor/wysihtml5-init.js"></script>
    <script src="../assets/js/lib/skillSlider/jquery.skillslider.min.js"></script>
</body>

</html>
<script>
function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8);
};
                                        </script>
                                        <script>
    // WRITE THE VALIDATION SCRIPT.
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }    
</script>







 <!-- <link href="css/lib/sweetalert/sweetalert.css" rel="stylesheet"> -->
<?php //if(!empty($_SESSION['success'])) {  ?>
                <!-- <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Success</h4>
                                <div class="card-content">
                                    <p><?php //echo $_SESSION['success']; ?></p>
                                    <div class="sweetalert m-t-15">
                                        <button class="btn btn-success btn sweet-success">Sweet Success</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div> -->
 <?php //unset($_SESSION["success"]);  
//} ?>
<?php //if(empty($_SESSION['success'])) {  ?>
             <!-- <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Wrong</h4>
                                 <p><?php //echo $_SESSION['error']; ?></p>
                                <div class="card-content">
                                    <div class="sweetalert m-t-15">
                                        <button class="btn btn-danger btn sweet-wrong">Sweet Wrong</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div> -->
<?php //unset($_SESSION["error"]);  } ?>