<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Form Data Balita</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('beranda')?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url('data_balita')?>"> Data Balita</a></li>
			<li><a href="<?= site_url()?>data_balita/rincian/1/<?= $data_balita['id']?>"> Rincian Data Balita</a></li>
			<li class="active">Form Penambahan Data Balita</li>
		</ol>
	</section>
	<section class="content">
		<div class="box box-info">
			<div class="box-header with-border">
				<a href="<?= site_url("data_balita"); ?>" class="btn btn-social btn-box btn-primary btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Daftar Suplemen"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Daftar Suplemen</a>
				<a href="<?= site_url("data_balita/rincian/$data_balita[id]"); ?>" class="btn btn-social btn-box btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-left"></i> Kembali Ke Rincian Data Suplemen</a>
			</div>
			<?php $this->load->view('kesehatan/data_balita/rincian'); ?>
			<div class="box-body">
				<h5><b>Tambahkan Data Individu Balita</b></h5>
				<hr>
				<form action="" id="main" name="main" method="POST" class="form-horizontal">
					<div class="form-group" >
						<label for="terdata" class="col-sm-3 control-label">Nama / NIK Balita</label>
						<div class="col-sm-8">
							<select class="form-control select2 required" id="terdata" name="terdata" onchange="formAction('main')">
								<option selected="selected">-- Silakan Masukan Nama/NIK Balita  --</option>
								<?php foreach ($list_sasaran['data'] as $item): ?>
									<?php if (strlen($item["id"])>0): ?>
										<option value="<?= $item['id']?>" <?= selected($individu['id'], $item['id']); ?>>Nama : <?= $item['nama'] . ' - ' . $item['info']; ?></option>
									<?php endif; ?>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
				</form>
				<div id="form-melengkapi-data-peserta">
					<form id="validasi" action="<?= "$form_action/$data_balita[id]"; ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-3 control-label"></label>
							<div class="col-sm-8">
								<input type="hidden" name="id_terdata" value="<?= $individu['id']?>" class="form-control input-sm required">
							</div>
						</div>
						<?php if ($individu): ?>
							<?php include("district-app/views/data_balita/konfirmasi_terdata.php"); ?>
						<?php endif; ?>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="keterangan">Keterangan</label>
							<div class="col-sm-8">
								<textarea name="keterangan" id="keterangan" class="form-control input-sm" maxlength="100" placeholder="Keterangan" rows="5"></textarea>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="box-footer">
				<button type="reset" class="btn btn-social btn-box btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
				<button type="submit" class="btn btn-social btn-box btn-info btn-sm pull-right" onclick="$('#'+'validasi').submit();"><i class="fa fa-check"></i> Simpan</button>
			</div>
		</div>
	</section>
</div>

