
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Leap Year</title>
</head>
<body style="background-color: #6E6E6E;">
    <h1 style="color:black"><marquee>Leap Year Checker</marquee></h1>
    <form action="" method="post">
        Enter a year: <input type="number" name="year" placeholder="Enter a year" required>
        <button type="submit" name="checkleap">Check Leap Year</button>
    </form>
    <?php
    $error = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["checkleap"])) {
            $year = (int) $_POST["year"];
            if ($year < 1) {
                $error = "Year must be a positive integer.";
            } elseif ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
                echo "<h1 style='color:green'>The year $year is a leap year.</h1>";
            } else {
                echo "<h1 style='color:red'>The year $year is not a leap year.</h1>";
            }
        }
    }
    ?>
</body>
</html>