<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form method="post">
                <div class="mb-3">
                    <label>Email Member</label>
                    <input type="text" name="email_member" class="form-control" value="<?php echo set_value("email_member") ?>">
                    <span class="text-muted"><?php echo form_error("email_member") ?></span>
                </div>
                <div class="mb-3">
                    <label>Password Member</label>
                    <input type="text" name="password_member" class="form-control">
                    <p class="text-muted"><?php echo form_error("password_member") ?></p>
                </div>
                <div class="mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_member" class="form-control" value="<?php echo set_value("nama_member") ?> ">
                    <span class="text-muted"><?php echo form_error("nama_member") ?></span>
                </div>
                <div class="mb-3">
                    <label>Alamat Lengkap</label>
                    <textarea class="form-control" name="alamat_member"><?php echo set_value("alamat_member") ?></textarea>
                    <span class="text-muted"><?php echo form_error("alamat_member") ?></span>
                </div>
                <div class="mb-3">
                    <label>Nomor WA</label>
                    <input type="text" name="wa_member" class="form-control" value="<?php echo set_value("wa_member") ?> ">
                    <span class="text-muted"><?php echo form_error("wa_member") ?></span>
                </div>
                <div class="mb-3">
                    <label>City ID</label>
                    <select name="city_id" class="form-control form-select">
                        <option value="">Pilih!</option>
                        <?php foreach ($distrik as $key => $value):?>
                            <option value="<?php echo $value["city_id"] ?>" <?php echo $value["city_id"]==set_value("city_id") ? "selected" : "" ?> >
                            <?php echo $value["type"] ?>
                            <?php echo $value["city_name"] ?>
                            <?php echo $value["province"] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                    <span class="text-muted"><?php echo form_error("city_id") ?></span>
                </div>
                <button class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
  </div>
 