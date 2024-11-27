<!DOCTYPE html>
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
                                <h5>{$totalAppointments}</h5>
                                <p>Total Appointments</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center p-3">
                                <h5>{$totalPatients}</h5>
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
                                <h5>{$totalAvgPerDoctor}</h5>
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
                                    {foreach $patients as $patient}
                                    <tr>
                                        <td>
                                            <img src="path/to/avatar.jpg" alt="Avatar"></td>
                                        <td>{$patient.name}</td>
                                        <td>{$patient.mobile}</td>
                                        <td>{$patient.date}</td>
                                        <td>{$patient.doctor}</td>
                                        <td>{$patient.department}</td>
                                        <td>
                                            <a href="editPatient.php?id={$patient.id}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                            <a href="deletePatient.php?id={$patient.id}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    {/foreach}
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
