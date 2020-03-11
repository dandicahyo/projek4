<?php
    include('header.php');
    ?>
    <div class="site-block-wrap">
    <div class="owl-carousel with-dots">
      <div class="site-blocks-cover overlay overlay-2" style="background-image: url(images/hero_1.jpg);" data-aos="fade" id="home-section">


        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">Jual Sampah &amp; Beli Product Bank Sampah disini</h1>
              <p class="mb-5 text-shadow">Jual Sampahmu dan temukan product bank sampah yang menarik disini </p>
              <p><a href="#" target="_blank" class="btn btn-primary px-5 py-3">Get Started</a></p>
              
            </div>
          </div>
        </div>
  
        
      </div>  
  
      <div class="site-blocks-cover overlay overlay-2" style="background-image: url(images/hero_2.jpg);" data-aos="fade" id="home-section">
  
  
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">Cari lokasi bank sampah dan dapatkan uang </h1>
              <p class="mb-5 text-shadow">Temukan lokasi bank sampah untuk setor sampahmu dan dapatkan uang setelahnya</p>
              <p><a href="#" target="_blank" class="btn btn-primary px-5 py-3">Get Started</a></p>
              
            </div>
          </div>
        </div>
  
        
      </div>  
    </div>   
    
  </div>      

  <h1 class=" mt-lg-5 section-title row align-items-center justify-content-center text-center">Bank Sampah Location</h1>
  <div class="site-section" id="properties-section">
      <div class="container">
        <div class="row large-gutters">
         

      <?php $query = mysqli_query($host, "SELECT * FROM banksampah limit 3"); ?>
      <?php if (mysqli_num_rows($query) > 0) { ?>
        
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($query)) {
          ?>
		
		
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
            <div class="ftco-media-1">
              <div class="ftco-media-1-inner">

                
              <a href="detailMaps.php?id=<?= $data['id_banksampah']; ?>" class="d-inline-block mb-4">
                
                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" 
			marginwidth="0" src="<?= $data['alamat_maps'] ?> " width="600" height="650" frameborder="0" style="border:0;" allowfullscreen="">
		</iframe>
                <div class="ftco-media-details">
                  <h3><?= $data['nama_bank'] ?></h3>
                  <p><?= $data['alamat'] ?></p>
    </a>
                </div>
  
              </div> 
            </div>
          </div>

          <?php $no++;
        } ?>
        <?php 
      } ?>
		</div>

        </div>
      </div>
    </div>
    

    <h1 class=" mt-lg-5 section-title row align-items-center justify-content-center text-center">Bank Sampah Products</h1>
  <div class="site-section" id="properties-section">
      <div class="container">
        <div class="row large-gutters">
         

      <?php $query = mysqli_query($host, "SELECT * FROM barang limit 3"); ?>
      <?php if (mysqli_num_rows($query) > 0) { ?>
        
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($query)) {
          ?>
		
		
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
            <div class="ftco-media-1">
              <div class="ftco-media-1-inner">

                
              <a href="property-single.php?kd=<?= $data['id']; ?>" class="d-inline-block mb-4"><img src=<?= "images/" . $data['gambar'] ?> alt="FImageo" class="img-fluid"></a>
                <div class="ftco-media-details">
                  <h3><?= $data['nama'] ?></h3>
                  <strong><?= "Rp. " . number_format($data['harga'], 0, '', ','); ?></strong>

                </div>
  
              </div> 
            </div>
          </div>

          <?php $no++;
        } ?>
        <?php 
      } ?>
		</div>

        </div>
      </div>
    </div>
    

    <section class="py-5 bg-primary site-section how-it-works" id="howitworks-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3 text-black">How It Works</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="pr-5 first-step">
              <span class="text-black">01.</span>
              <span class="custom-icon flaticon-house text-black"></span>
              <h3 class="text-black">Find Bank Sampah.</h3>
              <p class="text-black">Temukan Bank Sampah.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5 second-step">
              <span class="text-black">02.</span>
              <span class="custom-icon flaticon-mobile-phone text-black"></span>
              <h3 class="text-dark">Setor Sampah.</h3>
              <p class="text-black">Setorkan sampah pada bank sampah.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="text-black">03.</span>
              <span class="custom-icon flaticon-coin text-black"></span>
              <h3 class="text-dark">Dapatkan uang.</h3>
              <p class="text-black">Dapatkan uang dengan menyetorkan sampahmu di bank sampah.</p>
            </div>
          </div>
        </div>
      </div>  
    </section>



    <section class="site-section" id="about-section">
      <div class="container">
        
        <div class="row large-gutters">
          <div class="col-lg-6 mb-3">

              <div class="owl-carousel slide-one-item with-dots">
                  <div><img src="images/img_1.jpg" alt="Image" class="img-fluid"></div>
                  <div><img src="images/img_2.jpg" alt="Image" class="img-fluid"></div>
                  <div><img src="images/img_3.jpg" alt="Image" class="img-fluid"></div>
                </div>

          </div>
          <div class="col-lg-6 ml-auto">
            
            <h2 class="section-title mb-3">E-Trash</h2>
                <p class="lead">E-Trash adalah aplikasi berbasis web yang bertujuan untuk mendukung kegiatan operasional Bank Sampah di Kota Malang</p>
                <p>E-Trash adalah suatu website yang memudahkan customer untuk menemukan bank sampah terdekat.Berbagai fitur yang terdapat pada website ini sangat membantu customer mengatasi masalah sampah</p>

                <ul class="list-unstyled ul-check success">
                  <li>Pencarian Bank Sampah</li>
                  <li>Setor Sampah</li>
                  <li>Membeli Produk Bank Sampah</li>
                  <li>Pencarian Produk Bank Sampah</li>
                  <li>Pengambilan Sampah Oleh Kurir</li>
                </ul>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
            
          </div>
        </div>
      </div>
    </section>

    

    <section class="site-section bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Services</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-house"></span></div>
              <div>
                <h3>Cari BankSampah  &amp; Product </h3>
                <p>Temukan Bank Sampah untuk membantu mengatasi masalah sampah yang ada di rumahmu.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-coin"></span></div>
              <div>
                <h3>Dapatkan Uang</h3>
                <p>Dapatkan uang dengan menyetorkan sampah pada bank sampah sehingga kamu bisa mempunyai tabungan sendiri.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-location"></span></div>
              <div>
                <h3>Penjemputan Sampah</h3>
                <p>Sampah akan diambil dengan seorang kurir dari bank sampah pilihan anda.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
         

        </div>
      </div>
    </section>

    
    <section class="site-section" id="news-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">News &amp; Events</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="single.html"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="single.html" class="text-dark">Pemkab Badung Bentuk Tim Penanganan Darurat Sampah</a></h2>
              <div class="meta mb-4">Aditya Mardiastuti  <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="single.html">News</a></div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="single.html"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="single.html" class="text-dark">Mengajak Masyarakat Menang Melawan Sampah </a></h2>
              <div class="meta mb-4">Rachmat Hidayat<span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="single.html">News</a></div>
              
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="single.html"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="single.html" class="text-dark">Sampah Berserakan Timbulkan Bau Tak Sedap</a></h2>
              <div class="meta mb-4">Imanuel Nicolas<span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="single.html">News</a></div>
            </div> 
          </div>
          
        </div>
      </div>
    </section>

   


    <section class="site-section bg-light bg-image" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Contact Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="#" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Get In Touch</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">youremail@domain.com</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </section>


            <?php
include('footer.php');
?>