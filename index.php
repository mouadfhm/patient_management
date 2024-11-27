<?php

use Smarty\Smarty;

require 'includes/db.php';
require 'src/Patient.php';
require 'vendor/smarty/smarty/libs/Smarty.class.php';

$smarty = new Smarty();
$patientModel = new Patient($pdo);

// Fetch all patients for display
$patients = $patientModel->getAllPatients();
$smarty->assign('patients', $patients);

// Render template
$smarty->display('templates/index.tpl');
?>
