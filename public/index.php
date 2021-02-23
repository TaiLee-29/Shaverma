<?php
require_once '../vendor/autoload.php';
  $s1 = new \Hillel\Model\S1();
  $s2 = new \Hillel\Model\S2();
  $s3 = new \Hillel\Model\S3();
$calculator= new \Hillel\Model\ShawarmaCalculator();
$calculator->add($s1);
$calculator->add($s2);
$calculator->add($s3);
var_dump($calculator->ingredients());
var_dump($calculator->price());







?>