<?php
// Include the necessary files

use Smarty\Smarty;

require '../includes/db.php';
require '../vendor/smarty/smarty/libs/Smarty.class.php';
require 'Patient.php';            

// Create a new Smarty instance
$smarty = new Smarty;

// Check if the patient ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Initialize the Patient object
    $patient = new Patient($pdo);
    
    // Get the patient details from the database
    $patientData = $patient->getPatientById($id);
    
    // If patient doesn't exist, redirect to the list page
    if (!$patientData) {
        header("Location: index.php");
        exit();
    }

    // Assign patient data to the template
    $smarty->assign('patient', $patientData);
    
    
} else {
    // If no patient ID is provided, redirect to the list page
    header("Location: index.php");
    exit();
}

// Handle form submission to update patient data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'name' => $_POST['name'],
        'mobile' => $_POST['mobile'],
        'date' => $_POST['date'],
        'doctor' => $_POST['doctor'],
        'department' => $_POST['department']
    ];
    
    // Update the patient data
    $patient->updatePatient($id, $data);


    // Redirect to the index page after successful update
    header("Location: index.php");
    exit();
}

// Display the template (this will render the form.tpl)
$smarty->display('../templates/edit_form.tpl');
?>
