<?php
/* Smarty version 5.4.2, created on 2024-11-27 14:38:26
  from 'file:templates/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCached()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_674720d2d176e1_36920010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8950ad75ca5c23a3ad52244fc07f8b6a5db81de8' => 
    array (
      0 => 'templates/index.tpl',
      1 => 1732713769,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
))) {
function content_674720d2d176e1_36920010 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Mouad\\Documents\\Patient management\\templates';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .sidebar {
            height: 100vh;
            background-color: #009688;
            color: white;
            padding: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            margin: 10px 0;
            display: block;
            font-weight: bold;
        }
        .sidebar a:hover {
            color: #004d40;
        }
        .header {
            background-color: #fff;
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }
        .main-content {
            padding: 20px;
        }
        .card {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: none;
        }
        .table img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <h3 class="mb-4">MediCore Hospital</h3>
                <a href="#">Dashboard</a>
                <a href="#">Patient Details</a>
                <a href="#">Doctor Details</a>
                <a href="#">Payment Details</a>
                <a href="#">E-Channeling</a>
            </div>

            <!-- Main Content -->
            <div class="col-md-10">
                <div class="header">
                    <h2>Healthcare Management System</h2>
                </div>
                <div class="main-content">
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card text-center p-3">
                                <h5>140</h5>
                                <p>Total Appointments</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center p-3">
                                <h5>370</h5>
                                <p>Total Patients</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center p-3">
                                <h5>70</h5>
                                <p>Total Cancellations</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center p-3">
                                <h5>120</h5>
                                <p>Total Avg Per Doctor</p>
                            </div>
                        </div>
                    </div>

                    <!-- Patient Table -->
                    <div class="card">
                        <div class="card-header">
                            <h5>Patient Details</h5>
                            <input type="text" class="form-control" placeholder="Search here...">
                            <a href="addPatient.php" class="btn btn-primary btn-sm">Add patient</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Avatar</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Date</th>
                                        <th>Doctor</th>
                                        <th>Department</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                        <tr>
                                        <td>
                                            <img src="path/to/avatar.jpg" alt="Avatar"></td>
                                        <td>test1</td>
                                        <td>0694545803</td>
                                        <td>2024-11-13</td>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>
                                            <a href="editPatient.php?id=1" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="deletePatient.php?id=1" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <img src="path/to/avatar.jpg" alt="Avatar"></td>
                                        <td>tttt</td>
                                        <td>0220000</td>
                                        <td>2024-01-01</td>
                                        <td>doc1</td>
                                        <td>tt</td>
                                        <td>
                                            <a href="editPatient.php?id=2" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="deletePatient.php?id=2" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td>
                                            <img src="path/to/avatar.jpg" alt="Avatar"></td>
                                        <td>Mouad Fahimi</td>
                                        <td>0694545803</td>
                                        <td>2024-01-01</td>
                                        <td>doc1</td>
                                        <td>dep1</td>
                                        <td>
                                            <a href="editPatient.php?id=5" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="deletePatient.php?id=5" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php }
}