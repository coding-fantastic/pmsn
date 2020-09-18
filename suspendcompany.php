<?php
include 'init/config/config.php';

$result = company::suspendCompany();

//include 'init/includes/header.php';

echo json_encode('processing...');

?>
