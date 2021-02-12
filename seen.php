<?php 

include ('data.php');

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>...</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <?php

    /**
     * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
     * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
     * bölebilirsiniz.
     */

    /**
     * **Giriş yapmış kullanıcının** uygulama üzerinde okumuş olduğu yazıların
     * listelendiği sayfadır. `posts.php` sayfasında olduğu gibi yazı hakkında ufak
     * bilgi ve detay linki yer almalıdır.
     */

    ?>
    <div class="col-md-offset-1 col-md-10 col-md-offset-1" style="margin-top: 25px;">
        <div style="display: flex;">
            <h3 style="    width: 100%;">Okunan Yazılar</h3>
            <div class="pull-right" style="    text-align: right;
                                                display: flex;
                                                width: 100%;
                                                justify-content: flex-end;
                                                height: 40px;
                                                margin-top: 20px;">
                <a class="btn btn-info" href="posts.php" style="border-color:purple; color: purple; background-color: white;">Tüm Yazılar</a>
            </div>
        </div>

        <?php
        if (isset($_SESSION['data'])) {
            $data = $_SESSION['data'];
        }

        foreach ($data as $index => $item) {
            if ($item['seen'] == false)
                continue;
        ?>
            <div class="col-md-12">
                <div class="col-md-2">
                    <img src="<?php echo $item['image']; ?>" />
                </div>
                <div class="col-md-8">
                    <div style="margin-bottom: 15px;"><b><?php echo $item['title']; ?></b></div>
                    <p>
                        <?php echo $item['description']; ?>
                    </p>
                    <div class="pull-right" style="margin-right: 25px;">
                        <a class="btn btn-info" href="seen-delete.php?blog=<?php echo $index; ?>&page=seen.php" style="border-color:purple;color: purple; background-color: white;">Kaldır</a>
                        <a class="btn btn-info" href="post.php?blog=<?php echo $index; ?>" style="margin-left: 10px;  color: blue; background-color: white;">Detay</a>
                    </div>
                </div>
            </div><br>
        <?php } ?>
    </div>
</body>

</html>