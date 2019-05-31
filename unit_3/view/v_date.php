<?php

$date = DateTime::createFromFormat('d-m-Y', date('d-m-Y'));
$date->modify('-1 day');

?>