<!-- Sidebar  -->
<?php $this->load->view('layouts/_sidebar_kasir'); ?>
<!-- akhir sidebar -->

<!-- ########## kasir ########## -->
<div class="content-wrapper">
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="pt-2 col-md-9">
					<?php $this->load->view('layouts/_alert') ?>
					<!-- ########## nota ########## -->
					<div class="card">
						<!-- /.card-header -->
						<div class="card-body p-0">

							<table class="table table-striped">
								<thead>
									<tr>
										<th style="width: 30px">Qty</th>
										<th>Item</th>
										<th>Discount</th>
										<th style="width: 130px">Sub Total</th>
										<th style="width: 40px"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1.</td>
										<td>Update software</td>
										<td>
											<div class="progress progress-xs">
												<div class="progress-bar progress-bar-danger" style="width: 55%"></div>
											</div>
										</td>
										<td><span class="badge bg-danger float-right">55%</span></td>
										<td>
											<div class="mt-n2 mb-n1 btn btn-sm btn-danger">
												<i class="far fa-fw fa-window-close"></i>
											</div>
										</td>
									</tr>
									<tr>
										<td>2.</td>
										<td>Clean database</td>
										<td>
											<div class="progress progress-xs">
												<div class="progress-bar bg-warning" style="width: 70%"></div>
											</div>
										</td>
										<td><span class="badge bg-warning float-right">70%</span></td>
										<td>
											<div class="mt-n2 mb-n1 btn btn-sm btn-danger">
												<i class="far fa-fw fa-window-close"></i>
											</div>
										</td>
									</tr>
									<tr>
										<td>3.</td>
										<td>Cron job running</td>
										<td>
											<div class="progress progress-xs progress-striped active">
												<div class="progress-bar bg-primary" style="width: 30%"></div>
											</div>
										</td>
										<td><span class="badge bg-primary float-right">30%</span></td>
										<td>
											<div class="mt-n2 mb-n1 btn btn-sm btn-danger">
												<i class="far fa-fw fa-window-close"></i>
											</div>
										</td>
									</tr>
									<tr>
										<td>4.</td>
										<td>Fix and squish bugs</td>
										<td>
											<div class="progress progress-xs progress-striped active">
												<div class="progress-bar bg-success" style="width: 90%"></div>
											</div>
										</td>
										<td><span class="badge bg-success float-right">90%</span></td>
										<td>
											<div class="mt-n2 mb-n1 btn btn-sm btn-danger">
												<i class="far fa-fw fa-window-close"></i>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- ### nota ### -->
				</div>
				<div class="pt-2 col-md-3">
					<!-- ########## gambar ########## -->
					<div class="card">
						<img src="images/search-icon.jpg" hieght="250" width="250px" alt="">
					</div>
					<!-- ### akhir gambar ### -->
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- ### akhir kasir ### -->