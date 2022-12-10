<?php
    include('./template-parts/header.php');
?>
    <!-- wallet -->
    <div class="wallet">
        <div class="container-fluid" style="padding-top: -100px;margin-top: -100px;">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <a href="online-tv.php">
                        <div id="wa_hover" class="wallet_box text_align_center">
                            <i><img src="assets/images/wa1.svg" alt="#"/></i>
                            <h3>watch TV</h3>
                            <p>Underconstraction</p>
                        </div>
                    </a>
                </div>
                
                    <div class="col-lg-3 col-sm-6">
                        <a href="online-newspaper.php">
                        <div id="wa_hover" class="wallet_box text_align_center">
                            <i><img src="assets/images/wa2.svg" alt="#"/></i>
                            <h3>read Newspaper</h3>
                            <p>Underconstraction</p>
                        </div><a>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                <a href="hospital.php" data-toggle="modal" data-target="#hospital-filter">
                    <div id="wa_hover" class="wallet_box text_align_center">
                            <i><img src="assets/images/wa3.svg" alt="#"/></i>
                            <h3>Find Hospital</h3>
                            <p>Please enter here ... </p>
                        </div>
                </a>
                <!-- Modal -->
                <form action="hospital.php"method="post" >
                    <div class="modal fade" id="hospital-filter" tabindex="-1" role="dialog" aria-labelledby="hospital-filterTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title text-dark" id="hospital-filterTitle">Find Hospital</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="District">District</label>
                                        <select class="form-control" id="District" name="district_name">
                                            <option>Dhaka</option>
                                            <option>Gazipur</option>
                                            <option>Narsingdi</option>
                                            <option>Manikganj</option>
                                            <option>Munshiganj</option>
                                            <option>Narayanganj</option>
                                            <option>Mymensingh</option>
                                            <option>Sherpur</option>
                                            <option>Jamalpur</option>
                                            <option>Netrokona</option>
                                            <option>Tangail</option>
                                            <option>Faridpur</option>
                                            <option>Maradipur</option>
                                            <option>Shariatpur</option>
                                            <option>Rajbari</option>
                                            <option>Gopalganj</option>
                                            <option>Kishoreganj</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Search Hospital</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="need-blood.php" data-toggle="modal" data-target="#blood-filter">
                    <div id="wa_hover" class="wallet_box text_align_center">
                            <i><img src="assets/images/wa3.svg" alt="#"/></i>
                            <h3>Find Blood</h3>
                            <p>Please enter here ... </p>
                        </div>
                </a>
                <!-- Modal -->
                <form action="need-blood.php" method="post">
                    <div class="modal fade" id="blood-filter" tabindex="-1" role="dialog" aria-labelledby="blood-filterTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title text-dark" id="blood-filterTitle">Find Blood</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="District">District</label>
                                        <select class="form-control" id="District" name="district_name">
                                        <option>Dhaka</option>
                                            <option>Gazipur</option>
                                            <option>Narsingdi</option>
                                            <option>Manikganj</option>
                                            <option>Munshiganj</option>
                                            <option>Narayanganj</option>
                                            <option>Mymensingh</option>
                                            <option>Sherpur</option>
                                            <option>Jamalpur</option>
                                            <option>Netrokona</option>
                                            <option>Tangail</option>
                                            <option>Faridpur</option>
                                            <option>Maradipur</option>
                                            <option>Shariatpur</option>
                                            <option>Rajbari</option>
                                            <option>Gopalganj</option>
                                            <option>Kishoreganj</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="District">Blood Group</label>
                                        <select class="form-control" id="District" name="bg">
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>    
                                        <option>B-</option>
                                            <option>O+</option>
                                            <option>O-</option>
                                            <option>AB+</option>
                                            <option>AB-</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Find Blood</button>
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

<?php
    include('./template-parts/footer.php');
?>