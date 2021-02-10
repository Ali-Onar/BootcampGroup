<?php

/**
 * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
 * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
 * bölebilirsiniz.
 */

 /**
  * **Giriş yapmamış kullanıcı** için giriş sayfasına (`login.php`), **giriş
  * yapmış kullanıcı** için de yazı listesini(`posts.php`) göreceği sayfaya
  * yönlendirmesi gerekiyor.
  */
 	if($_SESSION['username']  && !empty($_SESSION['username'])){
 		header('Location: posts.php');
 	}else{
 		$_SESSION['message'] = "Kullanıcı Adı veya Şifre Yanlış!";
 		header('Location: login.php');
 	}