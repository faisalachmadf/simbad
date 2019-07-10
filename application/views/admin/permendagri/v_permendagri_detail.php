  <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $judul; ?></h1>
          </div>

 
          <!-- Content Row -->

          <div class="row">

            <div class="col-lg-12 ">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  Detail
                </div>

                <div class="card-body">
                  
                  <form action="" method="post">
                    <div class="form-group row">
                       <label for="nomor" class="col-sm-2 col-form-label">Nomor dan Tanggal</label>
                        <div class="col-sm-10">
                        <b><p><?= $permendagri['nomor']; ?></p></b>
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="tentang" class="col-sm-2 col-form-label">Tentang</label>
                      <div class="col-sm-10">
                        <b><p><?= $permendagri['tentang']; ?></p></b>
                   
                    
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="segmen" class="col-sm-2 col-form-label">Segmen Batas Daerah</label>
                      <div class="col-sm-10">
                      <b><p><?= $permendagri['segmen']; ?></p></b>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="file" class="col-sm-2 col-form-label">File</label>
                      <div class="col-sm-10">
                          <b><p>isi file</p></b>
                      </div>
                    </div>

                     <div class="form-group row">
                      <label for="Tanggal Input" class="col-sm-2 col-form-label">Tanggal Input</label>
                      <div class="col-sm-10">
                      <b><p><?= $permendagri['created_at']; ?></p></b>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="Tanggal Input" class="col-sm-2 col-form-label">Tanggal Perubahan Data</label>
                      <div class="col-sm-10">
                      <b><p><?= $permendagri['edited_at']; ?></p></b>
                      </div>
                    </div>
                         <hr>
                  <div class="form-group row float-right">
                  <div class="col-lg-12 ">
                  
                     <a href=" <?= base_url('admin/permendagri/Permendagri');?>" class="btn btn btn-warning"><i class="fas fa-undo"></i> Kembali</a>
                  </div>
                </div>
                  
                </form>
           
                
                </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

    