<?php

    include('./inc/db_sql_query.php');
    include('./template-parts/header.php');
    

?>
    <!-- wallet -->
    <div class="wallet" style="padding-top:20px">
        <div class="container-fluid">
            <div class="container-fluid text-center py-5" >
            
                <div class="row">
                <?php
                $district=$_POST['district_name'];
                $results = DBSELECT('hospital', '*', "district='$district'", $conn);
                    
                    while($row = $results->fetch_assoc()){ ?>
                        <div class="col-6 mt-2">
                            <div class="card" style="width: 35rem; fixed;">
                                <div class="card-body" style="fixed";>
                                
                                <h5 class="card-title text-dark h2 border-bottom"><?php echo $row['name']; ?></h5>
                                <p class="card-text text-dark h6 border-bottom pb-2">
                                Area: <?php echo $row['Area']; ?> <br>
                                District: <?php echo $row['district']?>
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
    <?php
    include('./template-parts/footer.php');
?>