<?php
//PDO BAGLANTI KURMA ISLEMI
try {
    $db = new PDO("mysql:host=localhost;dbname=test;charset=utf8", "root", "123456");
} catch ( PDOException $e ){
    print $e->getMessage();
}

//PDO SELECT (VERI ALMA)
$veri = 1;
$query = $db->query("SELECT * FROM mesajlar WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
if ( $query ){
    //Donen veri $query degiskenine atanmistir.
    print_r($query);
}