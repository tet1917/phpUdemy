<?php
$xmlTree = simplexml_load_file('rss.xml');
echo $xmlTree->channel->item[1]->title;
foreach($xmlTree->channel->item as $item):
?>
<p>・<?php echo $item->title;?></p>
<?php
endforeach;
?>