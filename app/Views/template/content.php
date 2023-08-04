<?php
echo $this->extend('template/index');
echo $this->section('content');
?>
<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?php echo $title_card; ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php echo $selamat_datang; ?>
              </div>
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
</div>     
<?php
echo $this->endSection();