<?php
$fname = $_POST['fname'] ?? ' ';
$lname = $_POST['lname'] ?? ' ';
$courses = $_POST['courses'] ?? [];
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Hello again,
        <?php echo $fname; ?>
        <?php echo $lname; ?><br>
        <form action="confirmation.php" method="POST">
            <input type="hidden" name="fname" value="<?php echo $fname; ?>">
            <input type="hidden" name="lname" value="<?php echo $lname; ?>">
            <?php foreach ($courses as $c): ?>
                <input type="hidden" name="courses[]" value="<?php echo $c; ?>">
            <?php endforeach; ?>
            <label for="Accomplishment">List your personal accomplishments</label><br>
            <textarea id="Accomplishment" name="Accomplishment" rows="10" cols="60" placeholder="Enter your accomplishments here..." minlength="10" maxlength="200"></textarea>
            <br>
            <input type="submit" value="Submit">
        </form>
            <br>
           <!-- <?php print_r($_POST['courses']); ?>
            <?php echo $_POST["fname"]; ?>
            <?php echo $_POST["lname"]; ?> -->
            </body>
            </html>
