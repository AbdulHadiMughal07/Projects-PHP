<?php

include("header.php");
include("connection.php");

$sql = "select * from role";
$result = mysqli_query($conn,$sql);

?>


<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Element</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                        </ol>
                    </div>
                </div>
                
                <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Horizontal Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>

                                    <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Role</label>
                                                <select id="inputState" class="form-control">
                                                    <?php
                                                        while($rows =
                                                        mysqli_fetch_assoc($result)){
                                                            
                                                            ?>
                                                        <?php } ?>

                                                    <option selected>Choose...</option>
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                            </div>
                                    
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="1234 Main St">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                            
                                            
                                        </div>
                                        
                                            
                                        </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                </div>
                            </div>
                        </div>


                        </div>
                        </div>
                        

                        <?php


            include("footer.php")

        ?>