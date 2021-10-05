<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
    <?php
    if (isset($_POST['submit'])) {
        $cal = $_POST['cal'];
        $currentyear = 2021;
        $result = "";
        if ($cal > 0) {
            $result = $currentyear - $cal;
        } else {
            echo "Please enter the Year ";
        }
    }


    ?>
</head>

<body>
    <form action="agecal.php" method="POST">
        <label> Enter your Birth year: </label>
        <input type="text" name="cal" value="<?php echo $cal ?>" />
        <input type="submit" name="submit" />
        <label>Your Result is:</label>
        <input type="text" name="result " value="<?php echo $result;  ?>" />
    </form>
</body>

</html>