<?php
$fname = $_POST['fname'] ?? ' ';
$lname = $_POST['lname'] ?? ' ';
$courses = $_POST['courses'] ?? [];
$Accomplishment = $_POST['Accomplishment'] ?? ' ';
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        One final confirmation for me to proceed<br>
        Your name is: <?php echo $fname . ' ' . $lname; ?><br>
        The courses you have completed were:  
        <ul>
            <?php foreach ($courses as $courseName): ?>
                <li><?php echo $courseName; ?></li>
            <?php endforeach; ?>
        </ul><br>
        The accomplishments you stated were:
        <?php echo $Accomplishment; ?>

        <!--Finally lets send it to the last page -->
        <form action="results.php" method="POST">
            <input type="hidden" name="fname" value="<?php echo $fname; ?>">
            <input type="hidden" name="lname" value="<?php echo $lname; ?>">
            <input type="hidden" name="Accomplishment" value="<?php echo $Accomplishment; ?>">
            <?php foreach ($courses as $c): ?>
                <input type="hidden" name="courses[]" value="<?php echo $courseName; ?>">
            <?php endforeach; ?>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
