<?php
$access_token = 'sO3SrUVbf7dnaXtDakarPlCt4THAD8yEx9X954zAtjUSHC/BK42lcQIUAC64nYSON0U0fpCj90su/s2nuu0j8u31zKopE4cCGhjNLlcwYSudDMafhlXcJEjdsbQ77AoGses6Zt/rrsYMHboaS0NtrAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
