<?php
include 'baglan.php';

ob_start();
session_start();

// Ayar güncelleme işlemleri yapılır
if(isset($_POST['ayar_kaydet'])){
    $ayarkaydet = $db->prepare("UPDATE ayarlar SET
        site_baslik=:site_baslik,
        site_aciklama=:site_aciklama,
        site_sahibi=:site_sahibi");
    
    $ayarkaydet->execute(array(
        'site_baslik' => $_POST['site_baslik'],
        'site_aciklama' => $_POST['site_aciklama'],
        'site_sahibi' => $_POST['site_sahibi']
    ));
}


// Oturum açma işlemi veri karşılaştırma
if(isset($_POST['oturumac'])){
    $kullanicisor = $db->prepare("SELECT * FROM kullanici WHERE
        kullanici_mail=:mail
        AND
        kullanici_sifre=:sifre");
    $kullanicisor->execute(array(
        'mail' => $_POST['kullanici_mail'],
        'sifre' => $_POST['kullanici_sifre'],
    ));
    $sonuc = $kullanicisor->rowCount();
    
    if ($sonuc==0){
        echo "Mail yada şifreniz hatalı";
    }else{
        echo "Başarılı";
        $_SESSION['kullanici_mail'] = $_POST['kullanici_mail'];
    }
}



