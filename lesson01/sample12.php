<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
?>
<?php if($time < 17):?>
    <p>ようこそ</p>
    <?php else:?>
<p>※営業時間外です</p>
<?php endif;?>

<?php
$s = 'アイウエオ';
if($s):
    echo '$sには文字が入っています';
endif;
?>
