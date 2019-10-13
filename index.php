<?php
require 'vendor/autoload.php';

include 'file1.php';
include 'file2.php';

use root as root;
use Nfq\Akademija\NotTyped as notTyped;


echo root\calculateHomeWorkSum(1);
echo notTyped\calculateHomeWorkSum(1);

?>