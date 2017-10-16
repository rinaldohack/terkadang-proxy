<?php
$context = stream_context_create(array(
    'http' => array(
        'method' => 'GET',
        'header' => "Host: ".$_SERVER['HTTP_HOST']."\r\n" .
                    "Cookie: foo=bar\r\n"
    )
));
$data = file_get_contents("http://dojo.rinaldojonathan.id".$_SERVER['REQUEST_URI'], false, $context);
echo $data;
?>
