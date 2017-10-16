<?php

$_SERVER['HTTP_HOST']='dojo.rinaldojonathan.id';

$ch = curl_init('http://dojo.rinaldojonathan.id/'.$_SERVER['REQUEST_URI']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Host: '.$_SERVER['HTTP_HOST']));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
echo curl_exec($ch);

?>
