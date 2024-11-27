<?php
// Include the Smarty class
require 'includes/db.php';
require 'vendor/smarty/smarty/libs/Smarty.class.php';
require 'src/Patient.php';            


use Smarty\Smarty;


// Create a new Smarty instance
$smarty = new Smarty();
$patient = new Patient($pdo);

// Check if the form is submitted (POST request)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate the form data
    $name = trim($_POST['name']);
    $mobile = trim($_POST['mobile']);
    $date = $_POST['date'];  
    $doctor = trim($_POST['doctor']);
    $department = trim($_POST['department']);

    // Validate form data (you can add additional checks)
    if (!empty($name) && !empty($mobile) && !empty($date) && !empty($doctor) && !empty($department)) {
        // Prepare data to pass to the createPatient function
        $data = [
            'name' => $name,
            'mobile' => $mobile,
            'date' => $date,
            'doctor' => $doctor,
            'department' => $department
        ];

        // Call the createPatient function to insert the data into the database
        $patient->createPatient($data);

        // Redirect to another page (e.g., success or patient list)
        header('Location: index.php');  // Redirect to a success page or back to the patient list
        exit;
    } else {
        // Handle error: Missing or invalid form data
        echo "Please fill in all the fields.";
    }
}


// Display the form.tpl template
$smarty->display('add_form.tpl');
?>
