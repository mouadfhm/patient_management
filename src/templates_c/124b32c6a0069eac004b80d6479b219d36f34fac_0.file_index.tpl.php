<?php
/* Smarty version 5.4.2, created on 2024-11-27 18:11:42
  from 'file:../templates/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_674752ceb57a67_05329019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '124b32c6a0069eac004b80d6479b219d36f34fac' => 
    array (
      0 => '../templates/index.tpl',
      1 => 1732719621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674752ceb57a67_05329019 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Mouad\\Documents\\Patient management\\templates';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
                <a href="#"><i class="fa-solid fa-house"></i>Dashboard</a>
                <a href="#"><i class="fa-solid fa-user"></i>Patient Details</a>
                <a href="#"><i class="fa-solid fa-user-doctor"></i>Doctor Details</a>
                <a href="#"><i class="fa-regular fa-credit-card"></i>Payment Details</a>
                <a href="#"><i class="fa-solid fa-compass"></i>E-Channeling</a>
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
                                <h5><?php echo $_smarty_tpl->getValue('totalAppointments');?>
</h5>
                                <p>Total Appointments</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center p-3">
                                <h5><?php echo $_smarty_tpl->getValue('totalPatients');?>
</h5>
                                <p>Total Patients</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center p-3">
                                <h5>0</h5>
                                <p>Total Cancellations</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center p-3">
                                <h5><?php echo $_smarty_tpl->getValue('totalAvgPerDoctor');?>
</h5>
                                <p>Total Avg Per Doctor</p>
                            </div>
                        </div>
                    </div>

                    <!-- Patient Table -->
                    <a href="addPatient.php" class="btn btn-primary btn-sm"> <i class="fas fa-plus"></i>Add Appointment</a>

                    <div class="card">
                        <div class="card-header">
                            <input type="text" class="form-control"  placeholder="Search here...">
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
                                        <td><?php echo $_smarty_tpl->getValue('patient')['date'];?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('patient')['doctor'];?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('patient')['department'];?>
</td>
                                        <td>
                                            <a href="editPatient.php?id=<?php echo $_smarty_tpl->getValue('patient')['id'];?>
" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                            <a href="deletePatient.php?id=<?php echo $_smarty_tpl->getValue('patient')['id'];?>
" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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
