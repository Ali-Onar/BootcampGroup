<?php

/**
 * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
 * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
 * bölebilirsiniz.
 */

/**
 * Uygulamanın diğer sayfalarda sık sık uyguladığı işlemleri betimleyecek
 * **sadece** fonksiyonların yer alması gereken php dosyasıdır.
 *
 * Bu dosyayı diğer dosyalarınızda dahil etmek için `require`, `include`,
 * `require_once` veya `include_once` fonksiyonlarını kullanabilirsiniz.
 */


ob_start();
if (empty($_SESSION)) {
    session_start();
}

function processControl()
{
    if (empty($_SESSION['kullanici_adi'])) {
        Header("Location: login.php");
        exit;
    }
}
