<?php include('header.php'); ?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="text-primary font-weight-bold">Ayarlar</h3>
        </div>

        <div class="card-body">
            <form action="ayarlar_submit" method="get">
                <div class="form-row">
                    <div class="col-md-6">
                        <label>Sitenizin başlığını giriniz</label>
                        <input class="form-control" type="text" name="" placeholder="Sitenizin başlığını giriniz">
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="col-md-6">
                        <label>Sitenizin açıklamasını giriniz</label>
                        <input class="form-control" type="text" name="" placeholder="Sitenizin açıklamasını giriniz">
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="col-md-6">
                        <label>Site sahibi</label>
                        <input class="form-control" type="text" name="" placeholder="Sitenizin  Sahibi">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Kaydet</button>
            </form>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>