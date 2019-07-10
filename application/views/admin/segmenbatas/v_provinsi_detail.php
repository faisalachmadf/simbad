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
                       <label for="id_katprov" class="col-sm-2 col-form-label">Segmen Perbatasan</label>
                        <div class="col-sm-10">
                        <b><p><?= $provinsi['id_katprov']; ?></p></b>
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="kabkot" class="col-sm-2 col-form-label">Nama Kabupaten/Kota</label>
                      <div class="col-sm-10">
                        <b><p><?= $provinsi['kabkot']; ?></p></b>
                   
                    
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="aturan" class="col-sm-2 col-form-label">Aturan</label>
                      <div class="col-sm-10">
                      <b><p><?= $provinsi['aturan']; ?></p></b>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="file" class="col-sm-2 col-form-label">Upload File Peraturan</label>
                      <div class="col-sm-10">
                          <b><p>isi file</p></b>
                      </div>
                    </div>

                     <div class="form-group row">
                      <label for="Tanggal Input" class="col-sm-2 col-form-label">Tanggal Input</label>
                      <div class="col-sm-10">
                      <b><p><?= $provinsi['created_at']; ?></p></b>
                      </div>
                    </div>
                         <hr>
                  <div class="form-group row float-right">
                  <div class="col-lg-12 ">
                  
                     <a href=" <?= base_url('admin/segmenbatas/Provinsi');?>" class="btn btn btn-warning"><i class="fas fa-undo"></i> Kembali</a>
                  </div>
                </div>
                  
                </form>
           
                
                </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

    