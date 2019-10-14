<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
			  <div class="card-header">
			    Form Tambah Data Mahasiswa
			  </div>
			  <div class="card-body">
			  	<?php if (validation_errors()) : ?>
			  	<div class="alert alert-danger" role="alert">
				   <?= validation_errors(); ?>

				</div>
			<?php endif; ?>
			    <form action="" method="post">
				 <div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control" id="nama" name="nama">
				  </div>
				  <div class="form-group">
				    <label for="nrp">NRP</label>
				    <input type="text" class="form-control" id="nrp" name="nrp">
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="text" class="form-control" id="email" name="email">
				  </div>
				  <div class="form-group">
					    <label for="jurusan">Jurusan</label>
					    <select class="form-control" id="jurusan" name="jurusan">
					      <option value="Teknik informatika">Teknik informatika</option>
					      <option value="Teknik mesin">Teknik Mesein</option>
					      <option value="Teknik Industri">Teknik Industri</option>
					      <option value="Teknik pangan">Teknik pangan</option>
					      <option value="Teknik planologi">Teknik planologi</option>
					      <option value="Teknik lingkungan">Teknik Lingkungan</option>
					    </select>
					  </div>
					  <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
				</form>
			  </div>
			</div>
		</div>
	</div>
</div>