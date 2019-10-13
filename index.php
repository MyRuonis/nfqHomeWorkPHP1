<?php
require 'vendor/autoload.php';

include 'file1.php';
include 'file2.php';
include 'file3.php';
include 'file4.php';

use root as root;
use Nfq\Akademija\NotTyped as notTyped;
use Nfq\Akademija\Soft as soft;
use Nfq\Akademija\Strict as strict;


echo root\calculateHomeWorkSum(1) . "<br>";
echo notTyped\calculateHomeWorkSum(1) . "<br>";
echo soft\calculateHomeWorkSum(1) . "<br>";
echo strict\calculateHomeWorkSum(1) . "<br>";

?>