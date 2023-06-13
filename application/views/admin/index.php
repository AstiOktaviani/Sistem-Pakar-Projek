      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Halaman Dashboard Admin</h3>
            </div>
          </div>

          <div class="clearfix"></div>
                <div class="x_content">
                  <div class="row top_tiles">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <a href="<?= base_url('gejala'); ?>">
                          <div class="icon"><i class="fa fa-edit"></i>
                          </div>
                          <div class="count"><?= $totalGejala; ?></div>
                          <h3>Gejala</h3>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <a href="<?= base_url('kerusakan'); ?>">
                          <div class="icon"><i class="fa fa-desktop"></i></div>
                          <div class="count"><?= $totalKerusakan; ?></div>
                          <h3>Kerusakan</h3>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <a href="<?= base_url('pengetahuan'); ?>">
                          <div class="icon"><i class="fa fa-table"></i></div>
                          <div class="count"><?= $totalPengetahuan; ?></div>
                          <h3>Aturan</h3>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
             
        </div>
      </div>
      <!-- /page content -->