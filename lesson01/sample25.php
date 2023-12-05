<?php
// $answer = 10 % 3;
// echo $answer;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php for($i = 1; $i <= 10; $i++) :?>
        <?php if($i % 5 === 0):?>
        <tr style="background-color: #ccc">
        <?php else:?>
        <tr>
        <?php endif;?>
            <td><?php echo $i;?>行目</td>
            <td>ABC</td>
        </tr>
        <tr>
        <?php endfor;?>
    </table>
</body>
</html>