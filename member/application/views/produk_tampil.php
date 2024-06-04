<div class="container">
    <h5>Produk Terbaru</h5>
    <div class="row text-center">
        <?php foreach ($produk as $key => $value): ?>
            <div class="col-md-4">
                <img src="<?php echo $this->config->item("url_produk").$value['foto_produk'] ?>" alt="foto produk" width="200">
                <div class="card-body">
                    <h6><?php echo $value['nama_produk'] ?></h6>
                    <p class="lead">Rp <?php echo number_format($value['harga_produk']) ?></p>
                </div>
            </div>
        <?php endforeach  ?>
    </div>
</div>