<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Square</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php include "header.php";
$arr = [
    [12, 17, 16],
    [12, 15, 11],
    [14, 13, 18]

];

$rows = array_map('array_sum', $arr);
$principal = 0;
$secondary = 0;
$columns = array();

if (count($arr) !== count($arr[0])) {
    echo "Not a square";
    exit;
}
foreach ($rows as $row) {
    if ($row === $rows[0]) {
        for ($i = 0; $i < sizeof($arr); $i++) {
            $y = sizeof($arr) - 1;
            $principal += $arr[$i][$i];
            $secondary += $arr[$i][$y - $i];
        }
        if ($secondary === $principal && $secondary === $rows[0]) {
            for ($i = 0; $i < sizeof($arr); $i++) {
                $columns[$i] = 0;
                for ($j = 0; $j < sizeof($arr); $j++) {
                    $columns[$i] += $arr[$j][$i];
                    if (count(array_unique($columns)) === 1 && $columns[0] === $rows[0]) {
                        echo "square IS MAGIC";
                        break;
                    }
                }
            }
        }
    } else {
        echo "square is not MAGIC";
        break;
    }
}
echo "<br>";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>