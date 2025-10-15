<?php
require_once __DIR__ . "/../vendor/autoload.php";
$now = now();

$values = [
    $now,
    epoch(),
    $now->format('m/d/Y H:i'),
    $now->adjSec(1000),

    $two = $now->copy()->adjDay(1),
    $two->adjHour(1),
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChaosWD DateTime Testing</title>
</head>

<body>
    <hr>
    <?php
    foreach ($values as $i => $value) {
        $int = $i + 1;
        echo "<hr><div>TEST{$int}</div><hr>";

        echo "<div>{$value}</div>";
        echo "<br><hr>";
    }
    ?>
</body>

</html>