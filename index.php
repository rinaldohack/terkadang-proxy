<?php
$opts = stream_context_create(array(
    'http'=> array(
        'method' => 'GET',
        'header'=> 'Host: '.$_SERVER['HTTP_HOST'],
    )
));
$url = "http://dojo.rinaldojonathan.id/".$_SERVER['REQUEST_URI'];
echo file_get_contents($url,NULL,$opts);


?>
