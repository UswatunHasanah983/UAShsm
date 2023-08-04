<?php
echo $this->extend('template/index');
echo $this->section('content');
?>
<div class="row">
<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?php echo $title_card; ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>/prodi/tambah"><i class="fa-solid fa plus"></i>Tambah Prodi</a>
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Kd Prodi</th>
                      <th>Nama Prodi</th>
                      <th>Fakultas</th>
                      <th>Act</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                        foreach ($data_prodi as $r) {

                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $r['kdprodi']; ?></td>
                            <td><?php echo $r['nama_prodi']; ?></td>
                            <td><?php echo $r['fakultas']; ?></td>
                            <td>Edit | Hapus</td>
                        </tr>
                        <?php
                            $no++;
                        } 
                    ?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
</div>     
<?php
echo $this->endSection();
