<?php 
session_start(); //Starting Session 
if(isset($_SESSION['email'], $_SESSION['password'], $_SESSION['uid'])){
    header('Location: index.php');
    exit;
}
date_default_timezone_set("Asia/Dhaka");
require('inc/db_sql_query.php');
$Errmsg = $msg = ""; 

$email = '';
$password = '';
if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email_address']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $md5password = md5($password);
    if(empty($email)){
      $Errmsg = "Please enter email address!";
    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $Errmsg = "Invalid email format"; 
    }else if(empty($password)){
      $Errmsg = "Please enter password!"; 
    }else{
      $sql = "SELECT id,email,password,name FROM users WHERE email='{$email}' AND password='{$md5password}' ";
      $result = $conn -> query($sql);
      $count = mysqli_num_rows($result);
        if($count==1){
            while($row = $result -> fetch_assoc()){
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = md5("SessionPassed");
                $_SESSION['uid'] = $row['id'];
                header('Location: index.php');
                echo "<script>location.reload()</script>";
            }
      }else{
        $msg = "Invalid email address or password!";
      }
    }
  }
  
    include('./template-parts/header.php');
?>

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>Log in to your account </h2>
                    </div>
                </div>
                <div class=" col-md-10 offset-md-1">
                    <form id="request" class="main_form" method="post" action="login.php">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Email</label>
                                <input type="text" required class="contactus"name="email_address" value="<?php echo (isset($_POST['email_address']) ? $_POST['email_address'] : ''); ?>">
                            </div>

                            <div class="col-md-12">
                                <label for="">Password</label>
                                <input type="password" required class="contactus"name="password">
                            </div>

                            <div class="col-md-12">
                                <button type="submit" name="submit" class="send_btn">Log in</button>
                            </div>
            
                            <div class="col-md-12 text-center">
                                <a href="create-account.php" class="btn btn-light btn-outline-light mt-5">Create New Account</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
    
<?php
    include('./template-parts/footer.php');
?>