<?php include('data.php');
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>...</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    
    <div class="col-md-offset-1 col-md-10 col-md-offset-1" style="margin-top: 25px;">
        <div style="display: flex;">
            <h3 style="    width: 100%;">Yazılar</h3> 
            <div class="pull-right" style="    text-align: right;
                                                display: flex;
                                                width: 100%;
                                                justify-content: flex-end;
                                                height: 40px;
                                                margin-top: 20px;">
                <a class="btn btn-info" href="seen.php" style="color: purple; background-color: white;">Okunanlar</a>
            </div>
        </div>

        <?php 
            if(isset($_SESSION['data'])){
                $data = $_SESSION['data'];
            }

            foreach ($data as $index=>$item) {
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
                        <a class="btn btn-info" href="post.php?blog=<?php echo $index; ?>" style=" color: blue; background-color: white;">Detay</a>
                    </div>
                </div>
            </div><br>
        <?php } ?>
    </div>
    <?php
    /** 
     * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
     * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
     * bölebilirsiniz.
     */

    /**
     * **Giriş yapmış kullanıcının** PHP Bootcamp içerisinde gördüğümüz konularla
     * alakalı olarak hazırlanmış olan 2 veya daha fazla yazının başlığı, açıklaması,
     * resmini ve detay linkini/butonunu gördüğü bir sayfa bekliyoruz. Burada _isteğe
     * bağlı olarak_ bir sayfalama (1. sayfa, 2. sayfa gibi) oluşturabilirsiniz.
     *  
     * **Not:** Henüz veritabanı görmediğimiz için bu yazıları sabit (hardcoded)
     * verebilirsiniz. `data.php` dosyası üzerinden almanız bekleniyor.
     */
    
    ?>
</body>
</html>