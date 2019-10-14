<?php

require 'vendor/autoload.php';

use Nfq\Akademija\NotTyped as notTyped;
use Nfq\Akademija\Soft as soft;
use Nfq\Akademija\Strict as strict;

try{
    echo "root: " . calculateHomeWorkSum(3, 2.2, '1') . "<br>";
    echo "Nfq\Akademija\NotType: " . notTyped\calculateHomeWorkSum(3, 2.2, '1') . "<br>";
    echo "Nfq\Akademija\Soft: " . soft\calculateHomeWorkSum(3, 2.2, '1') . "<br>";
    echo "Nfq\Akademija\Strict: " . strict\calculateHomeWorkSum(3, 2.2, '1') . "<br>";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} catch (Throwable $e) {
    echo 'Caught throwable: ',  $e->getMessage(), "\n";
}

?>