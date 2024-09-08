<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Header -->
<div class="header bg-primary pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<h6 class="h2 text-white d-inline-block mb-0">Tambah Customer</h6>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="<?php echo site_url('admin'); ?>"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="<?php echo site_url('admin/cutomers'); ?>">Customer</a></li>
							<li class="breadcrumb-item active" aria-current="page">Tambah</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Page content -->
<div class="container-fluid mt--6">
	<?php echo form_open_multipart('admin/customers/add_customer'); ?>

	<div class="row">
		<div class="col-md-8">
			<div class="card-wrapper">
				<div class="card">
					<div class="card-header">
						<h3 class="mb-0">Data Customer</h3>
						<?php if ($flash) : ?>
							<span class="float-right text-success font-weight-bold" style="margin-top: -30px">
								<?php echo $flash; ?>
							</span>
						<?php endif; ?>
					</div>

					<div class="card-body">

						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label class="form-control-label" for="username">Username:</label>
									<input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control" id="username">
									<?php echo form_error('username'); ?>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label class="form-control-label" for="password">Password:</label>
									<input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" id="password">
									<?php echo form_error('password'); ?>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="form-control-label" for="name">Nama Costumer:</label>
							<input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control" id="name">
							<?php echo form_error('name'); ?>
						</div>

						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label class="form-control-label" for="email">Email:</label>
									<input type="text" name="email" value="<?php echo set_value('email'); ?>" class="form-control" id="email">
									<?php echo form_error('email'); ?>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label class="form-control-label" for="phone_number">No HP:</label>
									<input type="number" name="phone_number" value="<?php echo set_value('phone_number'); ?>" class="form-control" id="phone_number">
									<?php echo form_error('phone_number'); ?>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="form-control-label" for="address">Alamat:</label>
							<textarea name="address" class="form-control" id="address"><?php echo set_value('address'); ?></textarea>
							<?php echo form_error('address'); ?>
						</div>

					</div>

				</div>

			</div>

		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<h3 class="mb-0">Foto</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label class="form-control-label" for="pic">Foto:</label>
						<input type="file" name="profile_picture" class="form-control" id="pic">
						<small class="text-muted">Pilih foto PNG atau JPG dengan ukuran maksimal 2MB</small>
					</div>
				</div>
				<div class="card-footer text-right">
					<input type="submit" value="Tambah Customer Baru" class="btn btn-primary">
				</div>
			</div>
		</div>
	</div>

	</form>
