<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Giriş Yap</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>





    <form action="do-login.php" method="POST">
        <div class="container">

            <h3>Giriş Yap</h3>
            <!-- İşlem başarılı / başarısız php kodları -->

            <div>
                <?php
                if (@$_GET['status'] == "login-failed") {
                ?>
                    <input type="text" id="textFail" disabled="" value="Kullanıcı adı veya parola hatalı.">
                <?php } ?>
            </div>

            <div>
                <label>Kullanıcı Adı</label>
                <input type="text" name="kullanici_adi" required="" 
                
                <?php 
                if (isset($_SESSION['kullanici_adi'])) { ?> 
                value="<?php echo $_SESSION['kullanici_adi']; ?>" 
                <?php 
                } else { ?> placeholder="Kullanıcı Adınızı Giriniz">
            <?php } ?>
            
            </div>

            <label>Parola</label>
            <input type="password" name="password" required="" placeholder="Parolanızı giriniz.">
            <div>
                <button type="submit" class="buttonLogin" name="kullanicigiris">Giriş Yap</button>
            </div>
        </div>

    </form>

    <?php

    /**
     * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
     * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
     * bölebilirsiniz.
     */

    /**
     * **Giriş yapmamış olan kullanıcı için** giriş yapma formunu gösterecek olan
     * sayfadır. Burada gösterilen forma ait değerlerin `do-login.php`
     * dosyasına gitmesini bekliyoruz.
     */
    ?>
</body>

</html>