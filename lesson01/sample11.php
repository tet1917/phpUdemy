<?php
$fruits = [
    'apple'=> 'りんご',
    'grape'=> 'ぶどう',
    'lemon'=> 'レモン',
    'tomato'=> 'トマト',
    'peach'=> 'もも'
];



?>
<?php foreach($fruits as $english => $japanese):?>
<dl>
    <dt><?php echo $english;?></dt>
    <dt><?php echo $japanese;?></dt>
</dl>
<?php endforeach;?>