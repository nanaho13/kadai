<?php
$method  = 'AES-256-cbc';           // 暗号化方式
$key     = 'xxxxxxxxxxx';      // 鍵
$options = 0;                  // OPENSSL_RAW_DATA と OPENSSL_ZERO_PADDING を指定可
$iv      = '0123456789012345'; 
$data ='ああああ';// IV（16文字）

// 暗号化
$encrypted = openssl_encrypt($data, $method, $key, $options, $iv);

// 復号
$decrypted = openssl_decrypt($encrypted, $method, $key, $options, $iv);
echo $encrypted;
echo $decrypted
?>
