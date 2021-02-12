<?php

include ("functions.php");
processControl();
/**
 * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
 * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
 * bölebilirsiniz.
 */

 /**
  * Uygulamanın çeşitli sayfalarında PHP Bootcamp içerisinde işlediğimiz
  * konulara dair ufak makalelerin veya lorem ipsum gibi yer alması bekleniyor.
  * **Not:** Henüz veritabanı görmediğimiz için bu yazıları sabit (hardcoded) verebilirsiniz.
  */
 $data =[ 
	 		[
	 			'id' => 1,
	 			'title' => 'Lorem Ipsum',
	 			'description' => "Lorem Ipsudasdasdasm, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.",
	 			'image' => 'image/photo.png',
	 			'seen' => false
	 		],
	 		[
	 			'id' => 2,
	 			'title' => 'Lorem Ipsum',
	 			'description' => "Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.",
	 			'image' => 'image/photo.png',
	 			'seen' => false
	 		],
	 		[
	 			'id' => 3,
	 			'title' => 'Lorem Ipsum',
	 			'description' => "Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.",
	 			'image' => 'image/photo.png',
	 			'seen' => false
	 		]
	 	];
