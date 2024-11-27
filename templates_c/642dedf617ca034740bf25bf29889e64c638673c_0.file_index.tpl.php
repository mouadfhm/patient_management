<?php
/* Smarty version 5.4.2, created on 2024-11-27 13:03:41
  from 'file:templates/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67470a9dcd8347_81079492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '642dedf617ca034740bf25bf29889e64c638673c' => 
    array (
      0 => 'templates/index.tpl',
      1 => 1732705282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67470a9dcd8347_81079492 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Mouad\\Documents\\Patient management\\templates';
?><!DOCTYPE html>
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
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('patients'), 'patient');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('patient')->value) {
$foreach0DoElse = false;
?>
                    <tr>
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
                            <a href="edit.php?id=<?php echo $_smarty_tpl->getValue('patient')['id'];?>
" class="btn btn-warning">Edit</a>
                            <a href="delete.php?id=<?php echo $_smarty_tpl->getValue('patient')['id'];?>
" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php }
}
