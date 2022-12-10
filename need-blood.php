<?php
    include('./inc/db_sql_query.php');
    include('./template-parts/header.php');
  
?>
    <!-- wallet -->
    <div class="wallet">
        <div class="container-fluid" style="padding-top: -100px; margin-top: -100px;">
            <div class="container-fluid text-center py-5">
                <div class="row">

                <?php
                $bg=$_POST['bg'];
                $district=$_POST['district_name'];
                    $results = DBSELECT('users', '*', "blood_group='$bg' and district='$district'", $conn);
                    
                    while($row = $results->fetch_assoc()){ ?>
                        <div class="col-6 mt-2">
                            <div class="card" style="width: 35rem; fixed">
                                <div class="card-body">
                                <!--<img class="rounded-circle w-80 h-50 img-fluid" src="assets\images\rifat.jpg" alt="">-->
                                <h5 class="card-title text-dark h2 border-bottom"><?php echo $row['name']; ?> 
                                <br>
                                '<?php echo $row['blood_group']; ?>' </h5>
                                <p class="card-text text-dark h6 border-bottom pb-2">
                                Phone: <?php echo $row['phone']; ?> <br>
                                Email: <?php echo $row['email']; ?> <br>
                                Address: <?php echo $row['area'].', '.$row['district']; ?>
                                </p>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                ?>
                </div>
            
        </div>
        </div>
    </div>
    <?php
    include('./template-parts/footer.php');
?>