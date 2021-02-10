<?php
	
/**
 * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
 * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
 * bölebilirsiniz.
 */

 /**
  * **Giriş yapmış kullanıcının** uygulama içerisinde okuduğunu belirten durumu
  * geri alabildiği (sildiği) sayfadır. `seen.php` veya `post.php`
  * (ikisinden biri veya her ikisi) sayfalarından buraya yönlendirebilirsiniz.
  * Eğer bu sayfaya birden fazla yerden gelebiliyorsa **geldiği sayfaya** yönlenmesini
  * bekliyoruz.
  */
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
 if(isset($_GET['blog'])){
 	if(isset($_SESSION['data'])){
        $_SESSION['data'][(int)$_GET['blog']]['seen'] = false;
    }
    $page="";
    if(isset($_GET['page'])){
    	$page = $_GET['page'];
    }else{
    	$page = 'posts.php';
    }
    //var_dump($_SESSION['data']);
    header('Location: '.$page);
 }
