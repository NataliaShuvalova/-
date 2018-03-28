<?php
$ii=$_GET['id'];
$jsonString=file_get_contents("../../tests/$ii");
$data=json_decode($jsonString, true);
$a=0;