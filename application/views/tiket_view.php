<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tiket Pesawat</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

<body class="">
    <div class="container bg-dark p-5">
        <div class="container mb-4">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Sistem Pemesanan Tiket Pesawat</a>
            </nav>
        </div>
        <div class="container mb-3">
            <a href="<?php echo site_url('tiket/add_new');?>" class="btn btn-sm btn-warning">Add Tiket</a>
        </div>
        <div class="container bg-light">
            <table class="table table-stripped" id="table-tiket">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Penumpang</th>
                        <th>Alamat Penumpang</th>
                        <th>Tujuan</th>
                        <th>Tanggal Keberangkatan</th>
                        <th>Harga Tiket</th>
                        <th width="200">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            $count = 0;
            foreach ($tiket->result() as $row) : 
                $count++;
                ?>
                    <tr>
                        <td><?php echo $count;?></td>
                        <td><?php echo $row->nama_penumpang;?></td>
                        <td><?php echo $row->alamat_penumpang;?></td>
                        <td><?php echo $row->tujuan;?></td>
                        <td><?php echo $row->tanggal_keberangkatan;?></td>
                        <td><?php echo number_format($row->harga_tiket);?></td>
                        <td>
                            <a href="<?php echo site_url('tiket/get_edit/'.$row->tiket_id);?>"
                                class="btn btn-info">Update</a>
                            <a href="<?php echo site_url('tiket/delete/'.$row->tiket_id);?>"
                                class="btn btn-danger">Delete</a>
                        <td>
                    </tr> <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>

</html>