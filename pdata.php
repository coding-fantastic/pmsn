<?php
include 'init/config/config.php';

$result = company::insertCompany();

$agentresult = company::fetchAgent();
$installerresult = company::fetchInstaller();

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
                            <input class="form-control" type="text" value="" placeholder="Amount Paid" id="example-text-input" name="amountpaid">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-date-input" class="col-sm-2 col-form-label">Start Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" value="" placeholder="date" id="example-date-input" name="startdate">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-date-input" class="col-sm-2 col-form-label">End Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" value="" placeholder="date" id="example-date-input" name="enddate">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Company Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" placeholder="Company Name" id="example-text-input" name="companyname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Phone 1</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" placeholder="Phone number"  id="example-text-input" name="phone1" maxlength="10" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Phone 2</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" placeholder="Phone number 2" id="example-text-input" name="phone2" maxlength="10">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Phone 3</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value=""  placeholder="Phone number 3" id="example-text-input" name="phone3" maxlength="10">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Agent</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="agent">
                                <!--<option selected>Open this select menu</option>-->
                                
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
                                <!--<option selected>Open this select menu</option>-->
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
                                <!--<option selected>Open this select menu</option>-->
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
