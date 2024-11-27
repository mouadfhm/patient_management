<?php
/* Smarty version 5.4.2, created on 2024-11-27 13:42:07
  from 'file:form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6747139f70b033_75821304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42496686c43e57d7e018aad5e9aa61236bf705f2' => 
    array (
      0 => 'form.tpl',
      1 => 1732711320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6747139f70b033_75821304 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Mouad\\Documents\\Patient management\\templates';
?><!-- form.tpl -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Patient</title>
</head>
<body>
    <h1>Add New Patient</h1>
    <form action="create_patient.php" method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="mobile">Mobile</label>
        <input type="text" id="mobile" name="mobile" required><br><br>

        <label for="date_of_birth">Date of Birth</label>
        <input type="date" id="date_of_birth" name="date_of_birth" required><br><br>

        <label for="doctor">Doctor</label>
        <input type="text" name="doctor" id="doctor" required></input><br><br>

        <label for="department">Department</label>
        <input type="text" name="department" id="department" required></input><br><br>

        <button type="submit">Add Patient</button>
    </form>
</body>
</html>
<?php }
}
