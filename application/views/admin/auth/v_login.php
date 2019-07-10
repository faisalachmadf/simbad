

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">

            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                
                  <img src="<?= base_url('assets/back') ?>/img/alam.jpg" style="width:500px; height: 600px;" >
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                     <img src="<?= base_url('assets/back') ?>/img/petaprov.png" style="width:180px; height: 100px;" > <hr>
                    <h1 class="h4 text-gray-900 mb-4">Sistem Informasi Batas Daerah</h1>
                  </div>
                   <form action="<?= base_url();?>admin/auth/Login/auth" method="post" enctype="multipart/form-data"class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" placeholder="Masukan username anda" name="username" aria-describedby="emailHelp" value="<?= set_value('username'); ?>">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" placeholder="Masukan password anda" name="password" required="" placeholder="Password" value="<?= set_value('password'); ?>">
                    </div>
                
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login <i class="fa fa-sign-in"></i>
                    </button>
               
                  
                  </form>
                  <hr>
               <!--   <p>Kamu lupa password? <font color="red"><b>Segera Hubungi Admin Utama! </b></font></p> -->
                   <div>
                     <p>©2019 Biro Pemerintahan dan Kerja Sama </p>
                    <p>All Rights Reserved.</p><br>
                <!--   <?php echo print_r($this->session->userdata);?> -->
                   </div>
                </div>
              </div>
            </div>


      
          </div>
        </div>

      </div>

    </div>

  </div>
