<?php
require 'includes/db.php';
require 'src/Patient.php';

$patientModel = new Patient($pdo);

if ($_POST['id']) {
    $patientModel->updatePatient($_POST['id'], $_POST);
} else {
    $patientModel->createPatient($_POST);
}

header("Location: index.php");
?>
