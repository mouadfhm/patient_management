<?php
/* Smarty version 5.4.2, created on 2024-11-27 14:23:04
  from 'file:templates/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67471d38e7cd46_18980059',
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
  'includes' => 
  array (
  ),
))) {
function content_67471d38e7cd46_18980059 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Mouad\\Documents\\Patient management\\templates';
$_smarty_tpl->getCompiled()->nocache_hash = '53574852067471d38e39cb5_46001268';
?>
<!DOCTYPE html>
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
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('patients'), 'patient');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('patient')->value) {
$foreach0DoElse = false;
?>
                                    <tr>
                                        <td>
                                            <img src="path/to/avatar.jpg" alt="Avatar"></td>
                                        <td><?php echo $_smarty_tpl->getValue('patient')['name'];?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('patient')['mobile'];?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('patient')['date_of_birth'];?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('patient')['doctor'];?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('patient')['department'];?>
</td>
                                        <td>
                                            <a href="editPatient.php?id=<?php echo $_smarty_tpl->getValue('patient')['id'];?>
" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="deletePatient.php?id=<?php echo $_smarty_tpl->getValue('patient')['id'];?>
" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
