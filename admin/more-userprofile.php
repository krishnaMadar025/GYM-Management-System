<link rel="stylesheet" href="popup_style.css">
 
<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>

<?php include('../constant/layout/sidebar.php');?>   



 <?php
 include('../constant/connect.php');
if(isset($_POST['submit'])){

  $usrname=$_POST['login_id'];
  $fulname=$_POST['full_name'];

  $query="update admin set username='".$usrname."',Full_name='".$fulname."' where username='".$_SESSION['full_name']."'";

  if(mysqli_query($con,$query)){
    echo "<head><script>alert('Profile Change ');</script></head></html>";

     echo "<meta http-equiv='refresh' content='0; url=../constant/logout.php'>";
  }
  else{
    echo "<head><script>alert('NOT SUCCESSFUL, Check Again');</script></head></html>";
   echo "error".mysqli_error($con);
  }

  
}

?>
   


  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> Edit user profile</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Edit user profile</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-8" style="margin-left: 10%;">
                        <div class="card">
                            <div class="card-title">
                               
                            </div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">ID</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="login_id" value="<?php echo $_SESSION['user_data']; ?>" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">FULL NAME</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text" name="full_name" id="textfield2" value="<?php echo $_SESSION['username']; ?>" maxlength="25" required>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">PASSWORD</label>
                                                <div class="col-sm-9">
                                                    <span class="form-control">*********</span> <a href="change_pwd.php" class="btn btn-warning btn-flat m-b-30 m-t-30" style="color:black;">Change password</a> <span class="help-block">*For security reasons hidden</span>
                                                    <div class="col-sm-9">
                                                     <input class="btn btn-info btn-flat m-b-30 m-t-30" type="submit" name="submit" id="submit" value="SUBMIT" >
                                                     <input class="btn btn-info btn-flat m-b-30 m-t-30" type="reset" name="reset" id="reset" value="Reset">
                                                      </div>
                                                </div>
                                            </div>
                                        </div>

                                        

                                        
                                         

                                       
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               
                <!-- /# row -->

                <!-- End PAge Content -->
           

<?php include('../constant/layout/footer.php');?>
 

