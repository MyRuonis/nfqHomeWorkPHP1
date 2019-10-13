<?php declare(strict_types=1);

require 'vendor/autoload.php';

include 'file1.php';
include 'file2.php';
include 'file3.php';
include 'file4.php';

use root as root;
use Nfq\Akademija\NotTyped as notTyped;
use Nfq\Akademija\Soft as soft;
use Nfq\Akademija\Strict as strict;

try{
    echo "root: " . root\calculateHomeWorkSum(3, 2.2, '1') . "<br>";
    echo "Nfq\Akademija\NotType: " . notTyped\calculateHomeWorkSum(3, 2.2, '1') . "<br>";
    echo "Nfq\Akademija\Soft: " . soft\calculateHomeWorkSum(3, 2.2, '1') . "<br>";
    echo "Nfq\Akademija\Strict: " . strict\calculateHomeWorkSum(3, 2.2, '1') . "<br>";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} catch (Throwable $e) {
    echo 'Caught throwable: ',  $e->getMessage(), "\n";
}

?>