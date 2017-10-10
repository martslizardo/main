<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Simple Apps</title>
		<base href="<?= base_url() ?>" />
		<!-- <link rel="stylesheet" type="text/css" href="assets/css/flavored-reset-and-normalize.min.css" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" > -->
		<link rel="stylesheet" type="text/css" href="assets/css/flavored-reset-and-normalize.css" >
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" >
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" >
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css" >
	</head>
	<body>
		<div id="sidebar">
			<!-- sidebar menu start-->
			<div id="nav-icon-close" class="custom-toggle">
				<span></span>
				<span></span>
			</div>

			<ul class="sidebar-menu">		
				<li class="">
					<a class="" href="<?= base_url('/') ?>">
						<i class="fa fa-dashboard"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li class="">
					<a class="" href="http://chat.payakapps.com">
						<i class="fa fa-dashboard"></i>
						<span>Chat Module</span>
					</a>
				</li>
				<li class="">
					<a class="" href="http://localhost/task/tasks">
						<i class="fa fa-dashboard"></i>
						<span>Task Module</span>
					</a>
				</li>
				<li class="sub-menu">
					<a data-toggle="collapse" href="#UIElementsSub" aria-expanded="false" aria-controls="UIElementsSub" >
						<i class="fa fa-desktop"></i>
						<span>User Management</span>
					</a>
					<ul class="sub collapse" id="UIElementsSub">
						<li><a  href="<?= base_url('users') ?>">View Users</a></li>
						<li><a  href="<?= base_url('users/create') ?>">Create User</a></li>
					</ul>
				</li>
				<li class="">
					<a class="" href="<?= base_url('users/profile') ?>">
						<i class="fa fa-user-o"></i>
						<span>Profile</span>
					</a>
				</li>
				<li class="">
					<a class="" href="<?= base_url('users/logout'); ?>">
						<i class="fa fa-dashboard"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
			<!-- sidebar menu end-->
		</div>
		<div class="main-content">
			<div class="topbar">
				<nav class="navbar navbar-custom">
				<div id="nav-icon-open" class="custom-toggle hidden-toggle">
					<span></span>
					<span></span>
					<span></span>
				</div>
					<a class="navbar-brand" href="#">Navbar</a>
					<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#">Disabled</a>
						</li>
						</ul>
						<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="text" placeholder="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form>
					</div> -->
				</nav>
			</div>
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-sm-6">
						<div class="card">
							<div class="card-header">Create User</div>
							<div class="card-body">
								<form id="createUser" method="POST">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label text-right">E-mail Address</label>
										<div class="col-sm-8">
											<input class="form-control" type="text" name="email_address" placeholder="E-mail Address" />
											<?php if (isset($errors['email_address'])): ?>
												<small class="text-danger"><?= $errors['email_address'] ?></small>
											<?php endif; ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label text-right">Password</label>
										<div class="col-sm-8">
											<input class="form-control" type="password" name="password" placeholder="Password" />
											<?php if (isset($errors['password'])): ?>
												<small class="text-danger"><?= $errors['password'] ?></small>
											<?php endif; ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label text-right">First Name</label>
										<div class="col-sm-8">
											<input class="form-control" type="text" name="first_name" placeholder="First Name" />
											<?php if (isset($errors['first_name'])): ?>
												<small class="text-danger"><?= $errors['first_name'] ?></small>
											<?php endif; ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label text-right">Last Name</label>
										<div class="col-sm-8">
											<input class="form-control" type="text" name="last_name" placeholder="Last Name" />
											<?php if (isset($errors['last_name'])): ?>
												<small class="text-danger"><?= $errors['last_name'] ?></small>
											<?php endif; ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label text-right">Role</label>
										<div class="col-sm-8">
											<select class="form-control" name="role">
												<option value="2">Admin</option>
												<option value="3">Staff</option>
											</select>
										</div>
									</div>
								</form>
							</div>
							<div class="card-footer">
								<button class="btn btn-primary" form="createUser" type="submit">Create</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--  -->

		<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> -->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.nicescroll.min.js"></script>
		<script src="assets/js/script.js"></script>
	</body>
</html>