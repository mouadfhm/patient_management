<!DOCTYPE html>
<html lang="en">
<head>
    <title>Patient Management</title>
    <link rel="stylesheet" href="assets/AdminLTE.css">
</head>
<body>
    <div class="container">
        <h1>Patient Management System</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Date of Birth</th>
                    <th>Doctor</th>
                    <th>Department</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {foreach $patients as $patient}
                    <tr>
                        <td>{$patient.name}</td>
                        <td>{$patient.mobile}</td>
                        <td>{$patient.date_of_birth}</td>
                        <td>{$patient.doctor}</td>
                        <td>{$patient.department}</td>
                        <td>
                            <a href="edit.php?id={$patient.id}" class="btn btn-warning">Edit</a>
                            <a href="delete.php?id={$patient.id}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
</body>
</html>
