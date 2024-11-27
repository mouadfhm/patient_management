<?php

use Smarty\Smarty;

require '../includes/db.php';
require 'Patient.php';
require '../vendor/smarty/smarty/libs/Smarty.class.php';

$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__ . '/templates');
$smarty->setConfigDir(__DIR__ . '/configs');
$smarty->setCompileDir(__DIR__ . '/templates_c');
$smarty->setCacheDir(__DIR__ . '/cache');


$patientModel = new Patient($pdo);

// Fetch all patients for display
$patients = $patientModel->getAllPatients();

// Fetch total appointments
$stmt = $pdo->query("SELECT COUNT(*) FROM patients ");
$totalAppointments = $stmt->fetchColumn();

// Fetch total patients
$stmt = $pdo->query("SELECT COUNT(DISTINCT name) FROM patients");
$totalPatients = $stmt->fetchColumn();


// Fetch average appointments per doctor
$stmt = $pdo->query("SELECT doctor, COUNT(*) FROM patients GROUP BY doctor");
$doctorAppointments = $stmt->fetchAll(PDO::FETCH_ASSOC);
$totalDoctors = count($doctorAppointments);
$totalAppointmentsPerDoctor = $totalDoctors > 0 ? $totalAppointments / $totalDoctors : 0;

// Assign the data to the Smarty template
$smarty->assign('totalAppointments', $totalAppointments);
$smarty->assign('totalPatients', $totalPatients);
$smarty->assign('totalAvgPerDoctor', round($totalAppointmentsPerDoctor));


$smarty->assign('patients', $patients);

// Render template
$smarty->display('../templates/index.tpl');
?>
