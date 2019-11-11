# PDO-Baglanti-Ve-Veri-Islemleri
PHP PDO Bağlantı Ve Veri İşlemleri

<h1>PDO Bağlantı Kurma</h1>

```php
<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=test", "root", "123456");
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>
```

<h4>PDO Karakter Seti Ayarlama</h4>
```php
<?php
$db = new PDO("mysql:host=localhost;dbname=test;charset=utf8", "root", "123456");
?>
```
Yada
```
$db->query("SET CHARACTER SET utf8");
```

