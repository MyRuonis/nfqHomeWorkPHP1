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

echo root\calculateHomeWorkSum(3, 2.2, '1') . "<br>";
echo notTyped\calculateHomeWorkSum(3, 2.2, '1') . "<br>";
echo soft\calculateHomeWorkSum(3, 2.2, '1') . "<br>";
echo strict\calculateHomeWorkSum(3, 2.2, '1') . "<br>";

?>