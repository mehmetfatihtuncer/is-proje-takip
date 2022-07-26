<?php

include 'baglan.php';

// Veri güncelleme işlemi
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


?>