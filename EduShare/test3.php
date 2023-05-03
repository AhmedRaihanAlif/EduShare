<?php
    
    //  $cipher = "aes-128-gcm";
    //  $ivlen = openssl_cipher_iv_length($cipher);
    //  $iv = openssl_random_pseudo_bytes($ivlen);
    //  $key = "abir1234";
    //  $key2 = "abir1234";
    //  $tag = 1;
    //  $ciphertext = "D8pEW4RjkBflyJa2CAKy4aM4OV2/XKU=";
    //  //store $cipher, $iv, and $tag for decryption later
    //  $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key2, $options=0, $iv, $tag);
    //  echo $ciphertext."\n";
    //  echo "\n";
    //  echo $original_plaintext."\n";
    $en = "bKWNMK8AEhxHZF52KyifVRE1P1jrgygyeJPqzCOT3juAhQeFqKrJF4oPDtRNve089MUkUP8Z1+zBCAzlmNfS3A==";
$c = base64_decode($en);
$ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
$iv = substr($c, 0, $ivlen);
$hmac = substr($c, $ivlen, $sha2len=32);
$key = "abir";
$ciphertext_raw = substr($c, $ivlen+$sha2len);
$original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
$calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
if (hash_equals($hmac, $calcmac))//PHP 5.6+ timing attack safe comparison
{
    echo $original_plaintext."\n";
}

?>