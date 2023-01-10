<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Dashboard <small>Control panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-sm-12">
				<div class="col-lg-12 col-xs-6">
					<!--small box-->
					<div class="small-box bg-blue">
						<div class="inner">
							<h3><?= $count_pengguna; ?></h3>

							<p>Anggota</p>
						</div>
						<div class="icon">
							<i class="fa fa-user-plus"></i>
						</div>
						<a href="userminor/kembali" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-xs-12">
					<?php foreach ($news as $news_item) : ?>
						<div class="small-box bg-yellow" style="height: 37rem;">
							<div class="inner">
								<h3><a href="<?= site_url("userminor/detail/" . $news_item['slug']) ?>">
										<?= $news_item['title']; ?></a></h3>
								<p><?= $news_item['body']; ?></p>
							</div>
							<a href="<?= site_url("userminor/detail/" . $news_item['slug']) ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					<?php endforeach ?>
				</div>

			</div>
		</div>
	</section>
</div>