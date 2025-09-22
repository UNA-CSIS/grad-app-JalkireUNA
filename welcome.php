<?php
        $fname = $_POST['fname'] ?? ' ';
        $lname = $_POST['lname'] ?? ' ';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Welcome <?php echo $_POST["fname"]; ?>
        <?php echo $_POST["lname"]; ?><br>
        Please Select which courses you have taken.
        <form action="personal.php" method="POST">
            <input type="hidden" name="fname" value="<?php echo $fname; ?>">
            <input type="hidden" name="lname" value="<?php echo $lname; ?>">
            <input type="checkbox" id="OOP" name="courses[]" value="Object-Oriented Programming">
            <label for="OOP"> Object-Oriented Programming</label><br>
            <input type="checkbox" id="SAD" name="courses[]" value="Systems analysis & Design">
            <label for="SAD"> Systems analysis & Design</label><br>
            <input type="checkbox" id="AP" name="courses[]" value="Advanced Programming">
            <label for="AP"> Advanced Programming</label><br>
            <input type="checkbox" id="ITN" name="courses[]" value="Introduction to Networking">
            <label for="ITN"> Introduction to Networking</label><br>
            <input type="checkbox" id="ICS" name="courses[]" value="Introduction to Computer Security">
            <label for="ICS"> Introduction to Computer Security</label><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
