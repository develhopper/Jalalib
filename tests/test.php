<?php
include_once "../vendor/autoload.php";
use Jalalib\JDF;

echo JDF::jdate("Y-m-d");
echo "\r\n";
echo implode("-",JDF::gregorian_to_jalali(2020,11,8));
echo "\r\n";
echo implode("-",Jdf::jalali_to_gregorian(1399,8,18));
echo "\r\n";