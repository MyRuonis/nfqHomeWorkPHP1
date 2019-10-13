# root\calculateHomeWorkSum(3, 2.2, '1') -> 3 + 2.2 + 1 -> 6.2
# notTyped\calculateHomeWorkSum(3, 2.2, '1') -> 3 + 2.2 + 1 -> 6.2 -(kadangi turi grazinti int)-> 6
# soft\calculateHomeWorkSum(3, 2.2, '1') -(kadangi pasiima int)-> 3 + 2 + 1 -> 6
# strict\calculateHomeWorkSum(3, 2.2, '1') -(kadangi pasiima int)-> 3 + 2 + 1 -> 6 (Exception\Throwable nemeta nes declare(strict_types=1); buvo tame paciame faile kur funkcija buvo sukurta, o ne iskviesta)