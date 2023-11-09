<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $today = new DateTime();
        $today->setTimezone(new DateTimeZone('Asia/Tokyo'));
        echo '現在は' . $today->format('G時 i分 s秒').'です';
    ?>

</body>
</html>