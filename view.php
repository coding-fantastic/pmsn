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
                    <div class='card-body'>

                        <div class='table-scrol'>

                            <h1 align='center'>List of Companies and their details</h1>

                            <div class='table-responsive'>
                                <!--this is used for responsive display in mobile and other devices-->
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>

                                        <tr>
                                            <th>#</th>
                                            <th>Company name</th>
                                            <th>Amount Paid</th>
                                            <th>Start date</th>
                                            <th>End date</th>

                                            <th>Phone 1</th>
                                            <th>Phone 2</th>
                                            <th>Phone 3</th>
                                            <th>Agent</th>
                                            <th>Installer</th>
                                            <th>Status</th>

                                            <th>Action</th>

                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php
if ( $result ) {
    $i = 1;
    foreach ( $result as $row ) {
        $id = $row['company_id'];
        $companyname = $row['company_name'];
        $amountpaid = $row['amount_paid'];
        $startdate = $row['start_date'];
        $enddate = $row['end_date'];
        $phone1 = $row['phone1'];
        $phone2 = $row['phone2'];
        $phone3 = $row['phone3'];
        $agent = $row['agent'];
        $installer = $row['installer'];
        $status = $row['statuss'];
        ?>
                                        
                                        
  

                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $companyname; ?></td>
                                            <td><?php echo $amountpaid; ?></td>
                                            <td><?php echo $startdate; ?></td>
                                            <td><?php echo $enddate; ?></td>
                                            <td><?php echo $phone1; ?></td>
                                            <td><?php echo $phone2; ?></td>
                                            <td><?php echo $phone3; ?></td>
                                            <td><?php echo $agent; ?></td>
                                            <td><?php echo $installer; ?></td>
                                            <td><?php echo $status; ?></td>
                                            <td>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle btn-xs" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action <i data-feather="chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="epdata.php?id=<?php echo $id; ?>">Edit</a>
                                            <a class="dropdown-item" href="deletecompany.php?id=<?php echo $id; ?>">Delete</a>
                                            <a class="dropdown-item" href="suspendcompany.php?id=<?php echo $id; ?>">Suspend</a>
                                        </div>
                                    </div>


                                </td>
                                        </tr>
                                        
                                        
                                        <?php
                                        
              $i++;
    }
    
}

                                        
                                        ?>

                                    </tbody>

                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
</div>

<?php
include 'init/includes/footer.php';
?>
