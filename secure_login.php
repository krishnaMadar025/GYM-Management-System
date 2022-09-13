<link rel="stylesheet" href="popup_style.css">
<?php
include './constant/connect.php';
//session_start();
$user_id_auth = ltrim($_POST['user_id_auth']);
$user_id_auth = rtrim($user_id_auth);
//echo $user_id_auth;exit;

$pass_key = ltrim($_POST['pass_key']);
$pass_key = rtrim($_POST['pass_key']);

$user_id_auth = stripslashes($user_id_auth);
$pass_key     = stripslashes($pass_key);

//echo $pass_key;exit;

if($pass_key=="" &&  $user_id_auth==""){
   echo "<head><script>alert('Username and Password cannot be empty');</script></head></html>";
               echo "<meta http-equiv='refresh' content='0; url=index.php'>";
  
}
else if($pass_key=="" ){
   echo "<head><script>alert('Password cannot be empty');</script></head></html>";
               echo "<meta http-equiv='refresh' content='0; url=index.php'>";
  
}
else if($user_id_auth=="" ){
   echo "<head><script>alert('Username cannot be empty');</script></head></html>";
               echo "<meta http-equiv='refresh' content='0; url=index.php'>";
  
}

else{

$user_id_auth = mysqli_real_escape_string($con, $user_id_auth);
$pass_key     = mysqli_real_escape_string($con, $pass_key);
$sql          = "SELECT * FROM admin WHERE username='$user_id_auth' and pass_key='$pass_key'";
$result       = mysqli_query($con, $sql);
$count        = mysqli_num_rows($result);
if ($count == 1) {
    $row = mysqli_fetch_assoc($result);
    session_start();
    // store session data
    $_SESSION['user_data']  = $user_id_auth;
    $_SESSION['logged']     = "start";
    $_SESSION['full_name']  = $user_id_auth;
    $_SESSION['username']=$row['Full_name'];?>
        
         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Success 
    </h1>
    <p>Login Successfully</p>
    <p>
     <!--  <a href="index.php"><button class="button button--success" data-for="js_success-popup"></button></a> -->
     <?php echo "<script>setTimeout(\"location.href = './admin/dashboard.php';\",1500);</script>"; ?>
    </p>
  </div>
</div>
<?php } 
else {?>

  <div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Warn 
    </h1>
    <p>Username OR Password is Invalid</p>
    <p>
      <a href="index.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div>
   
<?php }
}
?>
