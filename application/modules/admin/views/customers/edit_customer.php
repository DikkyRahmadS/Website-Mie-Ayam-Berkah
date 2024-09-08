<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Profile</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><?php echo anchor(base_url(), 'Home'); ?></li>
						<li class="breadcrumb-item active">Profile</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">

					<!-- Profile Image -->
					<div class="card card-primary card-outline">
						<div class="card-body box-profile">
							<h3 class="profile-username text-center"><?php echo $customer->username; ?></h3>
							<p class="text-muted text-center"><?php echo $customer->username; ?> | <?php echo $customer->email; ?></p>
							

						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->

				</div>
				<!-- /.col -->
				<div class="col-md-9">
					<div class="card">
						<div class="card-header p-2">
							<ul class="nav nav-pills">
								<li class="nav-item"><a class="nav-link profil active" href="#profile" data-toggle="tab">Profil</a></li>
								<li class="nav-item"><a class="nav-link akun " href="#akun" data-toggle="tab">Akun</a></li>
								<li class="nav-item"><a class="nav-link email" href="#email" data-toggle="tab">Email</a></li>
							</ul>
						</div><!-- /.card-header -->
						<div class="card-body">
							<div class="tab-content">
								<div class="active tab-pane" id="profile">
									<?php echo form_open_multipart('admin/customers/edit_name'); ?>
									<input type="hidden" name="id" value="<?php echo $customer->id; ?>">
									<div class="form-group row">
										<label for="inputName" class="col-sm-2 col-form-label">Nama:</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputName" name="name" value="<?php echo set_value('name', $customer->name); ?>" required>
										</div>
										<?php echo form_error('name', '<div class="text-danger font-weight-bold">', '</div>'); ?>
									</div>
									<div class="form-group row">
										<label for="inputHP" class="col-sm-2 col-form-label">No. HP:</label>
										<div class="col-sm-10">
											<input type="number" class="form-control" id="inputHP" name="phone_number" value="<?php echo set_value('phone_number', $customer->phone_number); ?>" required>
										</div>
										<?php echo form_error('phone_number', '<div class="text-danger font-weight-bold">', '</div>'); ?>
									</div>
									<div class="form-group row">
										<label for="inputAddr" class="col-sm-2 col-form-label">Alamat:</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputAddr" name="address" value="<?php echo set_value('address', $customer->address); ?>" required>
										</div>
										<?php echo form_error('address', '<div class="text-danger font-weight-bold">', '</div>'); ?>
									</div>

									<div class="form-group row">
										<label for="profile_picture" class="col-sm-2 col-form-label">Foto profil:</label>
										<div class="col-sm-10">
											<input type="file" class="form-control" id="profile_picture" name="profile_picture">
										</div>
										<?php echo form_error('profile_picture', '<div class="text-danger font-weight-bold">', '</div>'); ?>
									</div>
									<div class="form-group row">
										<div class="offset-sm-2 col-sm-10">
											<button type="submit" class="btn btn-danger">Ganti Profil</button>
										</div>
									</div>
									<?php echo form_close(); ?>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="akun">
									<?php echo form_open('admin/customers/edit_account', array('autocomplete' => 'off')); ?>
									<input type="hidden" name="id" value="<?php echo $customer->id; ?>">
									<div class="form-group row">
										<label for="inputUserName" class="col-sm-2 col-form-label">Username:</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputUserName" name="username" value="<?php echo set_value('username', $customer->username); ?>" required>
										</div>
										<?php echo form_error('username', '<div class="text-danger font-weight-bold">', '</div>'); ?>
									</div>
									<div class="form-group row">
										<label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" id="inputPassword" name="password" placeholder="Masukkan password baru untuk mengganti. Kosongkan jika tidak ingin mengganti">
										</div>
										<?php echo form_error('password', '<div class="text-danger font-weight-bold">', '</div>'); ?>
									</div>
									<div class="form-group row">
										<div class="offset-sm-2 col-sm-10">
											<button type="submit" class="btn btn-danger">Perbarui</button>
										</div>
									</div>
									<?php echo form_close(); ?>
								</div>
								<!-- /.tab-pane -->

								<div class="tab-pane" id="email">
									<?php echo form_open('admin/customers/edit_email'); ?>
									<input type="hidden" name="id" value="<?php echo $customer->id; ?>">
									<div class="form-group row">
										<label for="inputEmail" class="col-sm-2 col-form-label">Email:</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="inputEmail" name="email" value="<?php echo set_value('email', $customer->email); ?>" required>
										</div>
										<?php echo form_error('email', '<div class="text-danger font-weight-bold">', '</div>'); ?>
									</div>

									<div class="form-group row">
										<div class="offset-sm-2 col-sm-10">
											<button type="submit" class="btn btn-danger">Perbarui</button>
										</div>
									</div>
									<?php echo form_close(); ?>
								</div>
								<!-- /.tab-pane -->
							</div>
							<!-- /.tab-content -->
						</div><!-- /.card-body -->
					</div>
					<!-- /.nav-tabs-custom -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
