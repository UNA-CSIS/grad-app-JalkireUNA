<?php
$fname = $_POST['fname'] ?? ' ';
$lname = $_POST['lname'] ?? ' ';
$courses = $_POST['courses'] ?? [];
$Accomplishment = $_POST['Accomplishment'] ?? ' ';
?>
<?php

function isAccepted($text, $numCoursesTaken, $numCoursesListed) {
    $required = "PHP"; // changeable keyword
    $threshold = 0.5; // changeable threshold value

    $hasKeyword = stripos($text, $required) !== false;
    $hasEnough = ($numCoursesListed > 0) &&
            ($numCoursesTaken / $numCoursesListed >= $threshold);

    return $hasKeyword && $hasEnough;
}

$accepted = isAccepted($Accomplishment, count($courses), 5);
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Results:
        Name: <?php echo $fname . ' ' . $lname; ?><br>
        Accomplishments: <?php echo $Accomplishment; ?><br>
        <?php if ($accepted): ?>
            You have been accepted for a phone interview, we will be in contact!
        <?php else: ?>
            Sorry, You have been rejected, better luck next time
        <?php endif; ?>
    </body>
</html>
