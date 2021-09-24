<?php

$firstMsgCode = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
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

