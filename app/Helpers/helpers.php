<?php
use Hashids\Hashids;


function encryptId($string) {
    $hashids = new Hashids('', 5, '0123456789abcdefghijklmnopqrstuvwxyz');
    return $hashids->encode($string);
}

function decryptId($string) {
    $hashids = new Hashids('', 5, '0123456789abcdefghijklmnopqrstuvwxyz');
    return $hashids->decode($string)[0] ?? null;
}
?>
