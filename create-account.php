<?php
    session_start(); //Starting Session 
    if(isset($_SESSION['email'], $_SESSION['password'], $_SESSION['uid'])){
        header('Location: index.php');
        exit;
    }
    include('inc/db_sql_query.php');
    
    $message = '';
    if(isset($_POST['save'])){
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        $form_data = array(
            'name' => $_POST['full_name'],
            'phone' => $_POST['phone_number'],
            'email' => $_POST['email'],
            'district' => $_POST['district'],
            'area' => $_POST['area'],
            'blood_group' => $_POST['blood_group'],
            'donate_interested' => $_POST['donate_interested'],
            'password' => md5($password),
        );
        
        if($password == $confirm_password){
            $checkEmail = DBSELECT('users', 'email', "email = '{$_POST['email']}'", $conn);
            if(mysqli_num_rows($checkEmail) === 1){
                $message = 'Email already exist!';
            }else{
                $result = DBInsert('users', $form_data, $conn);
                if($result){
                    $message = 'Registration Success.';
                }else{
                    $message = 'Registration Failed';
                }
            }
        }else{
            $message = 'Password and Confirm password not same!';
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
                        <h2>Create Account</h2>
                        <p><?php echo $message; ?></p>
                    </div>
                </div>
                <div class=" col-md-10 offset-md-1">
                    <form id="request" class="main_form" method="post" action="create-account.php">
                        <div class="row">
                            <div class="col-md-12 ">
                                <input required class="contactus" placeholder="Full Name" type="text" name="full_name" value="<?php echo (isset($_POST['full_name']) ? $_POST['full_name'] : ''); ?>">
                            </div>
                            <div class="col-md-6">
                                <input required class="contactus" placeholder="Phone number" type="text" name="phone_number" value="<?php echo (isset($_POST['phone_number']) ? $_POST['phone_number'] : ''); ?>">
                            </div>
                            <div class="col-md-6">
                                <input type="email" required class="contactus" placeholder="Email" name="email" value="<?php echo (isset($_POST['email']) ? $_POST['email'] : ''); ?>">
                            </div>
                            <div class="col-md-6">
                                <input type="text" required class="contactus" placeholder="District"name="district" value="<?php echo (isset($_POST['district']) ? $_POST['district'] : ''); ?>">
                            </div>
                            <div class="col-md-6">
                                <input type="text" required class="contactus" placeholder="Area" name="area" value="<?php echo (isset($_POST['area']) ? $_POST['area'] : ''); ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="blood">Choose Your blood group: </label>
                                <select id="blood" name="blood_group" class="contactus">
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="wish">Are you interested to donate blood ?</label>
                                <select id="wish" name="donate_interested" class="contactus">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <input required type="password" class="contactus" placeholder="Password" type="type" name="password">
                            </div>
                            <div class="col-md-6">
                                <input required type="password" class="contactus" placeholder="Confirm Password" type="type" name="confirm_password">
                            </div>
                            
                            <div class="col-md-12">
                                <button type="submit" name="save" class="send_btn">Submit</button>
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