<?php if ($this->CI->cek_hak_akses('u')) : ?>

  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Menu</h3>
      <div class="box-tools">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <div class="box-body no-padding">
      <ul class="nav nav-pills nav-stacked">
        <li class="<?php compared_return($selected_nav, "data_balita", "active"); ?>"><a href="<?= site_url('kesehatan_balita') ?>">Data Balita</a></li>
      </ul>
      <ul class="nav nav-pills nav-stacked">
        <li class="<?php compared_return($selected_nav, "data_balita", "active"); ?>"><a href="<?= site_url('kesehatan_balita/pantau') ?>">Pemantauan Balita</a></li>
      </ul>
    </div>
  </div>

<?php endif; ?>