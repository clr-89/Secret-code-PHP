<?php

$firstMsgCode = "0@sn9sirppa@#?ia'jgtvryko1";
$lengthOfFirstMsgCode = strlen($firstMsgCode);
echo $lengthOfFirstMsgCode;
echo('------');

$divFirstMsgCode = $lengthOfFirstMsgCode / 2;
echo $divFirstMsgCode;
echo('-------');

echo substr($firstMsgCode, 5, $divFirstMsgCode); 
echo('--------');

$firstMsgCodeHalf = substr($firstMsgCode, 5, $divFirstMsgCode);
echo str_replace('@#?', ' ', $firstMsgCodeHalf);
echo('--------');

echo strrev(str_replace('@#?', ' ', $firstMsgCodeHalf));


