<?php
include 'init/config/config.php';

$result = view::fetchCompanyDetails();

include 'init/includes/header.php';
?>

<div class='wrapper'>
    <div class='container-fluid'>

        <!-- Page-Title -->
        <div class='row'>
            <div class='col-sm-12'>
                <div class='page-title-box'>
                    <div class='btn-group float-right'>
                        <ol class='breadcrumb hide-phone p-0 m-0'>
                            <li class='breadcrumb-item'><a href='#'>List</a></li>

                            <li class='breadcrumb-item active'>Company</li>
                        </ol>
                    </div>
                    <h4 class='page-title'>Company</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->


        <div class='row'>
            <div class='col-12'>
                <div class='card m-b-30'>
                    <div class="card-body">
                        <p>heelelel</p>
                    </div>
                    
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
</div>

<?php
include 'init/includes/footer.php';
?>
