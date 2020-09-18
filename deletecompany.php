<?php
include 'init/config/config.php';

$result = company::deleteCompany();

//include 'init/includes/header.php';
echo json_encode('processing...');
?>
