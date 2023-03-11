<?php

function generateRandomEmployeeId($length = 8) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $max = strlen($characters) - 1;
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $max)];
    }
    return $randomString;
}

if(isset($_POST['submit'])) {
    $employeeid = generateRandomEmployeeId(6);
    echo "<script>alert('Randomized employee ID: $employeeid');</script>";
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="employeeid">Randomized Employee ID</label>
    <input type="text" name="employeeid" id="employeeid" value="employeeid" disabled>
    <input type="submit" value="submit" id="submit">
</form>