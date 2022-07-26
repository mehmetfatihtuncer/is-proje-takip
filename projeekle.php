<?php include 'header.php'; ?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="display-4" style="font-size: 2rem;">Proje ekle</h3>
        </div>
        <div class="card-body">
            <form action="islemler/islem.php" method="POST">
                <div class="form-row">
                    <div class="col-md-6">
                        <label>Proje Başlığı</label>
                        <input type="text" name="proje_baslik" class="form-control"
                            placeholder="Projenizin başlığını giriniz">
                    </div>
                    <div class="col-md-6">
                        <label>Teslim Tarihi</label>
                        <input type="date" name="proje_teslim_tarihi" class="form-control">
                    </div>
                </div>

                <div class="form-row mt-2">
                    <div class="col-md-6">
                        <label>Proje Aciliyeti</label>
                        <select name="proje_aciliyet" class="form-control">
                            <option value="Acil">Acil</option>
                            <option value="Acelesi yok">Acelesi yok</option>
                            <option value="Normal">Normal</option>
                        </select>
                    </div>
                    
                    <div class="col-md-6">
                        <label>Proje Durumu</label>
                        <select name="proje_durum" class="form-control">
                            <option value="Yeni Başladı">Yeni Başladı</option>
                            <option value="Devam ediyor">Devam ediyor</option>
                            <option value="Bitti">Bitti</option>
                        </select>
                    </div>
                </div>
                <div class="form-row mt-2">
                    <label>Proje Detayı</label>
                    <textarea name="proje_detay" class="form-control"></textarea>
                </div>
                <button name="projeekle" type="submit" class="btn btn-primary mt-2">Kaydet</button>
            </form>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>