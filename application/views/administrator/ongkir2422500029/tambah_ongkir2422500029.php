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
						<li class="breadcrumb-item"><a href="<?= base_url('admin/ongkir2422500029') ?>">Ongkir</a></li>
						<li class="breadcrumb-item active">Tambah Ongkir</li>
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
							<h3 class="card-title font-weight-bold" style="font-size: 1.5rem;"><i class="fas fa-plus-circle mr-2 text-primary"></i>Tambah Ongkir</h3>

							<p class="card-text">
								<form method="post">
										<div class="mb-3">
									<label for="nama_ekspedisi029" class="form-label">Nama Ekpedisi</label>
									<select name="nama_ekspedisi029" id="nama_ekspedisi029" class="form-control">
											<option value="" selected>-- Pilih Nama Ekspedisi --</option>
											<option value="JNE">JNE</option>
											<option value="JNT">J&T Express</option>
											<option value="SICEPAT">SiCepat</option>
											<option value="POS">Pos Indonesia</option>
									</select>
									<small class="text-danger"><em><?= form_error('nama_ekspedisi029') ?></em></small>
							</div>

									<div class="mb-3">
									<label for="jenis_layanan029" class="form-label">Jenis Layanan</label>
									<select name="jenis_layanan029" id="jenis_layanan029" class="form-control">
											<option value="" selected>-- Pilih Jenis Layanan --</option>
											<option value="Reguler">Reguler</option>
											<option value="Express">Express</option>
									</select>
									<small class="text-danger"><em><?= form_error('jenis_layanan029') ?></em></small>
							</div>

							<div class="mb-3">
									<label for="tarif_per_kg029" class="form-label">Tarif PerKg</label>
									<div class="input-group">
										<span class="input-group-text" id="basic-addon1">Rp</span>
										<input type="number" name="tarif_per_kg029" id="tarif_per_kg029" class="form-control">
									</div>
								</div>

									<div class="mb-3">
									<label for="status029" class="form-label">Status</label>
									<select name="status029" id="status029" class="form-control">
											<option value="" selected>-- Pilih Status --</option>
											<option value="Aktif">Aktif</option>
											<option value="Tidak Aktif">Tidak Aktif</option>
									</select>
									<small class="text-danger"><em><?= form_error('status029') ?></em></small>
							</div>

									<button type="submit" class="btn btn-primary">Tambah</button>
									<a href="<?= base_url('admin/ongkir2422500029') ?>" class="btn btn-danger">Kembali</a>
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