<?php
    $mode = "dark";
    $greeting = "Hello";
    $name = "Sean";
    // data types
    $num = 42; #integer
    $dub = 42.02; #double
    $boo = true; #true or false
    $arr = array('a', 'b','c');
    # objects (later module)
    define('DAYS_IN_YEAR', 365);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Intro to PHP</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body <?php if ($mode === "dark"): ?>class="dark"<?php endif ?>>
    <h1>
        <?php echo "Hello {$name}!"; ?>
    </h1>
        <p><?php echo $arr[2] ?></p>
        <p><?php echo DAYS_IN_YEAR + 1 ?></p>
        <h1>
        <?php 
            $greeting .= ", how are you?";
            echo $greeting . "<br>" . $name . "!"; 
        ?>
    </h1>
</body>
</html>