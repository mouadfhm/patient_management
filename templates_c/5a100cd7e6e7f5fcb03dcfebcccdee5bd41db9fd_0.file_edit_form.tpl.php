<?php
/* Smarty version 5.4.2, created on 2024-11-27 14:48:37
  from 'file:edit_form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_674723350c84a2_20571187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a100cd7e6e7f5fcb03dcfebcccdee5bd41db9fd' => 
    array (
      0 => 'edit_form.tpl',
      1 => 1732715310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674723350c84a2_20571187 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Mouad\\Documents\\Patient management\\templates';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Patient</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f8fb;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 10px;
            max-width: 800px;
            margin: 0 auto;
        }
        .form-title {
            color: #4CAF50;
            font-weight: 700;
            margin-bottom: 30px;
            font-size: 24px;
        }
        .form-group label {
            font-weight: 500;
            margin-bottom: 8px;
            color: #333;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 16px;
        }
        .form-group input[type="date"] {
            padding: 12px;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            font-weight: 500;
            padding: 12px 30px;
            border-radius: 6px;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="form-title">Edit Patient</h1>
        
        <form action="editPatient.php?id=<?php echo $_smarty_tpl->getValue('patient')['id'];?>
" method="POST">
            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?php echo $_smarty_tpl->getValue('patient')['name'];?>
" required>
            </div>

            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" id="mobile" name="mobile" value="<?php echo $_smarty_tpl->getValue('patient')['mobile'];?>
" required>
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="datetime-local" id="date" name="date" value="<?php echo $_smarty_tpl->getValue('patient')['date'];?>
" required>
            </div>

            <div class="form-group">
                <label for="doctor">Doctor</label>
                <input type="text" name="doctor" id="doctor" value="<?php echo $_smarty_tpl->getValue('patient')['doctor'];?>
" required>
            </div>

            <div class="form-group">
                <label for="department">Department</label>
                <input type="text" name="department" id="department" value="<?php echo $_smarty_tpl->getValue('patient')['department'];?>
" required>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn">Update Patient</button>
            </div>
            
        </form>
    </div>

    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
