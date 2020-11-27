<div class="content-wrapper">
    <section class="content">
        <?php foreach($Jadwal as $Jdl){ ?>
        <form action="<?php echo base_url().'Data_kasi/update'; ?>"method="post">
            <div class="form-group">
                <label>Nama</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $Jdl->id ?>">
                <input type="text" name="Nama" class="form-control" value="<?php echo $Jdl->Nama ?>">
            </div>
            <div class="form-group">
                <label>NIP</label>
                <input type="text" name="NIP" class="form-control" value="<?php echo $Jdl->NIP ?>">
            </div>
            <div class="form-group">
                <label>Tanggal</label>
                <input type="text" name="Tanggal" class="form-control" value="<?php echo $Jdl->Tanggal ?>">
            </div>
            <div class="form-group">
                <label>Kegiatan</label>
                <input type="text" name="Kegiatan" class="form-control" value="<?php echo $Jdl->Kegiatan ?>">
            </div>
            <div class="form-group">
                <label>Seksi</label>
                <input type="text" name="Seksi" class="form-control" value="<?php echo $Jdl->Seksi ?>">
            </div>
            <button type="reset" class= "btn btn-danger">Reset</button>
            <button type="submit" class= "btn btn-primary">Simpan</button>
        </form>
        <?php }?>
    </section>
</div>