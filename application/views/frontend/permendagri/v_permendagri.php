       
       <div class="hero-home">
          <div class="container">
            <div class="row text-">
              <div class="col-sm-12 col-lg-6">
                <div class="intro-block">
                  <h1>Peraturan Menteri Dalam Negeri mengenai Segmen Batas Daerah</h1>
                  <p>Biro Pemerintahan dan Kerja Sama</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    <div id="main" class="main" style="margin-top: 50px;">
      <!-- Services Section --> 
      <div class="boxed-intro wow fadeInDown text-center">
          <h1> <strong>Permendagri tentang Segmen Batas Daerah di Jawa Barat</strong></h1><br>
          <div class="form wow fadeInLeft" data-wow-delay="0.3s">
                  <form id="chimp-form" class="subscribe-form wow zoomIn" action="#" method="post" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
                    <input class="mail" id="chimp-#" type="#" name="#" placeholder="Ketik Segmen disini" autocomplete="off"><input class="submit-button" type="submit" value="Carikan">
                  </form>
                  <div id="response"></div>
          </div>
      </div>
      <br><br>

      
      <div class="yd-boxed-ft">
        <div class="container">
        
         <div class="row text-center">

           <?php  foreach($permen as $p){  ?>
            <div class="col-md-6 col-lg-3 wow fadeInDown">
              <div class="box-inner">
                <div class="box-icon">
                  <img src="<?= base_url('assets/front'); ?> /assets/images/pdf.png" alt="Feature" width="30" >
                </div>
                <div class="box-info">
                  <small><?= $p->nomor ?></small><br>
                  <br><small style="color: red;">tentang</small><br>
                  <p><?= $p->tentang ?></p><br>
                  <small><?= $p->segmen ?></small>
           <!--        <p><?= $p->file ?></p> -->
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>

        <div class="row">

          <div class="container">

              <div class="contact-details text-center">
                <i class="ion-ios-home-outline"></i>
                <hr>
               
              </div>
            </div>
          </div>


 
        <!-- Scroll To Top -->
          <div  class="bk-top">
            <div class="bk-top-txt">
              <a class="back-to-top js-scroll-trigger" href="#main">Konten</a>
             </div>
          </div>
        <!-- Scroll To Top Ends-->
      </div> <!-- Main -->