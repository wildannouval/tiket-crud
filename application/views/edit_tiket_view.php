<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edit Tiket</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>

<body>
    <div class="container bg-dark p-5 text-white">
        <h1>
            <center>Edit Tiket</center>
        </h1>
        <div class="col-md-6 offset-md-3">
            <form action="<?php echo site_url('tiket/update');?>" method="post">
                <div class="form-group">
                    <label>Nama Penumpang</label>
                    <input type="text" class="form-control" name="nama_penumpang" value="<?php echo $nama_penumpang;?>"
                        placeholder="Nama Penumpang">
                </div>
                <div class="form-group">
                    <label>Alamat Penumpang</label>
                    <input type="text" class="form-control" name="alamat_penumpang"
                        value="<?php echo $alamat_penumpang;?>" placeholder="Alamat Penumpang">
                </div>
                <div class="form-group">
                    <label>Tujuan</label>
                    <input type="text" class="form-control" name="tujuan" value="<?php echo $tujuan;?>"
                        placeholder="tujuan">
                </div>
                <div class="form-group">
                    <label>Tanggal Keberangkatan</label>
                    <input type="date" class="form-control" id="tanggal_keberangkatan" name="tanggal_keberangkatan"
                        value="<?php echo $tanggal_keberangkatan;?>">
                </div>
                <div class="form-group">
                    <label>Harga Tiket</label>
                    <input type="number" class="form-control" name="harga_tiket" placeholder="Harga"
                        value="<?php echo $harga_tiket;?>">
                </div>
                <input type="hidden" name="tiket_id" value="<?php echo $tiket_id?>">
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>

</html>