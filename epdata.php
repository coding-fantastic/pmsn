<?php
include 'init/config/config.php';

$result = company::fetchOneCompany();
$updatecompanyresult = company::updateCompany();
$agentresult = company::fetchAgent();
$installerresult = company::fetchInstaller();

//include 'init/includes/header.php';
//echo json_encode('processing...');
//echo json_encode($result);

if($result){
    foreach($result as $row){
        $companyid = $row['company_id'];
        $_SESSION['editid'] = $companyid;
        $companyname = $row['company_name'];
        $startdate = $row['start_date'];
        //$startdate = date("mm/dd/yyyy", strtotime($startdate));
        $enddate = $row['end_date'];
        //$enddate = date("m/d/Y", strtotime($enddate));
        $amountpaid= $row['amount_paid'];
        $phone1 = $row['phone1'];
        $phone2 = $row['phone2'];
        $phone3 = $row['phone3'];
        $agent = $row['agent'];
        $installer = $row['installer'];
        $status = $row['statuss'];
    }
}



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

<?php 
        //echo $updatecompanyresult;
        //echo json_encode($result);
        //echo "date - start - $startdate";
        //echo json_encode($result);

        ?>
        
        <div class='row'>
            <div class='col-12'>
                <div class='card m-b-30'>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="#">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Amount Paid</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="<?php echo $amountpaid; ?>" placeholder="Amount Paid" id="example-text-input" name="amountpaid">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-date-input" class="col-sm-2 col-form-label">Start Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" value="<?php echo $startdate; ?>" placeholder="date" id="example-date-input" name="startdate">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-date-input" class="col-sm-2 col-form-label">End Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" value="<?php echo $enddate;?>" placeholder="date" id="example-date-input" name="enddate">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Company Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="<?php echo $companyname; ?>" placeholder="Company Name" id="example-text-input" name="companyname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Phone 1</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="<?php echo $phone1; ?>" placeholder="Phone number"  id="example-text-input" name="phone1" maxlength="10" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Phone 2</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="<?php echo $phone2; ?>" placeholder="Phone number 2" id="example-text-input" name="phone2" maxlength="10">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Phone 3</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="<?php echo $phone3; ?>"  placeholder="Phone number 3" id="example-text-input" name="phone3" maxlength="10">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Agent</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="agent">
                                <option value="<?php echo $agent; ?>" selected><?php echo $agent; ?></option>
                                
                                <?php 
                                
        if($agentresult){
            foreach($agentresult as $row){
                $name = $row['name'];
                ?>
                                <option value="<?php echo $name;  ?>"><?php echo $name ?></option>
        <?php 
            }
        }
                                
                                
                                ?>
                                
                            </select>
                        </div>
                    </div>
                            
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">installer</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="installer">
                                <option value="<?php echo $installer; ?>" selected><?php echo $installer; ?></option>
            <?php 
                                
        if($installerresult){
            foreach($installerresult as $row){
                $name = $row['name'];
                ?>
                                <option value="<?php echo $name;  ?>"><?php echo $name ?></option>
        <?php 
            }
        }
                                
                                
                                ?>
                                
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="status">
                                <option value="<?php echo $status; ?>" selected><?php echo $status; ?></option>
                                <option value="Active">Activate</option>
                                <option value="Deactive">Deactivate</option>
                                
                            </select>
                        </div>
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
