<?php
    // $simple = "My name is abir";

    // $c = "AES-128-CRT";
    // $o = 0;
    // $e = "12345678910111121";
    // $k = "abir1234";

    // // $encript = openssl_encrypt($s, $c, $e, $o, $k);
    // $en = openssl_encrypt($simple, $c, $k, $o, $e);
    // echo $en;
    // <?php
//$key should have been previously generated in a cryptographically safe way, like openssl_random_pseudo_bytes
        // $plaintext = "message to be encrypted";
        // $cipher = "aes-128-gcm";
        // $ivlen = openssl_cipher_iv_length($cipher);
        // $iv = openssl_random_pseudo_bytes($ivlen);
        // $key = "abir1234";
        // $key2 = "abir1234";
        // $tag = 1;
        // $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv, $tag);
        // //store $cipher, $iv, and $tag for decryption later
        // $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key2, $options=0, $iv, $tag);
        // echo $ciphertext."\n";
        // echo "\n";
        // echo $original_plaintext."\n";

       
//$key previously generated safely, ie: openssl_random_pseudo_bytes
$plaintext = "My name is Abir";
$ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
$iv = openssl_random_pseudo_bytes($ivlen);
$key = "abir";
$ciphertext_raw = openssl_encrypt($plaintext, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
$hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
$ciphertext = base64_encode( $iv.$hmac.$ciphertext_raw );
echo $ciphertext;

//decrypt later....
$c = base64_decode($ciphertext);
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