<?php 
include 'init/config/config.php';

$result = company::insertInstaller();

include 'init/includes/header.php';
?>

<div class='wrapper'>
    <div class='container-fluid'>


<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Installer</li>
                </ol>
            </div>
            <h4 class="page-title">Installer</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->



<?php //echo json_encode($result); ?>
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                
                
                


        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="#"> 
            <div class="form-group">
                <label>Installer Form</label>

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" class="form-control" name="phone" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">email</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Id</label>
                <input type="text" class="form-control" name="id" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Type</label>
                <input type="text" class="form-control" name="type" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

    </form>


            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->  

</div>
</div>

<?php
include 'init/includes/footer.php';
?>
