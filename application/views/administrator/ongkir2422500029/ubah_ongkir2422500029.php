<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 align-items-center">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark font-weight-bold">
                        <i class="fas fa-tags mr-2 text-primary"></i> Ongkir
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right bg-transparent p-0 m-0">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/Ongkir') ?>">Ongkir</a></li>
                        <li class="breadcrumb-item active">Ubah Ongkir</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title font-weight-bold" style="font-size: 1.5rem;"><i class="fas fa-edit mr-2 text-primary"></i>Ubah Ongkir</h3>

                            <p class="card-text">
                                <form method="post">
                                    <div class="mb-3">
                                        <label for="id_ongkir029" class="form-label">ID Ongkir</label>
                                        <input type="text" class="form-control" name="id_ongkir029" id="id_ongkir029" value="<?= $Ongkir['nama'] ?>" aria-describedby="Nama Ongkir">
                                    </div>
                                    <div class="form-group">
                                    <label>Nama Ekspedisi</label>
                                        <select class="form-control" id="nama_ekspedisi029" name="nama_ekspedisi029">
                                            <option>JNE</option>
                                            <option>JNT</option>
                                            <option>DLL</option>
                                        </select>
                                        <?php echo form_error('nama_ekspedisi029', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>jenis layanan</label>
                                            <select class="form-control" id="jenis_layanan029" name="jenis_layanan029">
                                                <option>Reguler</option>
                                                <option>express</option>
                                            </select>
                                            <?php echo form_error('jenis_layanan029', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tarif_per_kg029" class="form-label">Tarif per KG</label>
                                        <input type="text" class="form-control" name="tarif_per_kg029" id="tarif_per_kg029" aria-describedby="tarif_per_kg029">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                            <select class="form-control" id="status029" name="status029">
                                                <option>Aktif</option>
                                                <option>Tidak Aktif</option>
                                            </select>
                                            <?php echo form_error('status029', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                    <a href="<?= base_url('admin/Ongkir') ?>" class="btn btn-danger">Kembali</a>
                                </form>
                            </p>
                        </div>
                    </div>

                </div>
                <!-- /.col-md-6 -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->