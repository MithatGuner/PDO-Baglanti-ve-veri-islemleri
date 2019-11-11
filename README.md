# PDO-Baglanti-Ve-Veri-Islemleri
PHP PDO Bağlantı Ve Veri İşlemleri

- PDO BAĞLANTI KURMA

```php
<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=test", "root", "123456");
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>
```

- PDO KARAKTER SETI AYARLAMA

```php
<?php
$db = new PDO("mysql:host=localhost;dbname=test;charset=utf8", "root", "123456");
?>
```
