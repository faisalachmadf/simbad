     <div class="hero-home">
      <div class="container">
        <div class="row text-">
          <div class="col-sm-12 col-lg-6">
            <div class="intro-block">
              <h1>Segmen Batas <br/>Provinsi <br/>Jawa Barat</h1>
              <p>Biro Pemerintahan dan Kerja Sama</p>
            </div>
          </div>
        </div>  
        <!-- Form Cari -->    
        <div class="form wow fadeInLeft float-right" data-wow-delay="0.3s">
          <form id="chimp-form" class="subscribe-form wow zoomIn" action="#" method="post" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
            <input class="mail" id="chimp-#" type="#" name="#" placeholder="Cari" autocomplete="off"><input class="submit-button" type="submit" value="Carikan">
          </form>
          <div id="response"></div>
        </div>
      </div>
    </div>

    <div id="main" class="main" style="margin-top: 50px;">
      <div class="boxed-intro wow fadeInDown text-center">
        <h1> <strong>Segmen Batas Provinsi Jawa Barat</strong></h1><br>
        
      </div>
      <br><br>
      
      <div class="yd-boxed-ft">


        <div class="container">

          <div class="row">

            <div class="col-4">


              <strong><p class="text-center">Segmen Batas Provinsi Jawa Barat</p></strong><br>
              <img class="mx-auto d-block"style="width: 120px; height: 80px;" src="<?= base_url('assets/front'); ?> /assets/images/petaprov.png" alt="Card image cap"> 

              

              <br>
              <div class="card">

                <button type="button" class="btn btn-light text-justify">
                 Prov. Jawa Barat dengan Prov. DKI Jakarta
                 <span class="badge badge-light"> <img src="<?= base_url('assets/logo/jakarta.png') ?>" style="width:15px; height:15px;"></span>
               </button>

             </div>

             <div class="card">

              <button type="button" class="btn btn-light text-justify">
               Prov. Jawa Barat dengan Prov. Banten
               <span class="badge badge-light"> <img src="<?= base_url('assets/logo/banten.png') ?>" style="width:15px; height:15px;"></span>
             </button>

           </div>

           <div class="card">

            <button type="button" class="btn btn-light text-justify">
             Prov. Jawa Barat dengan Prov. Jawa Tengah
             <span class="badge badge-light"><img src="<?= base_url('assets/logo/jateng.png') ?>" style="width:15px; height:15px;"></span>
           </button>

         </div>


       </div>
            

            <div class="col-7" style="margin-left: 25px;">

              <div class=" wow fadeInDown">

             <!--    <div class="row">
                  <p class="h2 float-right"> Provinsi Jawa Barat dengan<br> Provinsi Bla Bla Bla Bla</p> 
                </div>
 -->
                <hr>
                <br>
                <?php  foreach($segmenprov as $prov) {  ?>
                <div class="row">
                  <div class="card" style="width: 100%;">


                    <?php if ($prov->id_katprov == "Prov. Jawa Barat dengan Prov. DKI Jakarta") : ?> 
                      <div class="card-header card text-white bg-danger">
                        <img src="<?= base_url('assets/logo/jakarta.png')?>" style="width:50px; height:50px;">
                        <p class="font-weight-bold"><?= $prov->id_katprov ?></p>
                      </div>
                    <?php elseif ($prov->id_katprov == "Prov. Jawa Barat dengan Prov. Banten") : ?> 
                      <div class="card-header card text-white bg-success">
                       <img src="<?= base_url('assets/logo/banten.png')?>" style="width:50px; height:50px;">
                       <p class="font-weight-bold"><?= $prov->id_katprov ?></p>
                     </div>
                   <?php else : ?>
                    <div class="card-header card text-white bg-primary">
                      <img src="<?= base_url('assets/logo/jateng.png')?>" style="width:50px; height:50px;">
                      <p class="font-weight-bold"><?= $prov->id_katprov ?></p>
                    </div>
                  <?php endif; ?>


               <div class="card-body">
                <p class="text-justify">Kab/Kota yang berbatasan:</p>
                <br><h5 class="card-title text-justify text-uppercase"><?= $prov->kabkot ?></h5>
                <hr>

                <a href="#" class="btn float-left"><i class="far fa-file-pdf"></i></a>&nbsp&nbsp&nbsp<p class="font-weight-light font-italic text-monospace"><i><?= $prov->aturan ?></i></p>
              </div>
            </div>          
          </div>
          <br>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="contact-details text-center">
      <i class="ion-ios-home-outline"></i>
      <hr>

    </div>
  </div>
</div>



<!-- Scroll To Top -->
<div class="bk-top">
  <div class="bk-top-txt">
    <a class="back-to-top js-scroll-trigger" href="#main">Konten</a>
  </div>
</div>
<!-- Scroll To Top Ends-->
      </div> <!-- Main -->