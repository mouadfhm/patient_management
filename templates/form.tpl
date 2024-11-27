<form method="POST" action="save.php">
    <input type="hidden" name="id" value="{$patient.id|default:''}">
    <label>Name:</label><input type="text" name="name" value="{$patient.name|default:''}">
    <label>Mobile:</label><input type="text" name="mobile" value="{$patient.mobile|default:''}">
    <label>Date of Birth:</label><input type="date" name="date_of_birth" value="{$patient.date_of_birth|default:''}">
    <label>Doctor:</label><input type="text" name="doctor" value="{$patient.doctor|default:''}">
    <label>Department:</label><input type="text" name="department" value="{$patient.department|default:''}">
    <button type="submit">Save</button>
</form>
