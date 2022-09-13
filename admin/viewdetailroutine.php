<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>
<?php include('../constant/layout/sidebar.php');
?>
 

  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">View Routines</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View Routines</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                
                <!-- /# row -->
                 <div class="card">
                            <div class="card-body">
                              
                            
                         
                                <div class="table-responsive m-t-40">
                                  <?php
    $id=$_GET['id'];
    $sql="Select * from timetable  Where tid=$id";
    $res=mysqli_query($con, $sql);
           if($res){
                    $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
        
                  }
            
    ?>
    <table width="619" height="673" border="1" align="center" class="table table-bordered table-striped" style="width:800px;" id="myTable">
  <tr>
    <td height="87" colspan="2"><b>Routine Name:<?php echo $row['tname'] ?></b> &ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;<span align="right"> <img src="logo.png" width="121" height="114"  alt=""/></span></td>
    </tr>
  <tr>
    <td width="186">Day 1:</td>
    <td><?php echo $row['day1'] ?></td>
  </tr>
  <tr>
    <td height="96">Day 2:</td>
    <td><?php echo $row['day2'] ?></td>
  </tr>
  <tr>
    <td height="87">Day 3:</td>
    <td><?php echo $row['day3'] ?></td>
  </tr>
  <tr>
    <td height="92">Day 4:</td>
    <td><?php echo $row['day4'] ?></td>
  </tr>
  <tr>
    <td height="84">Day 5:</td>
    <td><?php echo $row['day5'] ?></td>
  </tr>
  <tr>
    <td height="75">Day 6:</td>
    <td><?php echo $row['day6'] ?></td>
  </tr>
        </table>
                                </div>
                            </div>
                        </div>
               
                <!-- /# row -->

                <!-- End PAge Content -->
           

<?php include('../constant/layout/footer.php');?>
 

