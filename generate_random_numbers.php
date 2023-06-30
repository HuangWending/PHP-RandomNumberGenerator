<!DOCTYPE html>
<html>
<head>
    <title>生成随机数结果</title>
</head>
<body>
    <h1>生成随机数结果</h1>
    
    <?php
    $minRange = $_POST['minRange'];
    $maxRange = $_POST['maxRange'];
    $count = $_POST['count'];

    $randomNumbers = array();

    for ($i = 0; $i < $count; $i++) {
        $randomNumber = rand($minRange, $maxRange);
        array_push($randomNumbers, $randomNumber);
    }

    echo "生成的随机数为: " . implode(", ", $randomNumbers);
    ?>
    
</body>
</html>
