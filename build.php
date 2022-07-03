<?php

chdir(__dir__);
define('ROOT',__dir__);
require 'strawberry/autoloader.php';

$builder = new Builder;
$builder->build();
