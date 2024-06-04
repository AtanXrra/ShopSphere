<div class="container">
        <h4>Kategori Produk</h4>
        <div class="row text-center">
            <?php foreach ($kategori as $key => $value): ?>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm">
                        <img src="<?php echo $this->config->item("url_kategori").$value['foto_kategori'] ?>" alt="foto kategori" width="200">
                        <div class="card-body">
                            <h6><?php echo $value['nama_kategori'] ?></h6>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>