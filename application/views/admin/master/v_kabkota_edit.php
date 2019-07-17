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
                  Form Rubah Data Nama Kab/Kota
                </div>

                <div class="card-body">
                  
                   <?= form_open_multipart('admin/master/Kabkota/edit'); ?>
                   <input type="hidden" name="id" value="<?= $kabkota['id']; ?>">
                   <div class="form-group row">
                      <label for="kabkot" class="col-sm-2 col-form-label">kabkot dan Tanggal</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="kabkot" name="kabkot" placeholder="Masukan kabkot dan Tanggal" value="<?= $kabkota['kabkot']; ?>"> 
                        <small class="form-text text-danger"><?= form_error('kabkot'); ?></small>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="file" class="col-sm-2 col-form-label">Upload Gambar Logo</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control-file" id="file" name="image_upload">
                        <br>
                        <div class="alert alert-success" role="alert"> 
                         <small>Logo Saat ini :</small> &nbsp&nbsp&nbsp<img src="<?= base_url('assets/logo/').$kabkota['logo'] ?>" style="width: 50px; height: 50px;"><small>
                         
                        </div>
                      </div>
                    </div>

                         <hr>
                  <div class="form-group row float-right">
                  <div class="col-lg-12 ">
                    <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                     <a href=" <?= base_url('admin/master/Kabkota');?>" class="btn btn btn-danger"><i class="fas fa-undo"></i> Batal</a>
                  </div>
                </div>
                  
                </form>
           
                
                </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

    