<?php
    include("header.php");
    include("connection.php");
    

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
                                <h4 class="card-title">Author Add</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" enctype="multipart/form-data">

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Author Name</label>
                                                <input type="text" name="authorname" class="form-control" placeholder="Enter Author Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Date Of Birh Image</label>
                                                <input type="date" name="dob" class="form-control" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Location</label>
                                                <input type="text" name="location" class="form-control" placeholder="Enter Your Location">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Image</label>
                                                <input type="file" name="image" class="form-control" >
                                            </div>

                                            </div>
                                            
                                        
                                        
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>


                        </div>
                        </div>




    <?php

        if (isset($_POST['submit'])) {
        $authorName =$_POST['authorname'];
        $dob =$_POST['dob'];
        $location =$_POST['location'];
        $image =$_FILES['image']['name'];

        $sql="insert into authors (author_name,dob,location,image) values ('$authorName','$dob','$location','$image')";
        $result = mysqli_query($conn ,$sql);

        if (isset($_FILES)) {
        
        $file_name = $_FILES['image']['name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($file_tmp , "images/authorImage/" .$file_name);
}

echo 
                "<script>
                alert('Your Author has been Added!');
                window.location.href = 'author_show.php';
                </script>";
}
    include("footer.php");
?>
