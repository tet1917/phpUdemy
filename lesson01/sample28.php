<?php
$random = rand(0,10);
echo $random;
if($random < 5) {
    echo 'あたりです';
} else {
    echo '外れです';
}
?>