<?php
// Include necessary files

use Smarty\FunctionHandler\Fetch;

require 'includes/db.php';
require 'src/Patient.php';            

// Check if the 'id' is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Create an instance of the Patient class
    $patient = new Patient($pdo);
    
    // Call the deletePatient method to delete the patient
    $patient->deletePatient($id);
    
    // Redirect to the index page after successful deletion
    header("Location: index.php?deleted=true");
    exit();
} else {
    // If no ID is provided, redirect to the index page
    header("Location: index.php");
    exit();
}
?>
