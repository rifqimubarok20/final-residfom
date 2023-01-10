<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-edit" style="color:green"> </i> Daftar Data Lokasi
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
            <li class="active"><i class="fa fa-file-text"></i>&nbsp; Daftar Data Lokasi</li>
        </ol>
    </section>
    <section class="content">
        <?php if (!empty($this->session->flashdata())) {
            echo $this->session->flashdata('pesan');
        } ?>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <a href="rumah/tambah"><button class="btn btn-primary"><i class="fa fa-plus"> </i> Tambah Lokasi</button></a>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <br />
                            <table id="example1" class="table table-bordered table-striped table" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>kode</th>
                                        <th>wilayah</th>
                                        <th>kecamatan</th>
                                        <th>nama</th>
                                        <th>lokasi</th>
                                        <th>latitude</th>
                                        <th>longitude</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($gis as $isi) { ?>
                                        <tr>
                                            <td><?= $isi['id']; ?></td>
                                            <td><?= $isi['kode']; ?></td>

                                            <td><?= $isi['wilayah']; ?></td>
                                            <td><?= $isi['kecamatan']; ?></td>
                                            <td><?= $isi['nama']; ?></td>
                                            <td><?= $isi['lokasi']; ?></td>
                                            <td><?= $isi['latitude']; ?></td>
                                            <td><?= $isi['longitude']; ?></td>
                                            <td style="width:5%;">
                                                <a href="<?= base_url('rumah/del/' . $isi['id']); ?>" onclick="return confirm('Anda yakin user akan dihapus ?');">
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                            </td>
                                        </tr>
                                    <?php
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>