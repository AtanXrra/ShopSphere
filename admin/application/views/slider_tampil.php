<div class="container">
        <h4>Data slider</h4>
        <table class="table table-bordered mb-3" id="tabelku">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Foto</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($slider as $k => $v): ?>

                <tr>
                    <td><?php echo $k+1; ?></td>
                    <td><?php echo $v['caption_slider']; ?></td>
                    <td>
                        <img src="<?php echo $this->config->item("url_slider").$v["foto_slider"] ?>" width="200">
                    </td>
                    <td>
                        <a href="<?php echo base_url("slider/edit/".$v["id_slider"]) ?>" class="btn btn-warning">Edit</a>
                        <a href="<?php echo base_url("slider/hapus/".$v["id_slider"]) ?>" class="btn btn-danger">Hapus</a>
                        </td>
                </tr>

                <?php endforeach  ?>
            </tbody>
        </table>
        <a href="<?php echo base_url("slider/tambah") ?>" class="btn btn-primary">Tambah Data</a>
    </div>