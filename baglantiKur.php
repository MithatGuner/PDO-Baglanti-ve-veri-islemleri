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

//PDO INSERT (VERI EKLEME)
$query = $db->prepare("INSERT INTO mesajlar SET
isim = ?,
soyisim = ?,
mesaj = ?");
$insert = $query->execute(array(
    "Mithat", "Güner", "Merhaba GitHub!"
));
if ( $insert ){
    $id = $db->lastInsertId();
    print "Veri eklendi!";
}

//PDO UPDATE (VERI GUNCELLEME)
$mesajID = 1;
$query = $db->prepare("UPDATE mesajlar SET
isim = :isim
WHERE id = :mesaj_id");
$update = $query->execute(array(
    "isim" => "Github",
    "mesaj_id" => $mesajID
));
if ( $update ){
    print "Veri güncellendi!";
}

//PDO DELETE (VERI SILME)
$query = $db->prepare("DELETE FROM mesajlar WHERE id = :id");
$delete = $query->execute(array(
    'id' => $mesajID
));